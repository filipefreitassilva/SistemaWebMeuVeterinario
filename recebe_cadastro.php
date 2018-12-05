<?php
include 'cabecalho.php';
include 'admin/conexao.php';
?>
<?php 

$nome=$_POST['nome'];
$data_nasc=$_POST['data_nasc'];
$sexo=$_POST['sexo'];
$cpf=$_POST['cpf'];
$ddd=$_POST['ddd'];
$numero=$_POST['numero'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$logradouro=$_POST['logradouro'];
$complemento=$_POST['complemento'];
$numeroEnd=$_POST['numeroEnd'];
$caixaPostal=$_POST['caixaPostal'];
$cep=$_POST['cep'];
$cidade=$_POST['cidade'];


function inserePessoaFisica($conexao, $nome, $data_nasc, $sexo, $cpf, $ddd, $numero, $email, $senha, $logradouro, $complemento, $numeroEnd, $caixaPostal, $cep, $cidade){
		//$conexao = mysqli_connect('localhost', 'root', '', 'nomeBD');
		$sql = "CALL AdicionarPessoaFisica('$nome', '$data_nasc', '$sexo', '$cpf', '$ddd', '$numero', '$email', '$senha', '$logradouro', '$complemento', '$numeroEnd', '$caixaPostal', '$cep', '$cidade');";



		return mysqli_query($conexao,$sql) or die("Erro no comando SQL:".mysqli_error($conexao));
	}
		if(inserePessoaFisica($conexao, $nome, $data_nasc, $sexo, $cpf, $ddd, $numero, $email, $senha, $logradouro, $complemento, $numeroEnd, $caixaPostal, $cep, $cidade)){
	?>
	<center>
		<br><br>
		<h4>Usuário cadastrado com sucesso!</h4> <br><br>
        <a style="color: white;" href="login.php">Faça seu Login!</a>
       
	</center>

	<?php } else{ ?>
	<center>
		<p class="text-danger">Usuário não cadastrado!</p> </center>
	<?php }
	
	?>	


<?php
include 'rodape.php';		
		?>