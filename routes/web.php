<?php

use Illuminate\Support\Facades\Route;


Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){


	Route::get('/', function () {
	    return view('home.welcome');
	});

	Route::get('/login', function () {
	    return view('aurh.login');
	});

	Route::get('/register', function () {
	    return view('auth.register');
	});	

	Route::get('/RememberRequest', function () {
	    return view('home.RememberRequest');
	});	

	Route::get('/CustomersService', function () {
	    return view('home.CustomersService');
	});	

	//user routes
    Route::resource('reservations', 'AddRequestController');

	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');

});