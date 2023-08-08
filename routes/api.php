<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [LoginController::class, 'login']);
    Route::get('me', [LoginController::class, 'me'])->middleware('auth:sanctum');
});

