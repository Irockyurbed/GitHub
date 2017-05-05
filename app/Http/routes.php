<?php

use App\Note;
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

//Para enviar a la pagina de NotesController de la carpeta Controllers
Route::get('notes', 'NotesController@index'); //Correcta

//Se encargara de revisir peticiones
Route::get('notes/create', 'NotesController@create'); //Correcta
Route::post('notes', 'NotesController@store'); //Correcta

Route::get('notes/{note}','NotesController@show')->where('note','[0-9]+');


//Parametros de rutas en laravel
