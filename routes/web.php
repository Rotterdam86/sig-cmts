<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Tracé de la route d'accueil
Route::name('root_path')->get('/', 'PagesController@home'); // nom et utilisation de la roote d'accueil

// Tracé de la route CMTS 
Route::name('cmts_path')->get('/cmts', 'PagesController@cmts'); // nom et utilisation de la roote cmts
