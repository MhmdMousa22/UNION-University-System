<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show login page
    public function showLoginForm() {
        return view('auth.login');
    }

    // Handle login
    public function login(Request $request) {
    $credentials = $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('home'); // redirect to home route
    }

    return back()->withErrors(['username' => 'Invalid credentials.']);
}



    // Show registration page
    public function showRegisterForm() {
        return view('auth.register');
    }

    // Handle registration
    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'user', // default role
        ]);

        return redirect()->route('login')->with('success', 'Account created successfully. Please login.');
    }

    // Logout
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    // Show profile
    public function profile() {
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }
}
