<?php

use App\Http\Controllers\Dashaboard\SliderController;
use Illuminate\Routing\Route;

Route::group([
    'middleware' => ['api', 'sanctum'],
    'prefix' => 'dashboard'
], function () {
    Route::apiResources([
        'slider' => SliderController::class
    ]);
});