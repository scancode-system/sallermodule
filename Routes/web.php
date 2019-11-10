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

Route::prefix('sallers')->middleware('auth')->group(function() {
	Route::get('', 'SallerController@index')->name('sallers.index');
	Route::get('create', 'SallerController@create')->name('sallers.create');
	Route::get('{saller}/edit', 'SallerController@edit')->name('sallers.edit');

	Route::post('', 'SallerController@store')->name('sallers.store');
	Route::put('{saller}', 'SallerController@update')->name('sallers.update');
	Route::delete('{saller}/destroy', 'SallerController@destroy')->name('sallers.destroy');		
});