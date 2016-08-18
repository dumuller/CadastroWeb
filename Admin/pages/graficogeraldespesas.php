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
    <script src="libraries/RGraph.common.dynamic.js" ></script>
    <script src="libraries/RGraph.common.tooltips.js" ></script>
    <script src="libraries/RGraph.common.effects.js" ></script>
    <script src="libraries/RGraph.pie.js" ></script>
   
</head>

 <?php
      include('conecta.php');
      $ano=$_GET['ano1'];
    
      $total=0;    

      $sql= "SELECT  sum(valor) FROM dre WHERE ano ='$ano' and descricao='DESPESAS VARIAVEIS DE VENDA'";
      $sql1= "SELECT  sum(valor) FROM dre WHERE ano ='$ano' and descricao='CUSTO PRODUTOS VENDIDOS'";
      $sql2= "SELECT  sum(valor) FROM dre WHERE ano ='$ano' and descricao='CUSTOS FIXOS'";
      $sql3= "SELECT  sum(valor) FROM dre WHERE ano ='$ano' and descricao='DESPESAS OPERACIONAIS'";
      $sql4= "SELECT  sum(valor) FROM dre WHERE ano ='$ano' and descricao='DEPRECIACAO'";
       $sql5= "SELECT  sum(valor) FROM dre WHERE ano ='$ano' and descricao='DEVOLUCAO DE VENDAS'";
 
   
 		  
			$editar =mysql_query($sql);
			$editar1 =mysql_query($sql1);
			$editar2 =mysql_query($sql2);
			$editar3 =mysql_query($sql3);
			$editar4 =mysql_query($sql4);
			$editar5 =mysql_query($sql5);
       list($despesa_venda)=@mysql_fetch_row($editar);
       list($custo_produtos_vendidos)=@mysql_fetch_row($editar1);
      list($custo_fixo)=@mysql_fetch_row($editar2);
      list($despesa_administrativa)=@mysql_fetch_row($editar3);
      list($depreciacao)=@mysql_fetch_row($editar4);
      list($devolucao)=@mysql_fetch_row($editar5);
       $total=$despesa_venda+$custo_produtos_vendidos+$custo_fixo+$despesa_administrativa+$depreciação+$devolucao;
       
 if ($total== 0){
        echo "<script>alert('Nao existe Faturamento!');</script>";
        }

      else{  
       $despesa_venda1=($despesa_venda*100)/$total;
      $despesa_venda1 = round($despesa_venda1, 2);
      $custo_produtos_vendidos1=($custo_produtos_vendidos*100)/$total;
      $custo_produtos_vendidos1 = round($custo_produtos_vendidos1, 2);
      $custo_fixo1=($custo_fixo*100)/$total;
      $custo_fixo1 = round($custo_fixo1, 2);
      $despesa_administrativa1=($despesa_administrativa*100)/$total;
      $despesa_administrativa1 = round($despesa_administrativa1, 2);
      $depreciacao1=($depreciacao*100)/$total;
      $depreciacao1 = round($depreciacao1, 2);
      $devolucao1=($devolucao*100)/$total;
      $devolucao1 = round($devolucao1, 2);
      
      }
    $despesa_venda2=number_format($despesa_venda, 2, ",", ".");
    $custo_produtos_vendidos2=number_format($custo_produtos_vendidos, 2, ",", ".");
    $custo_fixo2=number_format($custo_fixo, 2, ",", ".");
    $despesa_administrativa2=number_format($despesa_administrativa, 2, ",", ".");
    $depreciacao2=number_format($depreciacao, 2, ",", ".");
    $devolucao2=number_format($devolucao, 2, ",", ".");
    $total2=number_format($total, 2, ",", ".");
    ?>
 	
		<script> 
    var despesa_venda=<? echo $despesa_venda1; ?>;
    var custo_produtos_vendidos=<? echo $custo_produtos_vendidos1; ?>;
    var custo_fixo=<? echo $custo_fixo1; ?>;
    var despesa_administrativa=<? echo $despesa_administrativa1; ?>;
    var depreciacao=<? echo $depreciacao1; ?>;
    var devolucao=<? echo $devolucao1; ?>;

  // alert('Custo: '+custo+' Margem: '+margem);
    
    window.onload = function ()
        {
        
        var pie1 = new RGraph.Pie('cvs', [devolucao,custo_produtos_vendidos,custo_fixo,despesa_administrativa,depreciacao,despesa_venda]);
        pie1.Set('chart.radius', 120);
        pie1.Set('chart.tooltips', ['Devolucao('+ devolucao +'%)', 'Custo Produtos Vendidos:('+ custo_produtos_vendidos +'%)', 'Custos Fixos:('+ custo_fixo +'%)','Despesas Operacionais:('+ despesa_administrativa +'%)','Depreciacao('+ depreciacao +'%)','Despesas Variaveis Venda:('+ despesa_venda +'%)']);
        pie1.Set('chart.labels', ['Devolucao('+ devolucao +'%)', 'Custo Produtos Vendidos:('+ custo_produtos_vendidos +'%)', 'Custos Fixos:('+ custo_fixo +'%)','Despesas Operacionais:('+ despesa_administrativa +'%)','Depreciacao('+ depreciacao +'%)','Despesas Variaveis Venda:('+ despesa_venda +'%)']);
        pie1.Set('chart.strokestyle', 'white');
        pie1.Set('chart.colors', ['#FF9900','#FF00CC','#98ED00','#0066FF','#00CC00','#CC1111']); 
        pie1.Set('chart.linewidth', 5);
        pie1.Set('chart.shadow', true);
        pie1.Set('chart.shadow.blur', 10);
        pie1.Set('chart.shadow.offsetx', 0);
        pie1.Set('chart.shadow.offsety', 0);
        pie1.Set('chart.shadow.color', '#000');
        pie1.Set('chart.text.color', '#999');
        
        var explode = 20;

        function myExplode (obj)
        {
            window.__pie__ = pie1;

            for (var i=0; i<obj.data.length; ++i) {
                setTimeout('window.__pie__.Explode('+i+',10)', i * 50);
            }
        }

        if (RGraph.isOld()) {
            pie1.Draw();
        
        } else if (navigator.userAgent.toLowerCase().indexOf('firefox') >= 0) {
            RGraph.Effects.Pie.RoundRobin(pie1);
        
        } else {
            /**
            * The RoundRobin callback initiates the exploding
            */

            RGraph.Effects.Pie.RoundRobin(pie1, null, myExplode);
            RGraph.Effects.Pie.Implode(pie1);
        }                  
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
              
                    <div class="panel-red">
                        <div class="panel-heading">
                        <center>
                        <h4>
                           <b>Despesas e Custos e Devoluções Acumulados no Ano de <?php echo $ano?>: R$=<?php echo $total2?></b>
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

          		<div style="float:left;">
            
           
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           
            
                  </div>
           
            
              
         
                
                <div style="float:left;">
            
            
            
               
                  <img src="css/img/red.jpg" width="20" height="20" alt="Metas" title="Custos"/>  <b> Despesas Variaveis de Venda:<font color=red><?php echo $despesa_venda2; ?>&nbsp;&nbsp;(<?php echo $despesa_venda1; ?>%) </font><br> 
                  <img src="css/img/roxo.jpg" width="20" height="20" alt="Metas" title="Custos"/>  <b> Custo Produtos Vendidos:<font color=#FF33CC>(<?php echo $custo_produtos_vendidos2; ?>&nbsp;&nbsp;(<?php echo $custo_produtos_vendidos1; ?>%) </font><br> 
                 <img src="css/img/green.jpg" width="20" height="20" alt="Metas" title="Custos"/>  <b>  Custos Fixos:<font color=#66CC00><?php echo $custo_fixo2; ?>&nbsp;&nbsp;(<?php echo $custo_fixo1; ?>%)</font><br> 
                
    </div>
                  

  
                  
                  <div style="float:left;">
                          
                  <img src="css/img/azul.jpg" width="20" height="20" alt="Metas" title="Custos"/>  <b>  Despesas Operacionais:<font color=#3366FF><?php echo $despesa_administrativa2; ?>&nbsp;&nbsp;(<?php echo $despesa_administrativa1; ?>%)</font><br> 
                 <img src="css/img/verde.jpg" width="20" height="20" alt="Metas" title="Custos"/>  <b>  Depreciação:<font color=#009933><?php echo $depreciacao2; ?>&nbsp;&nbsp;&nbsp;(<?php echo $depreciacao1; ?>%)</font><br> 
                 <img src="css/img/perigo.jpg" width="20" height="20" alt="Metas" title="Custos"/>  <b>  Devolução Vendas:<font color=#009933><?php echo $devolucao2; ?>&nbsp;&nbsp;&nbsp;(<?php echo $devolucao1; ?>%)</font><br> 
        
                  </div>
                   <div>
                   
               <div>
            <center>

                <canvas id="cvs" width="760" height="400">[No canvas support]</canvas></p>
                
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
