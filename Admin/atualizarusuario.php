<?php

include "conecta.php";
$id=$_POST["id"];
$nome=$_POST["nome"];
$usuario=$_POST["usuario"];
$senha=$_POST["senha"];
$nivel=$_POST["nivel"];

$update= mysql_query("update usuario set idUsuario='$id',nome='$nome',usuario='$usuario',nivel='$nivel',senha='$senha' where idUsuario='$id'") or die ("ERRO");
if ($update != ''){
echo "<script>alert('Usuario  Atualizada com Sucesso');</script>";
echo "<script>window.location ='index.php';</script>"; 
         
            }					
else{
				
echo "<script>alert('Erro ao atualizar os dados');</script>";	
echo "<script>window.location ='editausuario.php';</script>";
            		
				}





?>
