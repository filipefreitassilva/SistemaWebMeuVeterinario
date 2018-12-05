<?php

if(!empty ($_SESSION['id_pessoa'])){
	
$id_pessoa = (int) $_SESSION['id_pessoa'];

}
include("admin/conexao.php");
include 'admin/ver_sessao.php';
include 'cabecalho.php';

if(!empty($_REQUEST["acao"])) 
	$acao = $_REQUEST["acao"];
else
    $acao = "";
	
if(!empty($_REQUEST['id_pessoa'])) 
	$id_pessoa = $_REQUEST['id_pessoa'];
?>


<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
	<title>Alterar Dados - Meu Veterinário</title>
	<link rel="stylesheet" type="text/css"  href="teste.css" />

</head>
<body>
<div style="margin: 0% 15% 0% 15%">
<h4 align="center">Alterar Dados Pessoais</h4>
<?php
 if($acao == 'alterar') { 
   
  $nome=$_POST['nome'];
$data_nasc=$_POST['data_nasc'];
$sexo=$_POST['sexo'];
$telefone=$_POST['telefone'];
$usuario=$_POST['usuario'];
$email=$_POST['email'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
  
include("admin/conexao.php");   
 
  $sql= "UPDATE tb_pessoa SET nome='$nome', data_nasc='$data_nasc', sexo='$sexo', email='$email', usuario='$usuario', telefone='$telefone', cidade='$cidade', estado='$estado' WHERE id_pessoa='$id_pessoa'";
$result= mysqli_query($conexao,$sql) or die("Erro no SQL:".mysqli_error($conexao));

 echo "<br><br><center><h4>Usuário alterado com Sucesso!</h4></center>";
    
 } ?>

<?php
$id_pessoa = (int) $_SESSION['id_pessoa'];
 if($acao == '') {    
  $sql_usu = mysqli_query($conexao, "SELECT * FROM tb_pessoa WHERE id_pessoa='$id_pessoa'")
                 or die("ERRO no comando SQL:".mysqli_error($sql_usu));
  $array_usu = mysqli_fetch_array($sql_usu);
 
 ?>
<div>
  <form action="alt_dados.php?acao=alterar" method="post" name="frm_cad" id="alt_dados">
        


		<div class="row">
<div class="form-group col-md-5">
    <label for="exampleInputEmail1" >Nome</label>
    <input type="text" value="<?php echo $array_usu['nome'];?>" class="form-control" name="nome" id="exampleInputEmail1" aria-describedby="usuarioHelp" placeholder="Nome Completo" required>   
  </div>
<div class="form-group col-md-4">
    <label for="exampleInputEmail1" >Data de Nascimento</label>
    <input type="date" value="<?php echo $array_usu['data_nasc'];?>" class="form-control" name="data_nasc" id="exampleInputEmail1" aria-describedby="usuarioHelp" placeholder="" required>   
  </div>
<div class="form-group col-md-3">
    <label for="exampleInputEmail1" >Sexo</label>
    <select class="form-control" value="<?php echo $array_usu['sexo'];?>" name="sexo" required>
      <option id="Masculino">Masculino</option>
      <option id="Feminino">Feminino</option>
      <option id="Outro">Outro</option>
      
    </select>   
  </div>
    </div> 

    
<div class="row">
<div class="form-group col-md-4">
    <label for="exampleInputEmail1" >Telefone</label>
    <input type="text" name="telefone" value="<?php echo $array_usu['telefone'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="usuarioHelp" placeholder="Digite o Telefone" required>   
  </div>
<div class="form-group col-md-8">
    <label for="exampleInputEmail1" >E-mail</label>
    <input type="email" name="email" value="<?php echo $array_usu['email'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="usuarioHelp" placeholder="Digite o Endereço" required>   
  </div>
    </div>

    <div class="row">
<div class="form-group col-md-4">
    <label for="exampleInputEmail1" >Cidade</label>
    <input type="text" name="cidade" value="<?php echo $array_usu['cidade'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="usuarioHelp" placeholder="Cidade" required>   
  </div>
<div class="form-group col-md-4">
    <label for="exampleInputEmail1" >Estado</label>
    <input type="text" name="estado" value="<?php echo $array_usu['estado'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="usuarioHelp" placeholder="Estado" required>   
  </div>
    </div>
    
<div class="row">
  <div class="form-group col-md-5">
    <label for="exampleInputEmail1" >Usuário</label>
    <input type="text" name="usuario" value="<?php echo $array_usu['usuario'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="usuarioHelp" placeholder="Digite o Usuário" required>   
  </div>
</div>
	    
		<input class="btn btn-primary" type="submit" value="Enviar">
<input class="btn btn-secondary" type="reset" value="Resetar Conteúdo">
		<input type="hidden" name="id_pessoa" value="<?php echo $array_usu['id_pessoa'];?>">  </p>
  </form> 

</div>
<?php } /*fecha acao=alterar */?>
</body>

<?php
include 'rodape.php';
?>
