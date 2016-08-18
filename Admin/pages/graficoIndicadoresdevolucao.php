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

<body>

<?php
     include('conecta.php');
     $ano=$_GET['ano1'];
           for ($i = 1; $i <= 12; $i++) {
		  if ($i<10){


        $sql15= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-0$i' and descricao='Devolucoes de Venda'";
       
       }
       else{
      
        $sql15= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-$i' and descricao='Devolucoes de Venda'"; 
       
       
       }
       
  

      $editar15 =mysql_query($sql15);
   

       list($valor,$alcancado)=@mysql_fetch_row($editar15);
       $padraoresultadoliquido[$i]= $valor;
       $alcancadoresultadoliquido[$i]=$alcancado;
        if($alcancado<0){
       $variacaoresultadoliquido[$i]=$alcancado-$valor;
       }
       else{
       $variacaoresultadoliquido[$i]=$valor-$alcancado;
       }
       
      if($padraoresultadoliquido[$i]==''){
       $padraoresultadoliquido[$i]=0.00;
      } 
      if($alcancadoresultadoliquido[$i]==''){
       $alcancadoresultadoliquido[$i]=0.00;
      } 
      if($variacaoresultadoliquido[$i]==''){
       $variacaoresultadoliquido[$i]=0.00;
      } 
      
      
       $padraoresultadoliquido1[$i]=number_format($padraoresultadoliquido[$i], 2, ",", ".");
      $alcancadoresultadoliquido1[$i]=number_format($alcancadoresultadoliquido[$i], 2, ",", ".");
      $variacaoresultadoliquido1[$i]=number_format($variacaoresultadoliquido[$i], 2, ",", ".");
      
      }
         
      		?>   
          
          	<script>
    var jan = '<? echo $padraoresultadoliquido[1]; ?>';
    var jan2 = '<? echo $alcancadoresultadoliquido[1]; ?>';
    var jan3 = '<? echo $variacaoresultadoliquido[1]; ?>';
    
     var fev = '<? echo $padraoresultadoliquido[2]; ?>';
    var fev2 = '<? echo $alcancadoresultadoliquido[2]; ?>';
    var fev3 = '<? echo $variacaoresultadoliquido[2]; ?>';
    
     var mar = '<? echo $padraoresultadoliquido[3]; ?>';
    var mar2 = -1;
    var mar3 = -1;
    
    var abr = '<? echo $padraoresultadoliquido[4]; ?>';
    var abr2 = '<? echo $alcancadoresultadoliquido[4]; ?>';
    var abr3 = '<? echo $variacaoresultadoliquido[4]; ?>';
    
    var mai = '<? echo $padraoresultadoliquido[5]; ?>';
    var mai2 = '<? echo $alcancadoresultadoliquido[5]; ?>';
    var mai3 = '<? echo $variacaoresultadoliquido[5]; ?>';
    
     var jun = '<? echo $padraoresultadoliquido[6]; ?>';
    var jun2 = '<? echo $alcancadoresultadoliquido[6]; ?>';
    var jun3 = '<? echo $variacaoresultadoliquido[6]; ?>';
    
     var jul = '<? echo $padraoresultadoliquido[7]; ?>';
    var jul2 = '<? echo $alcancadoresultadoliquido[7]; ?>';
    var jul3 = '<? echo $variacaoresultadoliquido[7]; ?>';
    
     var ago = '<? echo $padraoresultadoliquido[8]; ?>';
    var ago2 = '<? echo $alcancadoresultadoliquido[8]; ?>';
    var ago3 = '<? echo $variacaoresultadoliquido[8]; ?>';
    
     var set = '<? echo $padraoresultadoliquido[9]; ?>';
    var set2 = '<? echo $alcancadoresultadoliquido[9]; ?>';
    var set3 = '<? echo $variacaoresultadoliquido[9]; ?>';
    
    var out = '<? echo $padraoresultadoliquido[10]; ?>';
    var out2 = '<? echo $alcancadoresultadoliquido[10]; ?>';
    var out3 = '<? echo $variacaoresultadoliquido[10]; ?>';
    
    var nov = '<? echo $padraoresultadoliquido[11]; ?>';
    var nov2 = '<? echo $alcancadoresultadoliquido[11]; ?>';
    var nov3 = '<? echo $variacaoresultadoliquido[11]; ?>';
    
     var dez = '<? echo $padraoresultadoliquido[12]; ?>';
    var dez2 = '<? echo $alcancadoresultadoliquido[12]; ?>';
    var dez3 = '<? echo $variacaoresultadoliquido[12]; ?>';
      
      
      
    window.onload = function ()
        {
            var bar5 = new RGraph.Bar('cvs', [[jan,jan2,jan3],[fev,fev2,fev3],[mar,mar2,mar3],[abr,abr2,abr3],[mai,mai2,mai3],[jun,jun2,jun3],[jul,jul2,jul3],[ago,ago2,ago3],[set,set2,set3],[out,out2,out3],[nov,nov2,nov3],[dez,dez2,dez3]]);
            bar5.Set('chart.colors', ['#11CCCC','#98ED00', '#CC1111' ]); 
            bar5.Set('chart.tooltips', ['Valor Ideal: ' + jan, 'Valor Alcancado: ' + jan2, 'Variacao: ' + jan3, 'Valor Ideal: ' + fev, 'Valor Alcancado: ' + fev2, 'Variacao : ' + fev3, 'Valor Ideal: ' + mar, 'Valor Alcancado: ' + mar2, 'Variacao:' + mar3, 'Valor Ideal: ' + abr, 'Valor Alcancado:  ' + abr2, 'Variacao:' + abr3, 'Valor Ideal: ' + mai, 'Valor Alcancado: ' + mai2, 'Variacao: ' + mai3, 'Valor Ideal:  ' + jun, 'Valor Alcancado: ' + jun2, 'Variacao: ' + jun3,'Valor Ideal: ' + jul, 'Valor Alcancado: ' + jul2, 'Variacao: ' + jul3, 'Valor Ideal: ' + ago, 'Valor Alcancado: ' + ago2, 'Variacao : ' + ago3, 'Valor Ideal: ' + set, 'Valor Alcancado: ' + set2, 'Variacao:' + set3, 'Valor Ideal: ' + out, 'Valor Alcancado:  ' + out2, 'Variacao:' + out3, 'Valor Ideal: ' + nov, 'Valor Alcancado: ' + nov2, 'Variacao: ' + nov3, 'Valor Ideal:  ' + dez, 'Valor Alcancado: ' + dez2, 'Variacao: ' + dez3]);
            bar5.Set('chart.labels', ['JAN', 'FEV', 'MAR','ABR','MAI','JUN','JUL','AGO','SET','OUT','NOV','DEZ']);
            bar5.Set('chart.strokestyle', 'transparent');
            bar5.Set('chart.variant', '3d');
            bar5.Set('chart.text.size', 10);
            bar5.Set('chart.ymax', 20);
            bar5.Set('chart.scale.round', true);
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
            <div class="row">
              
                    <div class="panel-yellow">
                        <div class="panel-heading">
                        <center>
                        <h4>
                          Gráfico Indicadores Devoluções de Venda de Desempenho no Ano de <?php echo $ano?>
                            </h4>
                            </center>
                        </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                
                        </div>
                        </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                               	<form id="form1" name="form1" action="<?php $_SERVER['PHP_SELF']?>"" method="post">
	
						<div style="float:left;">
            
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           
            
                  </div>
           
              
         
                
                <div style="float:left;">
            
            
                   <img src="css/img/laranja.jpg" width="20" height="20" alt="Indicadores" title="Indicadores"/>  <b>Jan:<font color=blue>Ideal</b>:<?php echo $padraoresultadoliquido1[1];?> </font> <font color=#006600>Alcançado:<?php echo $alcancadoresultadoliquido1[1]; ?> </font><font color=red>Variação:<?php echo $variacaoresultadoliquido1[1];?> </font><br> 
                  <img src="css/img/laranja.jpg" width="20" height="20" alt="Indicadores" title="Indicadores"/>  <b>Fev:<font color=blue>Ideal</b>:<?php echo $padraoresultadoliquido1[2];?> </font> <font color=#006600>Alcançado:<?php echo $alcancadoresultadoliquido1[2]; ?> </font><font color=red> Variação:<?php echo $variacaoresultadoliquido1[2];?> </font><br>
                  <img src="css/img/laranja.jpg" width="20" height="20" alt="Indicadores" title="Indicadores"/>  <b>Marc:<font color=blue>Ideal</b>:<?php echo $padraoresultadoliquido1[3];?> </font> <font color=#006600>Alcançado:<?php echo $alcancadoresultadoliquido1[3]; ?> </font><font color=red> Variação:<?php echo $variacaoresultadoliquido1[3];?> </font><br>
                  <img src="css/img/laranja.jpg" width="20" height="20" alt="Indicadores" title="Indicadores"/>  <b>Abril:<font color=blue>Ideal</b>:<?php echo $padraoresultadoliquido1[4];?> </font> <font color=#006600>Alcançado:<?php echo $alcancadoresultadoliquido1[4]; ?> </font><font color=red>Variação:<?php echo $variacaoresultadoliquido1[4];?> </font><br> 
                  <img src="css/img/laranja.jpg" width="20" height="20" alt="Indicadores" title="Indicadores"/>  <b>Maio:<font color=blue>Ideal</b>:<?php echo $padraoresultadoliquido1[5];?> </font> <font color=#006600>Alcançado:<?php echo $alcancadoresultadoliquido1[5]; ?> </font><font color=red> Variação:<?php echo $variacaoresultadoliquido1[5];?> </font><br>
                  <img src="css/img/laranja.jpg" width="20" height="20" alt="Indicadores" title="Indicadores"/>  <b>Junho:<font color=blue>Ideal</b>:<?php echo $padraoresultadoliquido1[6];?> </font> <font color=#006600>Alcançado:<?php echo $alcancadoresultadoliquido1[6]; ?> </font><font color=red> Variação:<?php echo $variacaoresultadoliquido1[6];?> </font><br>
        
                   </div>
                  

  
                  
                  <div style="float:left;">
                          
                <img src="css/img/laranja.jpg" width="20" height="20" alt="Indicadores" title="Indicadores"/>  <b>Julho:<font color=blue>Ideal</b>:<?php echo $padraoresultadoliquido1[7];?> </font> <font color=#006600>Alcançado:<?php echo $alcancadoresultadoliquido1[7]; ?> </font><font color=red>Variação:<?php echo $variacaoresultadoliquido1[7];?> </font><br> 
                  <img src="css/img/laranja.jpg" width="20" height="20" alt="Indicadores" title="Indicadores"/>  <b>Agosto:<font color=blue>Ideal</b>:<?php echo $padraoresultadoliquido1[8];?> </font> <font color=#006600>Alcançado:<?php echo $alcancadoresultadoliquido1[8]; ?> </font><font color=red> Variação:<?php echo $variacaoresultadoliquido1[8];?> </font><br>
                  <img src="css/img/laranja.jpg" width="20" height="20" alt="Indicadores" title="Indicadores"/>  <b>Setembro:<font color=blue>Ideal</b>:<?php echo $padraoresultadoliquido1[9];?> </font> <font color=#006600>Alcançado:<?php echo $alcancadoresultadoliquido1[9]; ?> </font><font color=red> Variação:<?php echo $variacaoresultadoliquido1[9];?> </font><br>
                   <img src="css/img/laranja.jpg" width="20" height="20" alt="Indicadores" title="Indicadores"/>  <b>Outubro:<font color=blue>Ideal</b>:<?php echo $padraoresultadoliquido1[10];?> </font> <font color=#006600>Alcançado:<?php echo $alcancadoresultadoliquido1[10]; ?> </font><font color=red>Variação:<?php echo $variacaoresultadoliquido1[10];?> </font><br> 
                  <img src="css/img/laranja.jpg" width="20" height="20" alt="Indicadores" title="Indicadores"/>  <b>Novembro:<font color=blue>Ideal</b>:<?php echo $padraoresultadoliquido1[11];?> </font> <font color=#006600>Alcançado:<?php echo $alcancadoresultadoliquido1[11]; ?> </font><font color=red> Variação:<?php echo $variacaoresultadoliquido1[11];?> </font><br>
                  <img src="css/img/laranja.jpg" width="20" height="20" alt="Indicadores" title="Indicadores"/>  <b>Dezembro:<font color=blue>Ideal</b>:<?php echo $padraoresultadoliquido1[12];?> </font> <font color=#006600>Alcançado:<?php echo $alcancadoresultadoliquido1[12]; ?> </font><font color=red> Variação:<?php echo $variacaoresultadoliquido1[12];?> </font><br>
                   </div>
                   <div>
                   
               <div>
            <center>

                <canvas id="cvs" width="900" height="500">[No canvas support]</canvas></p>
                
             </center>
            <br>
                 <br>
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
