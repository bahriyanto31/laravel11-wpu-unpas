<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

// blog
Route::get('/blog', function () {
    $posts = Post::all();
    return view('blog', ['title' => 'Blog', 'posts' => $posts]);
});

// about
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

// contact
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page', 'name' => 'John Doe', 'email' => 'bahriyantoanang@gmail.com']);
});

// post
Route::get('/post/{slug}', function ($slug) {
    $data = Post::where('slug', $slug)->get();
    dd($data);
    return view('post', ['title' => 'Post', 'post' => $data]);
});
