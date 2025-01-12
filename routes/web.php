<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/if', function () {
    return view('if');
})->name('if');
Route::get('/ti', function () {
    return view('ti');
})->name('ti');
Route::get('/sejarah', function () {
    return view('sejarah');
})->name('sejarah');

Route::get('/pakchobir', function () {
    return view('pakchobir');
})->name('pakchobir');
Route::get('/pakade', function () {
    return view('pakade');
})->name('pakade');
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');
Route::get('/faculty', function () {
    return view('faculty');
})->name('faculty');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/login', function () {
    return view('login');
}); // Menampilkan form login

Route::post('/login', function (Request $request) {
    // Ambil input username dan password
    $username = $request->input('username');
    $password = $request->input('password');

    // Cek apakah user dengan username tersebut ada
    $user = User::where('email', $username)->first();

    if ($user && \Hash::check($password, $user->password)) {
        // Login berhasil
        return back()->with('success', 'Login berhasil! Selamat datang, ' . $user->name . '.');
    } else {
        // Login gagal
        return back()->with('error', 'Username atau password salah. Silakan coba lagi.');
    }
});
use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');  // Menampilkan form login
Route::post('/login', [LoginController::class, 'login']);  // Memproses login
Route::get('/signup', [RegisterController::class, 'showSignupForm'])->name('signup');  // Menampilkan form signup
Route::post('/signup', [RegisterController::class, 'signup']);  // Memproses signup

// untuk artikel
use App\Http\Controllers\ArtikelController;

Route::resource('artikels', ArtikelController::class);

// untuk prestasi mahasiswa
 use App\Http\Controllers\PrestasiMahasiswaController;

 Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi');
// // fakultas
// use App\Models\Fakultas;

// public function showFakultas()
// {
//     $fakultas = Fakultas::all();
//     return view('fakultas.index', compact('fakultas'));
// }

