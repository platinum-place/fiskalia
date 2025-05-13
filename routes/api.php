<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware([\Laravel\Passport\Http\Middleware\EnsureClientIsResourceOwner::class])->group(function () {
    Route::post('signer', \App\Http\Controllers\SignerController::class);
});
