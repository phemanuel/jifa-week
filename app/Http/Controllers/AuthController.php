<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use Exception;

class AuthController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|string',
        ]);

        // Attempt login with role = admin
        if(Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
            'role'=>'admin'
        ], $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email'=>'Invalid credentials or not authorized as admin.'
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
