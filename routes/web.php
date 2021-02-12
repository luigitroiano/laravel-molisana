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

Route::get('products', function () {

    $data = json_decode(config('data.pasta'), true);
    //$data = utf8_encode($data);
    //dd(trim(json_decode($data, true)), '\n');
    //$data = config('data.pasta');
    
    return view('products', compact('data'));
}) ->name('products');

Route::get('contacts', function () {
    return view('contact');
}) ->name('contact-us');