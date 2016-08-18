<?php
include "conecta.php";
$nome=$_POST["nome"];
$endereco=$_POST["endereco"];
$telefone=$_POST["telefone"];
$email=$_POST["email"];
$cnpj=$_POST["cnpj"];

$sql = "insert into fornecedor (nome,endereco,telefone,email,cnpj) values ('$nome', '$endereco','$telefone','$email','$cnpj')";
if (mysql_query($sql)){
	echo"<script>alert('Cadastrado com sucesso!');</script>";
	echo"<script>window.location = 'index.php';</script>";
}
else{
	echo"<script>alert('Erro ao efetuar cadastro!');</script>";
	echo"<script>window.location = 'index.php';</script>";
}

?>