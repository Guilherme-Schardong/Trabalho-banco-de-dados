<?php include("../controle/controle_cliente.php");
	include("controle/verificar.php");	?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript"src="../js/cliente.js" ></script>
	
	
</head>
<?php
	///instanciar a classe cliente - Start
	$obj_cliente = new Cliente();
	///instanciar a classe cliente - End
	$arrayCliente=$obj_cliente->busca();
	?>
<body>
	
		
		<table border="1">
		<tr>
			<td style= "text-align: center">Nome</td>
			<td style= "text-align: center">Idade</td>
			<td style= "text-align: center">Sexo</td>
			<td style= "text-align: center">Cidade</td>
			<td style= "text-align: center">Estado</td>
			<td style= "text-align: center">Pais</td>
			<td style= "text-align: center">Ação</td>
		</tr>
	<?php
	foreach($arrayCliente as $value){
		?>
		<tr>
			<td><?php echo $value['nomeCliente']?></td>
			<td><?php echo $value['idadeCliente']?></td>
			<td><?php echo $value['descriSexo']?></td>
			<td><?php echo $value['nomeCidade']?></td>
			<td><?php echo $value['nomeEstado']?></td>
			<td><?php echo $value['nomePais']?></td>
			
			
			
			
			<td><input type="button" onClick="telaEditando(<?php echo $value['idCliente']?>)" value="Editar"></input>
		<input type="button" onClick="Deletar(<?php echo $value['idCliente']?>)"value="Deletar"></td><br>
		<?php	
			}
			?>
		
		<Form id="formulario" action="Editando.php" method="POST">
		<input type="hidden" id="idFormulario" name="id">
		</form>
		</tr>
		
	</table>
	<br>
		
		<input type="button"  onClick="telaPrincipal();" value="Principal">
		<input type="button"  onClick="telaListar();" value="Listar">
		<input type="button"  onClick="telaCadastrar();" value="Cadastrar">
		<input type="button"  onClick="telaEditar();" value="Editar">
	
	</form>
</body>
</html>