<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Visualizar - ALUNOS</title>
        <link href="../style.css" rel="stylesheet"/>

        <style>
            .tudo{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .conteudo{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin-top: 6rem;
            }
            table, tr, td{
                color: black;
                border: solid black;
                
            }
            table{
                width: 100%;
                text-align: center;
            }
            h1{
                color: black;
                text-align: center;
            }
            input{
                background-color: black;
                width: 4rem;
                height: 2rem;
                border-radius: 0.5rem;
                color: white;
                cursor: pointer;
                align-items: center;
            }
            img{
                width: 12rem;
                height: 10rem;
                border-radius: 19%;
            }
            .info{
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 60rem;
            }
            .nomes{
               
            }
        </style>
		
	</head> 
	<body>
    <div class="menu-container">
			<ul class="menu clearfix">
				<li><a href="#">Leitores</a>
					<ul class="sub-menu clearfix">
						<li><a href="../leitores/cadastro_front.php">CADASTRO</a></li>
						<li><a href="../leitores/visualizar_front.php">VISUALIZAR</a></li>
					</ul>
				</li>		
					<li><a href="#">Livros</a>
							<ul class="sub-menu clearfix">
								<li><a href="../livros/cadastro_front.php">CADASTRO</a></li>
								<li><a href="../livros/visualizar_front.php">VISUALIZAR</a></li>
							</ul>
						</li>
						
					<li><a href="#">Locação</a>
							<ul class="sub-menu clearfix">
								<li><a href="../locacao/cadastro_front.php">CADASTRO</a></li>
								<li><a href="../locacao/visualizar_front.php">VISUALIZAR</a></li>
							</ul>
			</ul>
		</div>
    <div class="tudo">
        <div class="conteiner">
            <h1>Tabela com as Informações do Aluno</h1>
            <div class="conteudo">

                <?php
                    $ref = $_POST['filtro'];
                    $camp = $_POST['campo'];

                        if($camp == ''){
                            echo ("Campo invalido");
                        }
                        $database =new mysqli('localhost','root','','biblioteca');

                        $comando ="SELECT * FROM `livros` WHERE `$camp` LIKE '%$ref%';";

                        $view = $database->query ( $comando );
                        if($camp == ''){
                            echo("Nome não encontrado");
                        }

                            while($linha = $view-> fetch_assoc()){
                                echo"<div class='info'>";
                                $img = $linha['id'];
                                // echo"<td><a href='script.php?id=".$img.">'</a><img src='script.php?id=".$img.">'</td>";
                                echo"<img src='script.php?id=".$img.">'";
                                echo"</br>";
								
                                echo"<div class='nomes'>";
                                echo "Codigo: ".$linha["id"];
                                echo"</br>";
                                echo "Nome: ".$linha["nome"];
                                echo"</br>";
                                echo "Altor: ".$linha["altor"]."-".$linha["ano"];
                                echo"</br>";
                                echo "Sinopse: ".$linha["sinopse"];
                                echo"</div>";
								

                                echo"<form method='POST' action='visualizar_beck.php'>
                                            <input type='hidden' name='codigo' value='".$linha["id"]."'/><br/>
                                            <input type='submit' value='Ver' />
                                        </form>";
                            echo"</div>";
                            echo"</br>";
                            echo"</br>";
                            echo"</br>";
                            }
                            
				?>


			    <p><a href="../index.php">Voltar</a></p>
                                
            </div>
        </div>
    </div>
    </body>
</html>