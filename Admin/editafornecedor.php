<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Controladoria Reafrio</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style type="text/css">
table{
	font-size: 12px; 
	}
</style>

<script>

function troca(){

       if(document.getElementById("botao").value=='Editar'){
      document.getElementById("nome").disabled = false; // Habilitar
      document.getElementById("usuario").disabled = false; // Habilitar
      document.getElementById("nivel").disabled = false; // Habilitar
      document.getElementById("senha").disabled = false; // Habilitar
      document.getElementById("botao").value = 'Salvar';
      document.getElementById("excluir").disabled = true; // Habilitar
}
else{
document.formulario.submit();
}
}

</script>
</head>

<body>



<?php

include "menu.php";
include "conecta.php";
$idusuario=$_GET["id"];

$sql = "SELECT * FROM usuario WHERE idUsuario='$idusuario'";

      $editar = mysql_query($sql);
      list($id,$nome,$usuario,$senha,$nivel) = mysql_fetch_row($editar);

  
  ?>
  
   <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form name="formulario"  action="atualizarusuario.php"  method="POST" role="form">
                                        <div class="form-group">
                                            <span class="add-on" style="width: 250px;">ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
							                           	<input type="tex" name="id1" value=<?php echo $id ?> disabled>
							                           	 <input TYPE="hidden" name="id" value="<?php echo $id?>">
							                          </div>
							                           <div class="form-group">
                                         <span class="add-on" style="width: 250px;">Nome &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
							                           	<input type="tex" name="nome" id="nome" value=<?php echo $nome ?> disabled>
							                           </div>
                                        <div class="form-group">
                                            <span class="add-on" style="width: 250px;">Usuario&nbsp;&nbsp;&nbsp;</span>
							                           	<input type="tex" name="usuario" id="usuario" value=<?php echo $usuario ?> disabled>
							                          </div>
							                           <div class="form-group">
                                         <span class="add-on" style="width: 250px;">Nivel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
							                           	<input type="tex" name="nivel" id="nivel" value=<?php echo $nivel?> disabled>
							                           	</div>
							                           	
							                           	<div class="form-group">
                                         <span class="add-on" style="width: 250px;">Senha&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
							                           	<input type="tex" name="senha" id="senha" value=<?php echo $senha?> disabled>
							                           	</div>
							                           	<td><input type="button"  id="botao" value="Editar" onclick="troca()"> &nbsp;&nbsp;&nbsp; 
							                           	<td><input type="button"  id="excluir" value="Excluir" > &nbsp;&nbsp;&nbsp; 
							                           	
							                           	
							                           </div>
                                        </div>
                                        </div>

    </body>
    </html>
