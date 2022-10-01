<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Cadastro - Aluno</title>
		<link href="../style.css" rel="stylesheet"/>
	</head>
	<style>
        body{
    		display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
		h1{
			color: black;
			font-size: 1.5rem;
		}
		p{
			color: black;
		}
	</style>
	<body>

		
		<div class="conteiner">
			<div class="inicio">
			<h1>Confirmação de Alterar - Aluno</h1>
			<?php
				$id = $_POST['id'];	
				$codLeitor = $_POST['codLeitor'];	
				$codLivro = $_POST['codLivro'];	

				if($codLeitor == "" or $codLivro == "" )
				{
					echo "<p>Campos Obrigatórios em branco, preencha corretamente ....<br/><p>";
				}
				else{
	
					$mysqli = new mysqli('localhost', 'root', '', 'biblioteca');
					$sql = "UPDATE `locacao` SET `codLivro`='$codLeitor',`codLivro`='$codLivro' WHERE `id`='$id'";
					$result = $mysqli->query( $sql );
					echo "<p>Usuário Alterado com Sucesso!!!<p>";
				}
				
			?>



				<p><a href="../index.php">Voltar</a></p>
		
			</div>
		</div>

	</body>
</html>