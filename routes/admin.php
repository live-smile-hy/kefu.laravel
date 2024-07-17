<?php

use Illuminate\Support\Facades\Route;


Route::post('/auth/register', [\App\Http\Controllers\Admin\AuthController::class, 'register']);
Route::post('/auth/login', [\App\Http\Controllers\Admin\AuthController::class, 'login']);

Route::middleware('jwt.auth')->group(function () {
    Route::get('/user', [\App\Http\Controllers\Admin\UserController::class, 'user']);
});



