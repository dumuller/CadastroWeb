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
    
    <style type="text/css">
table{
	font-size: 12px; 
	}
</style>

</head>

<body>
<?php
      include('conecta.php');
     $ano=$_GET['ano1'];
     $opcao=$_GET['opcao'];
      $porcentagem1=$_GET['porcentagem'];
      
          function dre($ano,$mes,$conta){  
        
      $sql= "SELECT  valor FROM dre  WHERE mesano ='$ano-$mes' and descricao='$conta'";   
  
  	$editar =mysql_query($sql);
  	 list($valorcompra)=@mysql_fetch_row($editar);
  	 $valor=$valorcompra;    	 
  	 if($valor==''){
       $valor=0.00;
       }  
  	 
  	 return $valor;
  	 
     
} 
		
         for ($i =1; $i <= 12; $i++) {
       $receita_bruta[$i]= dre($ano,$i,"RECEITA BRUTA");
       $totalreceita_bruta=$totalreceita_bruta+$receita_bruta[$i];
       
      
       $devolucao_venda[$i]= dre($ano,$i,"DEVOLUCAO DE VENDAS");
       $totaldevolucao_venda=$totaldevolucao_venda+$devolucao_venda[$i];
       
      
       $receita_operacional_bruta[$i]= dre($ano,$i,"RECEITA OPERACIONAL BRUTA");
        $totalreceita_operacional_bruta=$totalreceita_operacional_bruta+ $receita_operacional_bruta[$i];
       
       $despesa_variavel_venda[$i]= dre($ano,$i,"DESPESAS VARIAVEIS DE VENDA");
       $totaldespesa_variavel_venda=$totaldespesa_variavel_venda+ $despesa_variavel_venda[$i];
       

       $receita_operacional_liquida[$i]= dre($ano,$i,"RECEITA OPERACIONAL LIQUIDA");
       $totalreceita_operacional_liquida=$totalreceita_operacional_liquida+ $receita_operacional_liquida[$i];


       $custo_produtos_vendidos[$i]= dre($ano,$i,"CUSTO PRODUTOS VENDIDOS");
       $totalcusto_produtos_vendidos=$totalcusto_produtos_vendidos+ $custo_produtos_vendidos[$i];

       $margem_contribuicao[$i]= dre($ano,$i,"MARGEM DE CONTRIBUICAO");
       $totalmargem_contribuicao=$totalmargem_contribuicao+$margem_contribuicao[$i];

       $custo_fixo[$i]= dre($ano,$i,"CUSTOS FIXOS");
      $totalcusto_fixo=$totalcusto_fixo+ $custo_fixo[$i];

       $resultado_bruto[$i]= dre($ano,$i,"RESULTADO BRUTO");
        $totalresultado_bruto=$totalresultado_bruto+ $resultado_bruto[$i];

       $despesa_operacional[$i]= dre($ano,$i,"DESPESAS OPERACIONAIS");
        $totaldespesa_operacional=$totaldespesa_operacional+$despesa_operacional[$i];
        
       $despesa_administrativa[$i]= dre($ano,$i,"DESPESAS ADMINISTRATIVAS");
        $totaldespesa_administrativa=$totaldespesa_administrativa+ $despesa_administrativa[$i];
        
       $despesa_comercial[$i]= dre($ano,$i,"DESPESAS COMERCIAL");
        $totaldespesa_comercial=$totaldespesa_comercial+$despesa_comercial[$i];
        
         $despesa_comex[$i]= dre($ano,$i,"DESPESAS COMEX");
        $totaldespesa_comex=$totaldespesa_comex+$despesa_comex[$i];


        $ebita[$i]= dre($ano,$i,"EBITDA");
       $totalebita=$totalebita+ $ebita[$i];

       $depreciacao[$i]= dre($ano,$i,"DEPRECIACAO");
       $totaldepreciacao=$totaldepreciacao+$depreciacao[$i];
       
       $resultado_antes_juros[$i]= dre($ano,$i,"RESULTADO ANTES DE JUROS - RAJIR");
        $totalresultado_antes_juros=$totalresultado_antes_juros+$resultado_antes_juros[$i];

       $rair[$i]= dre($ano,$i,"RAIR");
       $totalrair=$totalrair+$rair[$i];
       
       $resultado_financeiro[$i]= dre($ano,$i,"RESULTADO FINANCEIRO");
       $totalresultado_financeiro=$totalresultado_financeiro+$resultado_financeiro[$i];
       
       
       
       
       $resultado_liquido[$i]= dre($ano,$i,"RESULTADO LIQUIDO");
       $totalresultado_liquido=$totalresultado_liquido+$resultado_liquido[$i];

  
       
      $receita_bruta[$i]=number_format($receita_bruta[$i], 2, ",", ".");
      
      $devolucao_venda[$i]=number_format($devolucao_venda[$i], 2, ",", ".");
     
  
      $receita_operacional_bruta[$i]=number_format($receita_operacional_bruta[$i], 2, ",", ".");
      

      $despesa_variavel_venda[$i]=number_format($despesa_variavel_venda[$i], 2, ",", ".");
      

      $receita_operacional_liquida[$i]=number_format($receita_operacional_liquida[$i], 2, ",", ".");
       
     
      $custo_produtos_vendidos[$i]=number_format($custo_produtos_vendidos[$i], 2, ",", ".");
      
    
      $margem_contribuicao[$i]=number_format($margem_contribuicao[$i], 2, ",", ".");
      

      $custo_fixo[$i]=number_format($custo_fixo[$i], 2, ",", ".");
      
 
      $resultado_bruto[$i]=number_format($resultado_bruto[$i], 2, ",", ".");
      
   
      $despesa_operacional[$i]=number_format($despesa_operacional[$i], 2, ",", ".");
      
      $despesa_administrativa[$i]=number_format($despesa_administrativa[$i], 2, ",", ".");
      
       $despesa_comercial[$i]=number_format($despesa_comercial[$i], 2, ",", ".");
        $despesa_comex[$i]=number_format($despesa_comex[$i], 2, ",", ".");
      
    
      $ebita[$i]=number_format($ebita[$i], 2, ",", ".");
     
    
      $depreciacao[$i]=number_format($depreciacao[$i], 2, ",", ".");
     
    
      $resultado_antes_juros[$i]=number_format($resultado_antes_juros[$i], 2, ",", ".");
      

     

      $rair[$i]=number_format($rair[$i], 2, ",", ".");
      
      
       $resultado_financeiro[$i]=number_format($resultado_financeiro[$i], 2, ",", ".");
      
      
      
  
      $resultado_liquido[$i]=number_format($resultado_liquido[$i], 2, ",", ".");
      

       
   } 
    $totalreceita_bruta=number_format($totalreceita_bruta, 2, ",", ".");  
    $totaldevolucao_venda=number_format($totaldevolucao_venda, 2, ",", ".");  
    $totalreceita_operacional_bruta=number_format($totalreceita_operacional_bruta, 2, ",", ".");     
   $totaldespesa_variavel_venda=number_format($totaldespesa_variavel_venda, 2, ",", ".");
   $totalreceita_operacional_liquida=number_format($totalreceita_operacional_liquida, 2, ",", ".");
   $totalcusto_produtos_vendidos=number_format($totalcusto_produtos_vendidos, 2, ",", ".");
   $totalmargem_contribuicao=number_format($totalmargem_contribuicao, 2, ",", ".");
   $totalcusto_fixo=number_format($totalcusto_fixo, 2, ",", ".");
   $totalresultado_bruto=number_format($totalresultado_bruto, 2, ",", ".");
   $totaldespesa_operacional=number_format($totaldespesa_operacional, 2, ",", ".");
   $totaldespesa_administrativa=number_format($totaldespesa_administrativa, 2, ",", ".");
    $totaldespesa_comercial=number_format($totaldespesa_comercial, 2, ",", ".");
    $totaldespesa_comex=number_format($totaldespesa_comex, 2, ",", ".");
    $totalebita=number_format($totalebita, 2, ",", ".");
     $totaldepreciacao=number_format($totaldepreciacao, 2, ",", ".");
     $totalresultado_antes_juros=number_format($totalresultado_antes_juros, 2, ",", ".");
      $totalrair=number_format($totalrair, 2, ",", ".");
      $totalresultado_financeiro=number_format($totalresultado_financeiro, 2, ",", ".");
       $totalresultado_liquido=number_format($totalresultado_liquido, 2, ",", ".");
		?>
                                           

    <div id="wrapper">

         <!-- Começa o Menu Lateral -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
                
                 <a class="navbar-brand" href="../../index.php">Sistema Controladoria Empresa Reafrio Versão 1.0</a>
            </div>
                    <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <form action="resultadosimulacaodreanovalor.php" method="GET">
                    <input TYPE="hidden" name="ano1" value="<?php echo $ano?>">
                    
                     <span class="add-on" style="width: 150px;">Selecione a Conta &nbsp;&nbsp;</span>
								<select name="opcao" id="opcao" required>
									<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</option>
									<option>Receita Bruta</option>
								
								
								</select>
                   
                     <br>
                     <br>
                     
                <span class="add-on" style="width: 150px;">Informe o Valor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
								<input type="tex" name="valor" required>
								<br>
								<br>
								<center>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary btn-sm">Calcular</button>
								 </center>
								 </form>
                    </a>
                    </li>
                    </ul>
           

            <div class="navbar-default sidebar" role="navigation">
              
                    <ul class="nav" id="side-menu">
                        
                        <li>
                        
                                           
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
        
           
            <!-- /.row -->
            <div class="row">
            
              
                    <div class="panel panel-primary">
                    
                        <div class="panel-heading">
                        <center>
                        <h4>
                           Demonstrativo Resumido De Resultados no Ano de <?php echo $mes1?> <?php echo $ano?>
                            </h4>
                            </center>
                        </div>
                       
                    </div>
                    
                          <!-- /.panel-heading -->
                       <div class="panel">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover">
                                     <thead>
                                        <tr>
                                            <th>Descrição&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Janeiro</th>
                                            <th>Fevereiro</th>
                                            <th>Março</th>
                                            <th>Abril</th>
                                            <th>Maio</th>
                                            <th>Junho</th>
                                            <th>Julho</th>
                                            <th>Agosto</th>
                                            <th>Setembro</th>
                                            <th>Outubro</th>
                                            <th>Novembro</th>
                                            <th>Dezembro</th>
                                            <th><font color=#0000CC> Total</font></th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                        <tr class="success">
                                     
                                             <th>(=)Receita Bruta</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                             echo "    
                                            <td> $receita_bruta[$cont]</td>";
                                            }
                                             ?>
                                          
                                            <th><font color=#0000CC><?php echo $totalreceita_bruta?></font></th>
                                            
                                             
                                              </tr>
                                       <tr class="danger">
                                           
                                            <th>(-)Devolução Vendas</th>                                            
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                             echo "                                            
                                            <td>$devolucao_venda[$cont]</td>";
                                            }
                                             ?>
                                            <th><font color=#0000CC><?php echo $totaldevolucao_venda?></font></th>
                                            

                                        </tr>
                                        <tr class="info">
                                           
                                            <th>(=)Receita Operacional Bruta</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                             echo "     
                                            <td>$receita_operacional_bruta[$cont]</td>";
                                            }
                                             ?>                                            
                                            <th><font color=#0000CC><?php echo $totalreceita_operacional_bruta?></font></th>
                                            

                                        </tr>                                           
                                         
                                       
                                        <tr class="danger">
                                    
                                            <th>(-)Despesas Variaveis de Venda</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                             echo "     
                                            <td> $despesa_variavel_venda[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totaldespesa_variavel_venda?></font></th>
                                        </tr>
                                        <tr class="warning">
                                          
                                            <th>(=)Receita Operacional Liquida</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                             echo "     
                                            <td> $receita_operacional_liquida[$cont]</td>";
                                            }
                                             ?>
                                            
                                            <th><font color=#0000CC><?php echo $totalreceita_operacional_liquida?></font></th>
                                        </tr>
                                      <tr class="danger">
                                    
                                            <th>(-)Custo Produtos Vendidos</th>
                                            <?php
                                             for($cont=1;$cont<=12; $cont++){
                                             echo "     
                                             <td>$custo_produtos_vendidos[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalcusto_produtos_vendidos?></font></th>
                                        </tr>
                                        <tr class="warning">
                                    
                                            <th>(=)Margem Contribuição</th>
                                            <?php
                                             for($cont=1;$cont<=12; $cont++){
                                             echo "     
                                             <td> $margem_contribuicao[$cont]</td>";
                                            }
                                             ?>
                                           
                                             <th><font color=#0000CC><?php echo $totalmargem_contribuicao?></font></th>
                                        </tr>
                                       <tr class="danger">
                                    
                                            <th>(-)Custos Fixos</th>
                                             <?php
                                             for($cont=1;$cont<=12; $cont++){
                                             echo "     
                                            
                                           <td> $custo_fixo[$cont]</td>";
                                            }
                                             ?>
                                            
                                            <th><font color=#0000CC><?php echo $totalcusto_fixo?></font></th>
                                        </tr>
                                        <tr class="success">
                                     
                                            <th>(=)Resultado Bruto</th>
                                             <?php
                                             for($cont=1;$cont<=12; $cont++){
                                             echo "  
                                            <td> $resultado_bruto[$cont]</td>";
                                            }
                                             ?>
                                            
                                             <th><font color=#0000CC><?php echo $totalresultado_bruto?></font></th>
                                        </tr>
                                         <tr class="danger">
                                    
                                            <th>(-)Despesas Operacionais</th>
                                            <?php
                                             for($cont=1;$cont<=12; $cont++){
                                             echo " 
                                             <td> $despesa_operacional[$cont]</td>";
                                            }
                                             ?>
                                            
                                             <th><font color=#0000CC><?php echo $totaldespesa_operacional?></font></th>
                                        </tr>
                                         <tr class="danger">
                                    
                                            <th>(-)&nbsp;&nbsp;&nbsp;&nbsp;Despesas Administrativas</th>
                                            <?php
                                             for($cont=1;$cont<=12; $cont++){
                                             echo " 
                                             <td> $despesa_administrativa[$cont]</td>";
                                            }
                                             ?>
                                           
                                             <th><font color=#0000CC><?php echo $totaldespesa_administrativa?></font></th>
                                        </tr>
                                         <tr class="danger">
                                    
                                            <th>(-)&nbsp;&nbsp;&nbsp;&nbsp;Despesas Comercial</th>
                                            <?php
                                             for($cont=1;$cont<=12; $cont++){
                                             echo " 
                                             <td> $despesa_comercial[$cont]</td>";
                                            }
                                             ?>
                                            
                                             <th><font color=#0000CC><?php echo $totaldespesa_comercial?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                    
                                            <th>(-)&nbsp;&nbsp;&nbsp;&nbsp;Despesas Comex</th>
                                            <?php
                                             for($cont=1;$cont<=12; $cont++){
                                             echo " 
                                             <td> $despesa_comex[$cont]</td>";
                                            }
                                             ?>
                                            
                                             <th><font color=#0000CC><?php echo $totaldespesa_comex?></font></th>
                                        </tr>
                                        <tr class="success">
                                    
                                            <th>(=)Ebitda</th>
                                            <?php
                                             for($cont=1;$cont<=12; $cont++){
                                             echo " 
                                            
                                            <td>$ebita[$cont]</td>";
                                            }
                                             ?>
                                            
                                            <th><font color=#0000CC><?php echo $totalebita?></font></th>
                                        </tr>
                                     
                                   <tr class="danger">
                                    
                                            <th>(-)Depreciação</th>
                                             <?php
                                             for($cont=1;$cont<=12; $cont++){
                                             echo " 
                                           <td> $depreciacao[$cont]</td>";
                                            }
                                             ?>
                                            
                                            <th><font color=#0000CC><?php echo $totaldepreciacao?></font></th>
                                        </tr>
                                        <tr class="success">
                                     
                                            <th>(=)Resultado Antes Juro-Rajir</th>
                                             <?php
                                             for($cont=1;$cont<=12; $cont++){
                                             echo "                                             
                                            <td> $resultado_antes_juros[$cont]</td>";
                                            }
                                             ?>
                                           
                                            <th><font color=#0000CC><?php echo $totalresultado_antes_juros?></font></th>
                                        </tr>
                                        
                                         <th>(=)Resultado Financeiro</th>
                                             <?php
                                             for($cont=1;$cont<=12; $cont++){
                                             echo "                                             
                                            <td> $resultado_financeiro[$cont]</td>";
                                            }
                                             ?>
                                           
                                            <th><font color=#0000CC><?php echo $totalresultado_financeiro?></font></th>
                                        </tr>
                                         
                                        <tr class="warning">
                                    
                                            <th>Rair</th>
                                             <?php
                                             for($cont=1;$cont<=12; $cont++){
                                             echo "   
                                           <td> $rair[$cont]</td>";
                                            }
                                             ?>
                                           
                                           
                                             <th><font color=#0000CC><?php echo $totalrair?></font></th>
                                        </tr>
                                        <tr class="success">
                                     
                                            <th>(=)Resultado Liquido</th>
                                             <?php
                                             for($cont=1;$cont<=12; $cont++){
                                             echo "   
                                           <td> $resultado_liquido[$cont]</td>";
                                            }
                                             ?>
                                           
                                           <th><font color=#0000CC><?php echo $totalresultado_liquido?></font></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                
                    <div class="panel panel-default">
                      
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                            <a class="btn btn-default btn-block">Desenvolvido por Controladoria Reafrio</a>
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
