<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('sequences', \App\Http\Controllers\SequencesController::class);
Route::apiResource('dgii-requests', \App\Http\Controllers\DgiiRequestController::class);
