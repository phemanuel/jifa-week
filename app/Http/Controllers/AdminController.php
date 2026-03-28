<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designer;
use App\Models\Children;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\DesignerPaymentSuccess;
use App\Mail\ChildrenPaymentSuccess;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        // Designers
        $totalDesigners = Designer::count();
        $paidDesigners = Designer::where('payment_status','success')->where('paid',1)->count();
        $unpaidDesigners = Designer::where(function($q){
            $q->where('payment_status','failed')->orWhere('paid',0);
        })->count();

        // Children
        $totalChildren = Children::count();
        $paidChildren = Children::where('payment_status','success')->where('paid',1)->count();
        $unpaidChildren = Children::where(function($q){
            $q->where('payment_status','failed')->orWhere('paid',0);
        })->count();

        return view('admin.dashboard', compact(
            'totalDesigners','paidDesigners','unpaidDesigners',
            'totalChildren','paidChildren','unpaidChildren'
        ));
    }

    public function designers(Request $request)
    {
        $query = Designer::query();
        if ($request->search) {
            $query->where('designer_name','like',"%{$request->search}%")
                  ->orWhere('email','like',"%{$request->search}%");
        }
        if ($request->status !== null) {
            if($request->status == 'paid'){
                $query->where('payment_status','success')->where('paid',1);
            } elseif($request->status == 'unpaid'){
                $query->where(function($q){
                    $q->where('payment_status','failed')->orWhere('paid',0);
                });
            }
        }
        $designers = $query->paginate(15);
        return view('admin.designers', compact('designers'));
    }

    public function childrens(Request $request)
    {
        $query = Children::query();
        if ($request->search) {
            $query->where('full_name','like',"%{$request->search}%")
                  ->orWhere('parent_name','like',"%{$request->search}%")
                  ->orWhere('email','like',"%{$request->search}%");
        }
        if ($request->status !== null) {
            if($request->status == 'paid'){
                $query->where('payment_status','success')->where('paid',1);
            } elseif($request->status == 'unpaid'){
                $query->where(function($q){
                    $q->where('payment_status','failed')->orWhere('paid',0);
                });
            }
        }
        $children = $query->paginate(15);
        return view('admin.children', compact('children'));
    }     
    
    // Requery payment from Paystack   
    public function queryPayment(Request $request)
    {
        try {
            $designer = Designer::findOrFail($request->id);
            $reference = $designer->payment_reference;

            $response = Http::withToken(config('services.paystack.secret_key'))
             ->get("https://api.paystack.co/transaction/verify/{$reference}");

            // Check if HTTP request failed
            if ($response->failed()) {
                return response()->json([
                    'paid' => false,
                    'status' => 'failed',
                    'message' => 'Paystack API request failed',
                    'http_status' => $response->status()
                ], 200); // 200 so AJAX success callback triggers
            }

            $data = $response->json();

            if (!isset($data['status']) || !isset($data['data']['status'])) {
                return response()->json([
                    'paid' => false,
                    'status' => 'failed',
                    'message' => 'Invalid response from Paystack'
                ], 200);
            }

            if ($data['status'] && $data['data']['status'] === 'success') {
                $designer->update([
                    'paid' => 1,
                    'payment_status' => 'success'
                ]);

                return response()->json([
                    'paid' => true,
                    'status' => 'success',
                    'message' => 'Payment verified successfully'
                ], 200);
            }

            // Payment failed
            $designer->update([
                'paid' => 0,
                'payment_status' => 'failed'
            ]);

            return response()->json([
                'paid' => false,
                'status' => 'failed',
                'message' => 'Payment not successful'
            ], 200);

        } catch (\Exception $e) {
            // Catch network or other exceptions
            return response()->json([
                'paid' => false,
                'status' => 'failed',
                'message' => 'Error: '.$e->getMessage()
            ], 500);
        }
    }

    public function queryPaymentChild(Request $request)
    {
        try {
            $children = Children::findOrFail($request->id);
            $reference = $children->payment_reference;

            // Call Paystack API
            $response = Http::withToken(config('services.paystack.secret_key'))
             ->get("https://api.paystack.co/transaction/verify/{$reference}");

            // Check if HTTP request failed
            if ($response->failed()) {
                return response()->json([
                    'paid' => false,
                    'status' => 'failed',
                    'message' => 'Paystack API request failed',
                    'http_status' => $response->status()
                ], 200); // 200 so AJAX success callback triggers
            }

            $data = $response->json();

            // Validate response structure
            if (!isset($data['status']) || !isset($data['data']['status'])) {
                return response()->json([
                    'paid' => false,
                    'status' => 'failed',
                    'message' => 'Invalid response from Paystack'
                ], 200);
            }

            // Payment successful
            if ($data['status'] && $data['data']['status'] === 'success') {
                $children->update([
                    'paid' => 1,
                    'payment_status' => 'success'
                ]);

                return response()->json([
                    'paid' => true,
                    'status' => 'success',
                    'message' => 'Payment verified successfully'
                ], 200);
            }

            // Payment not successful
            $children->update([
                'paid' => 0,
                'payment_status' => 'failed'
            ]);

            return response()->json([
                'paid' => false,
                'status' => 'failed',
                'message' => 'Payment not successful'
            ], 200);

        } catch (\Exception $e) {
            // Catch network or other exceptions
            return response()->json([
                'paid' => false,
                'status' => 'failed',
                'message' => 'Error: '.$e->getMessage()
            ], 500);
        }
    }

    // Resend email with attachments
    public function resendEmail(Request $request)
    {
        $designer = Designer::findOrFail($request->id);

        if($designer->payment_status !== 'success'){
            return response()->json(['error'=>'Payment not successful'], 400);
        }

        Mail::to($designer->email)->send(new DesignerPaymentSuccess($designer));

        return response()->json(['success'=>true]);
    }

    // Resend email with attachments
    public function resendEmailChild(Request $request)
    {
        $children = Children::findOrFail($request->id);

        if($children->payment_status !== 'success'){
            return response()->json(['error'=>'Payment not successful'], 400);
        }

        Mail::to($children->email)->send(new ChildrenPaymentSuccess($children));

        return response()->json(['success'=>true]);
    }


}
