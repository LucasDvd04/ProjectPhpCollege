<?php
	
	  $clienteatual = new Pessoa($tmpnome, $tmpemail, $tmptelefone, $tmpendereco, $tmpsenha, $tmpdata); 
	  include 'conectamysql.php'; 
	  $db_selecionado = mysqli_select_db($con,'starsite');

	  if (!$db_selecionado)
	  	exit('Não foi possível selecionar a base de dados: '.mysqli_error($con));

	  $sql = 'INSERT INTO pessoa (nome, email, tel, endereco, senha, Dt_Nascimento) VALUES 
	  ("'.$tmpnome.'", 
	  "'.$tmpemail.'",
	  "'.$tmptelefone.'", 
	  "'.$tmpendereco.'",
	  "'.$tmpsenha.'", 
	  "'.$tmpdata.'")';


	  $clienteinserido = mysqli_query($con, $sql);
	  	
	  mysqli_close($con);
?>

session_start();
	 include './class/pessoa.php';

	  if(!isset($_POST["nome"]) or !isset($_POST["email"]) or !isset($_POST["tel"]) or !isset($_POST["endereco"]) or !isset($_POST["senha"]) or !isset($_POST["Dt_Nascimento"]))

	  	{
	 	exit ('Você não preencheu todos os dados do formulário');
	 }


	$verEmail = "SELECT * FROM pessoa WHERE '$tmpemail' = email";
	  
	  $rest = mysql_query($con,$verEmail);
	  $linhas= mysql_num_rows($rest,'starsite');	  

	  	if (mysql_num_rows($rest,'starsite')<1 ) {
	  		header("Location:Logado/inicio-log.html");
	  	}
	  	else{
	  		exit('Não foi possível conectar ao banco de dados: '.mysqli_connect_error());
	  	}