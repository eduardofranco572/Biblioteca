<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Visualizar - ALUNOS</title>
        <link href="../style.css" rel="stylesheet"/>
        <link href="../footer.css" rel="stylesheet"/>

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
                margin-top: 6rem;
            }
            h1{
                color: black;
                
            }
            input{
                width: 28rem;
                height: 2rem;
                border-radius: 0.5rem;
		    }
            img{
                width: 17rem;
                height: 14rem;
                border-radius: 19%;
                margin-top: -5rem;
            }
            .tudo2{
                display: flex;
                justify-content: center;
                margin-left: -7rem;
            }
            .conteudo2{
                display: flex;
                flex-direction: column;
                justify-content: center;
                margin-left: 2rem;
                margin-top: -2rem;

            }
            .bordas{
                border: 2px solid black;
                width: 58rem;
                height: 57rem;
                border-radius: 4rem;
            }
            .toque{
                cursor: pointer;
            }
            .divisao{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .img-footer img{
                margin-top: -9rem;
                width: 24rem;
                height: 11rem;
                margin-left: -31rem;
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
                <h1>Tabela com as Informações do Leitor</h1>
                <div class="bordas">
                    <div class="conteudo">

                        <?php
                            $codigo = $_POST['codigo'];

                                $database =new mysqli('localhost','root','','biblioteca');

                                $comando ="SELECT * FROM `leitores` WHERE id = '$codigo'";

                                $view = $database->query ( $comando );
                                    while($linha = $view-> fetch_assoc()){
                                    echo"<div class='tudo2'>";
                                        $img = $linha['id'];
                                        // echo"<a href='script.php?id=".$img.">'</a><img src='script.php?id=".$img.">'";
                                        echo"<img src='script.php?id=".$img.">'";
                                        echo"</br>";
                                        echo"<div class='conteudo2'>";
                                            echo"</br>";
                                            echo"</br>";
                                            echo ("	</br> Nome: </br> <input type='text' name='nome' disabled value='".$linha["nome"]."'/><br/></br>");
                                            echo ("	Endereço: </br> <input type='text' name='endereco' disabled value='".$linha["endereco"]."'/><br/></br>");
                                            echo ("	Cidade: </br> <input type='text' name='cidade' disabled value='".$linha["cidade"]."'/><br/></br>");
                                            echo ("	CPF: </br> <input type='text' name='cpf' disabled value='".$linha["cpf"]."'/><br/></br>");
                                            echo ("	Data de Nascimento: </br> <input type='text' disabled name='data_nasc' value='".$linha["dataNasc"]."'/><br/></br>");
                                            echo ("	E-Mail: </br> <input type='text' name='email' disabled value='".$linha["email"]."'/><br/></br>");
                                            echo ("	Telefone: </br> <input type='text' name='telefone'disabled  value='".$linha["telefone"]."'/><br/></br>");
                                    

                                            echo"<form method='POST' action='alterar_front.php'>
                                                        <input type='hidden' name='codigo' value='".$linha["id"]."'/><br/>
                                                        <input class='toque' type='submit' value='Alterar' />
                                                    </form>";
                                            echo"<form method='POST' action='deletar_front.php'>
                                                        <input type='hidden' name='codigo' value='".$linha["id"]."'/><br/>
                                                        <input class='toque' type='submit' value='Excluir' />
                                                    </form>";
                                        echo"</div>";
                                    echo"</div>";
                                    }
                                    
                        ?>
                    </div>
                </div>
                    <p><a href="../index.php">Voltar</a></p>
                                    
                
            </div>

        </div>
        <footer class="rodape">
                <ul class="rodape__lista">
                    <li class="lista__link">
                        <a class="oa" href="#">Idioma</a>
                    </li>
                    <li class="lista__link">
                        <a class="oa" href="#">Dispositivos compatíveis</a>
                    </li>
                    <li class="lista__link">
                        <a class="oa" href="#">Contrato de Locação</a>
                    </li>
                    <li class="lista__link">
                        <a class="oa" href="#">Politica de privacidade</a>
                    </li>
                    <li class="lista__link">
                        <a class="oa" href="#">Proteção de dados no Brasil</a>
                    </li>
                    <li class="lista__link">
                        <a class="oa"href="#">Anuncios personalizados</a>
                    </li>
                    <li class="lista__link">
                        <a class="oa" href="#">Ajuda</a>
                    </li>
                </ul>
                <div class="text_rodape">
                <div class="divisao">
                    <div class="img-footer">
                        <img src="../img/3.svg" alt="">
                    </div>
                    <p class="rodape__texto">® 2022 Biblioteca. Todos os direitos reservados. Conteúdo sujeito a disponibilidade.</p>
                </div>
                    <p class="rodape__texto">Biblioteca, baseado em cadastros e sujeito a termos e condições. O serviço biblioteca é comercializado por Aovs Sistemas de Informática S.A., Rua Vergueiro, 3185 - Liberdade, São Paulo - SP, 04101-300, Brasil e CNPJ 05.555.382/0001-33</p>
                </div>
            </footer>
    </body>
</html>