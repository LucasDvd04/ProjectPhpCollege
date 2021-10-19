<?php
	include 'conectamysql.php'; // arquivo que estabelece a conexão
	$db_selecionado = mysqli_select_db($con, 'starsite');

	if (!$db_selecionado)
		exit('Não foi possível selecionar a base de dados: ' . mysqli_error($con));

	$sql = 'SELECT * FROM Cliente';

	$resultado = mysqli_query($con, $sql);

	$numeroresultados = mysqli_num_rows($resultado);

	if ($numeroresultados > 0) {
		echo 'Foram encontrados '.$numeroresultados.' resultados.<br />'; 

		while ($linha = mysqli_fetch_array($resultado))
			echo 'Username: '.stripslashes($linha['nome_usuario']). ' - Nome completo: '.stripslashes($linha['nome']).'<br />';
	}

	mysqli_free_result($resultado);
	mysqli_close($con);
?>
