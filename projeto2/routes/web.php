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

// ? pode ser vazio
Route::get('/contato/{id?}', function ($id = null) {
    return "Contato teste id =  $id";
});

Route::post('/contato/', function () {
    //var_dump($_POST);
    dd($_POST); // testando algo
    return "Contato POST";
});

Route::put('/contato/', function () {
    var_dump($_POST);
    //dd($_POST); // testando algo
    return "Contato POST";
});