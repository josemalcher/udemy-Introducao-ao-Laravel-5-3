<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){

        $contatos = [
            (object)["nome"=>"Maria","tel"=> "91988881234"],
            (object)["nome"=>"Joãoo","tel"=> "91999991234"]
        ];
        /*     <p>{{$contato->nome}}</p>
        *      <p>{{$contato->tel}}</p>
        */

        $outroExemplo = [
            ["nome"=>"Maria","tel"=> "91988881234"],
            ["nome"=>"Joãoo","tel"=> "91999991234"]
        ];
        /*
         *      <p>{{$contato['nome']}}</p>
         *      <p>{{$contato['tel']}}</p>
         * */

        return view('contato.index', compact('contatos','outroExemplo'));
    }

    public function criar(Request $req){
        //dd($req);
        //dd($req['nome']);
        dd($req->all());
        return "Criando no CONTROLLER";
    }

    public function editar(){
        return "EDITANDO no CONTROLLER";
    }
}
