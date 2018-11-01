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

Route::get('/', 'CtglController@home')->name('home_path');

Route::get('/ctgl', 'CtglController@presentation')->name('presentation_path');

Route::get('/contact', 'CtglController@contact')->name('Contact_path');
Route::post('/contact', 'CtglController@store')->name('Contact_path');


Auth::routes();
