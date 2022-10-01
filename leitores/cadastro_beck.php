<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Cadastro - leitor</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<style>
		h1{
			color: black;
			font-size: 1.5rem;
		}
		p{
			color: black;
		}
		.conteiner{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			margin-top: 2rem;
		}

	</style>
	<body>

		
		<div class="conteiner">
			<div class="inicio">
			<h1>Confirmação de Cadastro - Leitores</h1>
				<?php
						$nome = $_POST['nome'];	
						$end = $_POST['end'];	
						$cidade = $_POST['cidade'];	
						$cpf = $_POST['cpf'];	
						$data_nasc = $_POST['data_nasc'];	
						$email = $_POST['email'];
						$telefone = $_POST['telefone'];
	
						$arquivo =addslashes(file_get_contents($_FILES['img']['tmp_name']));
						$tamanho = $_FILES["img"]["size"];
						$tipo = $_FILES["img"]["type"];
						$nome2 = $_FILES["img"]["name"];
						
						
						if($nome == "" or $end == "" or $cidade == ""or $cpf == "" or $data_nasc == "" or $email == "" or $telefone == "")
						{
							echo "<p>Campos Obrigatórios em branco, preencha corretamente ....</p><br/>";
							echo "<p><a href='cadastro.php'>Cadastro</a></p>";
						}
						else{
							$mysqli = new mysqli('localhost', 'root', '', 'biblioteca');
							$sql = "insert into leitores values (null, '$nome', '$end', '$cidade', '$cpf', '$data_nasc', '$email', '$telefone', '$arquivo', '$nome2' ,'$tipo')";
							$result = $mysqli ->query($sql);
							echo "<p>Usuário Cadastrado com Sucesso!!!</p>";
						}
						
					?>
						<p><a href="../index.php">Voltar</a></p>
		
			</div>
		</div>

	</body>
</html>