<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/', function () {
    return redirect()->route('posts.index');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');          // List all posts
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); // Show create form
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');         // Store new post
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit'); // Show edit form
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');  // Update post
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy'); // Delete post
