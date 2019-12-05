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

Route::get('/', 'LaratableController@index');
Route::get('basic', 'LaratableController@basicLaratableData')->name('basic_laratable');
Route::get('custom', 'LaratableController@customLaratableData')->name('custom_laratable');
Route::get('one-to-one', 'LaratableController@oneToOneData')->name('one_to_one');
Route::get('one-to-Many', 'LaratableController@oneToManyData')->name('one_to_many');
Route::get('many-to-many', 'LaratableController@manyToManyData')->name('many_to_many');
Route::get('display', 'LaratableController@oneToManyPolyData')->name('one_to_many_poly');
