<?php
include 'cabecalho.php';
include 'admin/ver_sessao.php';
include 'admin/conexao.php';

$id_login = $_SESSION['id_login'];
$email = $_SESSION['email'];

?>

<?php
if(!empty($_REQUEST["acao"])) 
	$acao = $_REQUEST["acao"];
else
    $acao = "";
	
if(!empty($_REQUEST['id_animal'])) 
	$id_animal = $_REQUEST['id_animal'];
?>

<head>
  <title>Meus Animais  - Meu Veterinário</title>
<link rel="stylesheet" type="text/css" href="teste.css">
</head>
<body>
<div style="margin: 0% 15% 0% 15%">
	<br>
<h4>Meus Animais</h4> <br><br>

<a role="button" href="cad_animal.php" class="btn btn-secondary">Adicionar Animal</a><br><br>

<?php
 if($acao == 'deletar') { 
   
  $id_animal=$_POST['id_animal'];
 
 
  $sql= "DELETE animal.*, raca.* from animal , raca  WHERE animal.id_animal='$id_animal' and animal.raca_id_raca=raca.id_raca;";

$result= mysqli_query($conexao,$sql) or die("Erro no SQL:".mysqli_error($conexao));

 echo "<br><br><center><h4>Animal Excluído com Sucesso!</h4></center>";
    
 } ?>

<form action="meus_animais.php?acao=deletar" method="post">
<table style="width:60%" border="0">
  <tr>
    <th><h4 style="color: white;">Nome</h4></th>
    <th><h4 style="color: white;">Raça</h4></th> 
    <th><h4 style="color: red;">Excluir</h4></th>
  </tr>

<?php

$sqlpf = mysqli_query($conexao, "select pf.id_pessoa_fisica from pessoa_fisica as pf, login as l, pessoa as p where p.login_id_login='$id_login' and pf.pessoa_id_pessoa=p.id_pessoa limit 1");
$row = mysqli_fetch_row ($sqlpf); 
$base = $row[0]; 
// Seleciona todos os usuários
$sql = mysqli_query($conexao,"select a.id_animal, a.nome as nomeAnimal, r.nome as racaAnimal from animal as a, raca as r where a.pessoa_fisica_id_pessoa_fisica='$base' and a.raca_id_raca=r.id_raca");
 
// Exibe as informações de cada usuário
while ($usuario=mysqli_fetch_array($sql)) {
	echo "<tr>";
	echo "<th>" . $usuario['nomeAnimal'] . "</th>";
	echo "<th>" . $usuario['racaAnimal'] . "</th>";
	echo "<th> <input type=\"submit\" name=\"deletar\" value=\"Excluir Animal\"></th>";
	echo "<input type='hidden' name=\"id_animal\" value=\"". $usuario['id_animal'] ."\">";
	
	echo "</tr>";
}
?>

</table>
</form>

</div>
    </body>


<?php
include 'rodape.php';
?>