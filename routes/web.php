<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::middleware(['auth'])->group( function () {
    Route::get('/addfilm', [Controllers\FilmController::class, 'create'])->name('film.add');
    Route::post('/addfilm', [Controllers\FilmController::class, 'store'])->name('film.add');
    Route::get('/film/{film}/edit', [Controllers\FilmController::class, 'edit'])->name('film.edit');
    Route::post('/film/{film}/edit', [Controllers\FilmController::class, 'update']);
    Route::post('/film/{film}/seen', [Controllers\FilmController::class, 'seenFilm']) -> name("film.seen");

    Route::get('/addserie', [Controllers\SerieController::class, 'create'])->name('serie.add');
    Route::post('/addserie', [Controllers\SerieController::class, 'store'])->name('serie.add');
    Route::get('/serie/{serie}/edit', [Controllers\SerieController::class, 'edit'])->name('serie.edit');
    Route::post('/serie/{serie}/edit', [Controllers\SerieController::class, 'update']);


    Route::get('/addepisode', [Controllers\EpisodeController::class, 'create'])->name('episode.add');
    Route::post('/addepisode', [Controllers\EpisodeController::class, 'store']);
    //Route::post('/episode/{episode}/edit', [Controllers\EpisodeController::class, 'update']);
    Route::post('/episode/{episode}/seen', [Controllers\EpisodeController::class, 'seenEpisode']) -> name("episode.seen");
});

Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');

Route::get('/allfilms', [Controllers\FilmController::class, 'index'])->name('film.all');
Route::get('/film/{film}', [Controllers\FilmController::class, 'show'])->name('film.details');

Route::get('/allserie', [Controllers\SerieController::class, 'index'])->name('serie.all');
Route::get('/serie/{serie}', [Controllers\SerieController::class, 'show'])->name('serie.details');


Route::get('/topic/{topic}/film', [Controllers\TopicController::class, 'show'])->name('topic.show.film');
Route::get('/topic/{topic}/serie', [Controllers\TopicController::class, 'showSerie'])->name('topic.show.serie');


Route::get('/profile/{user}', [Controllers\ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/{user}/settings', [Controllers\ProfileController::class, 'show'])->name('profile.settings');
//Route::get('/profile/{user}/destroy', [Controllers\ProfileController::class, 'show'])->name('profile.settings');



Route::get('/faqs', [Controllers\HomeController::class, 'index'])->name('faqs');



