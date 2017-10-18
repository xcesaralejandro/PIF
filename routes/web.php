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
Route::get('etiqueta', function () {
    return view('informacion/etiquetanutricional');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

// Rutas administrador

Route::group(['prefix' => 'admin','middleware'=>'auth','administrador'], function () {

//ZONA INFORMATIVA

    // ENFERMEDADES
    Route::resource('enfermedades','enfermedadesController'); 
    Route::get('enfermedades/{id}/detalle','enfermedadesController@detalle')->name('enfermedades.detalle');
    Route::get('enfermedades/{id}/destroy','enfermedadesController@destroy')->name('enfermedades.destroy');
    //SELLOS NEGROS
    Route::resource('sellosnegros','sellosNegrosController');
        Route::get('sellosnegros/{id}/detalle','sellosNegrosController@detalle')->name('sellosnegros.detalle');
    Route::get('sellosnegros/{id}/destroy','sellosNegrosController@destroy')->name('sellosnegros.destroy');
    //ETIQUETA NUTRICIONAL
    Route::resource('etiquetanutricional','etiquetaNutricionalController');
    Route::get('etiquetanutricional/{id}/destroy','etiquetaNutricionalController@destroy')->name('etiquetanutricional.destroy');
    Route::get('etiquetanutricional/{id}/detalle','etiquetaNutricionalController@detalle')->name('etiquetanutricional.detalle');
    //CAMPOS DE LA ETIQUETA
    Route::resource('campoetiquetanutricional','campEtiquetaNutricionalController');
    Route::get('campoetiquetanutricional/{id}/destroy','campEtiquetaNutricionalController@destroy')->name('campoetiquetanutricional.destroy');
    Route::get('campoetiquetanutricional/{id}/detalle','campEtiquetaNutricionalController@detalle')->name('campoetiquetanutricional.detalle');

 //ZONA ALIMENTOS

   //GRUPOS ALIMENTARIOS
    Route::resource('gruposalimentarios','gruposAlimentosController');
    Route::get('gruposalimentarios/{id}/destroy','gruposAlimentosController@destroy')->name('gruposalimentarios.destroy');
    //CATEGORIAS ALIMENTARIAS
    Route::resource('categoriasalimentarias','categoriasAlimentariasController');
    Route::get('categoriasalimentarias/{id}/destroy','categoriasAlimentariasController@destroy')->name('categoriasalimentarias.destroy');
    //ALIMENTOS
    Route::resource('alimentos','alimentosController');
    Route::get('alimentos/{id}/destroy','alimentosController@destroy')->name('alimentos.destroy');

//REGION 
    Route::resource('regiones','regionesController');
    Route::get('regiones/{id}/destroy','regionesController@destroy')->name('regiones.destroy');

//COMUNA
    Route::resource('comunas','comunasController');
    Route::get('comunas/{id}/destroy','comunasController@destroy')->name('comunas.destroy'); 
});
//RUTAS DEL NUTRICIONISTA
Route::group(['prefix'=>'nutricionista','middleware'=>'auth','nutricionista'],function(){
    //FACTORES
    Route::resource('factores','factoresController');
    //COMIDAD
    Route::resource('comidas','comidasController');


});


// Rutas cliente
Route::group(['prefix'=>'cliente'],function(){
	// Plan alimentario
	Route::resource('planAlimentario','planesAlimentariosController');
	Route::get('planes','planesAlimentariosController@listar');

	//Nuevo Avance
	Route::resource('nuevoAvance','nuevoAvanceController');
});
