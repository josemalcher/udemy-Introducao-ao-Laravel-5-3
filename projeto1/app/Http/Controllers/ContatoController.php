<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){
        return "ESSE é o index de ContatoCOntroller";
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
