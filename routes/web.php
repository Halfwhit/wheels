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

Route::get('/', 'PortalController@splash');

Route::get('/about', 'PortalController@about');

Route::get('/news', 'PortalController@news');

Route::get('/showroom', 'PortalController@showroom');

Route::get('/services', 'PortalController@services');

Route::get('/contact', 'PortalController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
