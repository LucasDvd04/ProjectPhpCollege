<?php 
$servidor = 'localhost';
$nome_de_usuario = 'root';
$senhaM = '';
$email = $_POST['email'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('servidor','nome_de_usuario','senhaM');
$db = mysql_select_db('starsite');
$query_select = "SELECT email FROM usuarios WHERE email = '$email'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['pessoa'];

 
    if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo email deve ser preenchido');window.location.href='
    cadastro.html';</script>";
 
    }
	else{
      if($logarray == $email){
 
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse email já existe');window.location.href='
        cadastro.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO pessoa (email,senha) VALUES ('$email','$senha')";
        $insert = mysql_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.html'</script>";
        }
      }
    }
?>