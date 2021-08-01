<?php include("../controle/controle_cliente.php");
	  include("controle/verificar.php");
	  include("../controle/controle_cidade.php");
	  include("../controle/controle_sexo.php");


?>
<?php $idCliente = $_POST['id']; ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript"src="../js/cliente.js" ></script>
<?php
	///instanciar a classe cliente - Start
	$obj_cliente = new Cliente();
	///instanciar a classe cliente - End
	$arrayCliente=$obj_cliente->buscaEdit($idCliente);
	
	
	$obj_cidade = new Cidade();
	$arrayCidade=$obj_cidade->busca();
	
	
	
	
	$obj_sexo = new Sexo();
	$arraySexo=$obj_sexo->busca();
	
	
	
	
	?>
	
	
<body>
	<form action="" >
		<?php
		foreach($arrayCliente as $value){
		?>
		Nome: <input type="text" id="nome" name="nome" value="<?php echo $value['nomeCliente']?>"><br>
		Idade:<input type="text" id="idade" name="idade" value=<?php echo $value['idadeCliente']?>>
		<input type="hidden" id="id" name="id" value="<?php echo $value['idCliente']?>"
		<?php	
			}
			?>
		
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
		<input type="button" id="atualizarBtn"onClick="Atualizar();" value="Atualizar">
		<input type="hidden"  name="acao" value="atualizar">
		
		
		<input type="button"  onClick="telaPrincipal();" value="Principal">
		<input type="button"  onClick="telaListar();" value="Listar">
		<input type="button"  onClick="telaCadastrar();" value="Cadastrar">
		<input type="button"  onClick="telaEditar();" value="Editar">
	
	</form>
</body>
</html>