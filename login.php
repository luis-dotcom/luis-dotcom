
<?php

if(isset($_POST['submit'])){
	include_once('config.php');
	$login = $_POST['nome'];
	$senha = $_POST['senha'];
	$query = "SELECT id, nome from cadastro where nome = '{$login}' and senha = '{$senha}'";
	$result = mysqli_query($conexao,$query);
	$row = mysqli_num_rows($result);
	echo $row;exit;

}
?>


<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Laboratorios</title>
	<link rel="stylesheet" href="css/style01.css">
    
</head>
<body>
	<main class="main">
		<div id="login-box">
			<div id="login-box-interno">
				<div id="login-box-label">
					<img src="img/logo-estacio-login.png">
					<div class="input-div" id="input-usuario">
						<p> Login Sistema de Saúde</p>
					</div>
					<form action="login.php" method=''>
						<div class="input-div" id="input-senha">
							<input id="mat" type="text" name="nome" placeholder="Login" >
						</div>
						<div class="input-div" id="input-senha">
							<input id="senha" type="password" name="senha" placeholder="Senha">
						</div>
						<div id="botoes">
							<input type='button' value='Registro' id="botao" class="botao2" onclick="registro()"/>
							<input type='submit' name='submit' value='Login' id="botao"/>
							<div id="lembrar-senha">
								<input type="checkbox"/> Lembrar minha senha
								<p id="ti"></p>
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</main>
		<script>
			function funcao(){
				var h = document.getElementById("senha").value;
				var y = document.getElementById("mat").value;
				
				if (y == "matricula" && h == "senha"){
					t = "login ok";
				}
				else {
					t = "senha/login incorreto";
				}
				document.getElementById("ti").innerHTML = t
				if (t == "login ok"){
					window.location.href ="";
				}
			}
			function registro(){
				window.location = "http://localhost/projeto/formulario.php";
			}
		</script>
	</body>
</html>