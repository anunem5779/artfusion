<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Show User Login Page
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate the form input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Authentication passed
            $request->session()->regenerate();
    
            // Redirect to the gallery page
            return redirect()->intended('/home');
        }
    
        // If authentication fails, redirect back to login with an error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    

    // Show Admin Login Page
    public function showAdminLogin()
    {
        return view('auth.admin_login');
    }

    public function adminLogin(Request $request)
{
    // Validate the form input
    $credentials = $request->validate([
        'admin_id' => ['required'],
        'password' => ['required'],
    ]);

    // Attempt to log the admin in
    if (Auth::attempt(['email' => $request->admin_id, 'password' => $request->password])) {
        // Check if the logged-in user is an admin
        if (Auth::user()->is_admin) {
            // Redirect to the admin dashboard if admin
            return redirect()->intended('/admin/dashboard');
        } else {
            // Redirect to the gallery for regular users
            return redirect()->intended('/gallery');
        }
    }

    // If authentication fails, redirect back to admin login with an error
    return back()->withErrors([
        'admin_id' => 'The provided credentials do not match our records.',
    ]);
}

    // Show Registration Page
    public function showRegister()
    {
        return view('auth.register');
    }

    // Handle Registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login');
    }

    // Handle Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
