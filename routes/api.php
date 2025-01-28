<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => [\App\Http\Middleware\AuthenticateOnceWithBasicAuth::class]], function () {
    Route::apiResource('dgii-requests', \App\Http\Controllers\DgiiRequestController::class);
});
