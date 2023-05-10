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
