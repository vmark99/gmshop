<?php

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
    //return \App\Product::all();
    //return App\Product::first()->with('rating')->get();
    return view('welcome')->with('products', \App\Product::all());

    //return \App\rate::first()->NO_OF_STARS;
});


Route::get('/games', 'productController@showGames')->name('games');
Route::get('/movies', 'productController@showMovies')->name('movies');
Route::get('/{name}', 'productController@showProduct')->name('product');