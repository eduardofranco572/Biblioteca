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
						$editora = $_POST['editora'];	
						$ano = $_POST['ano'];	
						$altor = $_POST['altor'];	
						$genero = $_POST['genero'];	
						$sinopse = $_POST['sinopse'];

						$arquivo =addslashes(file_get_contents($_FILES['img']['tmp_name']));
						$tamanho = $_FILES["img"]["size"];
						$tipo = $_FILES["img"]["type"];
						$nome2 = $_FILES["img"]["name"];
						
						if($nome == "" or $editora == "" or $ano == ""or $altor == "" or $genero == "" or $sinopse == "")
						{
							echo "<p>Campos Obrigatórios em branco, preencha corretamente ....</p><br/>";
							echo "<p><a href='cadastro.php'>Cadastro</a></p>";
						}
						else{
							$mysqli = new mysqli('localhost', 'root', '', 'biblioteca');
							$sql = "insert into livros values (null, '$nome', '$editora', '$ano', '$altor', '$genero', '$sinopse', '$arquivo', '$nome2' ,'$tipo')";
							$result = $mysqli ->query($sql);
							echo "<p>Usuário Cadastrado com Sucesso!!!</p>";
						}
						
					?>
						<p><a href="../index.php">Voltar</a></p>
		
			</div>
		</div>

	</body>
</html>