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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

/**
 * Order route
**/
Route::get('/order', 'OrderController@index');
Route::post('/order', 'OrderController@store')->name('order.store');

Route::get('user/{id}', 'PassportController@showProfile');

Route::get('/admin', 'AdminController@index');

