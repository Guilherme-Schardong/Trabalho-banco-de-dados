<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/Modelo/ConexaoBD.php");




class Sexo{
	
	
	public function busca(){
		
		$obj_con = new conexaoBD();
		$conectar=$obj_con->con();
		
		$sql= "SELECT 
				idSexo,
				descriSexo
			   FROM
				sexo";
		$resultado = mysqli_query($conectar,$sql);
		$r=0;
		while($dados= mysqli_fetch_assoc($resultado)){
			$linha[$r]['idSexo'] = $dados['idSexo'];
			$linha[$r]['descriSexo'] = $dados['descriSexo'];
			$r++;
		}
		return $linha;
		
	}
}

?>