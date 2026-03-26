<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Assuming your User model has a 'role' column with 'admin'
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        abort(403, 'Unauthorized action.');
    }
}
