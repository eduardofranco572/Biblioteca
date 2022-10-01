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
						$codLeitor = $_POST['codLeitor'];	
						$codLivro = $_POST['codLivro'];	
						
						if($codLeitor == "" or $codLivro == "")
						{
							echo "<p>Campos Obrigatórios em branco, preencha corretamente ....</p><br/>";
							echo "<p><a href='cadastro_front.php'>Cadastro</a></p>";
						}
						else{
							$mysqli = new mysqli('localhost', 'root', '', 'biblioteca');
							$sql = "insert into locacao values (null, '$codLeitor', '$codLivro')";
							$result = $mysqli ->query($sql);
							echo "<p>Usuário Cadastrado com Sucesso!!!</p>";
						}
						
					?>
						<p><a href="../index.php">Voltar</a></p>
		
			</div>
		</div>

	</body>
</html>