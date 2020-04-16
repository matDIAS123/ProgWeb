<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', 'UsuariosController@nomesUsuarios')->name("nome_usuarios");

Route::get('/usuarios/cadastro', 'UsuariosController@cadastro')->name('cadastro');

Route::post('/usuarios/novo', 'UsuariosController@novo')->name('usuario_novo');

Route::get('/tela_login', 'AppController@telaLogin')->name("tela_login");

Route::post('/login', 'AppController@login')->name('login');

Route::post('/cadastrar', 'AppController@cadastrar')->name('cadastrar');

Route::post('/relogar', 'UsuariosController@relogar')->name('relogar');