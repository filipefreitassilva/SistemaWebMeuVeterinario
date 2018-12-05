<?php
include 'cabecalho.php';
include 'admin/ver_sessao.php';

$id_login = $_SESSION['id_login'];
$email = $_SESSION['email'];
?>
<head>
  <title>Cadastro Animal - Meu Veterinário</title>
<link rel="stylesheet" type="text/css" href="teste.css">

  <script type="text/javascript" src="js/jquery.mask.js"></script>
  <script type="text/javascript" src="js/jquery.mask.min.js"></script>
  <script type="text/javascript">$("#numero").mask("00000-0009");</script>
</head>
<body>
<div style="margin: 0% 15% 0% 15%">
    <br>
<h4 >Cadastre seu animal:</h4>
 
<form enctype="multipart/form-data" action="recebe_cadastroanimal.php" method="post">
    <div class="row">
<div class="form-group col-md-5">
    <label for="exampleInputEmail1" >Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" aria-describedby="usuarioHelp" placeholder="Nome do animal" required>   
  </div>
<div class="form-group col-md-4">
    <label for="exampleInputEmail1" >Data de Nascimento</label>
    <input type="date" class="form-control" name="data_nasc" id="data_nasc" aria-describedby="usuarioHelp" placeholder=""  required>   
  </div>
<div class="form-group col-md-3">
    <label for="exampleInputEmail1" >Sexo</label>
    <select class="form-control" name="sexo" required>
      <option id="Masculino">Masculino</option>
      <option id="Feminino">Feminino</option>
      <option id="Outro">Outro</option>
      
    </select>   
  </div>
    </div> 

<div class="row">


    
    <div class="form-group col-md-4">
      <label for="exampleInputEmail1" >Raça</label>
    <input type="text" name="raca" class="form-control" id="raca" aria-describedby="usuarioHelp"  placeholder="Ex.: PitBull" required> 
  </div>
  
  <div class="form-group col-md-6">
    <label for="exampleInputEmail1" >Caracteristicas</label>
    <input type="text" name="caracteristicas" class="form-control" id="caracteristica" aria-describedby="usuarioHelp" placeholder="Ex.: Dócil"   required> 
  </div>

    </div> 

<div class="row">


    
    <div class="form-group col-md-2">
      <label for="exampleInputEmail1" >Peso</label>
    <input type="text" name="peso" class="form-control" id="peso" aria-describedby="usuarioHelp"  placeholder="Ex.: 15Kg" required> 
  </div>
  
  <div class="form-group col-md-2">
    <label for="exampleInputEmail1" >Altura</label>
    <input type="text" name="altura" class="form-control" id="altura" aria-describedby="usuarioHelp" placeholder="Ex.: 40cm"   required> 
  </div>
<!--
  <div class="form-group col-md-5">
    <label for="exampleInputEmail1" >Foto</label>
    <input type="file" name="foto" class="form-control" id="foto" aria-describedby="usuarioHelp"  required> 
  </div> -->

    </div>
  
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
    
</div>
<br>
    </body>
<?php
include 'rodape.php';
?>