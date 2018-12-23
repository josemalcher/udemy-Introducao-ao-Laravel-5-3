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



[Voltar ao Índice](#indice)

---


## <a name="parte6">6 - Controllers</a>



[Voltar ao Índice](#indice)

---


## <a name="parte7">7 - View</a>



[Voltar ao Índice](#indice)

---


## <a name="parte8">8 - Blade Templates</a>



[Voltar ao Índice](#indice)

---


## <a name="parte9">9 - Model</a>



[Voltar ao Índice](#indice)

---


## <a name="parte10">10 - Migrations e SQLite</a>



[Voltar ao Índice](#indice)

---


## <a name="parte11">11 - Laravel com Mysql</a>



[Voltar ao Índice](#indice)

---


## <a name="parte12">12 - Criar registros com Tinker</a>



[Voltar ao Índice](#indice)

---


## <a name="parte13">13 - Iniciando um Crud com Model e Migration</a>



[Voltar ao Índice](#indice)

---


## <a name="parte14">14 - Definindo as rotas do Crud</a>



[Voltar ao Índice](#indice)

---


## <a name="parte15">15 - Layout com Materialize e lista de registros</a>



[Voltar ao Índice](#indice)

---


## <a name="parte16">16 - Formulário para adicionar cursos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte17">17 - Método para salvar registros</a>



[Voltar ao Índice](#indice)

---


## <a name="parte18">18 - Editar Registros</a>



[Voltar ao Índice](#indice)

---


## <a name="parte19">19 - Deletar Registros</a>



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

