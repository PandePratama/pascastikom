<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        Log::info('Attempting login with credentials:', $credentials);

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        Log::warning('Login attempt failed', ['credentials' => $credentials]);

        return redirect('/login')->withErrors('Login details are not valid');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/login');
    }
}
