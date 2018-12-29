<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class HomeController extends Controller
{
    public function index()
    {
        //$cursos = Curso::all();
        //Páginação (3) por página
        $cursos = Curso::paginate(3);
        return view('home', compact('cursos'));
    }
}
