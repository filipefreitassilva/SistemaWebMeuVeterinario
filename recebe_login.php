<?php 
	include 'admin/conexao.php';
	session_start();	

	$email = $_POST['email'];
	$senha=$_POST['senha'];

	$query = "SELECT * FROM login WHERE email='$email' AND senha = '$senha'";

	$result = mysqli_query($conexao, $query);

	$sql = mysqli_fetch_array($result);	

	if(mysqli_num_rows($result) > 0){

		$_SESSION['id_login'] = $sql['id_login'];
		$_SESSION['email'] = $email;
		$_SESSION['senha'] = $senha;
		header("Location:minha_conta.php");
	}
	else{
		echo  "<script>alert('Usuário ou Senha incorreta!');</script>";
		unset ($_SESSION['id_login']);
		unset ($_SESSION['email']);
		unset ($_SESSION['senha']);
		header("Location:login.php");

	}
	?>