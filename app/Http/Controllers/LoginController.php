<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public  function postLogin(Request $request){
        // Validate the input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Check if username and password match the static values
        if ($request->username === 'ExpertEase' && $request->password === '!ExpertEase2025_Klaire') {
            // Redirect to the manage view if the credentials are correct
            session(['logged_in' => true]);
            return redirect()->route('manage');
        }

        // If credentials are incorrect, redirect back with an error
        return redirect()->back()->withErrors(['invalid_credentials' => 'Invalid username or password.']);
    }
}
