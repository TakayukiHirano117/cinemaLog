<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Post;
use App\Http\Controllers\TopController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', TopController::class)->name('top');
    Route::get('/posts', Post\IndexController::class)->name('posts.index');
    Route::get('/posts/{id}', Post\ShowController::class)->name('posts.show');
    Route::get('/posts/{id}/edit', Post\Edit\IndexController::class)->name('posts.edit');
    Route::get('/posts/create', Post\Create\IndexController::class)->name('posts.create');
    Route::post('/posts', Post\Create\StoreController::class)->name('posts.store');
    Route::put('/posts/{id}', Post\Edit\UpdateController::class)->name('posts.update');
    Route::delete('/posts/{id}', Post\Delete\DestroyController::class)->name('posts.destroy');
});

Route::get('/components', function () {
    return view('components');
});

require __DIR__.'/auth.php';
