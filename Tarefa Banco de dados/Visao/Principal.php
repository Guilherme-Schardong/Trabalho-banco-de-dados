<?php 
include("controle/verificar.php");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript"src="../js/cliente.js" ></script>
</head>

<body>
	
	<form action="POST" >
		
		<input type="button"  onClick="telaPrincipal();" value="Principal">
		<input type="button"  onClick="telaListar();" value="Listar">
		<input type="button"  onClick="telaCadastrar();" value="Cadastrar">
		<input type="button"  onClick="telaEditar();" value="Editar">
	
	</form>
</body>
</html>