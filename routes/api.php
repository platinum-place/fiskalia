<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('sequences', \App\Http\Controllers\Api\SequencesController::class);
