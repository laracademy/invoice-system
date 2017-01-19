<?php

Route::group(['prefix' => 'client', 'middleware' => 'auth'], function() {
    Route::get('', 'ClientController@index')->name('client');

    Route::get('create', 'ClientController@create')->name('client.create');
    Route::post('store', 'ClientController@store')->name('client.store');

    Route::get('edit/{client}', 'ClientController@edit')->name('client.edit');
    Route::post('update/{client}', 'ClientController@update')->name('client.update');

    Route::get('destroy/{client}', 'ClientController@destroy')->name('client.destroy');
});