<?php



Route::get('/index', 'placeController@index')->name('place.index');
Route::post('/', 'placeController@store')->name('place.store');
