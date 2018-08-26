@extends('layout.template')

@section('titulo','Ocean Noticias')

@section('conteudo')
	<div class="container">
		<h3 class="center">Últimas Notícias</h3>
		<div class="row">
			<a class="btn blue" href="{{route('admin.noticias.cadastrar')}}">Cadastrar</a>
		</div><br><br>
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Titulo</th>
						<th>Descrição</th>
						<th>Autor</th>
						<th>Imagem</th>
						<th>Data</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
					@foreach($registros as $registro)
						<tr>
							<td>{{ $registro->id }}</td>
							<td>{{ $registro->titulo }}</td>
							<td>{{ $registro->descricao }}</td>
							<td>{{ $registro->autor }}</td>
							<td><img width="120" src="{{asset($registro->imagem)}}" alt="{{ $registro->titulo }}"/></td>
							<td>{{ $registro->created_at }}</td>
							<td>
								<a class="btn deep-orange" href="{{route('admin.noticias.editar',$registro->id)}}">Editar</a>
								<a class="btn red" href="{{route('admin.noticias.deletar',$registro->id)}}">Deletar</a>
								<a class="btn blue" href="{{route('admin.noticias.visualizar',$registro->id)}}">Visualizar</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		 <!-- <div class="row">
		    <div class="col s12 m6">
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
		  </div>-->
		
	</div>
@endsection