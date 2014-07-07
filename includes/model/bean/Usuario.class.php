<?php

class Usuario{

	var $id;
	var $login;
	var $nome;
	var $senha;
	var $nivel;

	//IT'S A TIME TO GETTERS AND SETTERS porra

	//ID
	function getId(){
		return $this -> id;
	}
	function setId($valor){
		$this -> id = $valor;
	}

	//login
	function getLogin(){
		return $this -> login;
	}
	function setLogin($valor){
		$this -> login = $valor;
	}

	//nome
	function getNome(){
		return $this -> nome;
	}
	function setNome($valor){
		$this -> nome = $valor;
	}

	//senha
	function getSenha(){
		return $this -> senha;
	}
	function setSenha($valor){
		$this -> senha = $valor;
	}

	//lvl do usuario
	function getSenha(){
		return $this -> nivel;
	}
	function setSenha($valor){
		$this -> nivel = $valor;
	}

	// METODOS DO CARAI

}

?>