<!DOCTYPE html>

<html class="no-js">
<head>
  <meta charset="utf-8">
  <title>Sistema de Controladoria</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
  <link rel="stylesheet" href="css/bootstrap1.min.css">
  <link rel="stylesheet" href="css/templatemo_main.css">
</head>
<body class="homepage">

  <?php
  include "menu.php";
  include "conecta.php";
  $sqlfornecedor = mysql_query("SELECT * FROM fornecedor order by nome");
  ?>


  <div id="main-wrapper">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 templatemo-content-wrapper text-center" style="z-index: 1;">
      <h1 class="templatemo-content-wrapper text-center">Cadastro de Produto</h1>
    </ul>
  </div>
  <div class="row">
    <!--Ajusta localização no col-lg-offset -->
    <div class="templatemo-content">
      <section id="home-text" class="inactive"> <!--formulario ativo, que inicia -->
        <div class="col-lg-12 col-md-8 col-sm-4 col-xs-8"> <!--ajustar tamanho -->
          <h2 class="text-center"> Cadastro</h2>
          <p></p>
        </div>
      </section>
      <!-- /.home-text --> 

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-6 templatemo-content-wrapper"> <!--Ajusta localização no col-lg-offset -->
        <section id="formulario1-text" class="active templatemo-content-section">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="col-sm-12 col-md-12">
              <div class="form-group">
                <form name="cadastrarproduto" action="cadastrarproduto.php" method="POST">
                  <div>
                  <Select class="form-control" required="required" name="fornecedor">
                  <div>
                  <option>Selecione um fornecedor...</option>
                  <?php
                  while ($query = mysql_fetch_array($sqlfornecedor))
                  {
                    ?>
                    <option value="<?php echo $query['idFornecedor']; ?>">
                      <?php echo $query['nome']; ?></option>";
                      <?php
                    }
                    ?>
                    </div>
                      </Select>
                       <div class="form-group">
                    <input type="text" class="form-control" required="required" placeholder="Codigo" name="codigo">
                  </div>
                     <div class="form-group">
                    <input type="text" class="form-control" required="required" placeholder="Descrição" name="descricao">
                  </div>
               
                  <select name="tipo" class="form-control" required="required">
                   <div>
                   <option value="">Selecione</option>
                   <option value="materiaprima">Materia Prima</option>               
                   <option value="produtoacabado">Produto Acabado</option>
                   <option value="consumivel">Consumivel</option>
                   <option value="outros">Outros Produtos</option>
                   </div>
                 </select>
                 
                 <div class="form-group">
                  <input type="text" class="form-control" required="required" placeholder="Valor da Compra" name="valorcompra">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" required="required" placeholder="Percentual Para Venda" name="percentualvenda">
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
              </form>
            </div>
          </section>
          <!-- /.formulario1-text --> 

          <!-- /.contact-text --> 
        </div>
        <!-- /.templatemo-content --> 
      </div>
      <!-- /.templatemo-content-wrapper --> 
    </div>
    <!-- /.row --> 

  </div>
  <!-- /#main-wrapper -->

  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- /#preloader --> 
  <?php
  include "rodape.php";
  ?>
  <script src="js/jquery.min.js"></script> 
  <script src="js/jquery.backstretch.min.js"></script> 
  <script src="js/templatemo_script.js"></script> 
  <script src="js/jquery.js"></script> 
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/jquery.prettyPhoto.js"></script> 
  <script src="js/jquery.isotope.min.js"></script> 
  <script src="js/main.js"></script> 
  <script src="js/wow.min.js"></script> -->
</body>
</html>