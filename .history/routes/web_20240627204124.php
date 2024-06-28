<?php

use App\Models\Post;
use App\Models\User;
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
Route::get('/post/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// author
Route::get('/author/{author:username}', function (User $author) {
    return view('author', ['title' => 'Articles By ' . $author->name, 'author' => $author]);
});
