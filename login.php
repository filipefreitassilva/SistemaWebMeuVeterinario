<?php
include 'cabecalho.php';
?>
<head>
  <title>Login - Meu Veterinário</title>
<link rel="stylesheet" type="text/css" href="teste.css">
</head>
<body>
<div style="margin: 0% 15% 0% 15%">
    <br>
<h4 >Faça seu Login:</h4>
 
<form action="recebe_login.php" method="post">
  <div class="form-group col-md-5">
    <label for="exampleInputEmail1" >E-mail</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="usuarioHelp" placeholder="Digite o E-mail" required>
    
  </div>
  <div class="form-group col-md-5">
    <label for="exampleInputPassword1" >Senha</label>
    <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite a Senha" required>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1" >Salvar meus dados</label>
  </div>
   <a>Ainda não tem acesso?</a> <a href="cad_user.php">Cadastre - se !</a><br>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
    
</div>
<br>
    </body>
<?php
include 'rodape.php';
?>