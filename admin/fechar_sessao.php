<?php
    include("ver_sessao.php");
	
	//inicia a sess�o
	session_start();
	
	//carrega todos os dados da sess�o ativa
	
	
	//destroi a sess�o aberta
	session_destroy();
	
	//direciona para a pagina de login
	header("Location:../login.php");
	?>