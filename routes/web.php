<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WomenController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\SeniorController;
use App\Http\Controllers\FixtureController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\AcademyPlayerController;

Route::get('/', function () {
    return view('/layouts.nav');
});

Route::get('/news', [NewsController::class, 'index']);
Route::post('/news/{id}/like', [NewsController::class, 'like'])->name('news.like');
Route::post('/news/{id}/comments', [NewsController::class, 'storeComment'])->name('comments.store');
Route::get('/news.show/{id}', [NewsController::class, 'show']);
Route::get('/fixtures', [FixtureController::class, 'index']);
Route::get('/seniors', [SeniorController::class, 'index']);
Route::get('/women', [WomenController::class, 'index']);
Route::get('/academyplayers', [AcademyPlayerController::class, 'index']);
Route::get('/players', [PlayerController::class, 'index']);
Route::get('/results', [ResultsController::class, 'index']);
