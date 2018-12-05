<?php 
 //Inicializa uma sessуo 
 session_start(); 
 
 // Verificando se existe uma sessуo aberta 
 //isset verifica se a variсvel foi iniciada 
 if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)) 
 { 
 //A funчуo unset() irс destruir a variсvel especificada 
 unset($_SESSION['id_login']);
 unset($_SESSION['email']); 
 unset($_SESSION['senha']); 
 
 // redireciona para pagina de login 
 header("Location:login.php"); 
 } 
?>