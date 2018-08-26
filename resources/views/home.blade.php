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
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img src="#">
                  <span class="card-title">Card Title</span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
            </div>
          </div>
        
    </div>
@endsection