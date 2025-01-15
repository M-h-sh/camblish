<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display the dashboard page.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login'); // Redirect to the login page if not authenticated
        }

        // Retrieve the authenticated user's email
        $userEmail = Auth::user()->email; // Auth::user() retrieves the authenticated user's instance

        // Return the dashboard view with the user's email
        return view('dashboard', ['userEmail' => $userEmail]);
    }
}
