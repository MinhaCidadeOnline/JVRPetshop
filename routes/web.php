<?php

Route::group(['namespace' => 'Template'], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);
    Route::get('/a-empresa', ['as' => 'about', 'uses' => 'AboutController@index']);
    Route::get('/produtos', ['as' => 'products', 'uses' => 'ProductsController@index']);
    Route::get('/contato', ['as' => 'contact', 'uses' => 'ContactController@index']);
});