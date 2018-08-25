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

/*Route::get('/admin/noticias',['as'->'admin.noticias','uses'=>'Admin\NoticiaController@index']);
Route::get('/admin/noticias/cadastrar',['as'->'admin.noticias.cadastrar','uses'=>'Admin\NoticiaController@cadastrar']);
Route::post('/admin/noticias/salvar',['as'->'admin.noticias.salvar','uses'=>'Admin\NoticiaController@salvar']);
Route::get('/admin/noticias/editar/{id}',['as'->'admin.noticias.editar','uses'=>'Admin\NoticiaController@editar']);
Route::put('/admin/noticias/atualizar/{id}',['as'->'admin.noticias.atualizar','uses'=>'Admin\NoticiaController@atualizar']);
Route::get('/admin/noticias/deletar/{id}',['as'->'admin.noticias.deletar','uses'=>'Admin\NoticiaController@deletar']);*/
