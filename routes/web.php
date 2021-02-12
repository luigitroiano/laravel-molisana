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
    return view('home');
}) -> name('home');

Route::get('product', function () {
    $data = json_decode(config('dati.pasta'), true);
    
    return view('products', compact('data'));
}) ->name('products');

Route::get('contacts', function () {
    return view('contact');
}) ->name('contact-us');