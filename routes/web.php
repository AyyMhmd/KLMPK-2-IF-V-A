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
Route::get('/login', function () {
    return view('login');
})->name('login');

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

