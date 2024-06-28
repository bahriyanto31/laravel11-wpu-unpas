<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

// blog
Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page']);
});

// about
Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

// contact
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page', 'name' => 'John Doe', 'email' => '']);
});
