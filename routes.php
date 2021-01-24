<?php

Route::get('/', 'HomeController@index');
Route::get('/about', 'AboutController@index');
Route::resource('/article', 'ArticleController');
