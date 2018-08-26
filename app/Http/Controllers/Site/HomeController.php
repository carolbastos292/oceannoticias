<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;

class HomeController extends Controller
{
    public function index()
    {
    	$noticias = Noticia::all();
    	return view('home',compact('noticias'));
    }
}
