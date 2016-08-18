<?php
include "conecta.php";

$codigo=$_POST["codigo"];
$fornecedor=$_POST["fornecedor"];
$descricao=$_POST["descricao"];
$tipo=$_POST["tipo"];
$valorcompra=$_POST["valorcompra"];
$percentualvenda=$_POST["percentualvenda"];

$valor1 = $valorcompra;
$valor = $valor1 + ($valor1 * ($percentualvenda /100));

$valor = str_replace(".", "", $valor);

$consulta = mysql_query("select * from produto where codigo='$codigo'");
$linha = mysql_num_rows($consulta);

if($linha!=0){
	echo"<script> alert('Produto já Existe');</script>";
	echo"<script>window.location='index.php';</script>";
	}
	
else{
$sql = "insert into produto (codigo, Fornecedor_idFornecedor, descricao, tipo, valorcompra, porcentovenda, valorvenda) values 
('$codigo','$fornecedor','$descricao','$tipo','$valorcompra','$percentualvenda','$valor')";
if(mysql_query($sql)){
	echo"<script>alert('Cadastro Efetuado com Sucesso');</script>";
	echo"<script>window.location='index.php';</script>"; 
	}
else{
         echo"<script>alert('Erro ao Efetuar Cadastro');</script>";
	echo"<script>window.location='index.php';</script>"; 
	}
}
?>