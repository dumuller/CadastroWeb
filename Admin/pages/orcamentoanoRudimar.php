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
     
     $provisionado=36850.00;
     $mesinicio=3;
    
     
     //Rudimar
     
     $despesas_instalacoes_tanques=150000.00;
     $mesdespesas_instalacoes_tanques=150000.00/10;
     
     $despesas_veiculos_producao=30000.00;
     $mesdespesas_veiculos_producao=30000.00/10;
     
     $combustivel_veiculos_producao=30000.00;
     $mescombustivel_veiculos_producao=30000.00/10;
     
     $fretes_carretos=0.00;
     $mesfretes_carretos=0.00/10;
     
     $seguros_taxas_veiculos_producao=8000.00;
     $messeguros_taxas_veiculos_producao=8000.00/10;
     
     $outros_custos_motoristas=0.00;
     $mesoutros_custos_motoristas=0.00/10;
     
     $despesas_veiculos_adm=5000.00;
     $mesdespesas_veiculos_adm=5000.00/10;
     
     $combustivel_adm=3000.00;
     $mescombustivel_adm=3000.00/10;
     
     $combustivel_comercial=100000.00;
     $mescombustivel_comercial=100000.00/10;
     
     $manuntecao_caminhoes=0.00;
     $mesmanuntecao_caminhoes=0.00/10;
     
     $despesa_veiculos_comercial=25000.00;
     $mesdespesa_veiculos_comercial=25000.00/10;
     
     $seguros_taxas_comercial=17500.00;
     $messeguros_taxas_comercial=17500.00/10;
     
     $combustivel_caminhoes=0.00;
     $mescombustivel_caminhoes=0.00/10;
     
  
       
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
      
      
      // Rudimar
      
      $despesas_instalacoes_tanques1[$i]=retornavalor16($i,$i,$ano,128);
      $alcancado[$i]=$alcancado[$i]+ $despesas_instalacoes_tanques1[$i];
      $diferencadespesas_instalacoes_tanques[$i]=$mesdespesas_instalacoes_tanques-$despesas_instalacoes_tanques1[$i];
      $despesas_instalacoes_tanques1[$i]=number_format($despesas_instalacoes_tanques1[$i], 2, ",", "."); 
      $mesdespesas_instalacoes_tanques1[$i]=number_format($mesdespesas_instalacoes_tanques, 2, ",", "."); 
      $diferencadespesas_instalacoes_tanques[$i]=number_format($diferencadespesas_instalacoes_tanques[$i], 2, ",", "."); 
      
      $despesas_veiculos_producao1[$i]=retornavalor16($i,$i,$ano,62);
      $alcancado[$i]=$alcancado[$i]+ $despesas_veiculos_producao1[$i];
      $diferencadespesas_veiculos_producao[$i]=$mesdespesas_veiculos_producao-$despesas_veiculos_producao1[$i];
      $despesas_veiculos_producao1[$i]=number_format($despesas_veiculos_producao1[$i], 2, ",", "."); 
      $mesdespesas_veiculos_producao1[$i]=number_format($mesdespesas_veiculos_producao, 2, ",", "."); 
      $diferencadespesas_veiculos_producao[$i]=number_format($diferencadespesas_veiculos_producao[$i], 2, ",", "."); 
      
      $combustivel_veiculos_producao1[$i]=retornavalor16($i,$i,$ano,189);
      $alcancado[$i]=$alcancado[$i]+ $combustivel_veiculos_producao1[$i];
      $diferencacombustivel_veiculos_producao[$i]=$mescombustivel_veiculos_producao-$combustivel_veiculos_producao1[$i];
      $combustivel_veiculos_producao1[$i]=number_format($combustivel_veiculos_producao1[$i], 2, ",", "."); 
      $mescombustivel_veiculos_producao1[$i]=number_format($mescombustivel_veiculos_producao, 2, ",", "."); 
      $diferencacombustivel_veiculos_producao[$i]=number_format($diferencacombustivel_veiculos_producao[$i], 2, ",", "."); 
      
      $fretes_carretos1[$i]=retornavalor16($i,$i,$ano,112);
      $alcancado[$i]=$alcancado[$i]+ $fretes_carretos1[$i];
      $diferencafretes_carretos[$i]=$mesfretes_carretos-$fretes_carretos1[$i];
      $fretes_carretos1[$i]=number_format($fretes_carretos1[$i], 2, ",", "."); 
      $mesfretes_carretos1[$i]=number_format($mesfretes_carretos, 2, ",", "."); 
      $diferencafretes_carretos[$i]=number_format($diferencafretes_carretos[$i], 2, ",", "."); 
      
      $seguros_taxas_veiculos_producao1[$i]=retornavalor16($i,$i,$ano,172);
      $alcancado[$i]=$alcancado[$i]+ $seguros_taxas_veiculos_producao1[$i];
      $diferencaseguros_taxas_veiculos_producao[$i]=$messeguros_taxas_veiculos_producao-$seguros_taxas_veiculos_producao1[$i];
      $seguros_taxas_veiculos_producao1[$i]=number_format($seguros_taxas_veiculos_producao1[$i], 2, ",", "."); 
      $messeguros_taxas_veiculos_producao1[$i]=number_format($messeguros_taxas_veiculos_producao, 2, ",", "."); 
      $diferencaseguros_taxas_veiculos_producao[$i]=number_format($diferencaseguros_taxas_veiculos_producao[$i], 2, ",", "."); 
      
       $outros_custos_motoristas1[$i]=retornavalor16($i,$i,$ano,34);
       $alcancado[$i]=$alcancado[$i]+ $outros_custos_motoristas1[$i];
      $diferencaoutros_custos_motoristas[$i]=$mesoutros_custos_motoristas-$outros_custos_motoristas1[$i];
      $outros_custos_motoristas1[$i]=number_format($outros_custos_motoristas1[$i], 2, ",", "."); 
      $mesoutros_custos_motoristas1[$i]=number_format($mesoutros_custos_motoristas, 2, ",", "."); 
      $diferencaoutros_custos_motoristas[$i]=number_format($diferencaoutros_custos_motoristas[$i], 2, ",", "."); 
      
       $despesas_veiculos_adm1[$i]=retornavalor17($i,$i,$ano,130);
       $alcancado[$i]=$alcancado[$i]+ $despesas_veiculos_adm1[$i];
      $diferencadespesas_veiculos_adm[$i]=$mesdespesas_veiculos_adm-$despesas_veiculos_adm1[$i];
      $despesas_veiculos_adm1[$i]=number_format($despesas_veiculos_adm1[$i], 2, ",", "."); 
      $mesdespesas_veiculos_adm1[$i]=number_format($mesdespesas_veiculos_adm, 2, ",", "."); 
      $diferencadespesas_veiculos_adm[$i]=number_format($diferencadespesas_veiculos_adm[$i], 2, ",", "."); 
      
       $combustivel_adm1[$i]=retornavalor17($i,$i,$ano,188);
       $alcancado[$i]=$alcancado[$i]+ $combustivel_adm1[$i];
      $diferencacombustivel_adm[$i]=$mescombustivel_adm-$combustivel_adm1[$i];
      $combustivel_adm1[$i]=number_format($combustivel_adm1[$i], 2, ",", "."); 
      $mescombustivel_adm1[$i]=number_format($mescombustivel_adm, 2, ",", "."); 
      $diferencacombustivel_adm[$i]=number_format($diferencacombustivel_adm[$i], 2, ",", "."); 
      
       $combustivel_comercial1[$i]=retornavalor17($i,$i,$ano,154);
       $alcancado[$i]=$alcancado[$i]+ $combustivel_comercial1[$i];
      $diferencacombustivel_comercial[$i]=$mescombustivel_comercial-$combustivel_comercial1[$i];
      $combustivel_comercial1[$i]=number_format($combustivel_comercial1[$i], 2, ",", "."); 
      $mescombustivel_comercial1[$i]=number_format($mescombustivel_comercial, 2, ",", "."); 
      $diferencacombustivel_comercial[$i]=number_format($diferencacombustivel_comercial[$i], 2, ",", ".");
      
       $manutencao_caminhoes1[$i]=retornavalor17($i,$i,$ano,35);
       $alcancado[$i]=$alcancado[$i]+ $manutencao_caminhoes1[$i];
      $diferencamanutencao_caminhoes[$i]=$mesmanutencao_caminhoes-$manutencao_caminhoes1[$i];
      $manutencao_caminhoes1[$i]=number_format($manutencao_caminhoes1[$i], 2, ",", "."); 
      $mesmanutencao_caminhoes1[$i]=number_format($mesmanutencao_caminhoes, 2, ",", "."); 
      $diferencamanutencao_caminhoes[$i]=number_format($diferencamanutencao_caminhoes[$i], 2, ",", "."); 
      
       $despesa_veiculos_comercial1[$i]=retornavalor17($i,$i,$ano,169);
       $alcancado[$i]=$alcancado[$i]+ $despesa_veiculos_comercial1[$i];
      $diferencadespesa_veiculos_comercial[$i]=$mesdespesa_veiculos_comercial-$despesa_veiculos_comercial1[$i];
      $despesa_veiculos_comercial1[$i]=number_format($despesa_veiculos_comercial1[$i], 2, ",", "."); 
      $mesdespesa_veiculos_comercial1[$i]=number_format($mesdespesa_veiculos_comercial, 2, ",", "."); 
      $diferencadespesa_veiculos_comercial[$i]=number_format($diferencadespesa_veiculos_comercial[$i], 2, ",", "."); 
      
      $seguros_taxas_comercial1[$i]=retornavalor17($i,$i,$ano,170);
      $alcancado[$i]=$alcancado[$i]+ $seguros_taxas_comercial1[$i];
      $diferencaseguros_taxas_comercial[$i]=$messeguros_taxas_comercial-$seguros_taxas_comercial1[$i];
      $seguros_taxas_comercial1[$i]=number_format($seguros_taxas_comercial1[$i], 2, ",", "."); 
      $messeguros_taxas_comercial1[$i]=number_format($messeguros_taxas_comercial, 2, ",", "."); 
      $diferencaseguros_taxas_comercial[$i]=number_format($diferencaseguros_taxas_comercial[$i], 2, ",", "."); 
      
      $combustivel_caminhoes1[$i]=retornavalor17($i,$i,$ano,36);
      $alcancado[$i]=$alcancado[$i]+ $combustivel_caminhoes1[$i];
      $diferencacombustivel_caminhoes[$i]=$mescombustivel_caminhoes-$combustivel_caminhoes1[$i];
      $combustivel_caminhoes1[$i]=number_format($combustivel_caminhoes1[$i], 2, ",", "."); 
      $mescombustivel_caminhoes1[$i]=number_format($mescombustivel_caminhoes, 2, ",", "."); 
      $diferencacombustivel_caminhoes[$i]=number_format($diferencacombustivel_caminhoes[$i], 2, ",", "."); 
      
       
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
                            Plano Orçamentario <?php echo $ano?>: Projetado X Alcançado(Rudimar)
                            </h4>
                            </center>
                        </div>
                       
                    </div>
                    <center>
                    <a href="<?php echo "orcamentoanoRudimar.php?ano1=$ano";?>">
                    <button type="submit" class="btn btn-success">1ª Semestre</button>
                    </a>
                    <a href="<?php echo "orcamentoanoRudimar01.php?ano1=$ano";?>">
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
                      
                       <tr class="warning">                                                                                  
                        <th>Despesas Instal. Tanques</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesdespesas_instalacoes_tanques1[$cont]</td> 
                      <td><font color=red>  $despesas_instalacoes_tanques1[$cont] </td>       
                      <th><font color=blue> $diferencadespesas_instalacoes_tanques[$cont]</th>"; 
                      }
                      ?>
                      </tr>     
                      
                       <tr class="warning">                                                                                  
                        <th>Despesas Veiculos Produção</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesdespesas_veiculos_producao1[$cont]</td> 
                      <td><font color=red>  $despesas_veiculos_producao1[$cont] </td>       
                      <th><font color=blue> $diferencadespesas_veiculos_producao[$cont]</th>"; 
                      }
                      ?>
                      </tr>   
                      
                      
                       <tr class="warning">                                                                                  
                        <th>Combustivel Veic. Produção</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mescombustivel_veiculos_producao1[$cont]</td> 
                      <td><font color=red>  $combustivel_veiculos_producao1[$cont] </td>       
                      <th><font color=blue> $diferencacombustivel_veiculos_producao[$cont]</th>"; 
                      }
                      ?>
                      </tr> 
                      
                       <tr class="warning">                                                                                  
                        <th>Fretes e Carretos Diversos</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesfretes_carretos1[$cont]</td> 
                      <td><font color=red>  $fretes_carretos1[$cont] </td>       
                      <th><font color=blue> $diferencafretes_carretos[$cont]</th>"; 
                      }
                      ?>
                      </tr>   
                      
                       <tr class="warning">                                                                                  
                        <th>Seg./Taxas/Multas Veic. Prod.</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $messeguros_taxas_veiculos_producao1[$cont]</td> 
                      <td><font color=red>  $seguros_taxas_veiculos_producao1[$cont] </td>       
                      <th><font color=blue> $diferencaseguros_taxas_veiculos_producao[$cont]</th>"; 
                      }
                      ?>
                      </tr> 
                      
                      
                       <tr class="warning">                                                                                  
                        <th>Outros Cust. com Pess./Mot.</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesoutros_custos_motoristas1[$cont]</td> 
                      <td><font color=red>  $outros_custos_motoristas1[$cont] </td>       
                      <th><font color=blue> $diferencaoutros_custos_motoristas[$cont]</th>"; 
                      }
                      ?>
                      </tr>  
                      
                        <tr class="warning">                                                                                  
                        <th>Despesas com Veic. Admin.</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesdespesas_veiculos_adm1[$cont]</td> 
                      <td><font color=red>  $despesas_veiculos_adm1[$cont] </td>       
                      <th><font color=blue> $diferencadespesas_veiculos_adm[$cont]</th>"; 
                      }
                      ?>
                      </tr>                                                                                  
                      
                      
                        <tr class="warning">                                                                                  
                        <th>Combustivel Veic. Admin.</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mescombustivel_adm1[$cont]</td> 
                      <td><font color=red>  $combustivel_adm1[$cont] </td>       
                      <th><font color=blue> $diferencacombustivel_adm[$cont]</th>"; 
                      }
                      ?>
                      </tr> 
                      
                        <tr class="warning">                                                                                  
                        <th>Combustivel Veic. Comercial</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mescombustivel_comercial1[$cont]</td> 
                      <td><font color=red>  $combustivel_comercial1[$cont] </td>       
                      <th><font color=blue> $diferencacombustivel_comercial[$cont]</th>"; 
                      }
                      ?>
                      </tr> 
                      
                      <tr class="warning">                                                                                  
                        <th>Manutenção de Caminhões</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesmanutencao_caminhoes1[$cont]</td> 
                      <td><font color=red>  $manutencao_caminhoes1[$cont] </td>       
                      <th><font color=blue> $diferencamanutencao_caminhoes[$cont]</th>"; 
                      }
                      ?>
                      </tr> 
                      <tr class="warning"> 
                      
                        <th>Despesas com Veíc. Comercial</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesdespesa_veiculos_comercial1[$cont]</td> 
                      <td><font color=red>  $despesa_veiculos_comercial1[$cont] </td>       
                      <th><font color=blue> $diferencadespesa_veiculos_comercial[$cont]</th>"; 
                      }
                      ?>
                      </tr>                 
                      
                      <tr class="warning"> 
                      
                        <th>Seg./Taxas/Multas Veic. Com.</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $messeguros_taxas_comercial1[$cont]</td> 
                      <td><font color=red>  $seguros_taxas_comercial1[$cont] </td>       
                      <th><font color=blue> $diferencaseguros_taxas_comercial[$cont]</th>"; 
                      }
                      ?>
                      </tr> 
                      
                         <tr class="warning"> 
                      
                        <th>Combustivel Caminhões</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mescombustivel_caminhoes1[$cont]</td> 
                      <td><font color=red>  $combustivel_caminhoes1[$cont] </td>       
                      <th><font color=blue> $diferencacombustivel_caminhoes[$cont]</th>"; 
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
          
                                                           
    
  