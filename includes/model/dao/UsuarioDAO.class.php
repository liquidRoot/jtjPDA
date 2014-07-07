<?php

//instanciar a class usuario de bean, ja que vai usa-la aqui
require_once("../bean/Usuario.class.php");

class UsuarioDAO{

	function validaUsuario($usuario){

	/*
		CRIAR O METODO DE VALIDACAO COM O BANCO DE DADOS

		Depois retornar uma resposta com base no resultado da autenticacao do SGBD
	*/

	if($usuario->getLogin() == "resultado_do_metodo_validaUsuario" && $usuario->getSenha() == "resultada_validaUsuario()"){
		return true;
	}
	else{
		return false;
	}

	}
}

?>