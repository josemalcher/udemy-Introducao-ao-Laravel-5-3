@include('layout.header')
@section('titulo','Projeto 2 - contatos')

<h1>index de contato</h1>

{{--@section('conteudo')--}}
    @foreach($contatos as $contato)
        <p>{{$contato->nome}}</p>
        <p>{{$contato->tel}}</p>
    @endforeach
{{--@endsection--}}

@include('layout.footer')