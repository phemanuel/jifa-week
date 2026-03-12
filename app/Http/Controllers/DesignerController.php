<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designer;

class DesignerController extends Controller
{

    public function form()
    {
        return view('designer.signup');
    }   

     // Save designer info from wizard
    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand_name' => 'required|string|max:255',
            'designer_name' => 'required|string|max:255',
            'year_established' => 'required|integer',
            'instagram' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'business_address' => 'nullable|string',
            'category' => 'required|string',
            'pieces' => 'required|integer',
            'collection_title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:500',
        ]);

        $designer = Designer::create($validated);

        // Redirect to payment page
        return redirect()->route('designer-payment', ['designer' => $designer->id]);
    }

    // Show payment page
    public function payment(Designer $designer)
    {
        // return response()->json([
        //     'data' => $designer,
        // ]);
        $amount = 100000 * 100; // Paystack uses kobo

        return view('designer.payment', compact('designer', 'amount'));
    }

    // Verify Paystack payment
    public function verifyPayment(Request $request)
    {
        $reference = $request->reference;
        $designerId = $request->designer_id;

        $designer = Designer::findOrFail($designerId);

        // Call Paystack verify endpoint
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer " . env('PAYSTACK_SECRET_KEY'),
                "Cache-Control: no-cache",
            ],
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        $result = json_decode($response);

        if($result && $result->data->status === 'success'){
            $designer->update(['paid' => true, 'payment_reference' => $reference]);
            return redirect()->route('designer.success');
        }

        return redirect()->route('designer.failure');
    }
}