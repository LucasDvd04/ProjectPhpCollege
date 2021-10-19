<?php
	 session_start();
	 include './class/pessoa.php';

	 if(!isset($_POST["nome"]) or !isset($_POST["email"]) or !isset($_POST["tel"]) or !isset($_POST["endereco"]) or !isset($_POST["senha"]) or !isset($_POST["Dt_Nascimento"]))
	 {
	 	exit ('Você não preencheu todos os dados do formulário');
	 }
	  $tmpnome=addslashes(trim($_POST["nome"]));
	  $tmpemail=addslashes(trim($_POST["email"]));
	  $tmptelefone=addslashes(trim($_POST["tel"]));
	  $tmpendereco=addslashes(trim($_POST["endereco"]));
	  $tmpsenha=addslashes(trim($_POST["senha"]));
	  $tmpdata=addslashes(trim($_POST["Dt_Nascimento"]));
	  

	  $clienteatual = new Pessoa($tmpnome, $tmpemail, $tmptelefone, $tmpendereco, $tmpsenha, $tmpdata); 
	  include 'conectamysql.php'; 
	  $db_selecionado = mysqli_select_db($con,'starsite');

	  if (!$db_selecionado)
	  	exit('Não foi possível selecionar a base de dados: '.mysqli_error($con));

	  $verEmail = "SELECT * FROM pessoa WHERE email = '$tmpemail'";
	  $rest = mysqli_query($con,$verEmail);

	  	if (mysqli_num_rows($rest)>=1 ) {
	  		echo"<script language='javascript' type='text/javascript'>
        alert('Esse email já existe');window.location.href='cadastro.html';</script>";
	  	}
	  	else{

	  $sql = 'INSERT INTO pessoa (nome, email, tel, endereco, senha, Dt_Nascimento) VALUES 
	  ("'.$tmpnome.'", 
	  "'.$tmpemail.'",
	  "'.$tmptelefone.'", 
	  "'.$tmpendereco.'",
	  "'.$tmpsenha.'", 
	  "'.$tmpdata.'")';


	  $clienteinserido = mysqli_query($con, $sql);

	  header('location: login.html');

	 }
	  	
	  mysqli_close($con);

?>