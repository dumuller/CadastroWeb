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
     
     $provisionado=48110.00;
     $mesinicio=3;
     
     //Ricardo
     
     $seguros_instalacoes=12000.00;
     $messeguros_instalacoes=12000.00/10;
     
     $servicos_terceiros_adm=350000.00;
      $messervicos_terceiros_adm=350000.00/10;
      
     $gastos_diversos_adm=50000.00;
    $mesgastos_diversos_adm=50000.00/10;
    
     $impostos_taxas=15000.00;
     $mesimpostos_taxas=15000.00/10;
     
     $despesas_viagens_adm=20000.00;
     $mesdespesas_viagens_adm=20000.00/10;
     
     $premios_direcao=10000.00;
     $mespremios_direcao=10000.00/10;
     
     $premios_admn=2500.00;
     $mespremios_admn=2500.00/10;
     
     $seguros_vida=0.00;
     $messeguros_vida=0.00/10;
           
     $seguranca_medicina_admin=18000.00;
     $messeguranca_medicina_admin=18000.00/10;
     
     $outras_despesas_admin=350.00;
     $mesoutras_despesas_admin=350.00/10;
     
     $outras_despesas_direcao=0.00;
     $mesoutras_despesas_direcao=0.00/10;
     
     $seguranca_medicina_comercial=2000.00;
     $messeguranca_medicina_comercial=2000.00/10;
     
     $premios_bonificacoes_comercial=1250.00;
     $mespremios_bonificacoes_comercial=1250.00/10;
     
     
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
         for ($i =$mesinicio; $i <= 6; $i++) {


        //Ricardo
        
      $seguros_instalacoes1[$i]=retornavalor16($i,$i,$ano,259);
      $alcancado[$i]=$alcancado[$i]+ $seguros_instalacoes1[$i];
      $diferencaseguros_instalacoes[$i]=$messeguros_instalacoes-$seguros_instalacoes1[$i];
      $seguros_instalacoes1[$i]=number_format($seguros_instalacoes1[$i], 2, ",", "."); 
      $messeguros_instalacoes1[$i]=number_format($messeguros_instalacoes, 2, ",", "."); 
      $diferencaseguros_instalacoes[$i]=number_format($diferencaseguros_instalacoes[$i], 2, ",", ".");
      
      $servicos_terceiros_adm1[$i]=retornavalor17($i,$i,$ano,70);
      $alcancado[$i]=$alcancado[$i]+ $servicos_terceiros_adm1[$i];
      $diferencaservicos_terceiros_adm[$i]=$messervicos_terceiros_adm-$servicos_terceiros_adm1[$i];
      $servicos_terceiros_adm1[$i]=number_format($servicos_terceiros_adm1[$i], 2, ",", "."); 
      $messervicos_terceiros_adm1[$i]=number_format($messervicos_terceiros_adm, 2, ",", "."); 
      $diferencaservicos_terceiros_adm[$i]=number_format($diferencaservicos_terceiros_adm[$i], 2, ",", ".");
      
       $gastos_diversos_adm1[$i]=retornavalor17($i,$i,$ano,78);
      $alcancado[$i]=$alcancado[$i]+ $gastos_diversos_adm1[$i];
      $diferencagastos_diversos_adm[$i]=$mesgastos_diversos_adm-$gastos_diversos_adm1[$i];
      $gastos_diversos_adm1[$i]=number_format($gastos_diversos_adm1[$i], 2, ",", "."); 
      $mesgastos_diversos_adm1[$i]=number_format($mesgastos_diversos_adm, 2, ",", "."); 
      $diferencagastos_diversos_adm[$i]=number_format($diferencagastos_diversos_adm[$i], 2, ",", ".");
      
       $impostos_taxas1[$i]=retornavalor17($i,$i,$ano,72);
       $alcancado[$i]=$alcancado[$i]+ $impostos_taxas1[$i];
      $diferencaimpostos_taxas[$i]=$mesimpostos_taxas-$impostos_taxas1[$i];
      $impostos_taxas1[$i]=number_format($impostos_taxas1[$i], 2, ",", "."); 
      $mesimpostos_taxas1[$i]=number_format($mesimpostos_taxas, 2, ",", "."); 
      $diferencaimpostos_taxas[$i]=number_format($diferencaimpostos_taxas[$i], 2, ",", ".");
      
       $despesas_viagens_adm1[$i]=retornavalor17($i,$i,$ano,77);
       $alcancado[$i]=$alcancado[$i]+ $despesas_viagens_adm1[$i];
      $diferencadespesas_viagens_adm[$i]=$mesdespesas_viagens_adm-$despesas_viagens_adm1[$i];
      $despesas_viagens_adm1[$i]=number_format($despesas_viagens_adm1[$i], 2, ",", "."); 
      $mesdespesas_viagens_adm1[$i]=number_format($mesdespesas_viagens_adm, 2, ",", "."); 
      $diferencadespesas_viagens_adm[$i]=number_format($diferencadespesas_viagens_adm[$i], 2, ",", ".");
      
       $premios_direcao1[$i]=retornavalor17($i,$i,$ano,82);
      $diferencapremios_direcao[$i]=$mespremios_direcao-$premios_direcao1[$i];
      $premios_direcao1[$i]=number_format($premios_direcao1[$i], 2, ",", "."); 
      $mespremios_direcao1[$i]=number_format($mespremios_direcao, 2, ",", "."); 
      $diferencapremios_direcao[$i]=number_format($diferencapremios_direcao[$i], 2, ",", ".");
      
         $premios_admn1[$i]=retornavalor17($i,$i,$ano,68);
          $alcancado[$i]=$alcancado[$i]+ $premios_admn1[$i];
      $diferencapremios_admn[$i]=$mespremios_admn-$premios_admn1[$i];
      $premios_admn1[$i]=number_format($premios_admn1[$i], 2, ",", "."); 
      $mespremios_admn1[$i]=number_format($mespremios_admn, 2, ",", "."); 
      $diferencapremios_admn[$i]=number_format($diferencapremios_admn[$i], 2, ",", ".");
      
       $seguros_vida1[$i]=retornavalor17($i,$i,$ano,263);
       $alcancado[$i]=$alcancado[$i]+ $seguros_vida1[$i];
      $diferencaseguros_vida[$i]=$messeguros_vida-$seguros_vida1[$i];
      $seguros_vida1[$i]=number_format($seguros_vida1[$i], 2, ",", "."); 
      $messeguros_vida1[$i]=number_format($messeguros_vida, 2, ",", "."); 
      $diferencaseguros_vida[$i]=number_format($diferencaseguros_vida[$i], 2, ",", ".");
      
       $seguranca_medicina_admin1[$i]=retornavalor17($i,$i,$ano,69);
       $alcancado[$i]=$alcancado[$i]+ $seguranca_medicina_admin1[$i];
      $diferencaseguranca_medicina_admin[$i]=$messeguranca_medicina_admin-$seguranca_medicina_admin1[$i];
      $seguranca_medicina_admin1[$i]=number_format($seguranca_medicina_admin1[$i], 2, ",", "."); 
      $messeguranca_medicina_admin1[$i]=number_format($messeguranca_medicina_admin, 2, ",", "."); 
      $diferencaseguranca_medicina_admin[$i]=number_format($diferencaseguranca_medicina_admin[$i], 2, ",", ".");
      
      $outras_despesas_direcao1[$i]=retornavalor17($i,$i,$ano,84);
      $alcancado[$i]=$alcancado[$i]+ $outras_despesas_direcao1[$i];
      $diferencaoutras_despesas_direcao[$i]=$mesoutras_despesas_direcao-$outras_despesas_direcao1[$i];
      $outras_despesas_direcao1[$i]=number_format($outras_despesas_direcao1[$i], 2, ",", "."); 
      $mesoutras_despesas_direcao1[$i]=number_format($mesoutras_despesas_direcao, 2, ",", "."); 
      $diferencaoutras_despesas_direcao[$i]=number_format($diferencaoutras_despesas_direcao[$i], 2, ",", ".");
        
       $seguranca_medicina_comercial1[$i]=retornavalor17($i,$i,$ano,190);
       $alcancado[$i]=$alcancado[$i]+ $seguranca_medicina_comercial1[$i];
      $diferencaseguranca_medicina_comercial[$i]=$messeguranca_medicina_comercial-$seguranca_medicina_comercial1[$i];
      $seguranca_medicina_comercial1[$i]=number_format($seguranca_medicina_comercial1[$i], 2, ",", "."); 
      $messeguranca_medicina_comercial1[$i]=number_format($messeguranca_medicina_comercial, 2, ",", "."); 
      $diferencaseguranca_medicina_comercial[$i]=number_format($diferencaseguranca_medicina_comercial[$i], 2, ",", ".");
      
      $premios_bonificacoes_comercial1[$i]=retornavalor17($i,$i,$ano,152);
      $alcancado[$i]=$alcancado[$i]+ $premios_bonificacoes_comercial1[$i];
      $diferencapremios_bonificacoes_comercial[$i]=$mespremios_bonificacoes_comercial-$premios_bonificacoes_comercial1[$i];
      $premios_bonificacoes_comercial1[$i]=number_format($premios_bonificacoes_comercial1[$i], 2, ",", "."); 
      $mespremios_bonificacoes_comercial1[$i]=number_format($mespremios_bonificacoes_comercial, 2, ",", "."); 
      $diferencapremios_bonificacoes_comercial[$i]=number_format($diferencapremios_bonificacoes_comercial[$i], 2, ",", "."); 
      
      
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
                            Plano Orçamentario <?php echo $ano?>: Projetado X Alcançado (Ricardo)
                            </h4>
                            </center>
                        </div>
                       
                    </div>
                    <center>
                    <a href="<?php echo "orcamentoanoricardo.php?ano1=$ano";?>">
                    <button type="submit" class="btn btn-success">1ª Semestre</button>
                    </a>
                    <a href="<?php echo "orcamentoanoricardo01.php?ano1=$ano";?>">
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
                        <td colspan="3"><b><font color="blue"><center>Janeiro</center></td>
                       
                        <td colspan="3"><b><font color="red"><center>Fevereiro</center></td>
                   
                       <td colspan="3"><b><font color="#006600"><center>Março</center></td>
                  
                        <td colspan="3"><b><font color="#FF33CC"><center>Abril</center></td>
                        
                        <td colspan="3"><b><font color="#9966CC"><center>Maio</center></td>
                       
                       <td colspan="3"><b><font color="#996633"><center>Junho</center></td>
                      
                      
                                                             
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
                                         
                    
                     <tr class="info">                                                                                  
                        <th>Seguros Instal. Maq./Equip.</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $messeguros_instalacoes1[$cont]</td> 
                      <td><font color=red>  $seguros_instalacoes1[$cont] </td>       
                      <th><font color=blue> $diferencaseguros_instalacoes[$cont]</th>"; 
                      }
                      ?>
                      </tr>  
                      
                       <tr class="info">                                                                                  
                        <th>Serviços de Terceiros Admin</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $messervicos_terceiros_adm1[$cont]</td> 
                      <td><font color=red>  $servicos_terceiros_adm1[$cont] </td>       
                      <th><font color=blue> $diferencaservicos_terceiros_adm[$cont]</th>"; 
                      }
                      ?>
                      </tr>   
                      
                      <tr class="info">                                                                                  
                        <th>Gastos Diversos Admin</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesgastos_diversos_adm1[$cont]</td> 
                      <td><font color=red>  $gastos_diversos_adm1[$cont] </td>       
                      <th><font color=blue> $diferencagastos_diversos_adm[$cont]</th>"; 
                      }
                      ?>
                      </tr>        
                      
                      <tr class="info">                                                                                  
                        <th>Impostos e Taxas Diversas</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesimpostos_taxas1[$cont]</td> 
                      <td><font color=red>  $impostos_taxas1[$cont] </td>       
                      <th><font color=blue> $diferencaimpostos_taxas[$cont]</th>"; 
                      }
                      ?>
                      </tr>        
                      
                      <tr class="info">                                                                                  
                        <th>Despesas Viagens Admin</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesdespesas_viagens_adm1[$cont]</td> 
                      <td><font color=red>  $despesas_viagens_adm1[$cont] </td>       
                      <th><font color=blue> $diferencadespesas_viagens_adm[$cont]</th>"; 
                      }
                      ?>
                      </tr>                                                                                                                                                                             
                      
                      <tr class="info">                                                                                  
                        <th>Prêmios e Bonif. Direção</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mespremios_direcao1[$cont]</td> 
                      <td><font color=red>  $premios_direcao1[$cont] </td>       
                      <th><font color=blue> $diferencapremios_direcao[$cont]</th>"; 
                      }
                      ?>
                      </tr>   
                      
                        <tr class="info">                                                                                  
                        <th>Prêmios e Bonif. Admin.</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mespremios_admn1[$cont]</td> 
                      <td><font color=red>  $premios_admn1[$cont] </td>       
                      <th><font color=blue> $diferencapremios_admn[$cont]</th>"; 
                      }
                      ?>
                      </tr>  
  
                      
                        <tr class="info">                                                                                  
                        <th>Segurança Med. Trab. Adm.</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $messeguranca_medicina_admin1[$cont]</td> 
                      <td><font color=red>  $seguranca_medicina_admin1[$cont] </td>       
                      <th><font color=blue> $diferencaseguranca_medicina_admin[$cont]</th>"; 
                      }
                      ?>
                      </tr>  
                      
                        <tr class="info">                                                                                  
                        <th>Outras Despesas Direção</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesoutras_despesas_direcao1[$cont]</td> 
                      <td><font color=red>  $outras_despesas_direcao1[$cont] </td>       
                      <th><font color=blue> $diferencaoutras_despesas_direcao[$cont]</th>"; 
                      }
                      ?>
                      </tr> 
                      
                       <tr class="info">                                                                                  
                        <th>Segurança Med. Trab. Com.</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $messeguranca_medicina_comercial1[$cont]</td> 
                      <td><font color=red>  $seguranca_medicina_comercial1[$cont] </td>       
                      <th><font color=blue> $diferencaseguranca_medicina_comercial[$cont]</th>"; 
                      }
                      ?>
                      </tr>  
                      
                       <tr class="info">                                                                                  
                        <th>Premios e Bonif. Comercial</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mespremios_bonificacoes_comercial1[$cont]</td> 
                      <td><font color=red>  $premios_bonificacoes_comercial1[$cont] </td>       
                      <th><font color=blue> $diferencapremios_bonificacoes_comercial[$cont]</th>"; 
                      }
                      ?>
                      </tr>
                      
                       
                       <tr>         
                      <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $teste[$cont]</td> 
                      <td><font color=red>  $stasda[$cont] </td>       
                      <th><font color=blue> $fada[$cont]</th>"; 
                      }
                      ?>
                      
                      </tr>   
                                                 
                  <tr class="success">         
                      <b>
                        <th>Total</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
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
          
                                                           
    
  