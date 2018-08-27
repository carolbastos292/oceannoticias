@extends('layout.template')

@section('titulo','Ocean Noticias')

@section('conteudo')
	<div class="container">
		<br>
		@if(isset($registro->imagem))
			<img class="materialboxed" width="1050" src="{{asset($registro->imagem)}}">  
		@endif
		<div class="row">
            <h5 class="col s6 grey-text darken-3 truncate ">{{$registro->autor}}</h5>
            <h5 class="col s6 grey-text darken-1" align="right">{{ date( 'd/m/Y' , strtotime($registro->created_at))}}</h5>
        </div>
		<h2 class="">{{$registro->titulo}}</h2>
        <h5 class="">{{$registro->descricao}}</h5>

		<!--Botão de ação flutuante -->
        <div class="fixed-action-btn">
		  <a class="btn-floating btn-large blue pulse">
		    <i class="large material-icons">menu</i>
		  </a>
		  <ul>
		    <li><a class="btn-floating red" href="{{route('admin.noticias.editar',$registro->id)}}"><i class="material-icons">mode_edit</i></a></li>
		    <li><a class="btn-floating amber darken-1" href="{{route('admin.noticias.deletar',$registro->id)}}"><i class="material-icons">delete</i></a></li>
		  </ul>
		</div>
	</div>

	<script type="text/javascript">
		    document.addEventListener('DOMContentLoaded', function() {
		    var elems = document.querySelectorAll('.materialboxed');
		    var instances = M.Materialbox.init(elems, options);
		  });
	</script>
@endsection