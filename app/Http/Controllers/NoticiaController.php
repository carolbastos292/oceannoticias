<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index(){
    	return "Index do noticia controller";
    }
    
     public function criar(Request $req){
     	dd($req->all());
    	return "Index do criar";
    }

     public function editar(){
    	return "Index do editar";
    }

}
