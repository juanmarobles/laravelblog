<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



Route::get('/',[PageController::class, 'posts']);

Route::get('blog/{post}',[PageController::class, 'post'])->name('post');
//Route::get('/blog/{post:slug}',[PostController::class, 'edit'])->name('posts.edit');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('blog/{post}', [PostController::class, 'destroy']);

//Route::resource('/posts', App\Http\Controllers\PostController::class);

Route::resource('posts', App\Http\Controllers\Backend\PostController::class)->middleware('auth')->except('show');
