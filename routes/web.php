<?php

use Illuminate\Support\Facades\Route;

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
    $db = config('db');
    return view('home', $db);
})->name('home');

Route::get('characters', function () {
    $db = config('db');
    return view('characters', $db);
})->name('characters');

Route::get('comics', function () {
    $db = config('db');
    return view('comics', $db);
})->name('comics');

Route::get('movies', function () {
    $db = config('db');
    return view('movies', $db);
})->name('movies');

Route::get('tv', function () {
    $db = config('db');
    return view('tv', $db);
})->name('tv');

Route::get('games', function () {
    $db = config('db');
    return view('games', $db);
})->name('games');

Route::get('collectibles', function () {
    $db = config('db');
    return view('collectibles', $db);
})->name('collectibles');

Route::get('videos', function () {
    $db = config('db');
    return view('videos', $db);
})->name('videos');

Route::get('fans', function () {
    $db = config('db');
    return view('fans', $db);
})->name('fans');

Route::get('news', function () {
    $db = config('db');
    return view('news', $db);
})->name('news');

Route::get('shop', function () {
    $db = config('db');
    return view('shop', $db);
})->name('shop');
