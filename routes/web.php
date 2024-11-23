<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoMakananController;

Route::get('/', function () {
    return view('home', [
        'title' => 'HOME'
    ]);
})->name('home');

Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
})->name('about');

Route::resource('toko-makanan', TokoMakananController::class);

Route::fallback(function () {
    return "Maaf, alamat tidak ditemukan.";
});
