<?php
include "conecta.php";
$nome=$_POST["nome"];
$usuario=$_POST["usuario"];
$senha=$_POST["senha"];
$nivel=$_POST["nivel"];

$sql = "insert into usuario (senha,usuario,nivel,nome) values ('$senha', '$usuario','$nivel','$nome')";
if (mysql_query($sql)){
	echo"<script>alert('Cadastrado com sucesso!');</script>";
	echo"<script>window.location = 'index.php';</script>";
}
else{
	echo"<script>alert('Erro ao efetuar cadastro!');</script>";
	echo"<script>window.location = 'index.php';</script>";
}

?>