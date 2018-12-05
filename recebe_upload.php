<?php
include 'cabecalho.php';
?>
<?php

   if(isset($_FILES['fileUpload']))
   {
      date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
      $new= "Clinica Top";
      $ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); //Pegando extensão do arquivo
      $new_name = $new . $ext; //Definindo um novo nome para o arquivo
      $dir = 'uploads/'; //Diretório para uploads

      move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
   }


?>
<html>

<body>
<center>
Enviado com sucesso !	
</center>


</body>

</html>

<?php
include 'rodape.php';
?>