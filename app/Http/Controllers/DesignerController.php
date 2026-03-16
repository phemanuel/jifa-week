<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designer;
use Illuminate\Support\Facades\Mail;
use App\Mail\DesignerPaymentSuccess;
use App\Mail\DesignerPaymentFailed;
use Barryvdh\DomPDF\Facade\Pdf;

class DesignerController extends Controller
{

    public function form()
    {
        return view('designer.signup');
    }   

   public function store(Request $request)
    {
        // Validate required fields
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

        // Check if designer already exists
        $designer = Designer::where('email', $validated['email'])->first();

        if ($designer) {
            if ($designer->paid) {
                // Already registered and paid
                return redirect()->route('designer-form')->with('info', 'You have already registered and completed payment.');
            }

            // Already registered but not paid → redirect to payment
            return redirect()->route('designer-payment', ['designer' => $designer->id])
                            ->with('info', 'You have already registered. Please complete your payment.');
        }

        // New designer → create
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
        // $amount = 100000 * 100;
        $amount = 100 * 100;

        return view('designer.payment', compact('designer', 'amount'));
    }

    // Verify Paystack payment
    public function verifyPayment(Request $request)
    {
        $reference = $request->reference;
        $designerId = $request->designer_id;

        $designer = Designer::findOrFail($designerId);

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

        if ($result && isset($result->data) && $result->data->status === 'success') {

            $designer->update([
                'paid' => true,
                'payment_reference' => $reference
            ]);

            //send email for successful transaction------
            //--------send mail to applicant email address           

            $pdf = Pdf::loadView('pdf.designer-receipt', [
                'designer' => $designer
            ]);

            $receiptNumber = 'JIFA-REC-'.date('Y').'-'.$designer->id;

            $pdfPath = public_path('receipts/'.$receiptNumber.'.pdf');

            $pdf->save($pdfPath);

            Mail::to($designer->email)->send(new DesignerPaymentSuccess($designer));
            // //------end---------------

            return redirect()->route('designer.success', $designer->id);
        }
        //send-email for failed transaction
        Mail::to($designer->email)->send(new DesignerPaymentFailed($designer));
        return redirect()->route('designer.failure', $designer->id);
        
    }

    public function success(Designer $designer)
    {
        return view('designer.success', compact('designer'));
    }

    public function failure(Designer $designer)
    {
        return view('designer.failure', compact('designer'));
    }
}