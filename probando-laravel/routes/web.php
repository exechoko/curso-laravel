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
    return view('welcome');
});

Route::get('/hola-mundo', function(){
  return view('hola-mundo');
});

Route::get('/contacto/{nombre?}/{edad?}', function($nombre = "Exequiel Marichal", $edad = null){

////------------
  return view('contacto.contacto')
    ->with('nombre', $nombre)
    ->with('edad', $edad)
    ->with('frutas', array('naranja','pera','sandia','fresa','melon','piña'));

  /*Lo de arriba y lo de abajo hacen los mismo

  return view('contacto', array(
          "nombre" => $nombre,
          "edad" => $edad
  ));*/
})-> where ([
  'nombre'=> '[A-Za-z]+', //para validar que el parametro sea letras
  'edad' => '[0-9]+' //valida que el parametro sean numeros
]);

Route::group(['prefix' => 'fruteria'], function(){

  Route::get('/frutas', 'FrutasController@getIndex');
  Route::get('/naranjas/{admin?}', ['middleware' => 'EsAdmin',
                                    'uses' => 'FrutasController@getNaranjas'
                                   ]);
  Route::get('/peras', 'FrutasController@anyPeras');
});

Route::post('/recibir', 'FrutasController@recibirFormulario');

Route::get('/notas', 'NotesController@getIndex');

//RESTful
// No funcionas en esta version Route::controller('frutas','FrutasController');
