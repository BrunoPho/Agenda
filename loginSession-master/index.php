<?php 

//Verificar se está logado
  session_start(); 

  $existe = isset($_SESSION['esta_logado']);

  if ($existe == false) {

   	  //redirecionar
       header("Location: login.php");
   } 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title> Documento </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="social">

		<a href="verifica_usuario.php?acao=sair" class="sair">sair</a>

		<img src="https://avatars1.githubusercontent.com/u/26903008?v=3&s=460" alt="" width="200" height="200">
		
		<h3>Bem vindo <?php echo $_SESSION['nome'];?></h3>
	
	</div>

</body>	
</html>