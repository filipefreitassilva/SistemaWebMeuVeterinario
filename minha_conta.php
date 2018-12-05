<?php
include 'cabecalho.php';
include 'admin/ver_sessao.php';

$id_login = $_SESSION['id_login'];
$email = $_SESSION['email'];

?>
<head>
  <title>Minha Conta  - Meu Veterinário</title>
<link rel="stylesheet" type="text/css" href="teste.css">
</head>
<body>
<div style="margin: 0% 15% 0% 15%">
	<br>
<h4><?= $email;?>, Seja Bem-Vindo! </h4> <br><br>

<a role="button" href="meus_dados.php" class="btn btn-secondary">Meus Dados</a><br><br>

<!-- <a role="button" href="alt_dados.php" class="btn btn-secondary">Alterar Dados</a><br><br> -->

<a role="button" href="alt_senha.php" class="btn btn-secondary">Alterar Senha</a><br><br>

<a role="button" href="admin/fechar_sessao.php" class="btn btn-danger">Sair</a><br><br>

</div>
    </body>


<?php
include 'rodape.php';
?>