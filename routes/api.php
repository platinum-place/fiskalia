<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Http\Middleware\EnsureClientIsResourceOwner;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::middleware(EnsureClientIsResourceOwner::class)->group(function () {
    Route::post('signer', \App\Http\Controllers\SignerController::class);

    Route::post('certs', [\App\Http\Controllers\CertController::class, 'store']);
});
