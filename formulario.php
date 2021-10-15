<?php

	if(isset($_POST['submit'])){
		
		include_once('config.php');
		
		$nome = $_POST['nome'];
		$senha = $_POST['senha'];
		$email = $_POST['email'];
		
		
		$result = mysqli_query($conexao, "INSERT INTO cadastro(nome, senha, email) VALUES ('$nome','$senha','$email')");
	}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Laboratorios</title>
	<link rel="stylesheet" href="css/style01.css">
    
</head>
<body>
	<main class="main">
		<div id="login-box2">
			<div id="login-box-interno">
				<div id="login-box-label">
					<img src="img/logo-estacio-login.png">
					<div class="input-div" id="input-usuario">
						<p> Login Sistema de Salas Saúde</p>
					</div>
					<form method="POST" action="formulario.php">
						<div class="input-div" id="input-senha">
							<input id="mat" type="text" name="nome" placeholder="Login"/>
						</div>
						<div class="input-div" id="input-senha">
							<input id="senha" type="password" name="senha" placeholder="Senha"/>
						</div>
						<div class="input-div" id="input-senha">
							<input id="senha2" type="password" name="repetir_senha" placeholder="Repetir Senha"/>
						</div>
						<div class="input-div" id="input-senha">
							<input id="email" type="email" name="email" placeholder="E-mail"/>
						</div>
						<div id="botoes">
						<input type='submit' name='submit' id="botao" class="register" onclick="registro()"/>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</main>
		<script>


			function registro(){
				var senha_1 = document.getElementById("senha").value;
				var login = document.getElementById("mat").value;
				var repetir_senha = document.getElementById("senha2").value;
				var email = document.getElementById("email").value;

				if (login ==""){
					alert("Preencher campo Nome");
					login.focus();
					return false;
				}

				if (email =="" || email.indexOf('@')==-1 || email.indexOf('.')==-1){
					alert("Preencher campo Email Corretamente");
					email.focus();
					return false;
				}

				if (senha_1 =="" || senha_1.len){
					alert("Preencher campo Senha");
					senha_1.focus();
					return false;
				}

				if (repetir_senha ==""){
					alert("Preencher campo Repetir Senha");
					repetir_senha.focus();
					return false;
				}

				if (senha_1 == repetir_senha){
					alert("Cadastro Concluido");
					window.location = 'http://localhost/projeto/login.php';
				}
				else{
					alert("Senhas não coincidem");
				}	
			}
		</script>
	</body>
</html>