// JavaScript Document

function telaPrincipal(){
	
	window.location.href='principal.php';
}

function telaListar(){
	
	window.location.href='listar.php';
}

function telaEditar(){
	
	window.location.href='edicao.php';
}

function telaEditando(valor){
	
	$('#idFormulario').val(valor);
	$('#formulario').submit();
	// console.log(valor);
	//window.location.href='editando.php';
}

function telaCadastrar(){
	
	window.location.href='cadastrar.php';
}

function Cadastrar(){
	 
	nome   = $('#nome').val();
	idade  = $('#idade').val();
	sexo   = $('#Sexo').val();
	cidade = $('#Cidade').val();
	
	$.ajax({
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"insere",nome:nome,idade:idade,sexo:sexo,cidade:cidade},
		
		success:function(data){
			
			console.log(data);
			alert('Cadastrado');
			telaListar();
		}
	})
}

function Deletar(valor){
	
	var result = confirm("Voce tem certeza?");
	
	if(result== true){

	
	$.ajax({
		
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"deletar",id:valor},
		
		
		success:function(data){
			
			console.log(data);
			telaListar();
		}
	});
		
	}else{
		alert('Não apagou');
	}
}

function Atualizar(){
	
	
	nome   = $('#nome').val();
	idade  = $('#idade').val();
	id     = $('#id').val();
	sexo   = $('#Sexo').val();
	cidade = $('#Cidade').val();
	
	
	$.ajax({
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"atualizar",nome:nome,idade:idade,id:id,sexo:sexo,cidade:cidade},
		
		success:function(data){
			console.log(data);
			telaListar();
		}
	
	
})
}
		