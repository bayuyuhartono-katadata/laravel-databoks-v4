<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/detail', 'HomeController@detail');
Route::get('/detail/{slug}', 'StoriesController@detail');
Route::get('/fortyfour', 'HomeController@fortyfour');
Route::get('/kanalindustri', 'HomeController@kanalIndustri');
Route::get('/argoindustri', 'HomeController@argoindustri');
Route::get('/tags', 'HomeController@tags');
Route::get('/search', 'HomeController@search');
