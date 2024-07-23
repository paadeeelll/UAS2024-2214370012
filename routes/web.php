<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
    Route::resource('articles', ArticleController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('tags', TagsController::class);
    Route::get('search', [ArticleController::class, 'search'])->name('search');
    Route::resource('comments', commentsController::class);
    // Rute untuk menampilkan profil pengguna
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show')->middleware('auth');
    // Rute untuk menampilkan form edit profil pengguna
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
    // Rute untuk memperbarui profil pengguna
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');

});
