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


Route::get('/', 'FrontEnd\HomeController@getHome');
Route::get('/shop', 'FrontEnd\HomeController@getShop');
Route::get('/about', 'FrontEnd\HomeController@getAbout');
Route::get('/cart', 'FrontEnd\HomeController@getCart');
Route::get('/checkout', 'FrontEnd\HomeController@getCheckOut');
Route::get('/contact', 'FrontEnd\HomeController@getContact');
Route::get('/ordercomplate', 'FrontEnd\HomeController@getOrderComplate');
Route::get('/products/{slug}', 'FrontEnd\HomeController@getProductDetail');