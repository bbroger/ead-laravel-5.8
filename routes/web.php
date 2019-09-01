<?php

Route::group(['prefix' => 'adm', 'as' => 'adm.'], function () {
    Route::get('/', ['as' => 'index', 'uses' => function (){ return "ADM HOME"; }]);
});

Route::group(['prefix' => 'account', 'as' => 'account.', 'namespace' => 'Website'], function () {
    Route::get('login', ['as' => 'login', 'uses' => 'UsersController@login']);
});

Route::get('/', function () {
    return view('welcome');
});