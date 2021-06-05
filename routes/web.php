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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');

Route::group(['prefix' =>'profile'], function(){
		Route::get('/browse', 'ProfileController@browse')->name('profile.browse');
		Route::get('/request', 'ProfileController@request')->name('profile.request');
		Route::post('/search', 'ProfileController@search')->name('profile.search');
		Route::get('/filters', 'ProfileController@filters')->name('profile.filters');
		Route::post('/filters/submit', 'ProfileController@filters_search')->name('profile.filters.submit');
		Route::post('/request', 'ProfileController@submit')->name('product.request.submit');
		Route::get('/browse/detail/{id}', 'ProfileController@detail')->name('profile.browse.detail');

});



Route::group(['prefix' =>'card'], function(){
		Route::get('/', 'CardController@index')->name('card');
		Route::get('/request', 'CardController@request')->name('card.request');
		Route::get('/request/{id}', 'CardController@request')->name('card.request');
		Route::post('/submit', 'CardController@submit')->name('card.request.submit');
	});
