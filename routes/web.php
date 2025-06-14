<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

// Redirect to login if not authenticated, otherwise to posts
Route::get('/', function () {
    return Auth::check()
        ? redirect()->route('posts.index')
        : redirect()->route('login');
});

// Login/Logout Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Grouped routes for authenticated users
Route::middleware(['auth'])->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');          // List all posts
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); // Show create form
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');         // Store new post
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit'); // Show edit form
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');  // Update post
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy'); // Delete post
});
