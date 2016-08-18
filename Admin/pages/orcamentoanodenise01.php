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
    
    <style type="text/css">
table{
	font-size: 12px; 
	}
</style>


</head>

<body>

<?php

     $ano=$_GET['ano1'];
    
     if($ano==2016){
     
     $provisionado=25100.00;
     $mesinicio=3;
     //denise
     $comunicacao_prod_assistencia=3000.00;
     $mescomunicacao_prod_assistencia=3000.00/10;
   

     
     $comunicacao_admin=100000.00;
     $mescomunicacao_admin=100000.00/10;
     
     $correio=50000.00;
     $mescorreio=50000.00/10;
     
     $material_consumo=30000.00;
     $mesmaterial_consumo=30000.00/100;
     
     $energia_eletrica_adm=25000.00;
     $mesenergia_eletrica_adm=25000.00/10;
     
     $manutencao_instalacao_admin=15000.00;
     $mesmanutencao_instalacao_admin=15000.00/10;
     
     $agua=8000.00;
      $mesagua=8000.00/10;
     
     $comunicacao_comercial=20000.00;
      $mescomunicacao_comercial=20000.00/10;
      
     $comunicacao_entregas=0;
     $mescomunicacao_entregas=0/10;
     
       }
       else{
        $mesinicio=1;
       }
       
       function retornavalor16($mes,$mesfinal,$ano,$codigo){  
        $servidor ='192.168.0.250:c:\microsys\msys_dados\MSYSDADOS.FDB';

if (!($dbh=ibase_connect($servidor, 'SYSDBA', 'masterkey')))
        die('Erro ao conectar: ' .  ibase_errmsg()); 
        
        $sql= "SELECT
      COALESCE(sum(PAGAR_TITULOS.PAG_VALORTITULO),0)  +

      (

         SELECT
     COALESCE(sum(CAIXA_ITENS.CXI_VALOR),0)
 FROM CAIXA_ITENS
INNER JOIN CAIXA ON (CAIXA_ITENS.CXI_DATA = CAIXA.CXA_DATA)
INNER JOIN PLANO_CONTAS ON (CAIXA_ITENS.CXI_PLA_CODIGO = PLANO_CONTAS.PLA_CODIGO)
WHERE (CAIXA_ITENS.CXI_VALOR <> 0)
  AND (CAIXA_ITENS.CXI_DOC_ORIGEM IN ('MAN', 'BMVC', 'BMVP'))
  AND ((EXTRACT(YEAR FROM CAIXA_ITENS.CXI_DATA) = $ano)
  AND (EXTRACT(MONTH FROM CAIXA_ITENS.CXI_DATA) BETWEEN $mes AND $mesfinal))
  AND (CAIXA_ITENS.CXI_DOC_ORIGEM IN ('MAN', 'BMVC', 'BMVP'))
  AND (PLANO_CONTAS.PLA_CUSTO_DESPESA IN (1))
  AND (PLANO_CONTAS.PLA_IND_CUSTO IN (1))
  AND (PLANO_CONTAS.PLA_CUSTO_DESPESA_TIPO NOT IN (7, 8, 99))
  AND (CAIXA_ITENS.EMP_FIL_CODIGO IN (0, 1,2, 3, 999))
  and
  PLANO_CONTAS.PLA_CODIGO=$codigo


      )


 FROM PAGAR_TITULOS
INNER JOIN PLANO_CONTAS ON (PAGAR_TITULOS.PAG_PLA_CAIXA = PLANO_CONTAS.PLA_CODIGO)
INNER JOIN CLIENTES ON (PAGAR_TITULOS.PAG_CLI_CODIGO = CLIENTES.CLI_CODIGO)
WHERE (PAGAR_TITULOS.PAG_VALORTITULO <> 0)
  AND ((EXTRACT(YEAR FROM PAGAR_TITULOS.PAG_DATACOMPETENCIA) =$ano)
  AND (EXTRACT(MONTH FROM PAGAR_TITULOS.PAG_DATACOMPETENCIA) BETWEEN $mes AND $mesfinal))
  AND (PLANO_CONTAS.PLA_CUSTO_DESPESA IN (1))
  AND (PLANO_CONTAS.PLA_IND_CUSTO IN (1))
  AND (PLANO_CONTAS.PLA_CUSTO_DESPESA_TIPO NOT IN (7, 8, 99))
  AND (PAGAR_TITULOS.EMP_FIL_CODIGO IN (0, 1,2, 3, 999))
  and
  PLANO_CONTAS.PLA_CODIGO=$codigo";   
  
  	$editar =ibase_query($sql);
  	 list($valorcompra)=ibase_fetch_row($editar);
  	 $valor=$valorcompra;    	 
  	 if($valor==''){
       $valor=0.00;
       }  
  	 
  	 return $valor;
     
} 

  function retornavalor17($mes,$mesfinal,$ano,$codigo){  
        $servidor ='192.168.0.250:c:\microsys\msys_dados\MSYSDADOS.FDB';

if (!($dbh=ibase_connect($servidor, 'SYSDBA', 'masterkey')))
        die('Erro ao conectar: ' .  ibase_errmsg()); 
        
        $sql= "SELECT

      COALESCE(sum(PAGAR_TITULOS.PAG_VALORTITULO),0)  +
       (

         SELECT
     COALESCE(sum(CAIXA_ITENS.CXI_VALOR),0)
     FROM CAIXA_ITENS
INNER JOIN CAIXA ON (CAIXA_ITENS.CXI_DATA = CAIXA.CXA_DATA)
INNER JOIN PLANO_CONTAS ON (CAIXA_ITENS.CXI_PLA_CODIGO = PLANO_CONTAS.PLA_CODIGO)
WHERE (CAIXA_ITENS.CXI_VALOR <> 0)
  AND (CAIXA_ITENS.CXI_DOC_ORIGEM IN ('MAN', 'BMVC', 'BMVP'))
  AND ((EXTRACT(YEAR FROM CAIXA_ITENS.CXI_DATA) = $ano)
  AND (EXTRACT(MONTH FROM CAIXA_ITENS.CXI_DATA) BETWEEN $mes AND $mesfinal))
  AND (CAIXA_ITENS.CXI_DOC_ORIGEM IN ('MAN', 'BMVC', 'BMVP'))
  AND (PLANO_CONTAS.PLA_IND_CUSTO IN (1))
  AND (PLANO_CONTAS.PLA_CUSTO_DESPESA IN (2))
  AND (PLANO_CONTAS.PLA_CUSTO_DESPESA_TIPO NOT IN (7, 8, 99))
  AND (CAIXA_ITENS.EMP_FIL_CODIGO IN (0, 1,2, 3, 999))
  and
  PLANO_CONTAS.PLA_CODIGO=$codigo
  )

 FROM PAGAR_TITULOS
INNER JOIN PLANO_CONTAS ON (PAGAR_TITULOS.PAG_PLA_CAIXA = PLANO_CONTAS.PLA_CODIGO)
INNER JOIN CLIENTES ON (PAGAR_TITULOS.PAG_CLI_CODIGO = CLIENTES.CLI_CODIGO)
WHERE (PAGAR_TITULOS.PAG_VALORTITULO <> 0)
  AND ((EXTRACT(YEAR FROM PAGAR_TITULOS.PAG_DATACOMPETENCIA) = $ano)
  AND (EXTRACT(MONTH FROM PAGAR_TITULOS.PAG_DATACOMPETENCIA) BETWEEN $mes AND $mesfinal))
  AND (PLANO_CONTAS.PLA_IND_CUSTO IN (1))
  AND (PLANO_CONTAS.PLA_CUSTO_DESPESA IN (2))
  AND (PLANO_CONTAS.PLA_CUSTO_DESPESA_TIPO NOT IN (7, 8, 99))
  AND (PAGAR_TITULOS.EMP_FIL_CODIGO IN (0, 1,2, 3, 999))
  and
  PLANO_CONTAS.PLA_CODIGO=$codigo";   
  
  	$editar =ibase_query($sql);
  	 list($valorcompra)=ibase_fetch_row($editar);
  	 $valor=$valorcompra;    	 
  	 if($valor==''){
       $valor=0.00;
       }  
  	 
  	 return $valor;
  	 
     
} 

function salario($mes,$ano,$codigo){  
        $servidor ='192.168.0.250:c:\microsys\msys_dados\MSYSDADOS.FDB';

if (!($dbh=ibase_connect($servidor, 'SYSDBA', 'masterkey')))
        die('Erro ao conectar: ' .  ibase_errmsg()); 
        
        $sql= "select
  sum(rh_lote_folhafunc.rff_vlr_total )
from rh_lote_folhafunc
   inner join rh_lote_folhapagto on (rh_lote_folhafunc.rff_rlf_id = rh_lote_folhapagto.rlf_id)
   inner join departamentos on (rh_lote_folhafunc.rff_dep_codigo= departamentos.dep_codigo)
and
rh_lote_folhapagto.rlf_ano=$ano
and
rh_lote_folhapagto.rlf_mes=$mes
and
departamentos.dep_tdp_codigo=$codigo";   
  
  	$editar =ibase_query($sql);
  	 list($valorcompra)=ibase_fetch_row($editar);
  	 $valor=$valorcompra;    	 
  	 
  	 
  	 return $valor;
  	 
     
} 

function consumo($mes,$ano,$requisicao,$tipofiscal){ 

if($mes==1){
$mes='01';
$ultimo='31';
}

if($mes==2){
$mes='02';
$ultimo='28';
}

if($mes==3){
$mes='03';
$ultimo='31';
}

if($mes==4){
$mes='04';
$ultimo='30';
}

if($mes==5){
$mes='05';
$ultimo='31';
}

if($mes==6){
$mes='06';
$ultimo='30';
}

if($mes==7){
$mes='07';
$ultimo='31';
}

if($mes==8){
$mes='08';
$ultimo='31';
}

if($mes==9){
$mes='09';
$ultimo='30';
}

if($mes==10){
$mes='10';
$ultimo='31';
}

if($mes==11){
$mes='11';
$ultimo='30';
}

if($mes==12){
$mes='12';
$ultimo='31';
}


        $servidor ='192.168.0.250:c:\microsys\msys_dados\MSYSDADOS.FDB';

if (!($dbh=ibase_connect($servidor, 'SYSDBA', 'masterkey')))
        die('Erro ao conectar: ' .  ibase_errmsg()); 
        
        $sql= "  SELECT

      SUM(REQUISICOES_ITENS.REI_QUANTIDADE * REQUISICOES_ITENS.REI_UNITARIO) AS TOTAL_VALOR
FROM REQUISICOES_ITENS
INNER JOIN REQUISICOES ON (REQUISICOES_ITENS.REI_NUMERO = REQUISICOES.REQ_NUMERO) AND (REQUISICOES.EMP_FIL_CODIGO = REQUISICOES_ITENS.EMP_FIL_CODIGO)
LEFT OUTER JOIN PRODUTOS ON (REQUISICOES_ITENS.REI_PRO_CODIGO = PRODUTOS.PRO_CODIGO)
LEFT JOIN DEPARTAMENTOS ON REQUISICOES_ITENS.REI_SET_CODIGO = DEPARTAMENTOS.DEP_CODIGO
JOIN PRODUTOS_TIPOS ON (PRODUTOS.PRO_TIPO = PRODUTOS_TIPOS.PRT_CODIGO)
LEFT OUTER JOIN REQUISICOES_TIPO_MOVIMENTOS ON (REQUISICOES.REQ_RTM_CODIGO = REQUISICOES_TIPO_MOVIMENTOS.RTM_CODIGO)
WHERE (CAST(REQUISICOES.REQ_DATA AS DATE) BETWEEN '01.$mes.$ano' and '$ultimo.$mes.$ano')
  AND (REQUISICOES.REQ_STS_CODIGO = 'FF')
  AND (REQUISICOES_TIPO_MOVIMENTOS.RTM_IND_ANR = 1)
  AND (REQUISICOES.REQ_TIPO = 'S')
  AND (REQUISICOES.EMP_FIL_CODIGO IN (0, 1,2, 3, 999))
  AND (REQUISICOES.REQ_RTM_CODIGO IN ($requisicao))
  AND (PRODUTOS_TIPOS.PRT_TIPOFISCAL = '$tipofiscal')";

  
 

  
  	$editar =ibase_query($sql);
  	 list($valorcompra)=ibase_fetch_row($editar);
  	 $valor=$valorcompra;    	 
  	 
  	 
  	 return $valor;
  	 
     
} 




         
      		?>   
      		
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

        
        <?php
         for ($i =7; $i <= 12; $i++) {

       //denise
       
      $comunicacao_producao_assistencia1[$i]=retornavalor16($i,$i,$ano,194);
      $alcancado[$i]=$alcancado[$i]+$comunicacao_producao_assistencia1[$i];
      $diferencacomunicacao_prod_assistencia[$i]=$mescomunicacao_prod_assistencia-$comunicacao_producao_assistencia1[$i];
      $comunicacao_producao_assistencia1[$i]=number_format($comunicacao_producao_assistencia1[$i], 2, ",", "."); 
      $mescomunicacao_prod_assistencia1[$i]=number_format($mescomunicacao_prod_assistencia, 2, ",", "."); 
      $diferencacomunicacao_prod_assistencia[$i]=number_format($diferencacomunicacao_prod_assistencia[$i], 2, ",", "."); 
       
      $comunicacao_admin1[$i]=retornavalor17($i,$i,$ano,71);
      $alcancado[$i]=$alcancado[$i]+$comunicacao_admin1[$i];
      $diferencacomunicacao_admin[$i]=$mescomunicacao_admin-$comunicacao_admin1[$i];
      $comunicacao_admin1[$i]=number_format($comunicacao_admin1[$i], 2, ",", "."); 
      $mescomunicacao_admin1[$i]=number_format($mescomunicacao_admin, 2, ",", "."); 
      $diferencacomunicacao_admin[$i]=number_format($diferencacomunicacao_admin[$i], 2, ",", ".");  
      
      $correio1[$i]=retornavalor17($i,$i,$ano,202);
      $alcancado[$i]=$alcancado[$i]+$correio1[$i];
      $diferencacorreio[$i]=$mescorreio-$correio1[$i];
      $correio1[$i]=number_format($correio1[$i], 2, ",", "."); 
      $mescorreio1[$i]=number_format($mescorreio, 2, ",", "."); 
      $diferencacorreio[$i]=number_format($diferencacorreio[$i], 2, ",", ".");   
      
       $material_consumo1[$i]=retornavalor17($i,$i,$ano,74);
       $alcancado[$i]=$alcancado[$i]+$material_consumo1[$i];
      $diferencamaterial_consumo[$i]=$mesmaterial_consumo-$material_consumo1[$i];
      $material_consumo1[$i]=number_format($material_consumo1[$i], 2, ",", "."); 
      $mesmaterial_consumo1[$i]=number_format($mesmaterial_consumo, 2, ",", "."); 
      $diferencamaterial_consumo[$i]=number_format($diferencamaterial_consumo[$i], 2, ",", ".");   
     
      $energia_eletrica_adm1[$i]=retornavalor17($i,$i,$ano,260);
       $alcancado[$i]=$alcancado[$i]+$energia_eletrica_adm1[$i];
       $diferencaenergia_eletrica_adm[$i]=$mesenergia_eletrica_adm-$energia_eletrica_adm1[$i];
      $energia_eletrica_adm1[$i]=number_format($energia_eletrica_adm1[$i], 2, ",", "."); 
      $mesenergia_eletrica_adm1[$i]=number_format($mesenergia_eletrica_adm, 2, ",", "."); 
      $diferencaenergia_eletrica_adm[$i]=number_format($diferencaenergia_eletrica_adm[$i], 2, ",", ".");   
        
       $manutencao_instalacao_admin1[$i]=retornavalor17($i,$i,$ano,73);
        $alcancado[$i]=$alcancado[$i]+ $manutencao_instalacao_admin1[$i];
       $diferencamanutencao_instalacao_admin[$i]=$mesmanutencao_instalacao_admin-$manutencao_instalacao_admin1[$i];
      $manutencao_instalacao_admin1[$i]=number_format($manutencao_instalacao_admin1[$i], 2, ",", "."); 
      $mesmanutencao_instalacao_admin1[$i]=number_format($mesmanutencao_instalacao_admin, 2, ",", "."); 
      $diferencamanutencao_instalacao_admin[$i]=number_format($diferencamanutencao_instalacao_admin[$i], 2, ",", ".");   
      
      
      $agua1[$i]=retornavalor17($i,$i,$ano,58);
      $alcancado[$i]=$alcancado[$i]+ $agua1[$i];
       $diferencaagua[$i]=$mesagua-$agua1[$i];
      $agua1[$i]=number_format($agua1[$i], 2, ",", "."); 
      $mesagua1[$i]=number_format($mesagua, 2, ",", "."); 
      $diferencaagua[$i]=number_format($diferencaagua[$i], 2, ",", ".");  
      
      $comunicacao_comercial1[$i]=retornavalor17($i,$i,$ano,156);
      $alcancado[$i]=$alcancado[$i]+ $comunicacao_comercial1[$i];
       $diferencacomunicacao_comercial[$i]=$mescomunicacao_comercial-$comunicacao_comercial1[$i];
      $comunicacao_comercial1[$i]=number_format($comunicacao_comercial1[$i], 2, ",", "."); 
      $mescomunicacao_comercial1[$i]=number_format($mescomunicacao_comercial, 2, ",", "."); 
      $diferencacomunicacao_comercial[$i]=number_format($diferencacomunicacao_comercial[$i], 2, ",", ".");   
      
      $comunicacao_entregas1[$i]=retornavalor17($i,$i,$ano,127);
      $alcancado[$i]=$alcancado[$i]+ $comunicacao_entregas1[$i];
      $diferencacomunicacao_entregas[$i]=$mescomunicacao_entregas-$comunicacao_entregas1[$i];
      $comunicacao_entregas1[$i]=number_format($comunicacao_entregas1[$i], 2, ",", "."); 
      $mescomunicacao_entregas1[$i]=number_format($mescomunicacao_entregas, 2, ",", "."); 
      $diferencacomunicacao_entregas[$i]=number_format($diferencacomunicacao_entregas[$i], 2, ",", ".");   
     
     $provisionado1[$i]=$provisionado;     
     $saldo[$i]=$provisionado1[$i]- $alcancado[$i];
    
    $saldo[$i]=number_format($saldo[$i], 2, ",", "."); 
    $alcancado[$i]=number_format($alcancado[$i], 2, ",", "."); 
    $provisionado1[$i]=number_format($provisionado1[$i], 2, ",", "."); 
      
      
                
}






?>

        <div id="page-wrapper">
           
            <!-- /.row -->
            <div class="row">
              
                    <div class="panel panel-green">
                        <div class="panel-heading">
                        <center>
                        <h4>
                            Plano Orçamentario <?php echo $ano?>: Projetado X Alcançado (Denise) 
                            </h4>
                            </center>
                        </div>
                       
                    </div>
                    <center>
                    <a href="<?php echo "orcamentoanodenise.php?ano1=$ano";?>">
                    <button type="submit" class="btn btn-success">1ª Semestre</button>
                    </a>
                    <a href="<?php echo "orcamentoanodenise01.php?ano1=$ano";?>">
                    <button type="button" class="btn btn-warning">2ª Semestre</button>
                    </a>
                    </br>
                    </br>
                  
                        <!-- /.panel-heading -->
                         <div class="panel">                           
                <div > 
                <table width="100%" class="table table-striped table-bordered table-hover"> 
                                        
                      <tr>  
                    <b>  <td><b><font color="blue">Contas</font></td>                                     
                        <td colspan="3"><b><font color="blue"><center>Julho</center></td>
                       
                        <td colspan="3"><b><font color="red"><center>Agosto</center></td>
                   
                       <td colspan="3"><b><font color="#006600"><center>Setembro</center></td>
                  
                        <td colspan="3"><b><font color="#FF33CC"><center>Outubro</center></td>
                        
                        <td colspan="3"><b><font color="#9966CC"><center>Novembro</center></td>
                       
                       <td colspan="3"><b><font color="#996633"><center>Dezembro</center></td>
                      
                                                             
                         </tr>     
                                                                               
                                                       
                      <tr>                                            
                        <th>Descrição&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </th>                                            
                        <th><font color="blue">Projet.</th>
                        <th><font color="blue">Alcanç.</th>
                        <th><font color="blue">Saldo</th>
                         <th><font color="red">Projet.</th>
                        <th><font color="red">Alcanç.</th>
                        <th><font color="red">Saldo</th>
                         <th><font color="#006600">Projet.</th>
                        <th><font color="#006600">Alcanç.</th>
                        <th><font color="#006600">Saldo</th>
                         <th><font color="#FF33CC">Projet.</th>
                        <th><font color="#FF33CC">Alcanç.</th>
                        <th><font color="#FF33CC">Saldo</th>
                         <th><font color="#9966CC">Projet.</th>
                        <th><font color="#9966CC">Alcanç.</th>
                        <th><font color="#9966CC">Saldo</th>
                          <th><font color="#996633">Projet.</th>
                        <th><font color="#996633">Alcanç.</th>
                        <th><font color="#996633">Saldo</th>
                         
                                            </tr>             
                    </thead>                                    
                    <tbody>                                        
                      <tr class="success">                                                                                  
                        <th>Comunicação Prod./Assist. </th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $mescomunicacao_prod_assistencia1[$cont]</td> 
                      <td><font color=red>  $comunicacao_producao_assistencia1[$cont] </td>       
                      <th><font color=blue> $diferencacomunicacao_prod_assistencia[$cont]</th>"; 
                      }
                      ?>
                      </tr>  
                      
                       <tr class="success">                                                                                  
                        <th>Comunicação(Tel/Cel.) Admin </th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $mescomunicacao_admin1[$cont]</td> 
                      <td><font color=red>  $comunicacao_admin1[$cont] </td>       
                      <th><font color=blue> $diferencacomunicacao_admin[$cont]</th>"; 
                      }
                      ?>
                      </tr>  
                      
                       <tr class="success">                                                                                  
                        <th>Correios </th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $mescorreio1[$cont]</td> 
                      <td><font color=red>  $correio1[$cont] </td>       
                      <th><font color=blue> $diferencacorreio[$cont]</th>"; 
                      }
                      ?>
                      </tr>  
                    
                     
                       <tr class="success">                                                                                  
                        <th>Material Consumo/Exped. </th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $mesmaterial_consumo1[$cont]</td> 
                      <td><font color=red>  $material_consumo1[$cont] </td>       
                      <th><font color=blue> $diferencamaterial_consumo[$cont]</th>"; 
                      }
                      ?>
                      </tr> 
                      
                      <tr class="success">                                                                                  
                        <th>Energia Elétrica Admin. </th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $mesenergia_eletrica_adm1[$cont]</td> 
                      <td><font color=red>  $energia_eletrica_adm1[$cont] </td>       
                      <th><font color=blue> $diferencaenergia_eletrica_adm[$cont]</th>"; 
                      }
                      ?>
                      </tr> 
                      
                       <tr class="success">                                                                                  
                        <th>Manutenção Equip. Admin. </th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $mesmanutencao_instalacao_admin1[$cont]</td> 
                      <td><font color=red>  $manutencao_instalacao_admin1[$cont] </td>       
                      <th><font color=blue> $diferencamanutencao_instalacao_admin[$cont]</th>"; 
                      }
                      ?>
                      </tr>             
                      
                        <tr class="success">                                                                                  
                        <th>Agua </th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $mesagua1[$cont]</td> 
                      <td><font color=red>  $agua1[$cont] </td>       
                      <th><font color=blue> $diferencaagua[$cont]</th>"; 
                      }
                      ?>
                      </tr>  
                      
                      <tr class="success">                                                                                  
                        <th>Comunicação Comercial </th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $mescomunicacao_comercial1[$cont]</td> 
                      <td><font color=red>  $comunicacao_comercial1[$cont] </td>       
                      <th><font color=blue> $diferencacomunicacao_comercial[$cont]</th>"; 
                      }
                      ?>
                      </tr>                        
                      
                       <tr class="success">                                                                                  
                        <th>Comunicação Entregas </th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $mescomunicacao_entregas1[$cont]</td> 
                      <td><font color=red>  $comunicacao_entregas1[$cont] </td>       
                      <th><font color=blue> $diferencacomunicacao_entregas[$cont]</th>"; 
                      }
                      ?>
                      </tr>  
                      
                      
                                                 
                  <tr class="success">         
                      <b>
                        <th>Total</th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $provisionado1[$cont]</td> 
                      <td><font color=red>  $alcancado[$cont] </td>       
                      <th><font color=blue> $saldo[$cont]</th>"; 
                      }
                      ?>                               
                    </b>                               
                       
                       
                                                                                                                                                                             
                      
                                                                                                                                                                                                                                                                              
                                                                                                                      
                    </tbody>                                
                  </table>                            
                            </div>
                            <!-- /.table-responsive -->
                            <div class="well">
                                
                                <a class="btn btn-default btn-lg btn-block" target="_blank">Desenvolvido por Controladoria Reafrio</a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="../bower_components/datatables-responsive/js/dataTables.responsive.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
          
                                                           
    
  