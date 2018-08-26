<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class NoticiaController extends Controller
{
    public function index(){

    	return view('admin.noticias.index');
    }

}
