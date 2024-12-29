<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('if', function () {
    return view('if');
});

// untuk artikel
use App\Http\Controllers\ArtikelController;

Route::resource('artikels', ArtikelController::class);

// untuk prestasi mahasiswa
 use App\Http\Controllers\PrestasiMahasiswaController;

Route::resource('prestasi-mahasiswa', PrestasiMahasiswaController::class);

// // fakultas
// use App\Models\Fakultas;

// public function showFakultas()
// {
//     $fakultas = Fakultas::all();
//     return view('fakultas.index', compact('fakultas'));
// }

