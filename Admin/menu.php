 <!DOCTYPE HTML>
 <html lang="pt-br">
 <head>
 	<meta charset="UTF-8">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de Controladoria Reafrio</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
   
</head>

<body>
   


    <div id="wrapper">

        <!-- Começa o Menu Lateral -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
                
                 <a class="navbar-brand" href="../index.php">Sair do Sistema</a>
            </div>
           

            <div class="navbar-default sidebar" role="navigation">
              
                    <ul class="nav" id="side-menu">
                        
                        <li>
                        
                   <a href="#"><i class="fa fa-dashboard fa-fw"></i>Sistema Teste</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Cadastros<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                  <a href="cadastrousuario.php">Usuarios</a>
                                </li>
                                 <li>
                                  <a href="cadastrofornecedor.php">Fornecedores</a>
                                </li>
                                 <li>
                                  <a href="cadastroproduto.php">Produtos</a>
                                </li>
                               
                            </ul>
                        </li>
                        
                          <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Consulta<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                   <a href="pesquisausuario.php">Usuarios</a>
                                   </li>
                                   
                                    <li>
                                   <a href="pesquisafornecedor.php">Fornecedor</a>
                                   </li>
                                   
                                    <li>
                                   <a href="#">Produto</a>
                                   </li>
                                   
                                     <li>
                                   <a href="#">Estoque por Produto</a>
                                   </li>
                                   
                                    <li>
                                   <a href="#">Estoque por Fornecedor</a>
                                   </li>
                                
                            </ul>
                        </li>
                        
                           <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Entradas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                  <li>
                                   <a href="#">Produtos</a>
                                </li>

                            </ul>
                       
                        </li>
                        
                         <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Saida<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                   <a href="#">Produtos</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                         <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Graficos <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                 <li>
                                   <a href="#">Graficos Produtos</a>
                                </li>
                                
                                 <li>
                                   <a href="#">Fornecedores</a>
                                </li>
                                
                                   
                                  </ul>
                            <!-- /.nav-second-level -->
                        </li>
                                
                                 <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Relatorios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                   <a href="#">Relatorios</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                      
                </div>
           
          
      
        </nav>  <!-- Termina o Menu Lateral -->


        <div id="page-wrapper">
            <div class="row">
                 <div class="panel panel-success">
                        <div class="panel-heading">
                        <center>
                        <h3>
                            Sistema Teste
                            </h3>
                            </center>
                        </div>
                       
                    </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                               
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Cadastros</div>
                                    <div>Cadastros</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Visualizar Detalhado</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Consulta</div>
                                    <div>Consultas</div>
                                </div>
                            </div>
                        </div>
                       <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Visualizar Detalhado</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
               
                        <div class="col-lg-3 col-md-6">
                       <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Relatórios</div>
                                    <div>Relatórios Gerais</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Visualizar Detalhado</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
           
                             <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Graficos</div>
                                    <div>Gráficos Resultados</div>
                                </div>
                            </div>
                        </div>
                        
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Visualizar Detalhado</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                 </div>
          
          

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
