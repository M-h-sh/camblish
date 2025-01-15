<?php

namespace App\Http\Controllers;
 // Import the base controller
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth for authentication
use Illuminate\Support\Facades\Hash; // Import Hash for password hashing
use App\Models\User; // Import the User model

class RegisterController
{
    /**
     * Display the registration view.
     */
    public function showRegistrationForm()
    {
        return view('register'); // Ensure the view exists in resources/views/auth/register.blade.php
    }

    /**
     * Handle an incoming registration request.
     */
    public function register(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log the user in
        Auth::login($user);

        // Redirect to the dashboard or another route
        return redirect()->route('dashboard');
    }
}
