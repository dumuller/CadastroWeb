<?php
include "conecta.php";
$login=$_POST["login"];
$senha=$_POST["senha"];
$consulta = mysql_query("select * from  usuario where usuario= '$login' and senha='$senha'");
	$linha = mysql_num_rows($consulta);
	if($linha==0) {
		echo"<script>alert('Usuario ou senha Invalidos');</script>";
    echo "<script>window.location ='index.php';</script>";
    }
 	else{
      $sql = mysql_query("select nivel from  usuario where usuario= '$login' and senha='$senha'");
     while($resultado = mysql_fetch_array($sql)) {
     $nivel=$resultado['nivel'];
     }
   if($nivel=='administrador') {
      session_start();
				$_SESSION['login_usuario'] = $login;
				$_SESSION['senha_usuario'] = $senha;
			header("Location:Admin/index.php");
     }
     
     if($nivel=='usuario') {
      session_start();
				$_SESSION['login_usuario'] = $login;
				$_SESSION['senha_usuario'] = $senha;
			header("Location:Usuario/index.php");
     }
     }
?>
