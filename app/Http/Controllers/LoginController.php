<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    /**
     * Display the login page.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Handle the login request.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in using the credentials
        if (Auth::attempt($request->only('email', 'password'))) {
            // Regenerate session to avoid session fixation
            $request->session()->regenerate();
            // Redirect to dashboard with success message
            return redirect()->route('dashboard')->with('success', 'Logged in successfully.');
        }

        // If authentication fails, return back with error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Log the user out.
     */
    public function logout(Request $request)
    {
        // Log the user out
        Auth::logout();

        // Invalidate the session and regenerate the token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to home with success message
        return redirect()->route('home')->with('success', 'Logged out successfully.');
    }
}
