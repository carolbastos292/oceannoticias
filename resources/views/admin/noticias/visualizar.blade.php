@extends('layout.template')

@section('titulo','Ocean Noticias')

@section('conteudo')
	<div class="container">
		@if(isset($registro->imagem))
			<div class="input-field">
				<img class="materialboxed" width="700" src="{{asset($registro->imagem)}}">
			</div>
		@endif
		
	</div>
	<script type="text/javascript">
		  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems, options);
  });
	</script>

@endsection