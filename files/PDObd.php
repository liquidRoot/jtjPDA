<?php
	
	//convencão seguranca PDO pra conexão com DB
	//PDO('nome do SGBD':host='endereço doservidor';dbname='nome do DB' , "UserName" , "Senha")

	$conexao = new PDO("mysql:host=127.0.0.1;dbname=pi","root","");
	
	if(!$conexao){
		die('Erro com a conexao do banco de dados');
	}
?>