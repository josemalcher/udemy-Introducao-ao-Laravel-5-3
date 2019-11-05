<?php echo "Teste Tag php"; ?>

<h1>index de contato</h1>

{{--@foreach($contatos as $contato)--}}
{{--    <p>{{$contato['nome']}}</p>--}}
{{--    <p>{{$contato['tel']}}</p>--}}
{{--@endforeach--}}
@foreach($contatos as $contato)
    <p>{{$contato->nome}}</p>
    <p>{{$contato->tel}}</p>
@endforeach