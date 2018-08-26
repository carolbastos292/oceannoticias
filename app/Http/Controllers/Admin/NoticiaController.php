<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;

class NoticiaController extends Controller
{
    public function index(){
    	$registros = Noticia::all();
    	return view('admin.noticias.index',compact('registros'));
    }
    public function cadastrar()
    {
    	return view('admin.noticias.cadastrar');
    }

}
