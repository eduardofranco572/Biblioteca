<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Home - Biblioteca</title>
        <link href="style.css" rel="stylesheet"/>
        <link href="cards.css" rel="stylesheet"/>
        <link href="button.css" rel="stylesheet"/>
        <link href="footer.css" rel="stylesheet"/>
        <link href="coisasdaindex.css" rel="stylesheet"/>
		



		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	</head>

<body>
		<div class="menu-container">
			<ul class="menu clearfix">
				<li><a href="#">Leitores</a>
					<ul class="sub-menu clearfix">
						<li><a href="leitores/cadastro_front.php">CADASTRO</a></li>
						<li><a href="leitores/visualizar_front.php">VISUALIZAR</a></li>
					</ul>
				</li>		
					<li><a href="#">Livros</a>
							<ul class="sub-menu clearfix">
								<li><a href="livros/cadastro_front.php">CADASTRO</a></li>
								<li><a href="livros/visualizar_front.php">VISUALIZAR</a></li>
							</ul>
						</li>
						
					<li><a href="#">Locação</a>
							<ul class="sub-menu clearfix">
								<li><a href="locacao/cadastro_front.php">CADASTRO</a></li>
								<li><a href="locacao/visualizar_front.php">VISUALIZAR</a></li>
							</ul>
			</ul>
		</div>
		<div class="conteiner">
			<div class="banner">
				<div class="dentro">
					<img class="img-dentro" src="img/frase.png" alt=""> 
				</div>
				
			</div>
			
			<div class="inicio">
				<div class="textos">
					<h1>Bem vindo a Biblioteca!!!</h1>
					<h1 class="sub-text">Por Favor escolha a opção desejada no menu acima!</h1>
					<br>
				<div class="buttons">
					<button class="raise">Cadastre-Se</button>
				</div>
				<br>
				</div>
				<div class="barra"></div>	
			</div>
			
			<!-- cards -->
			<div class="Tudo">
				
				<div class="first hero" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
				<img class="hero-profile-img" src="https://quartaparede.com.br/wp-content/uploads/2022/03/Harry-Potter-e-o-prisioneiro-de-Azkaban-resenha-min.jpg" alt="">
				<div class="hero-description-bk"></div>
				<div class="hero-logo">
					<img src="https://socientifica.com.br/wp-content/uploads/2017/03/albert-einstein-scaled.jpg" alt="">
				</div>
				<div class="hero-description">
					<p>HARRY POTTER E O PRISIONEIRO DE AZKABAN</p>
				</div>
				<div  class="hero-date">
					<p>por: Alex Gonçalves </br> 20.02.2019</p>
				</div>
				<div class="hero-btn">
					<a href="#">Leia Mais</a>
				</div>
				</div>

				<div class="second hero" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
				<img class="hero-profile-img" src="img/j.png" alt="">
				<div class="hero-description-bk"></div>
				<div class="hero-logo">
					<img src="https://observatoriodocinema.uol.com.br/wp-content/uploads/2022/08/Sandman-Final-da-1a-temporada-explicado-O-que-ocorreu-com-o-Vortice-Guerra-contra-o-Inferno-1200x900-1.jpg" alt="">
				</div>
				<div class="hero-description">
					<p>JAVASCRIPT DESCOMPLICADO</p>
				</div>
				<div  class="hero-date">
				<p>por: Eduardo Franco </br> 20.02.2019</p>
				</div>
				<div class="hero-btn">
					<a href="#">Leia Mais</a>
				</div>
				</div>


			</div>

			
			<!-- Fim Cards -->
			
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
					<img src="img/3.svg" alt="">
				</div>
        		<p class="rodape__texto">® 2022 Biblioteca. Todos os direitos reservados. Conteúdo sujeito a disponibilidade.</p>
			</div>
				<p class="rodape__texto">Biblioteca, baseado em cadastros e sujeito a termos e condições. O serviço biblioteca é comercializado por Aovs Sistemas de Informática S.A., Rua Vergueiro, 3185 - Liberdade, São Paulo - SP, 04101-300, Brasil e CNPJ 05.555.382/0001-33</p>
			</div>
		</footer>


		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

	</body>
</html>