<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

// blog
Route::get('/blog', function () {
    return view('blog');
});

// contact
Route::get('/contact', function () {
    return view('contact');
});
