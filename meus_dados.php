<?php
include 'cabecalho.php';
include 'admin/ver_sessao.php';

$id_login = $_SESSION['id_login'];
$email = $_SESSION['email'];




$sql= "select p.nome as nomePessoa, DATE_FORMAT(p.data_nasc, '%d/%m/%Y') as data_nasc, l.email, 
t.ddd, t.numero, e.logradouro, e.complemento,
e.numero as numeroEnd, e.cep, e.caixapostal, pf.sexo, pf.cpf, c.nome as nomeCidade, est.nome as nomeEstado
  from estado as est, cidade as c, login as l, telefone as t, endereco as e,
 pessoa as p, pessoa_fisica as pf where p.login_id_login='$id_login' and l.email='$email'
 and p.telefone_id_telefone=t.id_telefone and p.endereco_id_endereco=e.id_endereco 
 and pf.pessoa_id_pessoa=p.id_pessoa and c.id_cidade=e.cidade_id_cidade and est.id_estado=c.estado;";
$result= mysqli_query($conexao,$sql) or die("Erro no SQL:".mysqli_error($result));

$resultado= mysqli_query($conexao,$sql) or die("Erro no SQL:".mysqli_error($resultado));



?>
<head>
  <title>Meus Dados  - Meu Veterinário</title>
<link rel="stylesheet" type="text/css" href="teste.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<div style="margin: 0% 15% 0% 15%">
	<br>
<h3>Meus Dados</h3>
<br>


	<?php

	while($array_not=mysqli_fetch_array($result)){?>

<h5>°Dados Pessoais</h5>
   <b>Nome: </b><?php echo $array_not['nomePessoa'];?> <br>
   <b>E-mail: </b><?php echo $array_not['email'];?> <br>
   <b>Data de Nascimento: </b><?php echo $array_not['data_nasc'];?> <br>
   <b>Sexo: </b><?php echo $array_not['sexo'];?> <br>
   <b>CPF: </b><?php echo $array_not['cpf'];?> <br>
   <b>Telefone: </b><?php echo $array_not['ddd']; echo "-"; echo $array_not['numero'];?> <br><br>
   <h5>°Endereço</h5>
   <b>Logradouro: </b><?php echo $array_not['logradouro'];?> <br>
   <b>Complemento: </b><?php echo $array_not['complemento'];?> <br>
   <b>Número: </b><?php echo $array_not['numeroEnd'];?> <br>
   <b>CEP: </b><?php echo $array_not['cep'];?> <br>
   <b>Caixa Postal: </b><?php echo $array_not['caixapostal'];?> <br>
   <b>Cidade: </b><?php echo $array_not['nomeCidade'];?> <br>
   <b>Estado: </b><?php echo $array_not['nomeEstado'];?> <br>
   
  

<?php } ?>


</div>
    </body>


<?php
include 'rodape.php';
?>