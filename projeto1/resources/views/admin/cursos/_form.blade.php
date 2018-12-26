<div class="input-field">
    <input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
    <label for="titulo">Título</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
    <label for="descricao">Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
    <label for="valor">Valor</label>
</div>

<div class="file-field input-field">
    <div class="btn blue">
        <spam>Imagem</spam>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>

@if(isset($registro->imagem))
    <div class="input-field">
        <img width="100" height="100" src="{{asset($registro->imagem)}}" alt="{{ $registro->titulo }}">
    </div>
@endif

<div class="input-field">
        <label>
        <input type="checkbox" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked': ''}}  />
        <span>Publicar?</span>
    </label>
    <br><br>
</div>