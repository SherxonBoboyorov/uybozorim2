<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('register', [LoginController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);

Route::group(['middleware' => ['auth:api']], function () {
    Route::post('logout', [LoginController::class, 'logout']);
});
