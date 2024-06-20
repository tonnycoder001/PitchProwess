<?php

use LDAP\Result;
use App\Models\Tournament;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WomenController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SeniorController;
use App\Http\Controllers\FixtureController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\AcademyPlayerController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/fixtures', function () {
    return view('/fixtures');
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

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/tournaments', [TournamentController::class, 'index']);

Route::get('/results', [ResultController::class, 'index']);
