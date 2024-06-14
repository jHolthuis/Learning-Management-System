<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // show the login page
    public function showLoginForm()
        {
            return view('auth.login');
        }

    // the login validation
    public function login(Request $request)
    {
        // the input of the user
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // check if the credentials are correct
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('login');
        }

        // if not correct give error and send back to login page
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    // logout function
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}


