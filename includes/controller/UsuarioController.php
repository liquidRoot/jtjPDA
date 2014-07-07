<?php

//aqui nois importa todas as classes que podemos usar nas solicitacoes
require_once("../model/bean/Usuario.class.php");
require_once("../model/dao/UsuarioDAO.class.php");
require_once("../view/UsuarioView.class.php");

//armazenar na var $acao oque o sistema esta requisitando (cadastrar, atualizar, validar,....)
$acao = $_REQUEST['acao'];

//baseado na requisicao chama a classe DAO do metodo responsavel, e manda a resposta pro usuario
switch ($acao) {
	case 'validar':
		
		//instanciar um objeto da class Bean, para setar os valores da FORM
		$usuario = new Usuario();

		/*Setamos para o BEAN os valores para serem validados na camada DAO, que ira verificar os dados no SGBD,
		e devolver o resultado para o CONTROLLER*/
		$usuario->setLogin($_REQUEST['login']);
		$usuario->setSenha($_REQUEST['senha']);

		/*Intanciar um objeto da class DAO e um da VIEW, e passaremos para a VIEW o que for pela DAO*/
		$usuarioDAO = new UsuarioDAO();
		$usuarioView= new UsuarioView();

		/*Passa agora o metodo de autenticacao da DAO um objeto da class Usuario.
		Guarda na variavel $resultado o que o metodo retorna*/
		$resultado = $usuarioDAO->validaUsuario($usuario);

		//Agora chama um metodo da VIEW passando o mesmo da class DAO
		$usuarioView->respostaValidacao($resultado);

		

		break;

	case 'cadastrar':
		# code...
		break;

	case 'atualizar':
		# code...
		break;

	case 'excluir':
		# code...
		break;

	default:
		return null; //o padrao deste switch é retornar nada
}

?>