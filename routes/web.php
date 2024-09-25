<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('home');
});

Route::get('/ourteam', function () {
    return view('ourteam');
});
Route::get('/program', function () {
    return view('program');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::fallback(function () {
    return "Maaf, alamat tidak ditemukan";
});