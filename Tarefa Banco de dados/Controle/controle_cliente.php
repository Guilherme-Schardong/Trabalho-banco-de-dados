<?php
/// load Modeo - Start
require_once($_SERVER['DOCUMENT_ROOT']."/Modelo/ConexaoBD.php");


class Cliente {
	
	
	public function busca(){
		
		$obj_con = new conexaoBD();
		$conectar=$obj_con->con();
		
		$sql= "SELECT
				A.idCliente as idCliente,
				A.nomeCliente as nomeCliente,
				A.idadeCliente  as idadeCliente,
				B.descriSexo as descriSexo,
				C.nomeCidade as nomeCidade,
				D.nomeEstado as nomeEstado,
				E.nomePais as nomePais
				
				FROM
				cliente A,
				sexo B,
				cidade C,
				estado D,
				pais E
				
				WHERE
				A.idSexo = B.idSexo AND
				A.idCidade = C.idCidade AND
				C.idEstado = D.idEstado AND
				D.idPais = E.idPais ";
		
		

		$resultado = mysqli_query($conectar,$sql);
		$r=0;
		while($dados= mysqli_fetch_assoc($resultado)){
		
		$linha[$r]['idCliente']     = $dados['idCliente'];
		$linha[$r]['nomeCliente']   = $dados['nomeCliente'];
		$linha[$r]['idadeCliente']  = $dados['idadeCliente'];	
		$linha[$r]['descriSexo']    = $dados['descriSexo'];
		$linha[$r]['nomeCidade']    = $dados['nomeCidade'];
		$linha[$r]['nomeEstado']    = $dados['nomeEstado'];
		$linha[$r]['nomePais']      = $dados['nomePais'];
		$r++;
	}
		
		return $linha;
		//return $sql;
	}
	
	public function insere($nomeCliente,$idadeCliente,$idSexo,$idCidade){
		
		$obj_con = new conexaoBD();
		$conectar=$obj_con->con();
		
		
		
		$sql = "INSERT INTO cliente (nomeCliente, idadeCliente, idSexo, idCidade)VALUES ('".$nomeCliente."',".$idadeCliente.",".$idSexo.",".$idCidade.")";
		
		mysqli_query($conectar,$sql)or die (mysqli_error($conectar));
		
	}
	
	public function atualizar($nomeCliente,$idadeCliente,$idCliente,$idSexo,$idCidade){
		
		$obj_con = new conexaoBD();
		$conectar=$obj_con->con();
		
		$sqlUpdate="UPDATE 
					cliente 
						SET 
				nomeCliente = '".$nomeCliente."',
				idadeCliente = ".$idadeCliente.",
				idSexo = ".$idSexo.",
				idCidade = ".$idCidade."
				WHERE
				idCliente 
				= ".$idCliente;
		
		mysqli_query($conectar, $sqlUpdate);
		
		
	}
	
	public function deletar($id){
		
		$obj_con = new conexaoBD();
		$conectar=$obj_con->con();
		
		$sqlDeletar= "DELETE FROM cliente WHERE idCliente =".$id.";";
		
		mysqli_query($conectar, $sqlDeletar)or die (mysqli_error($conectar));
		
		
	}
	public function buscaEdit($idCliente = false){
		
		$obj_con = new conexaoBD();
		$conectar=$obj_con->con();
		
		$sql= "SELECT
				*
			   FROM
				cliente ";
				
				if($idCliente>0){
			
			$sql .= "WHERE idCliente = ".$idCliente;
		}
		
				
		
		

		$resultado = mysqli_query($conectar,$sql);
		$r=0;
		while($dados= mysqli_fetch_assoc($resultado)){
		
		$linha[$r]['idCliente']     = $dados['idCliente'];
		$linha[$r]['nomeCliente']   = $dados['nomeCliente'];
		$linha[$r]['idadeCliente']  = $dados['idadeCliente'];
		$linha[$r]['idSexo']        = $dados['idSexo'];
		$linha[$r]['idCidade']      = $dados['idCidade'];
		$r++;
	}
		
		return $linha;
		
	}
}


?>