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

Route::get('/news', function () {
    $products = config('db')['products'];
    return view('news', compact('products'));
})-> name('news');
