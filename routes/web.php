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
    return view('home');
});

Route::get('/noticias/{id?}',['uses'=>'NoticiaController@index']);

/* Rota para a home */
Route::get('/admin/noticias',['as'=>'admin.noticias','uses'=>'Admin\NoticiaController@index']);
/* Rota para cadastrar noticias */
Route::get('/admin/noticias/cadastrar',['as'=>'admin.noticias.cadastrar','uses'=>'Admin\NoticiaController@cadastrar']);
/* Rota para salvar noticias */
Route::post('/admin/noticias/salvar',['as'=>'admin.noticias.salvar','uses'=>'Admin\NoticiaController@salvar']);
/* Rota para editar noticias */
Route::get('/admin/noticias/editar/{id}',['as'=>'admin.noticias.editar','uses'=>'Admin\NoticiaController@editar']);
/* Rota para atualizar noticias */
Route::put('/admin/noticias/atualizar/{id}',['as'=>'admin.noticias.atualizar','uses'=>'Admin\NoticiaController@atualizar']);
/* Rota para deletar noticias */
Route::get('/admin/noticias/deletar/{id}',['as'=>'admin.noticias.deletar','uses'=>'Admin\NoticiaController@deletar']);
/* Rota para visualizar noticias */
Route::get('/admin/noticias/visualizar/{id}',['as'=>'admin.noticias.visualizar','uses'=>'Admin\NoticiaController@visualizar']);
