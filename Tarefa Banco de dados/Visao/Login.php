<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript"src="../js/login.js" ></script>
	
</head>

<body>
	
	<form action="POST" >
		E-mail: <input type="email" id="email" name="email" ><br>
		Senha:<input type="password" id="senha"name="senha" >
		
		<input type="hidden" nome="acao" id="acao" value="logar">
		
		<input type="button"  onClick="verificar();" value="Entrar">
	
	</form>
</body>
</html>
