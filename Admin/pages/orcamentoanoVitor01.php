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
     
     $provisionado=425149.41;
     $mesinicio=3;
     
     //Vitor
     
     $salarios_ordenados=2800844.10;
     $messalarios_ordenados=2800844.10/10;
     
     $assistencia_tecnica=500000.00;
     $mesassistencia_tecnica=500000.00/10;
     
     $saida_material_consumo06=405000.00;
     $messaida_material_consumo06=405000.00/10;
     
     $servicos_terceiros_producao=180000.00;
     $messervicos_terceiros_producao=180000.00/10;
     
     $manutencao_corretiva_maquinas=80000.00;
     $mesmanutencao_corretiva_maquinas=80000.00/10;
     
     $energia_eletrica_producao=110000.00;
     $mesenergia_eletrica_producao=110000.00/10;
     
     $despesa_viagem_producao=50000.00;
     $mesdespesa_viagem_producao=50000.00/10;
     
     $premios_bonificacoes_producao=32500.00;
     $mespremios_bonificacoes_producao=32500.00/10;
     
     $alugueis_producao=33200.00;
     $mesalugueis_producao=33200.00/10;
     
     $outras_despesas_producao=0.00;
     $mesoutras_despesas_producao=0.00/10;
     
     $saida_material_epi06=22500.00;
     $messaida_material_epi06=22500.00/10;
     
     $saida_material_assistencia06=9000.00;
     $messaida_material_assistencia06=9000.00/10;
     
     $saida_material_consumo_producao07=9000.00;
     $messaida_material_consumo_producao07=9000.00/10;
     
     $saida_material_consumo_producao08=4500.00;
     $messaida_material_consumo_producao08=4500.00/10;
     
     $saida_material_consumo_producao10=4500.00;
     $messaida_material_consumo_producao10=4500.00/10;
     
     $manutencao_preventiva_maquinas=5000.00;
     $mesmanutencao_preventiva_maquinas=5000.00/10;
     
     $saida_material_assistencia07=450.00;
     $messaida_material_assistencia07=450.00/10;   
       
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

      
      // Vitor
       $salarios_ordenadosprod=salario($i,$ano,1);
       $salarios_ordenadosprod1=salario($i,$ano,2);
       $salarios_ordenados1[$i]=$salarios_ordenadosprod+$salarios_ordenadosprod1;
       $alcancado[$i]=$alcancado[$i]+ $salarios_ordenados1[$i];
      $diferencasalarios_ordenados[$i]=$messalarios_ordenados-$salarios_ordenados1[$i];
      $salarios_ordenados1[$i]=number_format($salarios_ordenados1[$i], 2, ",", "."); 
      $messalarios_ordenados1[$i]=number_format($messalarios_ordenados, 2, ",", "."); 
      $diferencasalarios_ordenados[$i]=number_format($diferencasalarios_ordenados[$i], 2, ",", ".");
      
      $assistencia_tecnica1[$i]=retornavalor16($i,$i,$ano,148);
      $alcancado[$i]=$alcancado[$i]+ $assistencia_tecnica1[$i];
      $diferencaassistencia_tecnica[$i]=$mesassistencia_tecnica-$assistencia_tecnica1[$i];
      $assistencia_tecnica1[$i]=number_format($assistencia_tecnica1[$i], 2, ",", "."); 
      $mesassistencia_tecnica1[$i]=number_format($mesassistencia_tecnica, 2, ",", "."); 
      $diferencaassistencia_tecnica[$i]=number_format($diferencaassistencia_tecnica[$i], 2, ",", ".");   
      
      $servicos_terceiros_producao1[$i]=retornavalor16($i,$i,$ano,57);
      $alcancado[$i]=$alcancado[$i]+$servicos_terceiros_producao1[$i];
      $diferencaservicos_terceiros_producao[$i]=$messervicos_terceiros_producao-$servicos_terceiros_producao1[$i];
      $servicos_terceiros_producao1[$i]=number_format($servicos_terceiros_producao1[$i], 2, ",", "."); 
      $messervicos_terceiros_producao1[$i]=number_format($messervicos_terceiros_producao, 2, ",", "."); 
      $diferencaservicos_terceiros_producao[$i]=number_format($diferencaservicos_terceiros_producao[$i], 2, ",", ".");   
      
      $manutencao_corretiva_maquinas1[$i]=retornavalor16($i,$i,$ano,60);
      $alcancado[$i]=$alcancado[$i]+$manutencao_corretiva_maquinas1[$i];
      $diferencamanutencao_corretiva_maquinas[$i]=$mesmanutencao_corretiva_maquinas-$manutencao_corretiva_maquinas1[$i];
      $manutencao_corretiva_maquinas1[$i]=number_format($manutencao_corretiva_maquinas1[$i], 2, ",", "."); 
      $mesmanutencao_corretiva_maquinas1[$i]=number_format($mesmanutencao_corretiva_maquinas, 2, ",", "."); 
      $diferencamanutencao_corretiva_maquinas[$i]=number_format($diferencamanutencao_corretiva_maquinas[$i], 2, ",", ".");       
      
      $energia_eletrica_producao1[$i]=retornavalor16($i,$i,$ano,59);
      $alcancado[$i]=$alcancado[$i]+$energia_eletrica_producao1[$i];
      $diferencaenergia_eletrica_producao[$i]=$mesenergia_eletrica_producao-$energia_eletrica_producao1[$i];
      $energia_eletrica_producao1[$i]=number_format($energia_eletrica_producao1[$i], 2, ",", "."); 
      $mesenergia_eletrica_producao1[$i]=number_format($mesenergia_eletrica_producao, 2, ",", "."); 
      $diferencaenergia_eletrica_producao[$i]=number_format($diferencaenergia_eletrica_producao[$i], 2, ",", ".");  
      
      $despesa_viagem_producao1[$i]=retornavalor16($i,$i,$ano,63);
      $alcancado[$i]=$alcancado[$i]+$despesa_viagem_producao1[$i];
      $diferencadespesa_viagem_producao[$i]=$mesdespesa_viagem_producao-$despesa_viagem_producao1[$i];
      $despesa_viagem_producao1[$i]=number_format($despesa_viagem_producao1[$i], 2, ",", "."); 
      $mesdespesa_viagem_producao1[$i]=number_format($mesdespesa_viagem_producao, 2, ",", "."); 
      $diferencadespesa_viagem_producao[$i]=number_format($diferencadespesa_viagem_producao[$i], 2, ",", ".");  
      
      $premios_bonificacoes_producao1[$i]=retornavalor16($i,$i,$ano,55);
      $alcancado[$i]=$alcancado[$i]+$premios_bonificacoes_producao1[$i];
      $diferencapremios_bonificacoes_producao[$i]=$mespremios_bonificacoes_producao-$premios_bonificacoes_producao1[$i];
      $premios_bonificacoes_producao1[$i]=number_format($premios_bonificacoes_producao1[$i], 2, ",", "."); 
      $mespremios_bonificacoes_producao1[$i]=number_format($mespremios_bonificacoes_producao, 2, ",", "."); 
      $diferencapremios_bonificacoes_producao[$i]=number_format($diferencapremios_bonificacoes_producao[$i], 2, ",", ".");  
        
      $alugueis_producao1[$i]=retornavalor16($i,$i,$ano,267);
      $alcancado[$i]=$alcancado[$i]+$alugueis_producao1[$i];
      $diferencaalugueis_producao[$i]=$mesalugueis_producao-$alugueis_producao1[$i];
      $alugueis_producao1[$i]=number_format($alugueis_producao1[$i], 2, ",", "."); 
      $mesalugueis_producao1[$i]=number_format($mesalugueis_producao, 2, ",", "."); 
      $diferencaalugueis_producao[$i]=number_format($diferencaalugueis_producao[$i], 2, ",", ".");  
          
         
      $outras_despesas_producao1[$i]=retornavalor16($i,$i,$ano,64);
      $alcancado[$i]=$alcancado[$i]+$outras_despesas_producao1[$i];
      $diferencaoutras_despesas_producao[$i]=$mesoutras_despesas_producao-$outras_despesas_producao1[$i];
      $outras_despesas_producao1[$i]=number_format($outras_despesas_producao1[$i], 2, ",", "."); 
      $mesoutras_despesas_producao1[$i]=number_format($mesoutras_despesas_producao, 2, ",", "."); 
      $diferencaoutras_despesas_producao[$i]=number_format($diferencaoutras_despesas_producao[$i], 2, ",", "."); 
      
       $manutencao_preventiva_maquinas1[$i]=retornavalor16($i,$i,$ano,261);
       $alcancado[$i]=$alcancado[$i]+$manutencao_preventiva_maquinas1[$i];
      $diferencamanutencao_preventiva_maquinas[$i]=$mesmanutencao_preventiva_maquinas-$manutencao_preventiva_maquinas1[$i];
      $manutencao_preventiva_maquinas1[$i]=number_format($manutencao_preventiva_maquinas1[$i], 2, ",", "."); 
      $mesmanutencao_preventiva_maquinas1[$i]=number_format($mesmanutencao_preventiva_maquinas, 2, ",", "."); 
      $diferencamanutencao_preventiva_maquinas[$i]=number_format($diferencamanutencao_preventiva_maquinas[$i], 2, ",", "."); 
      
       $saida_material_consumo061[$i]=consumo($i,$ano,02,'06');
       $alcancado[$i]=$alcancado[$i]+$saida_material_consumo061[$i];
      $diferencasaida_material_consumo06[$i]=$messaida_material_consumo06-$saida_material_consumo061[$i];
      $saida_material_consumo061[$i]=number_format($saida_material_consumo061[$i], 2, ",", "."); 
      $messaida_material_consumo061[$i]=number_format($messaida_material_consumo06, 2, ",", "."); 
      $diferencasaida_material_consumo06[$i]=number_format($diferencasaida_material_consumo06[$i], 2, ",", ".");   
      
      $saida_material_epi061[$i]=consumo($i,$ano,'04','06');
      $alcancado[$i]=$alcancado[$i]+$saida_material_epi061[$i];
      $diferencasaida_material_epi06[$i]=$messaida_material_epi06-$saida_material_epi061[$i];
      $saida_material_epi061[$i]=number_format($saida_material_epi061[$i], 2, ",", "."); 
      $messaida_material_epi061[$i]=number_format($messaida_material_epi06, 2, ",", "."); 
      $diferencasaida_material_epi06[$i]=number_format($diferencasaida_material_epi06[$i], 2, ",", ".");   
      
      $saida_material_assistencia061[$i]=consumo($i,$ano,'09','06');
      $alcancado[$i]=$alcancado[$i]+$saida_material_assistencia061[$i];
      $diferencasaida_material_assistencia06[$i]=$messaida_material_assistencia06-$saida_material_assistencia061[$i];
      $saida_material_assistencia061[$i]=number_format($saida_material_assistencia061[$i], 2, ",", "."); 
      $messaida_material_assistencia061[$i]=number_format($messaida_material_assistencia06, 2, ",", "."); 
      $diferencasaida_material_assistencia06[$i]=number_format($diferencasaida_material_assistencia06[$i], 2, ",", ".");  
      
      $saida_material_consumo_producao071[$i]=consumo($i,$ano,'02','07');
      $alcancado[$i]=$alcancado[$i]+$saida_material_consumo_producao071[$i];
      $diferencasaida_material_consumo_producao07[$i]=$messaida_material_consumo_producao07-$saida_material_consumo_producao071[$i];
      $saida_material_consumo_producao071[$i]=number_format($saida_material_consumo_producao071[$i], 2, ",", "."); 
      $messaida_material_consumo_producao071[$i]=number_format($messaida_material_consumo_producao07, 2, ",", "."); 
      $diferencasaida_material_consumo_producao07[$i]=number_format($diferencasaida_material_consumo_producao07[$i], 2, ",", ".");  
      
      $saida_material_consumo_producao081[$i]=consumo($i,$ano,'02','08');
      $alcancado[$i]=$alcancado[$i]+$saida_material_consumo_producao081[$i];
      $diferencasaida_material_consumo_producao08[$i]=$messaida_material_consumo_producao08-$saida_material_consumo_producao081[$i];
      $saida_material_consumo_producao081[$i]=number_format($saida_material_consumo_producao081[$i], 2, ",", "."); 
      $messaida_material_consumo_producao081[$i]=number_format($messaida_material_consumo_producao08, 2, ",", "."); 
      $diferencasaida_material_consumo_producao08[$i]=number_format($diferencasaida_material_consumo_producao08[$i], 2, ",", "."); 
      
       $saida_material_consumo_producao101[$i]=consumo($i,$ano,'02','10');
      $alcancado[$i]=$alcancado[$i]+$saida_material_consumo_producao101[$i];
      $diferencasaida_material_consumo_producao10[$i]=$messaida_material_consumo_producao10-$saida_material_consumo_producao101[$i];
      $saida_material_consumo_producao101[$i]=number_format($saida_material_consumo_producao101[$i], 2, ",", "."); 
      $messaida_material_consumo_producao101[$i]=number_format($messaida_material_consumo_producao10, 2, ",", "."); 
      $diferencasaida_material_consumo_producao10[$i]=number_format($diferencasaida_material_consumo_producao10[$i], 2, ",", ".");   
     
      $saida_material_assistencia071[$i]=consumo($i,$ano,'09','07');
      $alcancado[$i]=$alcancado[$i]+$saida_material_assistencia071[$i];
      $diferencasaida_material_assistencia07[$i]=$messaida_material_assistencia07-$saida_material_assistencia071[$i];
      $saida_material_assistencia071[$i]=number_format($saida_material_assistencia071[$i], 2, ",", "."); 
      $messaida_material_assistencia071[$i]=number_format($messaida_material_assistencia07, 2, ",", "."); 
      $diferencasaida_material_assistencia07[$i]=number_format($diferencasaida_material_assistencia07[$i], 2, ",", ".");   
      
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
                            Plano Orçamentario <?php echo $ano?>: Projetado X Alcançado(Vitor)
                            </h4>
                            </center>
                        </div>
                       
                    </div>
                    <center>
                    <a href="<?php echo "orcamentoanoVitor.php?ano1=$ano";?>">
                    <button type="submit" class="btn btn-success">1ª Semestre</button>
                    </a>
                    <a href="<?php echo "orcamentoanoVitor01.php?ano1=$ano";?>">
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
                    
                    
                      
                      <tr class="danger">         
                      
                        <th>Salarios e Ordenados</th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $messalarios_ordenados1[$cont]</td> 
                      <td><font color=red>  $salarios_ordenados1[$cont] </td>       
                      <th><font color=blue> $diferencasalarios_ordenados[$cont]</th>"; 
                      }
                      ?>
                      
                      </tr>     
                      
                       <tr class="danger">         
                      
                        <th>Assistência Técnica</th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $mesassistencia_tecnica1[$cont]</td> 
                      <td><font color=red>  $assistencia_tecnica1[$cont] </td>       
                      <th><font color=blue> $diferencaassistencia_tecnica[$cont]</th>"; 
                      }
                      ?>
                      
                      
                      </tr>   
                               
                      
                      </tr>   
                      
                      <tr class="danger">         
                      
                        <th>Serviços Terc. Produção</th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $messervicos_terceiros_producao1[$cont]</td> 
                      <td><font color=red>  $servicos_terceiros_producao1[$cont] </td>       
                      <th><font color=blue> $diferencaservicos_terceiros_producao[$cont]</th>"; 
                      }
                      ?>
                      
                       <tr class="danger">         
                      
                        <th>Manut. Corretiva Maq.</th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $mesmanutencao_corretiva_maquinas1[$cont]</td> 
                      <td><font color=red>  $manutencao_corretiva_maquinas1[$cont] </td>       
                      <th><font color=blue> $diferencamanutencao_corretiva_maquinas[$cont]</th>"; 
                      }
                      ?>
                      
                      
                      </tr>    
                      
                       <tr class="danger">         
                      
                        <th>Energia Elétrica Produção</th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $mesenergia_eletrica_producao1[$cont]</td> 
                      <td><font color=red>  $energia_eletrica_producao1[$cont] </td>       
                      <th><font color=blue> $diferencaenergia_eletrica_producao[$cont]</th>"; 
                      }
                      ?>
                      
                      
                      </tr>    
                      
                       <tr class="danger">         
                      
                        <th>Despesas Viagem Produção</th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $mesdespesa_viagem_producao1[$cont]</td> 
                      <td><font color=red>  $despesa_viagem_producao1[$cont] </td>       
                      <th><font color=blue> $diferencadespesa_viagem_producao[$cont]</th>"; 
                      }
                      ?>
                      
                      
                      </tr>   
                      
                       <tr class="danger">         
                      
                        <th>Prêmios e Bonif. Prod.</th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $mespremios_bonificacoes_producao1[$cont]</td> 
                      <td><font color=red>  $premios_bonificacoes_producao1[$cont] </td>       
                      <th><font color=blue> $diferencapremios_bonificacoes_producao[$cont]</th>"; 
                      }
                      ?>
                      
                      
                      </tr>        
                      
                       <tr class="danger">         
                      
                        <th>Aluguéis/ Cond. Prod.</th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $mesalugueis_producao1[$cont]</td> 
                      <td><font color=red>  $alugueis_producao1[$cont] </td>       
                      <th><font color=blue> $diferencaalugueis_producao[$cont]</th>"; 
                      }
                      ?>
                      
                      
                      </tr>  
                      
                      <tr class="danger">         
                      
                        <th>Outras Despesas Prod.</th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $mesoutras_despesas_producao1[$cont]</td> 
                      <td><font color=red>  $outras_despesas_producao1[$cont] </td>       
                      <th><font color=blue> $diferencaoutras_despesas_producao[$cont]</th>"; 
                      }
                      ?>
                       </tr>
                       
                        <tr class="danger">         
                      
                        <th>Manut.Prevent. Maq. Equip.</th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $mesmanutencao_preventiva_maquinas1[$cont]</td> 
                      <td><font color=red>  $manutencao_preventiva_maquinas1[$cont] </td>       
                      <th><font color=blue> $diferencamanutencao_preventiva_maquinas[$cont]</th>"; 
                      }
                      ?>
                      
                      
                      </tr>
                      
                       <tr class="danger">         
                      
                        <th>Saida Mat. Cons. Prod(TF06)</th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $messaida_material_consumo061[$cont]</td> 
                      <td><font color=red>  $saida_material_consumo061[$cont] </td>       
                      <th><font color=blue> $diferencasaida_material_consumo06[$cont]</th>"; 
                      }
                      ?>
                      
                      
                      </tr>  
                      
                       <tr class="danger">         
                      
                        <th>Saida Mat. EPI´s(TF06)</th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $messaida_material_epi061[$cont]</td> 
                      <td><font color=red>  $saida_material_epi061[$cont] </td>       
                      <th><font color=blue> $diferencasaida_material_epi06[$cont]</th>"; 
                      }
                      ?>
                      
                      
                      </tr> 
                      
                       <tr class="danger">         
                      
                        <th>Saida Mat. Assist. Tecn.(TF06)</th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $messaida_material_assistencia061[$cont]</td> 
                      <td><font color=red>  $saida_material_assistencia061[$cont] </td>       
                      <th><font color=blue> $diferencasaida_material_assistencia06[$cont]</th>"; 
                      }
                      ?>
                      
                      
                      </tr>  
                      
                       <tr class="danger">         
                      
                        <th>Saida Mat. Cons. Prod.(TF07)</th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $messaida_material_consumo_producao071[$cont]</td> 
                      <td><font color=red>  $saida_material_consumo_producao071[$cont] </td>       
                      <th><font color=blue> $diferencasaida_material_consumo_producao07[$cont]</th>"; 
                      }
                      ?>
                      
                      
                      </tr>  
                      
                      <tr class="danger">         
                      
                        <th>Saida Mat. Cons. Prod.(TF08)</th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $messaida_material_consumo_producao081[$cont]</td> 
                      <td><font color=red>  $saida_material_consumo_producao081[$cont] </td>       
                      <th><font color=blue> $diferencasaida_material_consumo_producao08[$cont]</th>"; 
                      }
                      ?>
                      
                      
                      </tr>  
                      
                       
                      <tr class="danger">         
                      
                        <th>Saida Mat. Cons. Prod.(TF10)</th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $messaida_material_consumo_producao101[$cont]</td> 
                      <td><font color=red>  $saida_material_consumo_producao101[$cont] </td>       
                      <th><font color=blue> $diferencasaida_material_consumo_producao10[$cont]</th>"; 
                      }
                      ?>
                      
                      
                      </tr> 
                      
                      <tr class="danger">         
                      
                        <th>Saida Mat. Assis.Tec.(TF07)</th> 
                        <?php
                        
                        for($cont=7;$cont<=12; $cont++){
                        echo "
                      <td><font color=green> $messaida_material_assistencia071[$cont]</td> 
                      <td><font color=red>  $saida_material_assistencia071[$cont] </td>       
                      <th><font color=blue> $diferencasaida_material_assistencia07[$cont]</th>"; 
                      }
                      ?>
                      
                      
                      </tr>   
                      
                      
                       <tr>         
                      <?php
                        
                        for($cont=7;$cont<=12; $cont++){
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
          
                                                           
    
  