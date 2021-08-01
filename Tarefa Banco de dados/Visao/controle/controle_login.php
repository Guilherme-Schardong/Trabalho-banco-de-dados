<?php
////Modulos- Start
include("../../Controle/controle_login.php");

	
////Modulos- End

//var_dump($_POST);
/// Recebe valores - Start
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	
	$acao = $_POST["acao"];
/// Recebe valores - End


$obj_login = new Login();


if($acao == "logar"){
	
	$result = $obj_login->verificar($email,$senha);
	
	
	if($result == 1){
		
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['result'] = $result;
	}else{
		
		unset($_SESSION['email']);
		unset($_SESSION['senha']);
	}
	echo $result;
}