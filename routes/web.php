<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@getHome');

Route::get('auth/login', function () {
    return view('auth.login');
})->name('auth.login');

Route::get('auth/logout', function () {
    return "Logout";
})->name('auth.logout');

Route::get('catalog', 'CatalogController@getIndex')->name('catalog.index');

Route::get('catalog/show/{id}', 'CatalogController@getShow')->name('catalog.show');

Route::get('catalog/create', 'CatalogController@getCreate')->name('catalog.create');

Route::get('catalog/edit/{id}', 'CatalogController@getEdit')->name('catalog.edit');
