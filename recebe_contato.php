<?php
include 'cabecalho.php';

$nome=$_POST['nome'];

$email=$_POST['email'];

$assunto=$_POST['assunto'];

$texto=$_POST['texto'];


$Destinatario="filipe.ifto@gmail.com";


$Assunto="$assunto";


$mensagem1="

Uma mensagem vinda do site !

Algum visitante mandou essa mensagem pelo site.

Nome: $nome

Email: $email

Mensagem: $texto";


mail("$Destinatario","$Assunto", "$mensagem1","From:$email");


?>

<center>
		<br><br>
		<p class="text-success">E-mail enviado com sucesso!</p> <br><br>
        
	</center>
<?php
include 'rodape.php';
?>
