<?php


use App\Http\Controllers\AllPlayers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FixtureController;
use App\Http\Controllers\StandingController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/news',  [NewsController::class, 'index']);
Route::get('/news/show/{id}', [NewsController::class, 'show'])->name('article.show');



Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');


Route::get('/fixtures.men', [FixtureController::class, 'men']);
Route::get('/fixtures.women', [FixtureController::class, 'women']);
Route::get('/fixtures.academy', [FixtureController::class, 'academy']);


Route::get('/seniors', [AllPlayers::class, 'men']);
Route::get('/women', [AllPlayers::class, 'women']);
Route::get('/academyplayers', [AllPlayers::class, 'academy']);
Route::get('/search', [AllPlayers::class, 'search'])->name('players.search');



Route::get('/fixtures/men_league', [FixtureController::class, 'league'])->name('fixtures.men_league');
Route::get('/fixtures/men_tournament', [FixtureController::class, 'tournament'])->name('fixtures.men_tournament');
Route::get('/fixtures/men_friendly', [FixtureController::class, 'friendly'])->name('fixtures.men_friendly');

Route::get('/fixtures/women_league', [FixtureController::class, 'women_league'])->name('fixtures.women_league');
Route::get('/fixtures/women_tournament', [FixtureController::class, 'women_tournament'])->name('fixtures.women_tournament');
Route::get('/fixtures/women_friendly', [FixtureController::class, 'women_friendly'])->name('fixtures.women_friendly');

Route::get('/fixtures/academy_league', [FixtureController::class, 'academy_league'])->name('fixtures.academy_league');
Route::get('/fixtures/academy_tournament', [FixtureController::class, 'academy_tournament'])->name('fixtures.academy_tournament');
Route::get('/fixtures/academy_friendly', [FixtureController::class, 'academy_friendly'])->name('fixtures.academy_friendly');

Route::get('/components/about_us', [ComponentController::class, 'about_us']);
Route::get('/components/donate', [ComponentController::class, 'donate']);
Route::get('/components/contact_us', [ComponentController::class, 'contact_us']);

Route::get('/standings', [StandingController::class, 'index']);
