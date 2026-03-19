<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $username = $request->username;
        $password = $request->password;
        $rememberMe = $request->has('remember_me');

        // Validasi hardcoded (untuk demo)
        $validUsername = 'Alexander';
        $validPassword = '321123';

        if ($username !== $validUsername || $password !== $validPassword) {
            return back()->with('error', 'Username atau password salah.');
        }

        // Set session
        session(['username' => $username]);

        // Set remember me cookie
        if ($rememberMe) {
            cookie()->queue('remembered_username', $username, 30 * 24 * 60);
        }

        return redirect()->route('home')->with('success', 'Login berhasil!');
    }

    public function logout()
    {
        session()->forget('username');
        cookie()->queue(cookie()->forget('remembered_username'));
        return redirect()->route('login')->with('success', 'Logout berhasil!');
    }
}
