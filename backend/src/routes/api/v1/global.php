<?php

use App\Http\Controllers\api\v1\IndexController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [IndexController::class, 'index']);
});
