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
    return view('welcome');
});


Route::get('/welcome/{name}', fn (string $name) => "Hello, {$name}");

Route::get('/info/{text}', fn (string $text) => "Information: {$text}");

Route::get('/news/{text}', fn (string $text) => "News: {$text}");
