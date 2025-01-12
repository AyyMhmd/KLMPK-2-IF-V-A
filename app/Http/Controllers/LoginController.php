<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login'); // Menampilkan view login
    }

    // Memproses login form
    public function login(Request $request)
    {
        // Validasi input dari user
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Mencari user berdasarkan username/email
        $user = User::where('email', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Login berhasil, set session dan arahkan ke halaman dashboard atau halaman lain
            Auth::login($user);
            return redirect()->intended('/dashboard'); // Arahkan ke dashboard atau halaman lain
        } else {
            // Login gagal
            return back()->withErrors([
                'error' => 'Username atau password salah',
            ]);
        }
    }
}
