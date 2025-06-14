<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index'])->name('posts.index'); // View
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); // Show form
Route::post('/posts', [PostController::class, 'store'])->name('posts.store'); // Save form
