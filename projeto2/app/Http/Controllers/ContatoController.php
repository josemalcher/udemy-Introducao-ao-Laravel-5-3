<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
//        $contatos = [
//            ["nome"=>"Maria", "tel"=>"91989898989"],
//            ["nome"=>"Jose", "tel"=>"88446655112"]
//        ];
        $contatos = [
            (object)["nome"=>"Maria", "tel"=>"91989898989"],
            (object)["nome"=>"Jose", "tel"=>"88446655112"]
        ];
        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $request)
    {
        //dd($request['nome']);
        dd($request->all());
        return "CRIANDO";
    }

    public function editar()
    {
        return "Editando";
    }

}
