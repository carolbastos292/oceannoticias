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

/* Rota para home */
Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);
/* Rota para cadastrar noticias */
Route::get('/noticias/cadastrar',['as'=>'noticias.cadastrar','uses'=>'NoticiaController@cadastrar']);
/* Rota para salvar noticias */
Route::post('/noticias/salvar',['as'=>'noticias.salvar','uses'=>'NoticiaController@salvar']);
/* Rota para editar noticias */
Route::get('/noticias/editar/{id}',['as'=>'noticias.editar','uses'=>'NoticiaController@editar']);
/* Rota para atualizar noticias */
Route::put('/noticias/atualizar/{id}',['as'=>'noticias.atualizar','uses'=>'NoticiaController@atualizar']);
/* Rota para deletar noticias */
Route::get('/noticias/deletar/{id}',['as'=>'noticias.deletar','uses'=>'NoticiaController@deletar']);
/* Rota para visualizar noticias */
Route::get('/noticias/visualizar/{id}',['as'=>'noticias.visualizar','uses'=>'NoticiaController@visualizar']);
