<?php


Route::prefix('sallers')->middleware('auth.basic.once')->group(function() {
	
	Route::get('/auth', 'Api\SallerController@auth');

});
