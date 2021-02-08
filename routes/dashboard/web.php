<?php

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

        Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {


            Route::get('/', 'WelcomeController@index')->name('welcome');

            //user routes
            Route::resource('users', 'UserController')->except(['show']);

			//company routes
            Route::resource('companys', 'CompanyController')->except(['show']);

            //plans routes
            Route::resource('planes', 'PlaneController')->except(['show']);

        });//end of dashboard routes
    });


