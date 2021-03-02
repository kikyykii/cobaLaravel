<?php

use Illuminate\Support\Facades\Route;

//rute

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'PagesController@index');
