<?php 
 //Inicializa uma sess�o 
 session_start(); 
 
 // Verificando se existe uma sess�o aberta 
 //isset verifica se a vari�vel foi iniciada 
 if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)) 
 { 
 //A fun��o unset() ir� destruir a vari�vel especificada 
 unset($_SESSION['id_login']);
 unset($_SESSION['email']); 
 unset($_SESSION['senha']); 
 
 // redireciona para pagina de login 
 header("Location:login.php"); 
 } 
?>