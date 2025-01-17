<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BobaController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bobas', [BobaController::class, 'index']);
Route::get('/bobas/create', [BobaController::class, 'create'])->middleware(['auth', 'can:admin-or-user']);
Route::get('/bobas/about', [BobaController::class, 'about']);

Route::post('/bobas', [BobaController::class, 'store']);
Route::get('/bobas/{id}', [BobaController::class, 'show']);
Route::get('/bobas/{id}/edit', [BobaController::class, 'edit'])->middleware(['auth', 'can:admin-access']);
Route::get('/bobas/{id}/addReview', [ReviewController::class, 'create'])->middleware(['auth', 'can:admin-or-user']);

Route::patch('/bobas', [BobaController::class, 'update'])->middleware(['auth', 'can:admin-access']);
Route::delete('/bobas', [BobaController::class, 'destroy'])->middleware(['auth', 'can:admin-access']);


Route::post('/bobas/{id}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/bobas/{id}', [BobaController::class, 'show'])->name('boba.show');
Route::delete('/reviews/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);