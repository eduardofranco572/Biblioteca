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
				$nome = $_POST['nome'];	
				$end = $_POST['editora'];	
				$ano = $_POST['ano'];	
				$altor = $_POST['altor'];	
				$genero = $_POST['genero'];	
				$sinopse = $_POST['sinopse'];
				
				$arquivo =addslashes(file_get_contents($_FILES['img']['tmp_name']));
				$tamanho = $_FILES["img"]["size"];
				$tipo = $_FILES["img"]["type"];
				$nome2 = $_FILES["img"]["name"];
							
				
				if($nome == "" or $end == "" or $ano == ""or $altor == "" or $genero == "" or $sinopse == "" )
				{
					echo "<p>Campos Obrigatórios em branco, preencha corretamente ....<br/><p>";
				}
				else{
	
					$mysqli = new mysqli('localhost', 'root', '', 'biblioteca');
					$sql = "UPDATE `livros` SET `nome`='$nome',`editora`='$end',`ano`='$ano',`altor`='$altor',`genero`='$genero',
					`sinopse`='$sinopse', `img`='$arquivo', `nomeImg`='$nome2', `tipoImg`='$tipo' WHERE `id`='$id'";
					$result = $mysqli->query( $sql );
					echo "<p>Usuário Alterado com Sucesso!!!<p>";
				}
				
			?>



				<p><a href="../index.php">Voltar</a></p>
		
			</div>
		</div>

	</body>
</html>