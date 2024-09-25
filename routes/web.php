<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/ourteam', function () {
    return view('ourteam');
});
Route::get('/program', function () {
    return view('program');
});
Route::get('/contactus', function () {
    return view('contactus');
});

Route::fallback(function () {
    return "Maaf, alamat tidak ditemukan";
});