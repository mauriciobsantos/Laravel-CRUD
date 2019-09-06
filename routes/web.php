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


Route::get('/tarefas','TarefasController@index');


Route::get('/tarefas/create','TarefasController@create');


Route::get('/tarefas/{id}/edit','TarefasController@edit');

Route::post('/tarefas','TarefasController@store');

Route::put('/tarefas/{id}','tarefasController@update');