<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{
    public function index(){

        $registros = Curso::all();

        return view('admin.cursos.index', compact('registros'));
    }

    public function adicionar(){

        return view('admin.cursos.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        //dd($dados);
        /*
          array:6 [▼
          "_token" => "HuPlQ7yJKts1VztdzVnKOK7ImtI0i9UGM44ruuYi"
          "titulo" => "Titul oteste "
          "descricao" => "descrição teste"
          "valor" => "1000"
          "publicado" => "true"
          "imagem" => UploadedFile {#354 ▶}
        ]
        */

        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        }

        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/cursos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Curso::create($dados);
        return redirect()->route('admin.cursos');

    }
}
