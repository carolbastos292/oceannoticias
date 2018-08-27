@extends('layout.template')

@section('titulo','Ocean Noticias')

@section('conteudo')
	<div class="container">
		<br>
		@if(isset($registro->imagem))
			<img class="materialboxed" width="1050" src="{{asset($registro->imagem)}}">  
		@endif
		<h5 class="grey-text darken-1" align="right">{{ date( 'd/m/Y' , strtotime($registro->created_at))}}</h5> 
		<h2 class="">{{$registro->titulo}}</h2>
        <h5 class="">{{$registro->descricao}}</h5>
	</div>

	<script type="text/javascript">
		    document.addEventListener('DOMContentLoaded', function() {
		    var elems = document.querySelectorAll('.materialboxed');
		    var instances = M.Materialbox.init(elems, options);
		  });
	</script>
@endsection