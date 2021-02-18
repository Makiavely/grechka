<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

/*Route::get('/home', 'AppController@index')->name('home');*/

Route::get('/{any}', 'AppController@index')->where('any', '.*');
