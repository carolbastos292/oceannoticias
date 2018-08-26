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

    public function salvar(Request $req)
    {
    	$dados = $req->all();
    	//dd($dados);
    	//tratamento da imagem
    	if($req->hasFile('imagem')){
    		//variavel que recebe a imagem pela requisição
    		$imagem = $req->file('imagem');
    		//obtendo um numero aleatório para incluir no nome da imagem
    		$num = rand(1111,9999);
    		//diretorio da imagem
    		$dir = "img/noticias/";
    		//extensão da imagem
    		$ex = $imagem->guessClientExtension();
    		//renomeando a imagem com um numero aleatorio seguido da sua extensão
    		$nomeImagem = "imagem_".$num.".".$ex;
    		//movendo a imagem para o diretorio
    		$imagem->move($dir,$nomeImagem);
    		//salvado o diretorio da imagem em uma variavel para salvar no banco
    		$dados['imagem'] = $dir."/".$nomeImagem;
    	}

    	Noticia::create($dados);

    	return redirect()->route('admin.noticias');
    }

    public function editar($id)
    {
    	$registro = Noticia::find($id);
    	return view('admin.noticias.editar',compact('registro'));
    }

    public function atualizar(Request $req,$id)
    {
    	$dados = $req->all();
    	//dd($dados);
    	//tratamento da imagem
    	if($req->hasFile('imagem')){
    		//variavel que recebe a imagem pela requisição
    		$imagem = $req->file('imagem');
    		//obtendo um numero aleatório para incluir no nome da imagem
    		$num = rand(1111,9999);
    		//diretorio da imagem
    		$dir = "img/noticias/";
    		//extensão da imagem
    		$ex = $imagem->guessClientExtension();
    		//renomeando a imagem com um numero aleatorio seguido da sua extensão
    		$nomeImagem = "imagem_".$num.".".$ex;
    		//movendo a imagem para o diretorio
    		$imagem->move($dir,$nomeImagem);
    		//salvado o diretorio da imagem em uma variavel para salvar no banco
    		$dados['imagem'] = $dir."/".$nomeImagem;
    	}

    	Noticia::find($id)->update($dados);

    	return redirect()->route('admin.noticias');
    }

}
