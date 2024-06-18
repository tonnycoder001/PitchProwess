<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WomenController;
use App\Http\Controllers\SeniorController;
use App\Http\Controllers\FixtureController;
use App\Http\Controllers\AcademyPlayerController;
use App\Http\Controllers\PlayerController;

Route::get('/', function () {
    return view('/layouts.nav');
});

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/show/{id}', [NewsController::class, 'show']);
Route::get('/fixtures', [FixtureController::class, 'index']);
Route::get('/seniors', [SeniorController::class, 'index']);
Route::get('/women', [WomenController::class, 'index']);
Route::get('/academyplayers', [AcademyPlayerController::class, 'index']);
Route::get('/players', [PlayerController::class, 'index']);
