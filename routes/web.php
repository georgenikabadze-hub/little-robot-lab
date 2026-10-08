<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('authors/{author}', [AuthorController::class, 'show'])->name('authors.show');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/dashboard', function () {
    return view('userzone.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () 
{
    Route::get('admin/posts', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('admin.posts.index');
    Route::get('admin/posts/create', [App\Http\Controllers\Admin\PostController::class, 'create'])->name('admin.posts.create');
    Route::post('admin/posts', [App\Http\Controllers\Admin\PostController::class, 'store'])->name('admin.posts.store');
    Route::get('admin/posts/{post}/edit', [App\Http\Controllers\Admin\PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('admin/posts/{post}', [App\Http\Controllers\Admin\PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('admin/posts/{post}', [App\Http\Controllers\Admin\PostController::class, 'destroy'])->name('admin.posts.destroy');
    Route::get('admin/tags', [App\Http\Controllers\Admin\TagController::class, 'index'])->name('admin.tags.index');
    Route::get('admin/tags/create', [App\Http\Controllers\Admin\TagController::class, 'create'])->name('admin.tags.create');
    Route::post('admin/tags', [App\Http\Controllers\Admin\TagController::class, 'store'])->name('admin.tags.store');
    Route::delete('admin/tags/{tag}', [App\Http\Controllers\Admin\TagController::class, 'destroy'])->name('admin.tags.destroy');
    });  

require __DIR__.'/auth.php';