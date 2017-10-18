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
    return view('Inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rutas administrador
Route::group(['prefix' => 'admin'], function () {
    // ENFERMEDADES
    Route::resource('enfermedades','enfermedadesController');
});


// Rutas cliente
Route::group(['prefix'=>'cliente'],function(){
	// Plan alimentario
	Route::resource('planAlimentario','planesAlimentariosController');
	Route::get('planes','planesAlimentariosController@listar');

	//Nuevo Avance
	Route::resource('nuevoAvance','nuevoAvanceController');
});
