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

Route::get('/', function () {
    return view('welcome');
});

//Ruta indice donde se vera la tabla
Route::get('crimenes{num?}','CrimenController@index')-> name('crimen.indice') -> where('num' ,'[0-9]+');
//Ruta guardar el crimen
Route::post('crimenes{num?}','CrimenController@store') ->name('crimen.store')-> where('num' ,'[0-9]+');

Route::put('crimenes/{id}/editar','CrimenController@update')->name('crimen.update') -> where('id' ,'[0-9]+');

Route::delete('crimenes/{id}/borrar','CrimenController@destroy') ->name('crimen.borrar')->where('id','[0-9]+');

Route::get('crimenesdesactivado{num?}','CrimendesactivadosController@index')-> name('crimendesactivado.indice')-> where('num' ,'[0-9]+');;

Route::delete('crimenesdesactivado/{id}/borrar','CrimendesactivadosController@destroy') ->name('crimendesactivado.borrar')->where('id','[0-9]+');


//Ruta indice donde se vera la tabla
Route::get('crimenes','CrimenController@index')-> name('crimen.indice');



Route::get('agentes/','AgenteController@index')-> name('agentes.indice');


Route::get('agentesvida','AgenteController@indexVida')-> name('agentes.vida');

Route::get('agentespropiedad','AgenteController@indexPropiedad')-> name('agentes.propiedad');



//Ruta indice donde se vera la tabla
Route::get('{all?}agentes','AgenteController@index')-> name('agente.indice') ;

Route::get('agentescomunes','AgenteController@indexComunes')-> name('agente.comunes') -> where('num' ,'[0-9]+');
//Ruta guardar el agente


Route::post('{all?}agentes','AgenteController@store') ->name('agente.store')-> where('num' ,'[0-9]+');
Route::post('agentes','AgenteController@store') ->name('agente.store')-> where('num' ,'[0-9]+');


Route::get('agentes{id}','AgenteController@show')->name('agentes.show')->where('id','[0-9]+');

Route::put('agentes/{id}/editar','AgenteController@update')->name('agente.update') -> where('id' ,'[0-9]+');

Route::delete('agentes/{id}/borrar','AgenteController@destroy') ->name('agente.borrar')->where('id','[0-9]+');



Route::get('agentesdesactivado','AgentesdesativadoController@index')-> name('agentedesactivado.indice')-> where('num' ,'[0-9]+');

Route::get('agentesdesactivado {id}', 'AgentesdesativadoController@show')->name('agentedesactivado.show')->where('id','[0-9]+');

Route::delete('agentesdesactivado/{id}/borrar','AgentesdesativadoController@destroy') ->name('agentedesactivado.borrar')->where('id','[0-9]+');




Route::get('denuncias','DenunciaController@index')->name('denuncia.index');
 Route::get('denuncianuevo','DenunciaController@create')-> name('denuncias.create');
 Route::post('denuncianuevo','DenunciaController@store')-> name('denuncias.store');
 Route::get('denuncias{id}','DenunciaController@show')->name('denuncia.show')->where('id','[0-9]+');



 Route::get('agentesdesactivado{num?}','AgentesdesativadoController@index')-> name('agentedesactivado.indice')-> where('num' ,'[0-9]+');;

Route::delete('agentesdesactivado/{id}/borrar','AgentesdesativadoController@destroy') ->name('agentedesactivado.borrar')->where('id','[0-9]+');
