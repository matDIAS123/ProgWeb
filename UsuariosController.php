<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;

class UsuariosController extends Controller
{
    function nomesUsuarios(){
    	$usuarios = Usuario::all();

    return view("lista", ["usuarios" => $usuarios]);
}

function relogar(Request $req){
		$relogar = $req->input('relogar');

		if($relogar){
			return redirect()->route("tela_login");
		}
	}

    function cadastro(){
    	return view("cadastro");
    }

    function novo(Request $req){

    	$nome = $req->input('nome');
    	$login = $req->input('login');
    	$senha = $req->input('senha');
    	$cidade = $req->input('cidade');
    	$cep = $req->input('cep');
    	$bairro = $req->input('bairro');
    	$rua = $req->input('rua');
    	$numero = $req->input('numero');
    	$uf = $req->input('uf');

    

    	$usuario = new Usuario();
    	$usuario->nome = $nome;
    	$usuario->login = $login;
    	$usuario->senha = $senha;
    	$usuario->cidade = $cidade;
    	$usuario->cep = $cep;
    	$usuario->bairro = $bairro;
    	$usuario->rua = $rua;
    	$usuario->numero = $numero;
    	$usuario->uf = $uf;

    	if ($usuario->save()){
    		
    		$mensagem = "Usuario $nome inserido com sucesso.";

    		return redirect()->route("tela_login");

    	}else{
    		
    		$mensagem = "Usuario nao foi inserido.";
    	}

    	return view("resultado", ["msg" => $mensagem]);
    }
}



