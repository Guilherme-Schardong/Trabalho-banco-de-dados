<?php
/// load Modeo - Start
require_once($_SERVER['DOCUMENT_ROOT']."/Modelo/ConexaoBD.php");


class Login{
	
	public function verificar($email,$senha){
		
		
		$obj_con = new conexaoBD();
		$conectar=$obj_con->con();
		
		$sql = "SELECT * FROM usuario WHERE emailUsuario = '".$email."' AND senha = '".$senha."'";
		
		$resultado = mysqli_query($conectar,$sql) or die (mysqli_error($conectar));
		$linha = mysqli_num_rows($resultado);
		
		return $linha;
	}
}
	
	




?>