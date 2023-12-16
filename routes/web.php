<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthenticationController::class, 'verify'])->middleware(['web', 'guest']);
Route::post('/login', [AuthenticationController::class, 'login'])->middleware(['web', 'guest']);
Route::get('/register', [AuthenticationController::class, 'register'])->middleware(['web', 'guest']);
Route::post('/register', [AuthenticationController::class, 'create'])->middleware(['web', 'guest']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', [AuthenticationController::class, 'logout'])->middleware(['auth.session']);