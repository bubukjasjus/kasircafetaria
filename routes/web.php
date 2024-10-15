<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home',[
        'title' => 'HOME'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "about"
    ]);
});



Route::fallback(function () {
    return "Maaf, alamat tidak ditemukan";
});