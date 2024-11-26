<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

// Route::get('/books', [BookController::class, 'index'])->name('books');

Route::group(['prefix' => '/books'], function () {
    Route::get('/', [BookController::class, 'index'])->name('books.index');
    Route::get('/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/', [BookController::class, 'store'])->name('books.store');
    Route::get('/{book}', [BookController::class, 'show'])->name('books.show');
    Route::get('/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
    Route::put('/{book}', [BookController::class, 'update'])->name('books.update');
    Route::delete('/{book}', [BookController::class, 'destroy'])->name('books.destroy');
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
