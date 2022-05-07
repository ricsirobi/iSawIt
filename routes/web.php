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

require __DIR__.'/auth.php';



Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');

Route::get('/allfilms', [Controllers\FilmController::class, 'index'])->name('film.all');

Route::get('/addfilm', [Controllers\FilmController::class, 'create'])->name('film.add');
Route::post('/addfilm', [Controllers\FilmController::class, 'store'])->name('film.add');

Route::get('/film/{film}', [Controllers\FilmController::class, 'show'])->name('film.details');
