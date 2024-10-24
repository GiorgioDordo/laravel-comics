<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/mangas', function () {
    $mangas = config("db.manga");
    return view('pages.manga', compact("mangas"));
})-> name('manga');

Route::get('/comics', function () {
    $comics = config("db.comics");
    return view('comics.comic', compact("comics"));
})-> name('comic');

Route::get('/gadgets', function () {
    $gadgets = config("db.gadgets");
    return view('pages.gadgets', compact("gadgets"));
})-> name('gadget');

Route::get('/comics/{id}', function (string $id) {
    $comics = config('db.comics');
    $comic = $comics[$id];
    dd($comic);

    return view('comics.show');
})-> name('home');