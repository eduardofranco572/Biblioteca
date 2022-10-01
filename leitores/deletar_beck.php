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
			<h1>Confirmação de Excluir - Leitor</h1>
			<?php
                $id = $_POST['id'];
   
				$mysqli = new mysqli('localhost', 'root', '', 'biblioteca');

                 $sql = "delete from leitores where id = $id";
                 $result = $mysqli -> query($sql);

                 echo ('<p>Usuario excluido com Sucesso!</p>');
		
			?>
				<p><a href="../index.php">Voltar</a></p>
		
			</div>
		</div>
	</body>
</html>
















