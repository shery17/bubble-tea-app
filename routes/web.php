<?php

use App\Http\Controllers\BobaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bobas', [BobaController::class, 'index']);
Route::get('/bobas/create', [BobaController::class, 'create']);
Route::get('/bobas/about', [BobaController::class, 'about']);

Route::post('/bobas', [BobaController::class, 'store']);
Route::get('/bobas/{id}', [BobaController::class, 'show']);
Route::get('/bobas/{id}/edit', [BobaController::class, 'edit']);

Route::patch('/bobas', [BobaController::class, 'update']);
Route::delete('/bobas', [BobaController::class, 'destroy']);