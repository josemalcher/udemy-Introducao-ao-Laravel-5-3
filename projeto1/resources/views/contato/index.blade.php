<h3>View index Contato</h3>

@foreach($contatos as $contato)
    <p>{{$contato->nome}}</p>
    <p>{{$contato->tel}}</p>
@endforeach