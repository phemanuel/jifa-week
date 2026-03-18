<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Children;
use Illuminate\Support\Facades\Mail;
use App\Mail\ChildrenPaymentSuccess;
use App\Mail\ChildrenPaymentFailed;
use Barryvdh\DomPDF\Facade\Pdf;

class ChildrenController extends Controller
{

    public function form()
    {
        return view('children.signup');
    }   

   public function store(Request $request)
    {
        $validated = $request->validate([
             'full_name' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female',
            'dob' => 'required|date',
            'age' => 'nullable|integer',
            'nationality' => 'nullable|string|max:255',
            'state_of_origin' => 'nullable|string|max:255',
            'home_address' => 'nullable|string|max:500',
            'school_name' => 'nullable|string|max:255',
            'social_media' => 'nullable|string|max:255',
            'height' => 'nullable|numeric',
            'weight' => 'nullable|numeric',
            'chest' => 'nullable|numeric',
            'waist' => 'nullable|numeric',
            'shoe_size' => 'nullable|numeric',
            'parent_name' => 'required|string|max:255',
            'relationship' => 'required|string|max:100',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'parent_social_media' => 'nullable|string|max:255',
            'residential_address' => 'nullable|string|max:500',
            'parent_id_type' => 'nullable|string|max:255',
            'parent_occupation' => 'nullable|string|max:255',
            'has_modeled_before' => 'required|boolean',
            'previous_experience' => 'nullable|string|max:500',
            'special_talents' => 'nullable|string|max:255',
            'talent_social_media' => 'nullable|string|max:255',
            'has_medical_condition' => 'required|boolean',
            'medical_condition' => 'nullable|string|max:500',
        ]);

        $children = Children::updateOrCreate(
            ['email' => $validated['email']], // unique identifier
            $validated
        );

        $reference = "JifaWeek-Child-" . \Illuminate\Support\Str::uuid();
        $children->update([
            'payment_reference' => $reference,
            'fee' => '10000'
        
        ]);

        if (!file_exists(public_path('receipts'))) {
            mkdir(public_path('receipts'), 0755, true);
        }

        $receiptNumber = $reference;       

        $pdf = Pdf::loadView('pdf.children-receipt', [
                'child' => $children
            ]);
        $pdfPath = public_path('receipts/'.$receiptNumber.'.pdf');

        $pdf->save($pdfPath);

        Mail::to($children->email)->send(new ChildrenPaymentSuccess($children));

        return redirect()->route('children.success', $children->id);
    }
    
    // Show payment page
    public function payment(Children $children)
    {
        // return response()->json([
        //     'data' => $designer,
        // ]);
        $amount = 100 * 100;
        $child = $children;
        // $amount = 10500 * 100;

        return view('children.payment', compact('child', 'amount'));
    }

    public function verifyPayment(Request $request)
    {
        $reference = $request->reference;

        $children = Children::where('payment_reference', $reference)->firstOrFail();

        // جلوگیری از تکرار
        if ($children->paid) {
            return redirect()->route('children.success', $children->id)
                ->with('info', 'Payment already verified.');
        }

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer " . config('services.paystack.secret_key'),
                "Cache-Control: no-cache",
            ],
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CONNECTTIMEOUT => 10,
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        $result = json_decode($response);

        if (!$result || !isset($result->data)) {
            abort(500, 'Invalid response from Paystack');
        }

        $data = $result->data;

        if ($data->status !== 'success') {
            return redirect()->route('children.failure', $children->id);
        }

        if ($data->amount != ($children->fee * 100)) {
            abort(400, 'Invalid amount');
        }

        if ($data->currency !== 'NGN') {
            abort(400, 'Invalid currency');
        }

        \DB::transaction(function () use ($children, $reference) {

            $children->update([
                'paid' => true,
                'payment_status' => 'success'
            ]);

            $pdf = Pdf::loadView('pdf.children-receipt', [
                'children' => $children
            ]);

            $pdf->save(public_path('receipts/'.$reference.'.pdf'));

            Mail::to($children->email)
                ->send(new ChildrenPaymentSuccess($children));
        });

        return redirect()->route('children.success', $children->id);
    }

    public function success(Children $children)
    {
        return view('children.success', compact('children'));
    }

    public function failure(Children $children)
    {
        return view('children.failure', compact('children'));
    }
}