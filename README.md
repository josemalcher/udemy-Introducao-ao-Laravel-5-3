# Introdução ao Laravel (5.3)

https://www.udemy.com/introducao-ao-laravel-53/

Curso de Introdução ao framework PHP Laravel. Nesse curso você vai aprender na prática os principais conceitos desse Framework que é um dos mais utilizado no mundo PHP. Vamos criar um CRUD completo com o Laravel na sua versão 5.3. Instalar e configurar um projeto com Laravel, trabalhar com Rotas do Laravel, implementar com Blade, trabalhar com Migrações, criar registros com Tinker e Implementar um sistema de Login com Laravel.

## <a name="indice">Índice</a>

1. [Introdução ao curso](#parte1)     
2. [Instalação e Configuração](#parte2)     
3. [Estrutura do Framework](#parte3)     
4. [Configurando Rotas](#parte4)     
5. [Artisan Console](#parte5)     
6. [Controllers](#parte6)     
7. [View](#parte7)     
8. [Blade Templates](#parte8)     
9. [Model](#parte9)     
10. [Migrations e SQLite](#parte10)     
11. [Laravel com Mysql](#parte11)     
12. [Criar registros com Tinker](#parte12)     
13. [Iniciando um Crud com Model e Migration](#parte13)     
14. [Definindo as rotas do Crud](#parte14)     
15. [Layout com Materialize e lista de registros](#parte15)     
16. [Formulário para adicionar cursos](#parte16)     
17. [Método para salvar registros](#parte17)     
18. [Editar Registros](#parte18)     
19. [Deletar Registros](#parte19)     
20. [Listando cursos na Home](#parte20)     
21. [Seeders](#parte21)     
22. [Sistema de Login - Parte 1](#parte22)     
23. [Sistema de Login - Parte 2](#parte23)     
24. [Código Fonte Completo](#parte24)     
25. [Paginação com Laravel](#parte25)     
---


## <a name="parte1">1 - Introdução ao curso</a>

- https://laravel.com/docs/5.3
- https://getcomposer.org/
- Git

[Voltar ao Índice](#indice)

---


## <a name="parte2">2 - Instalação e Configuração</a>

composer global require "laravel/installer" 

composer create-project --prefer-dist laravel/laravel projeto1 "5.3"

```
Installing laravel/laravel (v5.3.0)
  - Installing laravel/laravel (v5.3.0): Downloading (100%)
Created project in cursoLaravel
> php -r "file_exists('.env') || copy('.env.example', '.env');"
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 62 installs, 0 updates, 0 removals
```

Servidor embutido: php artisan serve

```
Laravel development server started on http://127.0.0.1:8000/

```


[Voltar ao Índice](#indice)

---


## <a name="parte3">3 - Estrutura do Framework</a>



[Voltar ao Índice](#indice)

---


## <a name="parte4">4 - Configurando Rotas</a>

- projeto1/routes/web.php

```php
<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato/{id?}', function ($id = null) {
    return "Contato id = $id";
});

Route::post('/contato', function () {
    dd($_POST);
    return "Contato POST";
});

Route::put('/contato', function () {
    return "Contato PUT";
});
```

- projeto1/resources/views/welcome.blade.php

```php
        <div>
            <h2>Teste com ROTAS: </h2>
            <form action="/contato" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" name="nome" placeholder="NOME /POST">
                <button>ENVIAR</button>
            </form>

            <form action="/contato" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="put">
                <input type="text" name="nome" placeholder="NOME /PUT">
                <button>ENVIAR</button>
            </form>
        </div>
```


[Voltar ao Índice](#indice)

---


## <a name="parte5">5 - Artisan Console</a>

- php artisan

```
>php artisan

Laravel Framework version 5.3.31

Usage:
  command [options] [arguments]

Options:
  -h, --help            Display this help message
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi            Force ANSI output
      --no-ansi         Disable ANSI output
  -n, --no-interaction  Do not ask any interactive question
      --env[=ENV]       The environment the command should run under
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  clear-compiled       Remove the compiled class file
  down                 Put the application into maintenance mode
  env                  Display the current framework environment
  help                 Displays help for a command
  inspire
  list                 Lists commands
  migrate              Run the database migrations
  optimize             Optimize the framework for better performance
  serve                Serve the application on the PHP development server
  tinker               Interact with your application
  up                   Bring the application out of maintenance mode
 app
  app:name             Set the application namespace
 auth
  auth:clear-resets    Flush expired password reset tokens
 cache
  cache:clear          Flush the application cache
  cache:table          Create a migration for the cache database table
 config
  config:cache         Create a cache file for faster configuration loading
  config:clear         Remove the configuration cache file
 db
  db:seed              Seed the database with records
 event
  event:generate       Generate the missing events and listeners based on registration
 key
  key:generate         Set the application key
 make
  make:auth            Scaffold basic login and registration views and routes
  make:command         Create a new Artisan command
  make:controller      Create a new controller class
  make:event           Create a new event class
  make:job             Create a new job class
  make:listener        Create a new event listener class
  make:mail            Create a new email class
  make:middleware      Create a new middleware class
  make:migration       Create a new migration file
  make:model           Create a new Eloquent model class
  make:notification    Create a new notification class
  make:policy          Create a new policy class
  make:provider        Create a new service provider class
  make:request         Create a new form request class
  make:seeder          Create a new seeder class
  make:test            Create a new test class
 migrate
  migrate:install      Create the migration repository
  migrate:refresh      Reset and re-run all migrations
  migrate:reset        Rollback all database migrations
  migrate:rollback     Rollback the last database migration
  migrate:status       Show the status of each migration
 notifications
  notifications:table  Create a migration for the notifications table
 queue
  queue:failed         List all of the failed queue jobs
  queue:failed-table   Create a migration for the failed queue jobs database table
  queue:flush          Flush all of the failed queue jobs
  queue:forget         Delete a failed queue job
  queue:listen         Listen to a given queue
  queue:restart        Restart queue worker daemons after their current job
  queue:retry          Retry a failed queue job
  queue:table          Create a migration for the queue jobs database table
  queue:work           Start processing jobs on the queue as a daemon
 route
  route:cache          Create a route cache file for faster route registration
  route:clear          Remove the route cache file
  route:list           List all registered routes
 schedule
  schedule:run         Run the scheduled commands
 session
  session:table        Create a migration for the session database table
 storage
  storage:link         Create a symbolic link from "public/storage" to "storage/app/public"
 vendor
  vendor:publish       Publish any publishable assets from vendor packages
 view
  view:clear           Clear all compiled view files


```

- php artisan help make:controller

```
>php artisan help make:controller

Usage:
  make:controller [options] [--] <name>

Arguments:
  name                  The name of the class

Options:
  -m, --model[=MODEL]   Generate a resource controller for the given model.
  -r, --resource        Generate a resource controller class.
  -h, --help            Display this help message
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi            Force ANSI output
      --no-ansi         Disable ANSI output
  -n, --no-interaction  Do not ask any interactive question
      --env[=ENV]       The environment the command should run under
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Help:
  Create a new controller class

```

```
>php artisan key:generate

Application key [base64:GZ/qNK8vd69WOmQwoodayk+SiHE/OWPODhh5Oxg6WF8=] set successfully.

```

[Voltar ao Índice](#indice)

---


## <a name="parte6">6 - Controllers</a>

```
> php artisan make:controller ContatoController
Controller created successfully.

```

```php
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

```

```php
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato/{id?}', ['uses'=>'ContatoController@index']);

Route::post('/contato',['uses'=>'ContatoController@criar']);

Route::put('/contato',['uses'=>'ContatoController@editar']);


```

[Voltar ao Índice](#indice)

---


## <a name="parte7">7 - View</a>

- projeto1/app/Http/Controllers/ContatoController.php

```php
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
```

- projeto1/resources/views/contato/index.blade.php

```php
<h3>View index Contato</h3>

@foreach($contatos as $contato)
    <p>{{$contato->nome}}</p>
    <p>{{$contato->tel}}</p>
@endforeach
```

[Voltar ao Índice](#indice)

---


## <a name="parte8">8 - Blade Templates</a>

- projeto1/resources/views/layout/site.blade.php

```blade

@include('layout._includes.topo')

@yield('conteudo')

@include('layout._includes.rodape')

```

- projeto1/resources/views/contato/index.blade.php

```blade
@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')
    <h3>View Index</h3>

    @foreach($contatos as $contato)
        <p>{{$contato->nome}}</p>
        <p>{{$contato->tel}}</p>
    @endforeach

@endsection
```

[Voltar ao Índice](#indice)

---


## <a name="parte9">9 - Model</a>

```
> php artisan make:model Contato -m
Model created successfully.
Created Migration: 2018_12_24_222554_create_contatos_table

```

- projeto1/app/Contato.php

```php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista(){
        return (object)[
            'nome'=>'José',
            'tel'=>'91980800000'
        ];
    }
}

```

- projeto1/app/Http/Controllers/ContatoController.php

```php
// (...)
use Illuminate\Http\Request;
use App\Contato;
// (...)

public function index(){
        //Usando o Model
        $contato = new Contato();
        //dd($contato->lista());
        $con = $contato->lista();
        dd($con->nome);

  return view('contato.index', compact('contatos','outroExemplo'));
}
```


[Voltar ao Índice](#indice)

---


## <a name="parte10">10 - Migrations e SQLite</a>

```
>php artisan make:migration create_produtos_table --create=produtos

Created Migration: 2018_12_24_230210_create_produtos_table

```

- projeto1/database/migrations/2018_12_24_230210_create_produtos_table.php

```php
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descricao');
            $table->decimal('valor',5,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}

```

```
> php artisan migrate

Migration table created successfully.
Migrated: 2014_10_12_000000_create_users_table
Migrated: 2014_10_12_100000_create_password_resets_table
Migrated: 2018_12_24_222554_create_contatos_table
Migrated: 2018_12_24_230210_create_produtos_table

```




[Voltar ao Índice](#indice)

---


## <a name="parte11">11 - Laravel com Mysql</a>

(Anterior)

[Voltar ao Índice](#indice)

---


## <a name="parte12">12 - Criar registros com Tinker</a>

```
php artisan tinker
Psy Shell v0.8.18 (PHP 7.2.1 — cli) by Justin Hileman
New version is available (current: v0.8.18, latest: v0.9.9)
```

```
>>> App\Contato::all();
=> Illuminate\Database\Eloquent\Collection {#705
     all: [],
   }

```

```
>>> $contato = new App\Contato();
=> App\Contato {#712}
>>> $contato->nome = "Jose tinker";
=> "Jose tinker"
>>> $contato->tel = "980808899";
=> "980808899"
>>> $contato->email = "contato@josemalcher.net";
=> "contato@josemalcher.net"
>>> $contato;
=> App\Contato {#712
     nome: "Jose tinker",
     tel: "980808899",
     email: "contato@josemalcher.net",
   }
>>>

```

- salvo no BD

```
>>> $contato->save();
=> true

```

```
>>> App\Contato::all();
=> Illuminate\Database\Eloquent\Collection {#718
     all: [
       App\Contato {#719
         id: 1,
         nome: "Jose tinker",
         tel: "980808899",
         email: "contato@josemalcher.net",
         created_at: "2018-12-26 00:13:12",
         updated_at: "2018-12-26 00:13:12",
       },
     ],
   }

```

- Deletar Registro

```
>>> $con = App\Contato::find(1);
=> App\Contato {#725
     id: 1,
     nome: "Jose tinker",
     tel: "980808899",
     email: "contato@josemalcher.net",
     created_at: "2018-12-26 00:13:12",
     updated_at: "2018-12-26 00:13:12",
   }
>>> $con->delete();
=> true

```



[Voltar ao Índice](#indice)

---


## <a name="parte13">13 - Iniciando um Crud com Model e Migration</a>

```
> php artisan make:model Curso -m
Model created successfully.
Created Migration: 2018_12_26_003303_create_cursos_table

```

- projeto1/database/migrations/2018_12_26_003303_create_cursos_table.php

```php
public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descricao');
            $table->string('imagem');
            $table->decimal('valoe',5,2);
            $table->enum('publicado',['sim','nao'])->default('nao');
            $table->timestamps();
        });
    }
```

```
> php artisan migrate
Migrated: 2018_12_26_003303_create_cursos_table

```

```
> php artisan make:controller Admin\CursoController
Controller created successfully.

```



[Voltar ao Índice](#indice)

---


## <a name="parte14">14 - Definindo as rotas do Crud</a>

- projeto1/routes/web.php

```php
/* CRUD CURSOS */
Route::get('/admin/cursos',['as'=>'admin.cursos', 'uses'=>'Admin\CursoController@index']);
Route::get('/admin/cursos/adicionar',['as'=>'admin.cursos.adicionar', 'uses'=>'Admin\CursoController@adicionar']);
Route::post('/admin/cursos/salvar',['as'=>'admin.cursos.salvar', 'uses'=>'Admin\CursoController@salvar']);

Route::get('/admin/cursos/editar/{id}',['as'=>'admin.cursos.editar', 'uses'=>'Admin\CursoController@editar']);
Route::post('/admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar', 'uses'=>'Admin\CursoController@atualizar']);

Route::get('/admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar', 'uses'=>'Admin\CursoController@deletar']);
```

[Voltar ao Índice](#indice)

---


## <a name="parte15">15 - Layout com Materialize e lista de registros</a>

- MaterializeCSS: https://materializecss.com

- projeto1/app/Http/Controllers/Admin/CursoController.php

```php
<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso; // MODEL
class CursoController extends Controller
{
    public function index(){

        $registros = Curso::all();

        return view('admin.cursos.index', compact('registros'));
    }
}

```

- projeto1/resources/views/admin/cursos/index.blade.php

```blade
@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Cursos</h3>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Publicado</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $registro)
                        <tr>
                            <td>{{$registro->id}}</td>
                            <td>{{$registro->titulo}}</td>
                            <td>{{$registro->descricao}}</td>
                            <td><img width="100" height="100" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo}}"></td>
                            <td>{{$registro->publicado}}</td>
                            <td>
                                <a class="btn deep-orange" href="{{route('admin.cursos.editar', $registro->id)}}">Editar</a>
                                <a class="btn red" href="{{route('admin.cursos.deletar', $registro->id)}}">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <dir class="row">
            <a href="{{route('admin.cursos.adicionar')}}" class="btn blue">Adicionar</a>
        </dir>
    </div>
@endsection
```

[Voltar ao Índice](#indice)

---


## <a name="parte16">16 - Formulário para adicionar cursos</a>


- projeto1/resources/views/admin/cursos/adicionar.blade.php

```blade
@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Curso</h3>
        <div class="row">
            <form action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            @include('admin.cursos._form')
            <button class="btn deep-orange">Salvar</button>


            </form>
        </div>

    </div>
@endsection
```

- projeto1/resources/views/admin/cursos/_form.blade.php

```blade
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
```


[Voltar ao Índice](#indice)

---


## <a name="parte17">17 - Método para salvar registros</a>

- projeto1/app/Http/Controllers/Admin/CursoController.php

```php
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
```

- projeto1/app/Curso.php

```php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'titulo', 'descricao', 'valor', 'imagem', 'publicado'
    ];
}

```


[Voltar ao Índice](#indice)

---


## <a name="parte18">18 - Editar Registros</a>

- projeto1/app/Http/Controllers/Admin/CursoController.php

```php

    public function editar($id)
    {
        $registro = Curso::find($id);
        return view('admin.cursos.editar', compact('registro'));
    }
    public function atualizar(Request $req, $id)
    {
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
        }else{
            $dados['publicado'] = 'nao';
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

        Curso::find($id)->update($dados);
        return redirect()->route('admin.cursos');

    }
```

- projeto1/resources/views/admin/cursos/editar.blade.php

```php
@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Editando Curso</h3>
        <div class="row">
            <form action="{{route('admin.cursos.atualizar', $registro->id)}}" method="post"
                  enctype="multipart/form-data">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="put">

                @include('admin.cursos._form')
                <button class="btn deep-orange">ATUALIZAR</button>


            </form>
        </div>

    </div>
@endsection
```



[Voltar ao Índice](#indice)

---


## <a name="parte19">19 - Deletar Registros</a>

```php
public function deletar($id)
    {
        Curso::find($id)->delete();
        return redirect()->route('admin.cursos');
    }
}
```

[Voltar ao Índice](#indice)

---


## <a name="parte20">20 - Listando cursos na Home</a>



[Voltar ao Índice](#indice)

---


## <a name="parte21">21 - Seeders</a>



[Voltar ao Índice](#indice)

---


## <a name="parte22">22 - Sistema de Login - Parte 1</a>



[Voltar ao Índice](#indice)

---


## <a name="parte23">23 - Sistema de Login - Parte 2</a>



[Voltar ao Índice](#indice)

---


## <a name="parte24">24 - Código Fonte Completo</a>



[Voltar ao Índice](#indice)

---


## <a name="parte25">25 - Paginação com Laravel</a>



[Voltar ao Índice](#indice)

---

