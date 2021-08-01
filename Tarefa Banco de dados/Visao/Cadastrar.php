<?php include("../controle/controle_cliente.php");
	  include("../controle/controle_cidade.php");
	  include("../controle/controle_sexo.php");
	  include("controle/verificar.php");?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/cliente.js" ></script>
	
</head>
<?php
	$obj_cidade = new Cidade();
	$arrayCidade=$obj_cidade->busca();
	
	
	//$arrayCidEst=$obj_cidade->buscaEst();
	
	$obj_sexo = new Sexo();
	$arraySexo=$obj_sexo->busca();
	?>
	
	
<body>
	<form method="post"  >
		<table border="1">
			<tr>
				
		<td>Nome: <input type="text" id="nome" name="nome" ></td>
		<td>Idade:<input type="text" id="idade"name="idade" ><br></td>
		<td>Sexo:<select name="Sexo" id="Sexo" >
			<?php
				foreach($arraySexo as $value){
			?>
			<option value="<?php echo $value['idSexo']?>"><?php echo $value['descriSexo']?></option>
			<?php
				}
			?>
			</select>
			</td>
				
		<td>Cidade:<select name="Cidade" id="Cidade" >
			<?php
			
				foreach($arrayCidade as $value){
			?>
			<option value="<?php echo $value['idCidade']?>"><?php echo $value['nomeCidade']?></option>
			<?php
				}
			?>
			
			</select>
			</td>
		<td>Estado:
			<input type="text" name="Estado" id="Estado">
			<select name="Estado2" id="Estado2">
			<?php 
			foreach($arrayCidEst as $value){
			?>
			<option value="<?php echo $value['idCidade']?>"><?php echo $value['nomeEstado']?></option>
			<?php
			}
			?>
			</select>
			</td>
		<td>País:
			<input type="text" name="Pais" id="Pais">
			<select name="Pais2" id-"Pais2">
			<?php 
			foreach($arrayCidEst as $value){
			?>
			<option value="<?php echo $value['idCidade']?>"><?php echo $value['nomePais']?></option>
			<?php
			}
			?>
			
			</td>
	
	
			</tr>
		<input type="reset" value="Limpar"><br>
		<input type="button" id="insere" value="Gravar" onClick="Cadastrar();">
		<input type="hidden"  name="acao" value="insere">
		
		<input type="button"  onClick="telaPrincipal();" value="Principal">
		<input type="button"  onClick="telaListar();" value="Listar">
		<input type="button"  onClick="telaCadastrar();" value="Cadastrar">
		<input type="button"  onClick="telaEditar();" value="Editar">
		
		
	</table>	
	
	</form>
	
	
	<script type="application/javascript" src="../js/cidade.js" ></script>
	
	
	
</body>
</html>