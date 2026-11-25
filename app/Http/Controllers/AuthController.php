<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin() {
        return view('auth.login'); // Sesuaikan dengan lokasi file blade Anda
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Coba login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // Redirect berdasarkan role (opsional)
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin/dashboard'); 
            }
            return redirect()->intended('/'); // Ke halaman home
        }

        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->onlyInput('email');
    }

    public function showRegister() {
        return view('auth.register'); // Sesuaikan dengan lokasi file blade Anda
    }

    public function register(Request $request) {
        $request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:pengguna,email'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        Pengguna::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password_hash' => Hash::make($request->password),
            'role' => 'user', // Default role
        ]);

        // Langsung login setelah register
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);

        return redirect('/')->with('success', 'Akun berhasil dibuat!');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}