<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['tittle' => 'Home Page']);
});

// blog
Route::get('/blog', function () {
    return view('blog', ['tittle' => 'Blog Page']);
});

// about
Route::get('/about', function () {
    return view('about', ['tittle' => 'About Page']);
});

// contact
Route::get('/contact', function () {
    return view('contact', ['tittle' => 'Contact Page']);
});
