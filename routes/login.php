<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Routing\Route;

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [LoginController::class]);
});