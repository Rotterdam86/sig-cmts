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
Route::get('/', [
    'as' => 'root_path',
    'uses' => 'PagesController@home'
]); // nom et utilisation de la roote d'accueil

// Tracé de la route CMTS 
//Route::name('cmts_path')->get('/cmts', 'PagesController@cmts'); // nom et utilisation de la roote cmts
Route::get('/cmts', [
    'as' => 'cmts_path',
    'uses' => 'PagesController@cmts'
]); // nom et utilisation de la roote d'accueil

// Tracé de la route contact 
//Route::name('contact_path')->get('/contact', 'PagesController@contact'); // nom et utilisation de la roote contact
Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactsController@create'
]); // nom et utilisation de la roote d'accueil
