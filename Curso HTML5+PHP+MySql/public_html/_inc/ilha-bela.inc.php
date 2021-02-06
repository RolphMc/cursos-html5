<section>
	<p class="titulo">Restaurantes em Ilha Bela</p>
<p class="left-align">
<?php	
	$sql = "select * from tb_restaurantes where cidade = 'Ilha Bela'";
	$consulta = mysqli_query($conexao,$sql);

	While($restaurantes = mysqli_fetch_array($consulta)){
		$id 		= $restaurantes[0];
		$nome 		= $restaurantes[1];
		$cidade 	= $restaurantes[2];
		$endereco 	= $restaurantes[3];
		$telefone 	= $restaurantes[4];

		echo "$nome<br>";
		echo "$cidade<br>";
		echo "$endereco<br>";
		echo "$telefone<br><br>";

	}
?>
</p>	
</section>