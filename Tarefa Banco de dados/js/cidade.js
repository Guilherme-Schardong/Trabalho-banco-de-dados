// JavaScript Document


function telaCadastrar(){
	
	window.location.href='cadastrar.php';
}

$('#Cidade').change(function(){ 
	
	
	
cidade = $('#Cidade').val();
	console.log(cidade);

$.ajax({
	
	type:"POST",
	url:"../Visao/controle/controle_cidade.php",
	data:{acao:"buscaEst",cidade:cidade},
	
	success:function(data){
			
			
		 var dados = jQuery.parseJSON(data);
			console.log(dados);
		$('#Estado').val(dados.nomeEstado);
		$('#Pais').val(dados.nomePais);
			//telaCadastrar();
	}
	
})

	});