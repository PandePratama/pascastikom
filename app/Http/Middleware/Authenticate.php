<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Tambahkan logika untuk memeriksa apakah pengguna adalah admin
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/login');
        }

        return $next($request);
    }
}

