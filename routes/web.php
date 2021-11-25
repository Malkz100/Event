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

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin.index');
})->name('admin');

//Route::get('/admin', function () {
//    return view('admin.index');
//})->middleware(['auth'])->name('admin');


//Frontend
//Route::get('/', function () {
//    return redirect('/home');
//});
//Route::get('/', 'HomeController@index')->name('home');
//Route::get('/', 'HomeController@index');
//Route::get('/', [HomeController::class, 'index']);
Route::resource('/',HomeController::class);
Route::resource('home',HomeController::class);
Route::get('home/showevent/{id}', [HomeController::class, 'showevent'])->name('home.showevent');
Route::get('home/showartist/{id}', [HomeController::class, 'showartist'])->name('home.showartist');
Route::view('/search-events', 'frontend.search-events');
Route::view('/search-artists', 'frontend.search-artists');



//Backend
//Route::get('/admin', function () {
//    return ('admin');
//});

Route::resource('venue',VenueController::class)->middleware(['auth']);
Route::resource('artist',ArtistController::class)->middleware(['auth']);
Route::resource('event',EventController::class)->middleware(['auth']);
Route::resource('genre',GenreController::class)->middleware(['auth']);
Route::resource('artistimage', ArtistImageController::class)->middleware(['auth']);
Route::view('/event-search', 'event.event-search')->middleware(['auth']);
Route::view('/artist-search', 'artist.artist-search')->middleware(['auth']);


