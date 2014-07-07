$(document).ready(function(){

	$("#data").datepicker();

	$("<option selected> ------ </option>").prependTo("select");

	$("#telefone").mask("(99) 99999-9999");

	$("#dialogo").dialog();



	$('#submit').click(function(){
		
		$('#mensagem').dialog(function(){
			autoOpen: false;
			resize: false;

		});

		//funcao pra validar o login
		validaLogin($('#login'),$('#senha'));

		function validaLogin(login,senha){
		
			if(login.val() == ""){
				alert("Informe o Login do Usuario");//mensagem de erro
				login.focus();//aquele foco lindu
				return;//retorna nulo
			}
			
			else if(senha.val() == ""){
				alert("Informe a Senha");
				senha.focus();
				return;
			}
			
			//pelo menos o usuario digitou alguma coisa
			else{
				$('#mensagem').dialog("open");
				
			
			}
		}
	});


});