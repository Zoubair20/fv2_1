<?php

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

Route::get('/', 'SiteController@accueil');
Route::get('/nos-services', 'SiteController@services');
Route::get('/nos-profils', 'SiteController@profils');
Route::get('/contact', 'SiteController@contact');
Route::get('/demander-un-devis', 'SiteController@quote');

Route::get('/recrutement', 'RecrutementController@recrutement');
Route::get('/offre/{slug}', 'RecrutementController@offre');
Route::post('/recrutement', 'RecrutementController@store');

Route::get('/blog/{slug?}', 'BlogController@blog');
Route::get('/post/{slug}', 'BlogController@show');

Route::post('/contact', 'SiteController@store');

Auth::routes();

//Route::get('/accueil', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
