@extends('layout.template')

@section('titulo','Ocean Noticias')

@section('conteudo')
    <div class="container">
        <h3 class="center">Últimas Notícias</h3>
        <div class="row right">
            <a class="btn orange" href="{{route('admin.noticias.cadastrar')}}">Cadastrar</a>
        </div>
        <br>
        <div class="row">
            @foreach($noticias as $noticia)
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image">
                          <img  height="190"src="{{asset($noticia->imagem)}}">
                          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <h4>{{$noticia->titulo}}</h4>
                            <p>{{$noticia->descricao}}</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Ver mais...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
@endsection