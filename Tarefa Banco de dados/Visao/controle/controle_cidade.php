<?php



include("../../Controle/controle_cidade.php");


$idCidade= $_POST["cidade"];


$obj_cidade = new Cidade();

if($idCidade>0){
	
	$result = $obj_cidade->buscaEst($idCidade);
	echo $result;
}	







?>