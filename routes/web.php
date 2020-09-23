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

Route::get('/',
		[
			'as' => 'home',
			'uses' =>'WelcomeController@index'
			

		]);
	
// Route qui permet de gerer la vente

Route::get('/vente',
		
		[
			'as' => 'Listvente',
			'uses' => 'VenteController@index'
		]);
Route::get('add',
	[
		'as' => 'addPost',
		'uses' => 'VenteController@addPost',
		'middleware'=>'auth'
    ]);
Route::get('vente/details',[
		'as' => 'details',
		'uses' => 'VenteController@show']);
Route::get('/contact',
	[
		'as' => 'contact',
		'uses' => 'ContactController@getForm'
    ]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
