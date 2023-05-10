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
    $navLinks = config('db.navLinks');
    $footerLinksShop = config('db.footerLinksShop');
    $footerLinksDc = config('db.footerLinksDc');
    $footerLinksSites = config('db.footerLinksSites');
    $comics = config('db.comics');
    return view('home', compact('navLinks', 'footerLinksShop', 'footerLinksDc', 'footerLinksSites', 'comics'));
})->name('home');

Route::get('characters', function () {
    $navLinks = config('db.navLinks');
    $footerLinksShop = config('db.footerLinksShop');
    $footerLinksDc = config('db.footerLinksDc');
    $footerLinksSites = config('db.footerLinksSites');
    $comics = config('db.comics');
    return view('characters', compact('navLinks', 'footerLinksShop', 'footerLinksDc', 'footerLinksSites', 'comics'));
})->name('characters');

Route::get('comics', function () {
    $navLinks = config('db.navLinks');
    $footerLinksShop = config('db.footerLinksShop');
    $footerLinksDc = config('db.footerLinksDc');
    $footerLinksSites = config('db.footerLinksSites');
    $comics = config('db.comics');
    return view('comics', compact('navLinks', 'footerLinksShop', 'footerLinksDc', 'footerLinksSites', 'comics'));
})->name('comics');

Route::get('movies', function () {
    $navLinks = config('db.navLinks');
    $footerLinksShop = config('db.footerLinksShop');
    $footerLinksDc = config('db.footerLinksDc');
    $footerLinksSites = config('db.footerLinksSites');
    $comics = config('db.comics');
    return view('movies', compact('navLinks', 'footerLinksShop', 'footerLinksDc', 'footerLinksSites', 'comics'));
})->name('movies');

Route::get('tv', function () {
    $navLinks = config('db.navLinks');
    $footerLinksShop = config('db.footerLinksShop');
    $footerLinksDc = config('db.footerLinksDc');
    $footerLinksSites = config('db.footerLinksSites');
    $comics = config('db.comics');
    return view('tv', compact('navLinks', 'footerLinksShop', 'footerLinksDc', 'footerLinksSites', 'comics'));
})->name('tv');

Route::get('games', function () {
    $navLinks = config('db.navLinks');
    $footerLinksShop = config('db.footerLinksShop');
    $footerLinksDc = config('db.footerLinksDc');
    $footerLinksSites = config('db.footerLinksSites');
    $comics = config('db.comics');
    return view('games', compact('navLinks', 'footerLinksShop', 'footerLinksDc', 'footerLinksSites', 'comics'));
})->name('games');

Route::get('collectibles', function () {
    $navLinks = config('db.navLinks');
    $footerLinksShop = config('db.footerLinksShop');
    $footerLinksDc = config('db.footerLinksDc');
    $footerLinksSites = config('db.footerLinksSites');
    $comics = config('db.comics');
    return view('collectibles', compact('navLinks', 'footerLinksShop', 'footerLinksDc', 'footerLinksSites', 'comics'));
})->name('collectibles');

Route::get('videos', function () {
    $navLinks = config('db.navLinks');
    $footerLinksShop = config('db.footerLinksShop');
    $footerLinksDc = config('db.footerLinksDc');
    $footerLinksSites = config('db.footerLinksSites');
    $comics = config('db.comics');
    return view('videos', compact('navLinks', 'footerLinksShop', 'footerLinksDc', 'footerLinksSites', 'comics'));
})->name('videos');

Route::get('fans', function () {
    $navLinks = config('db.navLinks');
    $footerLinksShop = config('db.footerLinksShop');
    $footerLinksDc = config('db.footerLinksDc');
    $footerLinksSites = config('db.footerLinksSites');
    $comics = config('db.comics');
    return view('fans', compact('navLinks', 'footerLinksShop', 'footerLinksDc', 'footerLinksSites', 'comics'));
})->name('fans');

Route::get('news', function () {
    $navLinks = config('db.navLinks');
    $footerLinksShop = config('db.footerLinksShop');
    $footerLinksDc = config('db.footerLinksDc');
    $footerLinksSites = config('db.footerLinksSites');
    $comics = config('db.comics');
    return view('news', compact('navLinks', 'footerLinksShop', 'footerLinksDc', 'footerLinksSites', 'comics'));
})->name('news');

Route::get('shop', function () {
    $navLinks = config('db.navLinks');
    $footerLinksShop = config('db.footerLinksShop');
    $footerLinksDc = config('db.footerLinksDc');
    $footerLinksSites = config('db.footerLinksSites');
    $comics = config('db.comics');
    return view('shop', compact('navLinks', 'footerLinksShop', 'footerLinksDc', 'footerLinksSites', 'comics'));
})->name('shop');
