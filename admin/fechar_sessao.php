<?php
    include("ver_sessao.php");
	
	//inicia a sessão
	session_start();
	
	//carrega todos os dados da sessão ativa
	
	
	//destroi a sessão aberta
	session_destroy();
	
	//direciona para a pagina de login
	header("Location:../login.php");
	?>