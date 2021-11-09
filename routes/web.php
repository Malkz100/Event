<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ArtistImageController;
use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');
Route::resource('/',HomeController::class)->name('index', 'home');
Route::resource('venue',VenueController::class)->middleware(['auth']);
Route::resource('artist',ArtistController::class)->middleware(['auth']);
Route::resource('event',EventController::class)->middleware(['auth']);
Route::resource('genre',GenreController::class)->middleware(['auth']);
Route::resource('artistimage', ArtistImageController::class)->middleware(['auth']);
