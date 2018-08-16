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

Route::get('/','travelcont@welcome')->name("home");

Route::get('/admin','travelcont@admin')->name("admin");

Route::get('/city','travelcont@city')->name("city");

Route::get('/area','travelcont@area')->name("area");

Route::get('/fix','travelcont@fix')->name("fix");

Route::get('/search','travelcont@retrieve')->name('search') ;

Route::get('/country','travelcont@country')->name("country");

Route::get('/admin/login','travelcont@log')->name("log");

Route::post('/admin/login','travelcont@login')->name("login");

Route::post('/fix','travelcont@search')->name("search-fix");

Route::resource('/fixer','fixercont');

Route::resource('/geo','geocont');

Route::resource('/cat','catcont');
