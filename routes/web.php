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
		Route::get('/', 'ProfileController@index')->name('profile');
		Route::post('/update/{id}', 'ProfileController@update')->name('product.request.update');
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
		Route::get('/request', 'CardController@request')->name('card.request.list');
		Route::get('/request/{id}', 'CardController@request')->name('card.request');
		Route::post('/next', 'CardController@next')->name('card.request.next');
		Route::get('/request2/{id}', 'CardController@request2')->name('card.request2');
		Route::post('/submit/{id}', 'CardController@submit')->name('card.request.submit');
		Route::get('/card/lighthouse/details/{id}', 'CardController@request_details')->name('card.lighthouse.details');
	});

		Route::get('/noah', 'CardController@noah')->name('noah');


	Route::group(['prefix' => 'lighthouse'], function(){
		Route::get('/', 'CardController@lighthouse')->name('lighthouse');
		Route::get('/saved-for-later', 'CardController@saved_for_later')->name('lighthouse.saved-for-later');
		Route::get('/in-progress', 'CardController@in_progress')->name('lighthouse.in-progress');
		Route::get('/completed', 'CardController@completed')->name('lighthouse.completed');
		Route::get('/declined', 'CardController@declined')->name('lighthouse.declined');
		Route::get('/dustbin', 'CardController@dustbin')->name('lighthouse.dustbin');

	});