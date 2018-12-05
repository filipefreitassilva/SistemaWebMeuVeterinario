<?php
include 'cabecalho.php';
?>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Contato</title>

</head>


<body>
	<div style="margin: 0% 15% 0% 15%">
    <br>

<form method="post" action="recebe_contato.php">

<div class="row">
<div class="form-group col-md-4">
    <label for="exampleInputEmail1" >Nome</label>
    <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="usuarioHelp" placeholder="Digite o Nome" required>   
  </div>
</div>
<div class="row">
<div class="form-group col-md-4">
    <label for="exampleInputEmail1" >E-mail</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="usuarioHelp" placeholder="Digite o E-mail" required>   
  </div>
</div>
<div class="row">
<div class="form-group col-md-4">
    <label for="exampleInputEmail1" >Assunto</label>
    <input type="text" name="assunto" class="form-control" id="exampleInputEmail1" aria-describedby="usuarioHelp" placeholder="Digite o Título" required>   
  </div>
</div>
<div class="row">
<div class="form-group col-md-6">
    <label for="exampleFormControlTextarea1">Mensagem</label>
    <textarea class="form-control" name="texto" id="exampleFormControlTextarea1" placeholder="Digite sua Mensagem" rows="5" required></textarea>
  </div>
</div>


<input class="btn btn-primary" type="submit" value="Enviar">
<input class="btn btn-secondary" type="reset" value="Resetar Conteúdo">

</form>

</p>
</div>
</body>

<?php
include 'rodape.php';
?>