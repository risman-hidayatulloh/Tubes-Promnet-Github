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

Route::get('/home', 'MekanikController@index')->name('home');
Route::get('/', 'MekanikController@home');
Route::resource('/posts_mekanik', 'MekanikController');

Route::get('/home', 'JasaController@index')->name('home');
Route::get('/', 'JasaController@home');
Route::resource('/posts_jasa', 'JasaController');

Route::get('/home', 'PartController@index')->name('home');
Route::get('/', 'PartController@home');
Route::resource('/posts_part', 'PartController');