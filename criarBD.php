<?php
	include 'conectamysql.php';

	$basecriada = mysqli_query($con, 'CREATE DATABASE starsite');

	if(!$basecriada)
		exit('Erro ao criar a base de dados: '.mysqli_error($con));
	else
		echo 'Base de dados criada com sucesso!';

	mysqli_close($con);
?>