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

Route::middleware('setLang')->group(function(){

    Route::get('/', 'ProductController@index')->name('index');
    Route::get('/cart', 'CartController@showCart')->name('showCart');
});


Route::get('/product/{id}/cart', 'CartController@addToCart')->name('addToCart');
Route::post('/cart/checkout', 'CartController@checkout')->name('checkout');

Route::get('/locale/ar', 'LangController@setAr')->name('setAr');
Route::get('/locale/en', 'LangController@setEn')->name('setEn');
