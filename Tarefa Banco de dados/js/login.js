// JavaScript Document


function telaPrincipal(){
	
	window.location.href='Principal.php';
	
}

function verificar(){
	
	var email = $('#email').val();
	var senha = $('#senha').val();
	var acao  = $('#acao').val();
	
	$.ajax({
		
			type:"POST",
			url:"controle/controle_login.php",
			data:{acao:acao,email:email,senha:senha},
		
		success:function (data){
			
			if(data==1){
				telaPrincipal();
			}
			else{
				window.location.herf='Login.php';
			}
			
			
		}
		
	})
	
	
}

