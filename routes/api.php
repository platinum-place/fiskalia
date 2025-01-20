<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('dgii-requests', \App\Http\Controllers\DgiiRequestController::class)->middleware(\App\Http\Middleware\AuthenticateOnceWithBasicAuth::class);
