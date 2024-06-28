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
    return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'kategori', 'author']))->latest()->get()]);
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
// Route::get('/authors/{user:username}', function (User $user) {
//     return view('posts', ['title' => 'Articles By ' . $user->name, 'posts' => $user->posts]);
// });

// kategori
// Route::get('/categories/{kategori:slug}', function (Kategori $kategori) {
//     return view('posts', ['title' => 'Kategori : ' . $kategori->nama_kategori, 'posts' => $kategori->posts]);
// });
