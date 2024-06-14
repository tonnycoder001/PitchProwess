<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WomenController;
use App\Http\Controllers\SeniorController;
use App\Http\Controllers\FixtureController;
use App\Http\Controllers\AcademyPlayerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', [NewsController::class, 'index']);
Route::get('/fixtures', [FixtureController::class, 'index']);
Route::get('/senior', [SeniorController::class, 'index']);
Route::get('/women', [WomenController::class, 'index']);
Route::get('/academyplayers', [AcademyPlayerController::class, 'index']);
