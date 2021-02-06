<?php
	$conexao = mysqli_connect("localhost","root","","bd_cadastro");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Restaurantes</title>
		<link rel="stylesheet" type="text/css" href="_css/style.css">
	</head>
	<body>
		<header>
			<img src="_img/banner-topo-restaurantes.jpg">
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
			<article class="mini center-align border-buttom">
				<img src="_img/restaurante-small-1.jpg" class="circular">
				<span class="titulo">Lorm Ipsum</span>
				<p class="center-align"> Qualquer texto bem pequeno</p>
			</article>

			<article class="mini center-align border-buttom">
				<img src="_img/restaurante-small-2.jpg" class="circular">
				<span class="titulo">Lorm Ipsum</span>
				<p class="center-align"> Qualquer texto bem pequeno</p>
			</article>
			
			<article class="mini center-align border-buttom">
				<img src="_img/restaurante-small-3.jpg" class="circular">
				<span class="titulo">Lorm Ipsum</span>
				<p class="center-align"> Qualquer texto bem pequeno</p>
			</article>

		<section>
			<p class="titulo">Pesquisar Restaurantes</p><br>
			<form method="post" action="">
				<select name="opcao" class="campo"> 
					<option value="1">São Paulo</option>
					<option value="2">Ilha Bela</option>
					<option value="3">Campos dos Jordão</option>
					<option value="4">Angra dos Reis</option>					
				</select>
				<button class="btn" type="submit" name="">Ok</button>
			</form>
			
			<?php 
				$opcao = isset($_POST['opcao'])? ($_POST['opcao']): "";

				if($opcao == 1){
					include "_inc/sao-paulo.inc.php";
				}elseif($opcao == 2){
					include "_inc/ilha-bela.inc.php";
				}elseif($opcao == 3){
					include "_inc/campos-do-jordao.inc.php";
				}elseif($opcao == 4){
					include "_inc/angra-dos-reis.inc.php";
				}
			?>

		</section>
		
		<footer>Curso de HTML5 com PHP e MySQL</footer>
	</body>
</html>