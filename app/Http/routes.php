<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('services', 'PagesController@services');
// Route::get('contact', 'PagesController@contact');

Route::get('horsdoeuvres', 'PagesController@horsdoeuvres');
Route::get('salads', 'PagesController@salads');
Route::get('pans', 'PagesController@pans');
Route::get('buffets', 'PagesController@buffets');
Route::get('desserts', 'PagesController@desserts');

Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');


