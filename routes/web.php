<?php

Route::get('/', 'Common\WelcomeController@index');

Route::prefix('admin')->group(function(){
    Route::get('dashboard', 'Admin\AdminController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
