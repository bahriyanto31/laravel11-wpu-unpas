<?php

use App\Models\Kategori;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

// blog
Route::get('/blog', function () {
    $posts = Post::all();
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
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
Route::get('/post/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// author
Route::get('/author/blogs/{user}', function (User $user) {
    return view('posts', ['title' => 'Articles By ' . $user->name, 'posts' => $user->posts]);
});

// kategori
Route::get('/kategori/blogs/{kategori}', function (Kategori $kategori) {
    return view('posts', ['title' => 'Kategori: ' . $kategori->nama_kategoru, 'posts' => $kategori->posts]);
});