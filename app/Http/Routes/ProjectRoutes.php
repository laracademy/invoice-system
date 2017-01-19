<?php

Route::group(['prefix' => 'projects', 'middleware' => 'auth'], function() {
    Route::get('', 'ProjectController@index')->name('project');

    Route::get('create/{client_id?}', 'ProjectController@create')->name('project.create');
    Route::post('store', 'ProjectController@store')->name('project.store');
    Route::get('edit/{project}', 'ProjectController@edit')->name('project.edit');
    Route::post('update/{project}', 'ProjectController@update')->name('project.update');

    Route::get('destroy/{project}', 'ProjectController@destroy')->name('project.destroy');
});