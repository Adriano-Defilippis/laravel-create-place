<?php



Route::get('/index', 'placeController@index');
Route::post('/', 'placeController@store')->name('place.store');
