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

Route::get('/', 'BookController@list');
Route::get('book/{book}', 'BookController@show');

Route::get('search', 'BookController@search');

Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');
