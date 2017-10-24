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

// ADMINISTRADOR
Route::group(['prefix' => 'admin','middleware'=>['auth','administrador']], function () {
    // Añadir nutricionista
    Route::resource('agregarNutricionistas','agregarNutricionistasController');
    Route::get('agregarNutricionistas/{id}/destroy','agregarNutricionistasController@destroy')->name('agregarNutricionistas.destroy');
    Route::get('agregarNutricionistas/{id}/detalle','agregarNutricionistasController@detalle')->name('agregarNutricionistas.detalle');
    // Enfermedades
    Route::resource('enfermedades','enfermedadesController');
    Route::get('enfermedades/{id}/detalle','enfermedadesController@detalle')->name('enfermedades.detalle');
    Route::get('enfermedades/{id}/destroy','enfermedadesController@destroy')->name('enfermedades.destroy');
    // Sellos negros
    Route::resource('sellosnegros','sellosNegrosController');
    Route::get('sellosnegros/{id}/detalle','sellosNegrosController@detalle')->name('sellosnegros.detalle');
    Route::get('sellosnegros/{id}/destroy','sellosNegrosController@destroy')->name('sellosnegros.destroy');
    // Etiqueta nutricional
    Route::resource('etiquetanutricional','etiquetaNutricionalController');
    Route::get('etiquetanutricional/{id}/destroy','etiquetaNutricionalController@destroy')->name('etiquetanutricional.destroy');
    Route::get('etiquetanutricional/{id}/detalle','etiquetaNutricionalController@detalle')->name('etiquetanutricional.detalle');
    // Campos etiqueta nutricional
    Route::resource('campoetiquetanutricional','campEtiquetaNutricionalController');
    Route::get('campoetiquetanutricional/{id}/destroy','campEtiquetaNutricionalController@destroy')->name('campoetiquetanutricional.destroy');
    Route::get('campoetiquetanutricional/{id}/detalle','campEtiquetaNutricionalController@detalle')->name('campoetiquetanutricional.detalle');
    // Grupos de alimentos
    Route::resource('gruposalimentarios','gruposAlimentosController');
    Route::get('gruposalimentarios/{id}/destroy','gruposAlimentosController@destroy')->name('gruposalimentarios.destroy');
    // Categorias de alimentos
    Route::resource('categoriasalimentarias','categoriasAlimentariasController');
    Route::get('categoriasalimentarias/{id}/destroy','categoriasAlimentariasController@destroy')->name('categoriasalimentarias.destroy');
    // Alimentos
    Route::resource('alimentos','alimentosController');
    Route::get('alimentos/{id}/destroy','alimentosController@destroy')      ->name('alimentos.destroy');
    Route::get('alimentos/categorias/{id}','alimentosController@categorias')->name('alimentos.categorias');
    // Regiones
    Route::resource('regiones','regionesController');
    Route::get('regiones/{id}/destroy','regionesController@destroy')->name('regiones.destroy');
    // Comunas
    Route::resource('comunas','comunasController');
    Route::get('comunas/{id}/destroy','comunasController@destroy')->name('comunas.destroy');
});


// NUTRICIONISTA
Route::group(['prefix'=>'nutricionista','middleware'=>['auth','nutricionista']],function(){
  // Factores
  Route::resource('factores','factoresController');
  Route::get('factores/{id}/activar','factoresController@activar')->name('factores.activar');
  // Porcentaje de comidas
  Route::resource('comidas','comidasController');
});


// CLIENTE
  Route::group(['prefix'=>'cliente','middleware'=>['auth','cliente']],function(){
    // Dashboard
    Route::get('inicio','inicioClienteController@index')->name('cliente.inicio');
    // Plan alimentario
  	Route ::resource('planAlimentario','planesAlimentariosController');
    Route ::get('planes','planesAlimentariosController@index')                      ->name('planesAlimentarios.Listar');
    Route ::get('planes/grupos','planesAlimentariosController@grupos')              ->name('planes.grupos');
    Route ::get('planes/categorias/{id}','planesAlimentariosController@categorias') ->name('planes.categorias');
  	Route ::get('planes/alimentos/{id}','planesAlimentariosController@alimentos')   ->name('planes.alimentos');
  	//Nuevo Avance
    Route::resource('nuevoAvance','nuevoAvanceController');
  	Route::get('nuevoAvance/eliminar/{id}','nuevoAvanceController@destroy')->name('nuevoAvance.destroy');
});
