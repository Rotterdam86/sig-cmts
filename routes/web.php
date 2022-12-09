<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMessageCreated;

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

// Tracé de la route de demande de contact 
//Route::name('contact_path')->get('/contact', 'PagesController@contact'); // nom et utilisation de la roote contact
Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactsController@create'
]); // nom et utilisation de la roote d'accueil

// Tracé de la route de soumission de contact 
//Route::name('contact_path')->get('/contact', 'PagesController@contact'); // nom et utilisation de la roote contact
Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactsController@store'
]); // nom et utilisation de la roote d'accueil

// Tracé de la route de d'envoie du mail 
//Route::name('contact_path')->get('/contact', 'PagesController@contact'); // nom et utilisation de la roote contact
Route::get('/test-email', function(){
    return new ContactMessageCreated('YAO', 'BEUGRE ARMANDO CHRISTIAN', 'christcelo@gmail.com', 'Je vous remercie pour '. config('app.name'));
}); // nom et utilisation de la route d'accueil
