<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Home - Sistema Escola</title>
        <link href="../style.css" rel="stylesheet"/>
		<link href="../footer.css" rel="stylesheet"/>


		<style>
		
            .conteiner{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .textos{
                color: black;
            }
            .formulario{
                display: flex;
                flex-direction: column;
                justify-content: center;

            }
            .formulario ul li{
                text-decoration: none;
            }

            .texto10{
                font-family: "Lato",sans-serif;
                font-size: 12px;
            }

            .cadastar{
                background-color: #d76900;
                color: black;
                height: 2.5rem;
                width: 19rem;
                font-size: 12px;
                font-family: "Lato",sans-serif;
                cursor: pointer;
                border-radius: 1rem;
                border: none;
                color: white;
            }
            input{
                width: 30rem;
                height: 1.5rem;
                border-radius: 0.5rem;
            }
            .titulos{
                text-align: center;
            }
            .botao{
                text-align: center;
            }
            select{
                border: none;
                width: 20rem;
                height: 2rem;
                border-radius: 0.5rem;
            }
            .personagem img{
                width: 26rem;
                height: 20rem;
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
                margin-left: -37rem;
            }
            .rodape {
                text-align: center;
                margin-top: -4rem;
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

		<div class="conteiner">
			<div class="inicio">
				<div class="textos">
					<div class="titulos">
						<h1>Sistema de Visualizar</h1>
						<p>Por Favor entre com os dados solicitados abaixo:</p>
					</div>
					<div class="nome">
						<div clas="normal">
                            <form method="POST" action="visulaizar_beck1.php">
                                Texto referencia: </br>
									<input type="text" name="filtro" size="25" /><br/>
								<br/>
                                Campo:
                                <br/>
                                    <select name='campo'>
                                        <option value="leitores.id"> codLeitor </option>
                                        <option value="livros.id"> codLivro </option>
                                    </select>
								<br/>
                                <br/>
                                <br/>
								<div class="botao">
									<input class="cadastar"type="submit" name="enviar" value="Visualizar" />
								</div>

							</form>
                            <div class="personagem">
					            <img src="../img/5.svg" alt="">
				            </div>
						</div>
					</div>
				</div>
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