@extends('layout.template')

@section('titulo','Ocean Noticias')

@section('conteudo')
	<div class="container">
		<h3 class="center">Cadastrar Notícias</h3>
		<div class="center">
			<div class="row">
				<form class="col s12" action="{{route('admin.noticias.salvar')}}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					@include('admin.noticias._form')
					
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