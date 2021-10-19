<?php
	 session_start();
	 include './class/pessoa.php';

	 if(!isset($_POST["email"]) or !isset($_POST["senha"]))

	 	{
	 	exit ('Você não preencheu todos os dados do formulário');
	 }

	 	$tmpemail=addslashes(trim($_POST["email"]));
	 	$tmpsenha=md5($_POST["senha"]);
	           
	    $verifica = "SELECT * FROM pessoa WHERE email = 
	    '$tmpemail' AND senha = '$tmpsenha'"; 

	    $cadv= mysqli_query($con, $verifica);

	      if (mysqli_num_rows($cadv)<=0){
	        echo"<script language='javascript' type='text/javascript'>
	        alert('Login e/ou senha incorretos');window.location
	        .href='Login.html';</script>";
	        die();
	      }
	      else{
	        setcookie("login",$email);
	        header("Location:inicio-log.html");
      }

 ?>