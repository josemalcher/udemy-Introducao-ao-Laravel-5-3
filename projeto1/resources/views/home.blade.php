@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Cursos</h3>
        <div class="row">
            @foreach($cursos as $curso)
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img width="100" height="100" src="{{asset($curso->imagem)}}">

                        </div>
                        <div class="card-content">
                            <span class="card-title">{{$curso->titulo}}</span>
                            <p>{{$curso->descricao}}</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row" align="center">
            {{$cursos->links()}}
        </div>

    </div>
@endsection