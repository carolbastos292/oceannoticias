<div class="input-field">
	<input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
	<label>Titulo</label>
</div>	

<div class="input-field">
	<input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
	<label>Descrição</label>
</div>

<div class="input-field">
	<input type="text" name="autor" value="{{isset($registro->autor) ? $registro->autor : ''}}">
	<label>Autor</label>
</div>	

<div class="file-field input-field">
	<div class="btn blue">
		<span>Imagem</span>		
		<input type="file" name="imagem">
	</div>
	<div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>

@if(isset($registro->imagem))
<div class="input-field">
	<img width="150" src="{{asset($registro->imagem)}}"/>
</div>
@endif

