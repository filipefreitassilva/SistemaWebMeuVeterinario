<?php

if(!empty ($_SESSION['id_login'])){
	
$id_login =$_SESSION['id_login'];

}
include("admin/conexao.php");
include 'admin/ver_sessao.php';
include 'cabecalho.php';

if(!empty($_REQUEST["acao"])) 
	$acao = $_REQUEST["acao"];
else
    $acao = "";
	
if(!empty($_REQUEST['id_login'])) 
	$id_login = $_REQUEST['id_login'];
?>


<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
	<title>Alterar Senha - Meu Veterinário</title>
	<link rel="stylesheet" type="text/css"  href="teste.css" />

</head>
<body>
<div style="margin: 0% 15% 0% 15%">
<h4>Alterar Senha</h4>
<?php
 if($acao == 'alterar') { 
   
  $senha=$_POST['senha'];

  
include("admin/conexao.php");   
 
  $sql= "UPDATE login SET senha='$senha' WHERE id_login='$id_login'";
$result= mysqli_query($conexao,$sql) or die("Erro no SQL:".mysqli_error($result));

 echo "<br><br><center><h4>Senha alterada com Sucesso!</h4></center>";
    
 } ?>

<?php
$id_login = $_SESSION['id_login'];
 if($acao == '') {    
  $sql_usu = mysqli_query($conexao, "SELECT senha FROM login WHERE id_login='$id_login'")
                 or die("ERRO no comando SQL:".mysqli_error($sql_usu));
  $array_usu = mysqli_fetch_array($sql_usu);
 
 ?>
<div>
  <form action="alt_senha.php?acao=alterar" method="post" name="frm_cad" id="alt_dados">
        
<div class="form-group col-md-5">
    <label for="exampleInputPassword1" >Senha</label>
    <input type="password" name="senha" value="<?php echo $array_usu['senha'];?>" class="form-control" id="exampleInputPassword1" placeholder="Digite a Senha" required>
  </div>
	    
		<input class="btn btn-primary" type="submit" value="Enviar">
<input class="btn btn-secondary" type="reset" value="Resetar Conteúdo">
		<input type="hidden" name="id_login" value="<?php echo $id_login;?>">  </p>
  </form> 

</div>
<?php } /*fecha acao=alterar */?>
</body>

<?php
include 'rodape.php';
?>
