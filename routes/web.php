<?php


//


Route::get('/banner/{data}','BannerController@get');
Route::get('/banner','BannerController@index')->name('banner');
Route::get('banner/{data}/{data1}','BannerController@get');

Route::get('/','BannerController@get');
Route::get('/{data}','BannerController@get');
Route::get('{data}/{data1}','BannerController@get');


//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
