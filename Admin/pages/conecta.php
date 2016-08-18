<?php
   
   $host = "localhost"; 
   $usuario = "root"; 
  $senha = "111213"; 
  $dbase = "controladoria"; 
  $con = mysql_connect($host,$usuario,$senha);
  $db = mysql_select_db($dbase, $con); 
  if (!$con) {
   echo "Erro de conexão ao banco de dados!";
 exit();
}
?>
