<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;

class PasswordController
{
    // Show password reset request form
    public function showLinkRequestForm()
    {
        return view('forgot-password');
    }

    // Handle sending reset link email
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        // Send the reset link
        $response = Password::sendResetLink($request->only('email'));

        return $response == Password::RESET_LINK_SENT
            ? back()->with('status', trans($response))
            : back()->withErrors(['email' => trans($response)]);
    }

    // Show the reset password form
    public function showResetForm($token)
    {
        return view('reset-password')->with(['token' => $token]);
    }

    // Reset the password
    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'token' => 'required',
        ]);

        $response = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function ($user, $password) {
            $user->password = bcrypt($password);
            $user->save();
        });

        return $response == Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', trans($response))
            : back()->withErrors(['email' => trans($response)]);
    }
}
