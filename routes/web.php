<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/buku-tamu', function () {
    return view('buku-tamu');
})->name('buku-tamu');


