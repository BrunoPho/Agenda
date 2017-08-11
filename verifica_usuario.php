<?php

        


 function login(){

 	    //le os usuarios do arquivo e segunda linha converte em um array
    $lista_usuarios = file_get_contents("usuarios.json");
    $lista_convertida = json_decode($lista_usuarios, true);

    $login= $_POST['login'];
    $senha= $_POST['senha'];
	   
     foreach ($lista_convertida as $usuario) {

        if ($login == $usuario['login'] && $senha == $usuario['senha']) {
            
           session_start();

           $_SESSION['nome']        = $usuario['nome'];
           $_SESSION['esta_logado'] = true;
             
             //redirecionar
             header("Location: index.php");

        }
     }
}
    function logout(){
	     //Sair 
	     session_destroy();
	
	     //Redirecionar
	     header("Location: login.php");
    }

    //Rotas
    if ($_GET['acao'] == 'login'){
    	login();
    }
    if ($_GET['acao'] == 'sair'){
    	logout();
    }
