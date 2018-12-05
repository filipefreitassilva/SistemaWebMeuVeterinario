<?php
include 'cabecalho.php';
include 'admin/conexao.php';
?>
<?php 
include 'admin/ver_sessao.php';
$id_login = $_SESSION['id_login'];
$email = $_SESSION['email'];

$nome=$_POST['nome'];
$data_nasc=$_POST['data_nasc'];
$sexo=$_POST['sexo'];
$raca=$_POST['raca'];
$caracteristicas=$_POST['caracteristicas'];
$peso=$_POST['peso'];
$altura=$_POST['altura'];


$foto="";
/*
			// Pega extensão da imagem
			$ext = pathinfo($foto, PATHINFO_EXTENSION);
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext;
 
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "/imagens/" . $nome_imagem;
 
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem); */
		
			// Insere os dados no banco

			function insereAnimal($conexao, $nome, $data_nasc, $sexo, $raca, $caracteristicas, $peso, $altura, $foto, $id_login){
		//$conexao = mysqli_connect('localhost', 'root', '', 'nomeBD');
		$sql = "CALL AdicionarAnimal('$nome', '$data_nasc','$sexo', '$raca', '$caracteristicas','$peso','$altura','$foto', '$id_login')";



		return mysqli_query($conexao,$sql) or die("Erro no comando SQL:".mysqli_error($conexao));
	}




		if(insereAnimal($conexao, $nome, $data_nasc, $sexo, $raca, $caracteristicas, $peso, $altura, $foto, $id_login)){
	?>
	<center>
		<br><br>
		<h4>Animal cadastrado com sucesso!</h4> <br><br>
        <a style="color: white;" href="meus_animais.php">Veja seus Animais!</a>
       
	</center>

	<?php } else{ ?>
	<center>
		<p class="text-danger">Animal não cadastrado!</p> </center>
	<?php }
	
	?>	


<?php
include 'rodape.php';		
		?>