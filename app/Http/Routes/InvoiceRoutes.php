<?php

Route::group(['prefix' => 'invoice', 'middleware' => 'auth'], function() {
    Route::get('', 'InvoiceController@index')->name('invoice');
    Route::get('create', 'InvoiceController@create')->name('invoice.create');
    Route::post('store', 'InvoiceController@store')->name('invoice.store');

    Route::group(['prefix' => 'payments'], function() {
        Route::get('listing/{invoice}', 'PaymentController@listing')->name('invoice.payments.listing');

        Route::get('add/manual/{invoice}', 'PaymentController@create')->name('invoice.payments.create');
        Route::post('store/manual/{invoice}', 'PaymentController@store')->name('invoice.payments.store');

        Route::get('edit/{payment}', 'PaymentController@edit')->name('invoice.payments.edit');
        Route::post('update', 'PaymentController@update')->name('invoice.payments.update');

        Route::get('destroy/{payment}', 'PaymentController@destroy')->name('invoice.payments.destroy');
    });
});