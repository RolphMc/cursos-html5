<?php 

	include "_inc/conexao.inc.php";

	$nome 		= isset($_POST['nome'])?($_POST['nome']):"";
	$cidade 	= isset($_POST['cidade'])?($_POST['cidade']):"";
	$endereco 	= isset($_POST['endereco'])?($_POST['endereco']):"";
	$telefone 	= isset($_POST['telefone'])?($_POST['telefone']):"";

	// INSERINDO REGISTROS

	$sql = "insert into tb_restaurantes (`nome`,`cidade`,`endereco`,`telefone`) values ('$nome','$cidade','$endereco','$telefone')";
	$salvar = mysqli_query($conexao, $sql);

	header("location:admin.php");

	mysqli_close($conexao);

?>