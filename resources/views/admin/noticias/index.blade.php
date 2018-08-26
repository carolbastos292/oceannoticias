@extends('layout.template')

@section('titulo','Ocean Noticias')

@section('conteudo')
	<div class="container">
		<h3 class="center">Lista de noticias</h3>
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Descrição resumida</th>
						<th>Imagem</th>
						<th>Autor</th>
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
							<td><img width="120" src="{{asset($registro->imagem)}}" alt="{{ $registro->titulo }}"/></td>
							<td>{{ $registro-> publicado }}</td>
							<td>
								<a class="btn deep-orange" href="{{route('admin.noticias.editar',$registro->id)}}">Editar</a>
								<a class="btn red" href="{{route('admin.noticias.deletar',$registro->id)}}">Deletar</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="row">
			<a class="btn blue" href="{{route('admin.noticias.cadastrar')}}">Cadastrar</a>
		</div>
	</div>
@endsection