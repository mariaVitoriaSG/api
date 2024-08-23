<?php

use App\Http\Controllers\SportController;
use App\Http\Controllers\CompetitorController; 
use App\Http\Controllers\LocaleController; 
use App\Http\Controllers\TrainerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route: :apiResource('/sport', $SportController::class);
Route::apiResource('/sport', SportController::class);
Route::apiResource('/competitor', CompetitorController::class);
Route::apiResource('/trainer', TrainerController::class);
Route::apiResource('/locale', LocaleController:: class);