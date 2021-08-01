<?php
////Modulos- Start
include("../../Controle/controle_cliente.php");
//include("../controle/controle_cidade.php");
////Modulos- End

//var_dump($_POST);
/// Recebe valores - Start
	$nomeCliente  = @$_POST["nome"];
	$idadeCliente = @$_POST["idade"];
	$idCliente    = @$_POST["id"];
	$idSexo       = @$_POST["sexo"];
	$idCidade     = @$_POST["cidade"];
	$acao         = @$_POST["acao"];
/// Recebe valores - End

	$obj_cliente = new Cliente();
	

if($acao == "insere"){
	
	///chamado do metodo - Start
	$result = $obj_cliente->insere($nomeCliente,$idadeCliente,$idSexo,$idCidade);
	///chamado do metodo - End
	echo $result;
	}
	else if($acao == "atualizar"){
		
		$result = $obj_cliente->atualizar($nomeCliente,$idadeCliente,$idCliente,$idSexo,$idCidade);		
		
	}
	else if($acao =="deletar"){
		$result= $obj_cliente->deletar($idCliente);
		
	}
	
	

?>





