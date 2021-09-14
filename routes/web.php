<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/detail', 'HomeController@detail');
Route::get('/fortyfour', 'HomeController@fortyfour');
Route::get('/kanalindustri', 'HomeController@kanalIndustri');
Route::get('/search', 'HomeController@search');
