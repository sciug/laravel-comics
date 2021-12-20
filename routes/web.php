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
    $products = config('db')['products'];
    return view('welcome', compact('products'));
})-> name('welcome');





Route::get('/comics', function () {
    $products = config('db.products');
    return view('comics.index', compact('products'));
})-> name('comics');

Route::get('/comics/{id}', function ($id) {
    $products = config('db.products');

    if(is_numeric($id) && $id >= 0 &&$id < count($products)){
        $product = $products[$id];
        return view('comics.show', compact('product'));

    }else{
        abort(404);
    }

    
    
})-> name('comic');







Route::get('/characters', function () {
    $products = config('db')['products'];
    return view('characters', compact('products'));
})-> name('characters');

Route::get('/movies', function () {
    $products = config('db')['products'];
    return view('movies', compact('products'));
})-> name('movies');

Route::get('/tv', function () {
    $products = config('db')['products'];
    return view('tv', compact('products'));
})-> name('tv');


Route::get('/games', function () {
    $products = config('db')['products'];
    return view('games', compact('products'));
})-> name('games');


Route::get('/collectibles', function () {
    $products = config('db')['products'];
    return view('collectibles', compact('products'));
})-> name('collectibles');

Route::get('/videos', function () {
    $products = config('db')['products'];
    return view('videos', compact('products'));
})-> name('videos');

Route::get('/fans', function () {
    $products = config('db')['products'];
    return view('fans', compact('products'));
})-> name('fans');





Route::get('/news', function () {
    $products = config('db')['products'];
    
    return view('news', compact('products'));
})-> name('news');


Route::get('/shop', function () {
    $products = config('db')['products'];
    return view('news', compact('products'));
})-> name('shop');

