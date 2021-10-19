<?php
	include './class/pessoa.php'; // arquivo com definições da classe Cliente
	session_start();
	include 'conectamysql.php'; // arquivo que estabelece a conexão
	$db_selecionado = mysqli_select_db($con, 'starsite');

	if (!$db_selecionado)
		exit ('Não foi possível selecionar a base de dados: '. mysqli_error($con));

	$sql = 'DELETE FROM pessoa WHERE email="'.$_SESSION["clienteautenticado"]->getEmail().'"';

	$clienteexcluido = mysqli_query($con, $sql);

	if (!$clienteexcluido)
		exit ('Erro ao excluir cliente: '. mysqli_error($con));
	else
		echo 'Prezado cliente, sua conta foi excluída com sucesso.';

	unset($_SESSION["clienteautenticado"]);
	session_destroy();
	mysqli_close($con);

?>