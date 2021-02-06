<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Curso de HTML5 com PHP e MySQL</title>
		<link rel="stylesheet" type="text/css" href="_css/style.css">
	</head>
	<body>
		<header>
			<img src="_img/banner-topo.jpg">
		</header>
		<nav>
			<ul>
				<?php 
					$menu = ["home","Restaurantes","Bares","Buffets","Faça Sua Reserva"];
					$links = ["index.php","restaurantes.php","bares.php","buffets.php","reserva.php"];
					for($c=0; $c<=4; $c++){
						echo "<li><a href='$links[$c]'>$menu[$c]</a></li>";
					}
				?>
			</ul>
		</nav>
		<section>
			<h1>Curso Aperfeiçoamento</h1><br>
			<p>
				Cursos de php, crie aplicações WEB, passando pelo mundo da POO, entendendo o uso de Design Patterns, até chegar ao mundo enterprise, incluindo o desenvolvimento de aplicações dinâmicas de forma segura, com abordagens em XML, webservices, regex e configurações de ambiente e segurança.
			</p><br>
			<p>
				Este curso prepara o aluno para: 
				Criar aplicações com orientação a objeto, utilizar em suas aplicações os principais bancos de dados Open Source e prestar a prova de certificação Zend

				 Curso baseado em documentação oficial com conteúdo introdutório para a Certificação Zend PHP, com dicas para a prova
				 O aluno participará de uma aula dinâmica, testando e aplicando seus conhecimentos com o projeto de conclusão de curso
				 Aprenderá a manipular objetos usando a SPL, cobrada na Certificação Zend PHP
				 Na versão EaD, além aprender a programar o aluno terá contato com toda uma infraestrutura de desenvolvimento, versionamento e gerenciamento do projetos com tecnologias consagradas, tais como: Eclipse, Git e GitLab (semelhante ao GitHub)
			</p><br>
			
			<?php

				for ($cont=1; $cont<=4; $cont++)
					echo "<article class='galeria'><figure><img src='_img/food-$cont.jpg'></figure></article>"
					
				

			 ?>
			 
		</section>
		<section>
			<h2>Curso Aperfeiçoamento</h2><br>
			<p>
				Cursos de php, crie aplicações WEB, passando pelo mundo da POO, entendendo o uso de Design Patterns, até chegar ao mundo enterprise, incluindo o desenvolvimento de aplicações dinâmicas de forma segura, com abordagens em XML, webservices, regex e configurações de ambiente e segurança.
			</p><br>
			<p>
				Este curso prepara o aluno para: 
				Criar aplicações com orientação a objeto, utilizar em suas aplicações os principais bancos de dados Open Source e prestar a prova de certificação Zend

				 Curso baseado em documentação oficial com conteúdo introdutório para a Certificação Zend PHP, com dicas para a prova
				 O aluno participará de uma aula dinâmica, testando e aplicando seus conhecimentos com o projeto de conclusão de curso
				 Aprenderá a manipular objetos usando a SPL, cobrada na Certificação Zend PHP
				 Na versão EaD, além aprender a programar o aluno terá contato com toda uma infraestrutura de desenvolvimento, versionamento e gerenciamento do projetos com tecnologias consagradas, tais como: Eclipse, Git e GitLab (semelhante ao GitHub)
			</p><br>

			<form method="post" action="">
				<select name="opcao">
					<option value="1">Pratos Finos</option>
					<option value="2">Sobremesas</option>
					<option value="3">Sucos</option>
				</select>
				<input type="submit" value="Visualizar" class="botao"><br>

				<?php 

					$opcao = isset($_POST['opcao'])?$_POST['opcao']:"";
					switch ($opcao) {
						case '1':
							for($pratos=1; $pratos<=8; $pratos++)
								echo "<article class='galeria'><figure><img src='_img/pratos-finos-$pratos.jpg'></figure></article>";
							break;
						case '2':
							for ($sobremesa=1; $sobremesa<=8 ; $sobremesa++) 
								echo "<article class='galeria'><figure><img src='_img/sobremesa-$sobremesa.jpg'></figure></article>";
							break;
						case '3':
							for ($sucos=1; $sucos<=8; $sucos++) 
								echo "<article class='galeria'><figure><img src='_img/sucos-$sucos.jpg'></figure></article>";
						default:
							# code...
							break;
					}

				?>
			</form>
		</section>
		<footer>Curso de HTML5 com PHP e MySQL</footer>
	</body>
</html>