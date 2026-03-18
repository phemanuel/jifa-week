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
        $validated = $request->validate([
            'brand_name' => 'required|string|max:255',
            'designer_name' => 'required|string|max:255',
            'year_established' => 'required|integer|min:1900|max:' . date('Y'),
            'instagram' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:255|unique:designers,email',
            'business_address' => 'nullable|string',
            'category' => 'required|string',
            'pieces' => 'required|integer',
            'collection_title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:500',
        ]);

        $designer = Designer::create($validated);

        $reference = "JifaWeek-Desg-" . \Illuminate\Support\Str::uuid();
        $designer->update([
            'payment_reference' => $reference,
            'fee' => '10000'
        
        ]);

        if (!file_exists(public_path('receipts'))) {
            mkdir(public_path('receipts'), 0755, true);
        }

        $receiptNumber = $reference;       

        // $pdf = Pdf::loadView('pdf.designer-receipt', [
        //         'designer' => $designer
        //     ]);
        // $pdfPath = public_path('receipts/'.$receiptNumber.'.pdf');

        // $pdf->save($pdfPath);

        // Mail::to($designer->email)->send(new DesignerPaymentSuccess($designer));

        return redirect()->route('designer-payment', $designer->id);
    }
    
    // Show payment page
    public function payment(Designer $designer)
    {
        // return response()->json([
        //     'data' => $designer,
        // ]);
        // $amount = 10500 * 100;
        $amount = 100 * 100;

        return view('designer.payment', compact('designer', 'amount'));
    }

    public function verifyPayment(Request $request)
    {
        $reference = $request->reference;

        $designer = Designer::where('payment_reference', $reference)->firstOrFail();

        // جلوگیری از تکرار
        if ($designer->paid) {
            return redirect()->route('designer.success', $designer->id)
                ->with('info', 'Payment already verified.');
        }

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer " . env('PAYSTACK_SECRET_KEY'),
            ],
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        $result = json_decode($response);

        if (!$result || !isset($result->data)) {
            abort(500, 'Invalid response from Paystack');
        }

        $data = $result->data;

        if ($data->status !== 'success') {
            return redirect()->route('designer.failure', $designer->id);
        }

        if ($data->amount != ($designer->fee * 100)) {
            abort(400, 'Invalid amount');
        }

        if ($data->currency !== 'NGN') {
            abort(400, 'Invalid currency');
        }

        \DB::transaction(function () use ($designer, $reference) {

            $designer->update([
                'paid' => true,
                'payment_status' => 'success'
            ]);

            $pdf = Pdf::loadView('pdf.designer-receipt', [
                'designer' => $designer
            ]);

            $pdf->save(public_path('receipts/'.$reference.'.pdf'));

            Mail::to($designer->email)
                ->send(new DesignerPaymentSuccess($designer));
        });

        return redirect()->route('designer.success', $designer->id);
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