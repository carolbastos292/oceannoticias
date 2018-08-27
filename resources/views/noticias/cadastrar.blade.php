@extends('layout.template')

@section('titulo','Ocean Noticias')

@section('conteudo')
	<div class="container">
		<h3 class="center">Cadastrar Notícia</h3>
		<div class="center">
			<div class="row">
				<form class="col s12" action="{{route('noticias.salvar')}}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					@include('noticias._form')				
					<br>
					<div class="center">
				  		<button class="btn waves-effect waves-light btn-large " type="submit" name="action">Salvar
				  		</button>
				  	</div>
				</form>
			</div>
		</div>
		
	</div>
@endsection