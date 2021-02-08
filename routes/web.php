<?php

use Illuminate\Support\Facades\Route;


Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){


	Route::get('/', function () {
	    return ('testing');
	});

	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');

});