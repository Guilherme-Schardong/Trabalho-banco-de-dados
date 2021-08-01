<?php 
	require_once($_SERVER['DOCUMENT_ROOT']."/Modelo/ConexaoBD.php");



class Cidade{
	
	public function busca(){
		
		$obj_con = new conexaoBD();
		$conectar=$obj_con->con();
		
		$sql= "SELECT 
				idCidade,
				nomeCidade
			   FROM
				cidade";
		
		$resultado = mysqli_query($conectar,$sql);
		$r=0;
		while($dados= mysqli_fetch_assoc($resultado)){
			$linha[$r]['idCidade'] = $dados['idCidade'];
			$linha[$r]['nomeCidade'] = $dados['nomeCidade'];
			$r++;
		}
		return $linha;
	}
	public function buscaEst($id){
		
		$obj_con = new conexaoBD();
		$conectar=$obj_con->con();
		
		$sql= "SELECT 
				A.idCidade as idCidade,
				A.nomeCidade as nomeCidade,
				B.nomeEstado as nomeEstado,
				C.nomePais as nomePais
				
			   FROM
				
				cidade A,
				estado B,
				pais C
				
				WHERE
				
				A.idEstado = B.idEstado AND
				B.idPais = C.idPais AND
				A.idCidade = ".$id."
				
				  ";
		
		$resultado = mysqli_query($conectar,$sql);
		
		while($dados= mysqli_fetch_assoc($resultado)){
			$linha['idCidade'] = $dados['idCidade'];
			$linha['nomeCidade'] = $dados['nomeCidade'];
			$linha['nomeEstado'] = $dados['nomeEstado'];
			$linha['nomePais'] = $dados['nomePais'];
			
		}
		$json= json_encode($linha);
		return $json;
		
	}
}



?>