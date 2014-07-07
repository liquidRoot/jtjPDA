<?php
include "PDObd.php";


//preparando conexao
$logando = $conexao->prepare("SELECT nomeUser, lvlUser FROM usuarios WHERE login=:postLogin senha=:postSenha LIMIT 1");


//capturando $_post e criptografando a senha(sha512 gera 128 caracteres)
$postLogin = $_POST['login'];
$postSenha = $_POST['senha'];
$postSenha = hash('sha512', $postSenha);

//definindo parametros
$logando = bindParam(':postLogin', $postLogin);
$logando = bindParam(':postSenha', $postSenha);

//executando POD query
$logando->execute();

//verificando quantas linhas resultou a query
$contador = $logando->rowCount();

//guardando resultado
$captura  = $logando->fetch();


if($contador == 1){

	//guardando o essencial "array '0' e '1' da query"
	$_SESSION[nomeUser] = $captura[0];
	$_SESSION[lvlUser]	= $captura[1];

	 switch ($_SESSION[lvlUser]) {
	 	case 'usuario':
	 		header("usuarioRestrito.php");
	 		break;

	 	case 'suporte':
	 		header("suporteRestrito.php");
	 		break;

	 	case 'admin':
	 		header("adminRestrito.php");
	 		break;

	 	default:
	 		//inserir o erro aqui
	 		header("../index.php");
	 		break;
	 }
}
else{
	
	include '../index.php';
		echo "";
}





?>