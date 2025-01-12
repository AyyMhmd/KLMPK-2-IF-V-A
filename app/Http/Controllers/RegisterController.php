<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class SignupController extends Controller
{
    // Menampilkan form signup
    public function showSignupForm()
    {
        return view('signup', ["signup" => $user]); // Tampilkan halaman form signup
    }

    // Memproses signup form
    public function signup(Request $request)
    {
        // Validasi input dari user
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // Password harus terkonfirmasi
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect('/signup')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Menyimpan data pengguna ke tabel users
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Menggunakan Hash untuk mengenkripsi password
        ]);

        // Redirect ke halaman login setelah berhasil registrasi
        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
