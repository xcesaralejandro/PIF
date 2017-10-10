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

Route::get('/prueba', function () {
    return View('layouts.main');
});

// Rutas para vistas de información

Route::get('enfermedades', function () {
    return View('Informacion.enfermedades');
});

Route::get('sellosnegros', function () {
    return View('Informacion.sellosnegros');
});

Route::get('etiquetanutricional', function () {
    return View('Informacion.etiquetaNutricional');
});

// Rutas administrador
Route::group(['prefix' => 'admin'], function () {
    // ENFERMEDADES
    Route::get('enfermedades', 'informacionController@listarEnfermedades')->name('listar.enfermedades');
    Route::get('enfermedades/agregar', 'informacionController@agregarEnfermedades')->name('agregar.enfermedades');
    Route::get('enfermedades/{id}/detalle', 'informacionController@detalleEnfermedades')->name('detalle.enfermedades');
    // SELLOS NEGROS
    Route::get('sellosnegros', 'informacionController@listarSellosNegros')->name('listar.sellosnegros');
    Route::get('sellosnegros/agregar', 'informacionController@agregarSellosNegros')->name('agregar.sellosnegros');
    Route::get('sellosnegros/{id}/detalle', 'informacionController@detalleSellosNegros')->name('detalle.sellosnegros');
    // ETIQUETA NUTRICIONAL
    Route::get('etiquetanutricional', 'informacionController@listarEtiqueta')->name('listar.etiquetanutricional');
    Route::get('etiquetanutricional/agregar', 'informacionController@agregarEtiqueta')->name('agregar.etiquetanutricional');
    Route::get('etiquetanutricional/{id}/detalle', 'informacionController@detalleEtiqueta')->name('detalle.etiquetanutricional)');
});
