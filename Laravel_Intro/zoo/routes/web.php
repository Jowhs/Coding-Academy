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

Route::get('/', function () {
    return view('welcome', [ 'nombre' => 'Jonathan' ]);
});

Route::get('/home', function () {
    return view('Home');
});

/*Route::get('/home/{nombre}', function($nombre){
	return "Hola {$nombre}";
});*/

//Route::get('/home/{day}', 'HomeController@day');

Route::get('Animal/{id}', 'AnimalController@display');

/*Route::get('Animal/{id}', function($id){
	return view('Animal', ['$id' => 1]);
});*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('add', 'AnimalController@show')->name('add');

Route::post('add', 'AnimalController@add')->name('add_post');

Route::get('list', 'AnimalController@list')->name('list');

Route::get('list/edit/{id}', 'AnimalController@edit')->name('edit');

Route::put('list/update/{id}', 'AnimalController@update')->name('update');

Route::delete('list/{id}', 'AnimalController@delete');