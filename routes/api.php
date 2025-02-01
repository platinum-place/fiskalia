<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => [\App\Http\Middleware\AuthenticateOnceWithBasicAuth::class]], function () {
    Route::post('dgii-requests/create-ecf', [\App\Http\Controllers\DgiiRequestController::class, 'storeEcf'])->name('dgii-requests.create-ecf');
    Route::apiResource('dgii-requests', \App\Http\Controllers\DgiiRequestController::class);
});
