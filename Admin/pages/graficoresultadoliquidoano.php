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
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     
	  <script src="libraries/RGraph.common.core.js" ></script>
    <script src="libraries/RGraph.common.annotate.js" ></script>
    <script src="libraries/RGraph.common.context.js" ></script>
    <script src="libraries/RGraph.common.tooltips.js" ></script>
    <script src="libraries/RGraph.common.resizing.js" ></script>
    <script src="libraries/RGraph.common.dynamic.js"></script>
    <script src="libraries/RGraph.bar.js" ></script> 
    <script src="libraries/RGraph.common.effects.js" ></script>
    <script src="libraries/RGraph.line.js" ></script>
    <script src="libraries/jquery.min.js" ></script>

</head>

 <?php
      include('conecta.php');
      $ano=$_GET['ano1'];
    
      $total=0;    
      for ($i = 1; $i <= 12; $i++) {
	
  $sql= "SELECT  valor FROM dre WHERE mesano ='$ano-$i' and descricao='RESULTADO LIQUIDO'";


 		  
			$editar =mysql_query($sql);
       list($valorcompra)=@mysql_fetch_row($editar);
       $mes[$i]= $valorcompra;
       $total=$total+$valorcompra;
       
       
       if($mes[$i]==''){
       $mes[$i]=0.00;
       }
       $me[$i]=number_format($mes[$i], 2, ",", ".");
       
           }
 if($total==''){
       $total=0.00;
       }
       $total=number_format($total, 2, ",", ".");
		?>
		
		<script>
    var jan = '<? echo $mes[1]; ?>';
    var fev = '<? echo $mes[2]; ?>';
    var mar = '<? echo $mes[3]; ?>';
    var abr = '<? echo $mes[4]; ?>';
    var mai = '<? echo $mes[5]; ?>';
    var jun = '<? echo $mes[6]; ?>';
    var jul = '<? echo $mes[7]; ?>';
    var ago = '<? echo $mes[8]; ?>';
    var set = '<? echo $mes[9]; ?>';
    var out = '<? echo $mes[10]; ?>';
    var nov = '<? echo $mes[11]; ?>';
    var dez = '<? echo $mes[12]; ?>';
    

    
    window.onload = function ()
        {
            var bar5 = new RGraph.Bar('cvs', [jan,fev,mar,abr,mai,jun,jul,ago,set,out,nov,dez]);
            bar5.Set('chart.colors', ['#0066FF']); 
            bar5.Set('chart.tooltips', ['Resultado Liquido em Janeiro em R$: ' + jan, 'Resultado Liquido em Fevereiro em R$: ' + fev, 'Resultado Liquido em Março em R$: ' + mar, 'Resultado Liquido em Abril em R$: ' + abr, 'Resultado Liquido em Maio em R$: ' + mai, 'Resultado Liquido em Junho em R$: ' + jun, 'Resultado Liquido em Julho em R$: ' + jul, 'Resultado Liquido em Agosto em R$: ' + ago, 'Resultado Liquido em Setembro em R$: ' + set, 'Resultado Liquido em Outubro em R$: ' + out, 'Resultado Liquido em Novembro em R$: ' + nov, 'Resultado Liquido em Dezembro em R$: ' + dez]);
            bar5.Set('chart.labels', ['JAN', 'FEV', 'MAR','ABR','MAI','JUN','JUL','AGO','SET','OUT','NOV','DEZ']);
            bar5.Set('chart.strokestyle', 'transparent');
            bar5.Set('chart.text.size', 7);
            bar5.Set('chart.variant', '3d');
            RGraph.Effects.Bar.Grow(bar5);
            bar5.Draw();           
         }
    </script>
                 
  <div id="wrapper">

        <!-- Começa o Menu Lateral -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
                
                 <a class="navbar-brand" href="../../index.php">Sistema Controladoria Empresa Reafrio Versão 1.0</a>
            </div>
           

            <div class="navbar-default sidebar" role="navigation">
              
                    <ul class="nav" id="side-menu">
                        
                      <li>
                        
                   <a href="<?php echo "index.php?ano1=$ano";?>"><i class="fa fa-dashboard fa-fw"></i> Controladoria Reafrio</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> DRE<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                  <a href="<?php echo "dreresumidaano.php?&ano1=$ano";?>">DRE Resumida</a>
                                </li>
                                 <li>
                                  <a href="<?php echo "dredetalhadaano.php?&ano1=$ano";?>">DRE Detalhada</a>
                                </li>
                                <li>
                                   <a href="<?php echo "simulacaodreano.php?&ano1=$ano";?>">DRE Simulação Porcento</a>
                                </li>
                                
                                 <li>
                                   <a href="<?php echo "simulacaodreanovalor.php?&ano1=$ano";?>">DRE Simulação Valor</a>
                                </li>
                                 
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Indicadores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                   <a href="<?php echo "Indicadoresano.php?&ano1=$ano";?>">Indicadores de Desempenho</a>
                                   </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                           <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Custos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                  <li>
                                   <a href="<?php echo "orcamentoano.php?&ano1=$ano";?>">Plano Orçamentario</a>
                                </li>
                                <li>
                                   <a href="<?php echo "orcamentoanual.php?&ano1=$ano";?>">Plano Orçamentario Anual</a>
                                </li>
                                
                                 <li>
                                   <a href="<?php echo "orcamentoanodenise.php?&ano1=$ano";?>">Plano Orçamentario Denise</a>
                                </li>
                                
                                 <li>
                                   <a href="<?php echo "orcamentoanoeduardo.php?&ano1=$ano";?>">Plano Orçamentario Eduardo</a>
                                </li>
                                
                                  <li>
                                   <a href="<?php echo "orcamentoanoricardo.php?&ano1=$ano";?>">Plano Orçamentario Ricardo</a>
                                </li>
                                
                                  <li>
                                   <a href="<?php echo "orcamentoanoRudimar.php?&ano1=$ano";?>">Plano Orçamentario Rudimar</a>
                                </li>
                                
                                <li>
                                   <a href="<?php echo "orcamentoanosandra.php?&ano1=$ano";?>">Plano Orçamentario Sandra</a>
                                </li>
                                
                                  
                                <li>
                                   <a href="<?php echo "orcamentoanoVitor.php?&ano1=$ano";?>">Plano Orçamentario Vitor</a>
                                </li>
                                
                                
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                         <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Graficos DRE<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                   <a href="<?php echo "graficoresultadoliquidoano.php?&ano1=$ano";?>">Gráfico Resultado Liquido</a>
                                </li>
                                <li>
                                   <a href="<?php echo "graficoreceitabrutaano.php?&ano1=$ano";?>">Gráfico Receita Bruta</a>
                                </li>
                                 <li>
                                   <a href="<?php echo "graficodespesaadminano.php?&ano1=$ano";?>">Gráfico Despesas Admin.</a>
                                </li>
                                
                                  <li>
                                   <a href="<?php echo "graficodespesacomercialnano.php?&ano1=$ano";?>">Gráfico Despesas Comercial</a>
                                </li>
                                <li>
                                   <a href="<?php echo "graficogeraldespesas.php?&ano1=$ano";?>">Gráfico Geral Custos e Desp.</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                         <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Graficos Indicadores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                 <li>
                                   <a href="<?php echo "graficoIndicadoresebitda.php?&ano1=$ano";?>">Indicadores EBITDA</a>
                                </li>
                                
                                   <li>
                                   <a href="<?php echo "graficoIndicadorescustofixo.php?&ano1=$ano";?>">Indicadores Custos Fixos</a>
                                </li>
                                
                                
                                   <li>
                                   <a href="<?php echo "graficoIndicadoresdespesacomercial.php?&ano1=$ano";?>">Indicadores Desp. Comerciais</a>
                                </li>
                                
                                
                                   <li>
                                   <a href="<?php echo "graficoIndicadoresdespesaadministrativa.php?&ano1=$ano";?>">Indicadores Desp.Admin.</a>
                                </li>
                                
                                 <li>
                                   <a href="<?php echo "graficoIndicadoresmargemcontribuicao.php?&ano1=$ano";?>">Indicadores Margem Contrib.</a>
                                </li>
                                
                                 <li>
                                   <a href="<?php echo "graficoIndicadoresdevolucao.php?&ano1=$ano";?>">Indicadores Devolução</a>
                                </li>
                                
                                  </ul>
                            <!-- /.nav-second-level -->
                        </li>
                                
                                 <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Graficos Custos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                   <a href="#">Gráfico</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                      
                </div>
           
          
      
        </nav>  <!-- Termina o Menu Lateral -->

        <div id="page-wrapper">
          
              
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        <center>
                        <h4>
                           <b>Resultado Liquido Acumulado no Ano de <?php echo $ano?>: R$=<?php echo $total?></b>
                            </h4>
                            </center>
                        </div>
            
     <br>
                      
                        <div class="panel-body">
                   
                              
                               <form id="form1" name="form1" action="<?php $_SERVER['PHP_SELF']?>"" method="post">
	
						<div style="float:left;">
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           
            
                  </div>
           
              
         
                
                <div style="float:left;">
            
              
                
            
            
            
             
            
            
               
            
                  <img src="css/img/azul.jpg" width="20" height="20" alt="Metas" title="Resultado"/>  <b> Resultado Liquido Janeiro:<font color=#006633><?php echo $me[1]; ?> </font><br> 
                  <img src="css/img/azul.jpg" width="20" height="20" alt="Metas" title="Resultado"/>  <b> Resultado Liquido Fevereiro:<font color=#006633><?php echo $me[2]; ?> </font><br> 
                 <img src="css/img/azul.jpg" width="20" height="20" alt="Metas" title="Resultado"/>  <b>  Resultado Liquido Março:<font color=#006633><?php echo $me[3]; ?>&nbsp;&nbsp;</font><br> 
                 <img src="css/img/azul.jpg" width="20" height="20" alt="Metas" title="Resultado"/>  <b>  Resultado Liquido  Abril:<font color=#006633><?php echo $me[4]; ?></font><br> 
                 <img src="css/img/azul.jpg" width="20" height="20" alt="Metas" title="Resultado"/>  <b>  Resultado Liquido  Maio:<font color=#006633><?php echo $me[5]; ?></font><br> 
                 <img src="css/img/azul.jpg" width="20" height="20" alt="Metas" title="Resultado"/>  <b>  Resultado Liquido Junho:<font color=#006633><?php echo $me[6]; ?></font><br> 
    </div>
                  

  
                  
                  <div style="float:left;">  
                 <img src="css/img/azul.jpg" width="20" height="20" alt="Metas" title="Resultado"> <b> Resultado Liquido Julho:<font color=#006633><?php echo $me[7]; ?></font><br>  
                 <img src="css/img/azul.jpg" width="20" height="20" alt="Metas" title="Resultado"> <b> Resultado Liquido Agosto:<font color=#006633><?php echo $me[8]; ?></font><br> 
                 <img src="css/img/azul.jpg" width="20" height="20" alt="Metas" title="Resultado"> <b> Resultado Liquido Setembro:<font color=#006633><?php echo $me[9]; ?></font><br> 
                <img src="css/img/azul.jpg" width="20" height="20" alt="Metas" title="Resultado">  <b> Resultado Liquido Outubro:<font color=#006633><?php echo $me[10]; ?></font><br> 
                 <img src="css/img/azul.jpg" width="20" height="20" alt="Metas" title="Resultado"> <b> Resultado Liquido Novembro:<font color=#006633><?php echo $me[11]; ?></font><br> 
                <img src="css/img/azul.jpg" width="20" height="20" alt="Metas" title="Resultado"> <b>  Resultado Liquido Dezembro:<font color=#006633><?php echo $me[12]; ?></font><br> 
        
                   </div>
                   <div>
                   
               <div>
            <center>

                <canvas id="cvs" width="760" height="300">[No canvas support]</canvas></p>
                
             </center>
            
              </div>
        
          </fieldset>
        </form>
          <div class="well">
                                
                                <a class="btn btn-default btn-lg btn-block" target="_blank">Desenvolvido por Controladoria Reafrio</a>
                            </div>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
    
                            
                    </div>
                        </div>
                        <!-- /.panel-body -->
                    
                    <!-- /.panel -->
                </div>
                </div>
 </center>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../bower_components/flot/excanvas.min.js"></script>
    <script src="../bower_components/flot/jquery.flot.js"></script>
    <script src="../bower_components/flot/jquery.flot.pie.js"></script>
    <script src="../bower_components/flot/jquery.flot.resize.js"></script>
    <script src="../bower_components/flot/jquery.flot.time.js"></script>
    <script src="../bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../js/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
