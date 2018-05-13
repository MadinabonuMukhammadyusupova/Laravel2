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

Route::get('/', 'PagesController@index');
Route::get('/contact_us', 'PagesController@contact_us');
Route::get('/registration', 'PagesController@registration');
Route::get('/hotels', 'PagesController@hotels');
Route::post('/save', 'PagesController@store')->name("save");
Route::get('/places', 'PagesController@places');
Route::get('/transportation', 'PagesController@transportation');
Route::resource('/store', 'PagesController');


