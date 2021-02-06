<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Curso de HTML5 com PHP e MySQL</title>
		<link rel="stylesheet" type="text/css" href="_css/style.css">
	</head>
	<body>

	<!-- FORMULÁRIO DE CADASTRO DE RESTAURANTES -->

	<table class="tabela">

		<th colspan="5">CADASTRO DE RESTAURANTES</th><tr>
		<td colspan="5">&nbsp;</td><tr>
		<td class="Linha l200">Nome</td>
		<td class="Linha l200">Cidade</td>
		<td class="Linha l400">Endereço</td>
		<td class="Linha l100">Telefone</td>
		<td class="Linha l100">Cadastrar</td><tr>

		<form method="POST" action="processa_cadastro.php">
			<td class="linha l200"><input type="text" name="nome" required="" autofocus="" class="input-text"> </td>
			<td class="linha l200">
				<select name="cidade" class="input-text">
					<option value="São Paulo">São Paulo</option>
					<option value="Ilha Bela">Ilha Bela</option>
					<option value="Campos dos Jordão">Campos dos Jordão</option>
					<option value="Angra dos Reis">Angra dos Reis</option>
				</select></td>
			<td class="linha l400"><input type="text" name="endereco" required="" class="input-text"> </td>
			<td class="linha l100"><input type="text" name="telefone" required="" class="input-text"> </td>
			<td class="linha l100"><button type="submit" class="btn l100">OK</td><tr>
		</form>

		<?php

			include "_inc/conexao.inc.php";

			$sql = "select * from tb_restaurantes";
			$consulta = mysqli_query($conexao,$sql);

			while ($restaurantes = mysqli_fetch_array($consulta)){
				$id			= $restaurantes[0];
				$nome 		= $restaurantes[1];
				$cidade 	= $restaurantes[2];
				$endereco	= $restaurantes[3];
				$telefone 	= $restaurantes[4];


				echo "<td class='Linha l200'>$nome</td>";
				echo "<td class='Linha l200'>$cidade</td>";
				echo "<td class='Linha l400'>$endereco</td>";
				echo "<td class='Linha l100' colspan='2'>$telefone</td><tr>";
			}
			mysqli_close($conexao);
		?>

	</table>
</html>