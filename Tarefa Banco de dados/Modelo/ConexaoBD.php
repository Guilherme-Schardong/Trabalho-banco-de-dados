<?php 
	class conexaoBD {
	
	public function con(){
		$conectar = mysqli_connect("localhost","root","")or die(mysqli_error());
		// seleciono o banco
		mysqli_select_db($conectar,"loja_tarefa_bd")or die(mysqli_error());
		
		return $conectar;
	}
	}
?> 