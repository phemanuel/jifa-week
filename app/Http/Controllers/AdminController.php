<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designer;
use App\Models\Children;

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

    public function resendEmail($type,$id)
    {
        $user = $type=='designer' ? Designer::findOrFail($id) : Children::findOrFail($id);
        Mail::to($user->email)->send(new CongratulatoryEmail($user,$type));

        return back()->with('success','Email resent successfully!');
    }

    public function queryPayment($type,$id)
    {
        $user = $type=='designer' ? Designer::findOrFail($id) : Children::findOrFail($id);

        return response()->json([
            'payment_reference'=>$user->payment_reference,
            'paid'=>$type=='designer' ? $user->paid : $user->paid,
            'payment_status'=>$user->payment_status
        ]);
    }
}
