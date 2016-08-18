<?php

function pesquisarusuario(){

	$sql = "select * from usuario";
	
	 $editar = mysql_query($sql);
     while ($l = mysql_fetch_array($editar)){	
    $id = $l['idUsuario'];
	$nome = $l['nome'];
	$usuario = $l['usuario'];
	$nivel = $l['nivel'];

echo "
      
      <tr class=warning>
      <td> $nome </td> 
     <td align=right> $usuario</td> 
      <td align=right>$nivel </td>  
     <td> <a href=editausuario.php?&id=$id> 
      <button type='button' class='btn btn-primary btn-xs'>Visualizar</button> </td>  
 </a>                                   
      </tr>
      ";

}
}

function pesquisarfornecedor(){

  $sql = "select * from fornecedor";
  
   $editar = mysql_query($sql);
     while ($l = mysql_fetch_array($editar)){ 
    $id = $l['idFornecedor'];
    $nome = $l['nome'];
  $endereco = $l['endereco'];
  $telefone = $l['telefone'];
  $email = $l['email'];
  $cnpj = $l['cnpj'];

echo "
      
      <tr class=warning>
      <td> $nome </td> 
     <td align=right> $endereco</td> 
      <td align=right>$telefone </td>  
      <td align=right>$email </td> 
      <td align=right>$cnpj </td>   
     <td> <a href=editafornecedor.php?&id=$id> 
      <button type='button' class='btn btn-primary btn-xs'>Visualizar</button> </td>  
 </a>                                   
      </tr>
      ";

}
}

?>
