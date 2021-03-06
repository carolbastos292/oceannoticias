@extends('layout.template')

@section('titulo','Ocean Noticias')

@section('conteudo')
    <div class="container">
        <h3 class="center">Últimas Notícias</h3>
        <br>
        <div class="row">
            @foreach($noticias as $noticia)
                <div class="col s12 m3">
                    <div class="card hoverable">
                        <div class="card-image">
                          <img  height="190" src="{{asset($noticia->imagem)}}">
                        </div>
                        <div class="card-content">
                            <div class="row">
                              <h6 class="col s6 grey-text darken-3 truncate ">{{$noticia->autor}}</h6>
                              <h6 class="col s6 grey-text darken-1" align="right">{{ date( 'd/m/Y' , strtotime($noticia->created_at))}}</h6>
                            </div>
                             
                            <h5 class="truncate">{{$noticia->titulo}}</h5>
                            <p class="truncate">{{$noticia->descricao}}</p>
                            
                        </div>
                        <div class="card-action center"> 
                                <a href="{{route('noticias.visualizar',$noticia->id)}}">Ver mais...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row " align="center">
            {{$noticias->links()}}
        </div>
        
    </div>
@endsection