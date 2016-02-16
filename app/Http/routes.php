<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('articles/{nombre?}', function($nombre="no coloco nombre"){
	echo "El nombre colocado es: ".$nombre;
});*/

/*Route::group(['prefix'=>'articles'], function(){
	Route::get('view/{articles?}',function($articles="vacio"){
		echo $articles;
	});
});*/

/*Route::group(['prefix'=>'articles'],function(){
	Route::get('view/{id}',[
		'uses'	=> 'TestController@view',
		'as'	=> 'articleView'
	]);
});*/

Route::group(['prefix'=>'admin'], function(){
	Route::resource('home','HomeController');
	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy',[
		'uses'	=> 'UsersController@destroy',
		'as'	=> 'admin.users.destroy'
	]);

	Route::resource('categories','CategoriesController');
	Route::get('categories/{id}/destroy',[
		'uses'	=> 'CategoriesController@destroy',
		'as'	=> 'admin.categories.destroy'
	]);
});