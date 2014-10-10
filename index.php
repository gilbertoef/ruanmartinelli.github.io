<!DOCTYPE html>
<html>
	<head>
		<title>Mirror Fashion</title>
		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<meta charset="utf-8">
	</head>

	<body>
	<header class="container">
		<h1><img src="img/logo.png" alt="Mirror Fashion"></h1>

		<p class="sacola">
			Nenhum item na sacola de compras
		</p>
	
		<nav class="menu-opcoes">
			<ul>
				<li><a href="#">Sua Conta</a></li>

				<li><a href="#">Lista de Desejos</a></li>

				<li><a href="#">Cartão Fidelidade</a></li>

				<li><a href="sobre.php">Sobre</a></li>

			</ul>
		</nav>
	</header>

	<div class="container destaque">
		<section class="busca">
			<h2>Busca</h2>
			<form action="http://www.google.com.br/search" id="form-busca">
				<input type="search" name="q" id="q">
				<input type="image" src="img/busca.png">
			</form>
		</section>		

		<section class="menu-departamentos">
			<h2>Departamentos</h2>

			<nav>
				<ul>
					<li><a href="#">Blusas e Camisas</a>
						<ul>
							<li><a href="#"></a>Manga Curta</li>
							<li><a href="#"></a>Manga Comprida</li>
							<li><a href="#"></a>Camisa Social</li>
							<li><a href="#"></a>Camisa Casual</li>
						</ul>
					</li>
					<li><a href="#">Calças</a></li>
					<li><a href="#">Saias</a></li>
					<li><a href="#">Vestidos</a></li>
					<li><a href="#">Sapatos</a></li>
					<li><a href="#">Bolsas e Carteiras</a></li>
					<li><a href="#">Acessórios</a></li>
				</ul>
			</nav>

		</section>

		<img src="img/destaque-home.png" alt="Promoção: Big City Night">
	</div>
	<!-- PAINEL DE NOVIDADES E MAIS VENDIDOS-->
	<div class="container paineis">
		
	<section class="painel novidades">
		<h2>
			Novidades
		</h2>

		<ol>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura1.png">
						<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura2.png">
						<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura3.png">
						<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura4.png">
						<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura5.png">
						<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura6.png">
						<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
					</figure>
				</a>
			</li>

		</ol>
	</section>
	<section class="painel mais-vendidos">
		<h2>
			Mais Vendidos
		</h2>
		<ol>
			
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura7.png">
						<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura8.png">
						<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura9.png">
						<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura10.png">
						<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura11.png">
						<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura12.png">
						<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
					</figure>
				</a>
			</li>
		</ol>

	</section>
	</div>
	
	<?php include("rodape.php");?>









		<script src="js/home.js"></script>
	</body>


</html>
