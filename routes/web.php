<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

//rute

Route::get('/', [PagesController::class, 'home']);

Route::get('/about', [PagesController::class, 'about']);
