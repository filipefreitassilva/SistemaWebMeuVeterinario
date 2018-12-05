<?php
include 'cabecalho.php';
?>
<head>
  <title>Cadastro - Meu Veterinário</title>
<link rel="stylesheet" type="text/css" href="teste.css">

  <script type="text/javascript" src="js/jquery.mask.js"></script>
  <script type="text/javascript" src="js/jquery.mask.min.js"></script>
  <script type="text/javascript">$("#numero").mask("00000-0009");</script>
</head>
<body>
<div style="margin: 0% 15% 0% 15%">
    <br>
<h4 >Faça seu Cadastro:</h4>
 
<form action="recebe_cadastro.php" method="post">
    <div class="row">
<div class="form-group col-md-5">
    <label for="exampleInputEmail1" >Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" aria-describedby="usuarioHelp" placeholder="Nome Completo" required>   
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


    
    <div class="form-group col-md-1">
      <label for="exampleInputEmail1" >DDD</label>
    <input type="text" name="ddd" class="form-control" id="ddd" aria-describedby="usuarioHelp"  placeholder="DDD" required> 
  </div>
  
  <div class="form-group col-md-3">
    <label for="exampleInputEmail1" >Telefone</label>
    <input type="text" name="numero" class="form-control" id="numero" aria-describedby="usuarioHelp" placeholder="00000-0000"   required> 
  </div>
<div class="form-group col-md-3">
    <label for="exampleInputEmail1" >CPF</label>
    <input type="text" name="cpf" class="form-control cpf-mask" id="cpf" aria-describedby="usuarioHelp" placeholder="Digite o seu CPF" required>   
  </div>
    </div>


   
 <?php
include 'admin/conexao.php';



$sql = "SELECT * FROM estado ORDER BY nome";
$res = mysqli_query($conexao, $sql);
$num = mysqli_num_rows($res);
for ($i = 0; $i < $num; $i++) {
  $dados = mysqli_fetch_array($res);
  $arrayEstados[$dados['id_estado']] = utf8_encode($dados['nome']);
}

    ?>
<div class="row">
  <div class="form-group col-md-3">
    <label for="exampleInputEmail1" >Estado</label>
    <select id="estado" class="form-control" name="estado" required>
      <option value="">Escolha o Estado</option>
         <?php foreach($arrayEstados as $value => $nome){
    echo "<option value='{$value}'>{$nome}</option>";
  }
?>
      
    </select>   
  </div>
  <div class="form-group col-md-3">
    <label for="exampleInputEmail1" >Cidade</label>
    <select class="form-control" id="cidade" name="cidade" required>
      
    </select> 
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("jquery", "1.4.2");
    </script>
    
    <script type="text/javascript">
    $(function(){
      $('#estado').change(function(){
        if( $(this).val() ) {
          $('#cidade').hide();
          
          $.getJSON('carrega_cidade.php?search=',{estado: $(this).val(), ajax: 'true'}, function(j){
            var options = '<option value="">Escolha a Cidade</option>'; 
            for (var i = 0; i < j.length; i++) {
              options += '<option value="' + j[i].id_cidade + '">' + j[i].nome + '</option>';
            } 
            $('#cidade').html(options).show();
            
          });
        } else {
          $('#cidade').html('<option value="">– Escolha a Cidade –</option>');
        }
      });
    });
    </script>  
    </div>
  </div>
    
<div class="row">
  <div class="form-group col-md-6">
    <label for="exampleInputEmail1" >Logradouro</label>
    <input type="text" name="logradouro" class="form-control" id="logradouro" aria-describedby="usuarioHelp" placeholder="Ex.: Rua 10" required>   
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputPassword1" >Complemento</label>
    <input type="text" name="complemento" class="form-control" id="complemento" placeholder="Ex.: Prox. a loja" required>
  </div>
    </div>

    <div class="row">
      <div class="form-group col-md-3">
    <label for="exampleInputPassword1" >Nº</label>
    <input type="text" name="numeroEnd" class="form-control" id="numeroEnd" placeholder="Ex.: 123" required>
  </div>
  <div class="form-group col-md-5">
    <label for="exampleInputEmail1" >CEP</label>
    <input type="text" name="cep" class="form-control" id="cep" aria-describedby="usuarioHelp" placeholder="Ex.: 77600-000" required>   
  </div>
  <div class="form-group col-md-4">
    <label for="exampleInputPassword1" >Caixa Postal</label>
    <input type="text" name="caixaPostal" class="form-control" id="caixaPostal" placeholder="Ex.: 145" required>
  </div>
    </div>
    
<div class="row">
  <div class="form-group col-md-5">
    <label for="exampleInputEmail1" >E-mail</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="usuarioHelp" placeholder="Digite o seu E-mail" required>   
  </div>
  <div class="form-group col-md-5">
    <label for="exampleInputPassword1" >Senha</label>
    <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite a Senha" required>
  </div>
    </div>
  
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
    
</div>
<br>
    </body>
<?php
include 'rodape.php';
?>