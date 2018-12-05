<?php 
include 'admin/conexao.php';

	$estado = $_REQUEST['estado'];
	
	$sql = "SELECT * FROM cidade WHERE estado=$estado ORDER BY nome";
	$resultado = mysqli_query($conexao, $sql);
	
	while ($row_sub_cat = mysqli_fetch_assoc($resultado) ) {
		$cidades[] = array(
			'id_cidade'	=> $row_sub_cat['id_cidade'],
			'nome' => utf8_encode($row_sub_cat['nome']),
		);
	}
	
	echo(json_encode($cidades));
