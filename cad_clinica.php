<?php
include 'cabecalho.php';
?>
<head>
  <title>Cadastro Clinica - Meu Veterinário</title>
<link rel="stylesheet" type="text/css" href="teste.css">
</head>
<body>
<div style="margin: 0% 15% 0% 15%">
    <br>
<h4 >Cadastro Clínica:</h4>
 
<form action="recebe_clinica.php" method="post">
    <div class="row">
<div class="form-group col-md-4">
    <label for="exampleInputEmail1" >Nome</label>
    <input type="text" class="form-control" name="nome" id="exampleInputEmail1" aria-describedby="usuarioHelp" placeholder="Nome da Clínica" required>   
  </div>
<div class="form-group col-md-4">
    <label for="exampleInputEmail1" >Foto</label>
    <input type="file" class="form-control" name="foto" id="exampleInputEmail1" aria-describedby="usuarioHelp" placeholder="" required>   
  </div>
  

<div class="form-group col-md-4">
    <label for="exampleInputEmail1" >Médico</label>
    <input type="text" name="medico" class="form-control" id="exampleInputEmail1" aria-describedby="usuarioHelp" placeholder="Nome do Médico" required>   
  </div>
</div>

<div class="row">
<div class="form-group col-md-8">
    <label for="exampleInputEmail1" >Horário</label>
    <input type="text" name="horario" class="form-control" id="exampleInputEmail1" aria-describedby="usuarioHelp" placeholder="Horário de Funcionamento" required>   
  </div>  
<div class="form-group col-md-4">
    <label for="exampleInputEmail1" >Telefone</label>
    <input type="text" name="telefone" class="form-control" id="exampleInputEmail1" aria-describedby="usuarioHelp" placeholder="Telefone da Clínica" required>   
  </div>
</div>
<div class="row">
<div class="form-group col-md-6">
    <label for="exampleInputEmail1" >Endereço</label>
    <input type="text" name="endereco" class="form-control" id="exampleInputEmail1" aria-describedby="usuarioHelp" placeholder="Endereço da Clínica" required>   
  </div>
    </div>
    <?php
include 'admin/conexao.php';
    ?>
<div class="row">
  <div class="form-group col-md-3">
    <label for="exampleInputEmail1" >Estado</label>
    <select id="estado" class="form-control" name="estado" required>
      <option value="">Escolha o Estado</option>
         <?php
          $sql = "SELECT * FROM estado ORDER BY nome";
          $resultado = mysqli_query($conexao, $sql);
          while($row_cat_post = mysqli_fetch_assoc($resultado) ) {
            echo '<option value="'.$row_cat_post['id_estado'].'">'.$row_cat_post['nome'].'</option>';
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
  
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
  
</div>
<br>
    </body>
<?php
include 'rodape.php';
?>