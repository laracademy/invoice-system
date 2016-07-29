<?php

Route::group(['prefix' => 'auth/', 'namespace' => 'Auth'], function() {
    Route::get('login', 'AuthController@getLogin')->name('auth.login');
    Route::post('login', 'AuthController@postLogin')->name('auth.login');

    Route::get('logout', 'AuthController@logout')->name('auth.logout');
});