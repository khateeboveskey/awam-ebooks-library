<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

// Route::get('/books', [BookController::class, 'index'])->name('books');

Route::group(['prefix' => '/books'], function () {
    Route::get('/', [BookController::class, 'index'])->name('books.index');
    Route::get('/{book}', [BookController::class, 'show'])->name('books.show');
});

Route::group(['prefix' => '/authors'], function () {
    Route::get('/', [AuthorController::class, 'index'])->name('authors.index');
    Route::get('/{author}', [AuthorController::class, 'show'])->name('authors.show');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
