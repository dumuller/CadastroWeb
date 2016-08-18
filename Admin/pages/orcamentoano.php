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
     
     $provisionado=837071.18;
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
     
     //Eduardo
     $salarios_comercial=1420330.90;
     $messalarios_comercial=1420330.90/10;
     
     $viagem_comercial=200000.00;
     $mesviagem_comercial=200000.00/10;
     
     $despesa_feiras=150000.00;
     $mesdespesa_feiras=150000.00/10;
       
     $outras_despesas_comercial=20000.00;
     $mesoutras_despesas_comercial=20000.00/10;
     
     $despesas_estadias_supervisores=15000.00;
     $mesdespesas_estadias_supervisores=15000.00/10;
     
     $material_grafico=10000.00;
     $mesmaterial_grafico=10000.00/10;
     
     $despesas_motoristas=0.0;
     $mesdespesas_motoristas=0.0/10;
     
     $top10_2016=5800.00;
     $mestop10_2016=5800.00/10;
     
     $brindes_representantes=0.00;
     $mesbrindes_representantes=0.00/10;
     
     $material_grafico_comercial=0.00;
     $mesmaterial_grafico_comercial=0.00/10;
     
     $propaganda_comercial=5000.00;
     $mespropaganda_comercial=5000.00/10;
     
     
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
     
     //Sandra
     
     $seguranca_medicina_trabalho=240000.00;
     $messegurancao_medicina_trabalho=240000.00/10;
     
     $salarios_ordenados_adm=949486.80;
     $messalarios_ordenados_adm=949486.80/10;
     
     $copa_cozinha=3000.00;
     $mescopa_cozinha=3000.00/10;
     
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
         for ($i =$mesinicio; $i <= 6; $i++) {

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
      
      
      //Eduardo
      
      $salarios_comercial1[$i]=salario($i,$ano,4);
       $alcancado[$i]=$alcancado[$i]+ $salarios_comercial1[$i];
      $diferencasalarios_comercial[$i]=$messalarios_comercial-$salarios_comercial1[$i];
      $salarios_comercial1[$i]=number_format($salarios_comercial1[$i], 2, ",", "."); 
      $messalarios_comercial1[$i]=number_format($messalarios_comercial, 2, ",", "."); 
      $diferencasalarios_comercial[$i]=number_format($diferencasalarios_comercial[$i], 2, ",", "."); 
      
      $viagem_comercial1[$i]=retornavalor17($i,$i,$ano,155);
      $alcancado[$i]=$alcancado[$i]+ $viagem_comercial1[$i];
      $diferencaviagem_comercial[$i]=$mesviagem_comercial-$viagem_comercial1[$i];
      $viagem_comercial1[$i]=number_format($viagem_comercial1[$i], 2, ",", "."); 
      $mesviagem_comercial1[$i]=number_format($mesviagem_comercial, 2, ",", "."); 
      $diferencaviagem_comercial[$i]=number_format($diferencaviagem_comercial[$i], 2, ",", "."); 
      
      $despesa_feiras1[$i]=retornavalor17($i,$i,$ano,161);
      $alcancado[$i]=$alcancado[$i]+  $despesa_feiras1[$i];
      $diferencadespesa_feiras[$i]=$mesdespesa_feiras-$despesa_feiras1[$i];
      $despesa_feiras1[$i]=number_format($despesa_feiras1[$i], 2, ",", "."); 
      $mesdespesa_feiras1[$i]=number_format($mesdespesa_feiras, 2, ",", "."); 
      $diferencadespesa_feiras[$i]=number_format($diferencadespesa_feiras[$i], 2, ",", "."); 
      
       $outras_despesas_comercial1[$i]=retornavalor17($i,$i,$ano,153);
       $alcancado[$i]=$alcancado[$i]+ $outras_despesas_comercial1[$i];
      $diferencaoutras_despesas_comercial[$i]=$mesoutras_despesas_comercial-$outras_despesas_comercial1[$i];
      $outras_despesas_comercial1[$i]=number_format($outras_despesas_comercial1[$i], 2, ",", "."); 
      $mesoutras_despesas_comercial1[$i]=number_format($mesoutras_despesas_comercial, 2, ",", "."); 
      $diferencaoutras_despesas_comercial[$i]=number_format($diferencaoutras_despesas_comercial[$i], 2, ",", "."); 
      
      $despesas_estadias_supervisores1[$i]=retornavalor17($i,$i,$ano,262);
      $alcancado[$i]=$alcancado[$i]+ $despesas_estadias_supervisores1[$i];
      $diferencadespesas_estadias_supervisores[$i]=$mesdespesas_estadias_supervisores-$despesas_estadias_supervisores1[$i];
      $despesas_estadias_supervisores1[$i]=number_format($despesas_estadias_supervisores1[$i], 2, ",", "."); 
      $mesdespesas_estadias_supervisores1[$i]=number_format($mesdespesas_estadias_supervisores, 2, ",", "."); 
      $diferencadespesas_estadias_supervisores[$i]=number_format($diferencadespesas_estadias_supervisores[$i], 2, ",", "."); 
      
       $material_grafico1[$i]=retornavalor17($i,$i,$ano,75);
       $alcancado[$i]=$alcancado[$i]+ $material_grafico1[$i];
      $diferencamaterial_grafico[$i]=$mesmaterial_grafico-$material_grafico1[$i];
      $material_grafico1[$i]=number_format($material_grafico1[$i], 2, ",", "."); 
      $mesmaterial_grafico1[$i]=number_format($mesmaterial_grafico, 2, ",", "."); 
      $diferencamaterial_grafico[$i]=number_format($diferencamaterial_grafico[$i], 2, ",", "."); 
      
      $despesas_motoristas1[$i]=retornavalor17($i,$i,$ano,37);
      $alcancado[$i]=$alcancado[$i]+ $despesas_motoristas1[$i];
      $diferencadespesas_motoristas[$i]=$mesdespesas_motoristas-$despesas_motoristas1[$i];
      $despesas_motoristas1[$i]=number_format($despesas_motoristas1[$i], 2, ",", "."); 
      $mesdespesas_motoristas1[$i]=number_format($mesdespesas_motoristas, 2, ",", "."); 
      $diferencadespesas_motoristas[$i]=number_format($diferencadespesas_motoristas[$i], 2, ",", "."); 
      
      $top10_20161[$i]=retornavalor17($i,$i,$ano,269);
      $alcancado[$i]=$alcancado[$i]+ $top10_20161[$i];
      $diferencatop10_2016[$i]=$mestop10_2016-$top10_20161[$i];
      $top10_20161[$i]=number_format($top10_20161[$i], 2, ",", "."); 
      $mestop10_20161[$i]=number_format($mestop10_2016, 2, ",", "."); 
      $diferencatop10_2016[$i]=number_format($diferencatop10_2016[$i], 2, ",", "."); 
      
      $brindes_representantes1[$i]=retornavalor17($i,$i,$ano,187);
       $alcancado[$i]=$alcancado[$i]+ $brindes_representantes1[$i];
      $diferencabrindes_representantes[$i]=$mesbrindes_representantes-$brindes_representantes1[$i];
      $brindes_representantes1[$i]=number_format($brindes_representantes1[$i], 2, ",", "."); 
      $mesbrindes_representantes1[$i]=number_format($mesbrindes_representantes, 2, ",", "."); 
      $diferencabrindes_representantes[$i]=number_format($diferencabrindes_representantes[$i], 2, ",", "."); 
      
      $material_grafico_comercial1[$i]=retornavalor17($i,$i,$ano,157);
      $alcancado[$i]=$alcancado[$i]+ $material_grafico_comercial1[$i];
      $diferencamaterial_grafico_comercial[$i]=$mesmaterial_grafico_comercial-$material_grafico_comercial1[$i];
      $material_grafico_comercial1[$i]=number_format($material_grafico_comercial1[$i], 2, ",", "."); 
      $mesmaterial_grafico_comercial1[$i]=number_format($mesmaterial_grafico_comercial, 2, ",", "."); 
      $diferencamaterial_grafico_comercial[$i]=number_format($diferencamaterial_grafico_comercial[$i], 2, ",", ".");
      
      $propaganda_comercial1[$i]=retornavalor17($i,$i,$ano,158);
      $alcancado[$i]=$alcancado[$i]+ $propaganda_comercial1[$i];
      $diferencapropaganda_comercial[$i]=$mespropaganda_comercial-$propaganda_comercial1[$i];
      $propaganda_comercial1[$i]=number_format($propaganda_comercial1[$i], 2, ",", "."); 
      $mespropaganda_comercial1[$i]=number_format($mespropaganda_comercial, 2, ",", "."); 
      $diferencapropaganda_comercial[$i]=number_format($diferencapropaganda_comercial[$i], 2, ",", ".");
            
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
      
      
      // Sandra
      
      $segurancao_medicina_trabalho1[$i]=retornavalor16($i,$i,$ano,56);
      $alcancado[$i]=$alcancado[$i]+ $segurancao_medicina_trabalho1[$i];
      $diferencasegurancao_medicina_trabalho[$i]=$messegurancao_medicina_trabalho-$segurancao_medicina_trabalho1[$i];
      $segurancao_medicina_trabalho1[$i]=number_format($segurancao_medicina_trabalho1[$i], 2, ",", "."); 
      $messegurancao_medicina_trabalho1[$i]=number_format($messegurancao_medicina_trabalho, 2, ",", "."); 
      $diferencasegurancao_medicina_trabalho[$i]=number_format($diferencasegurancao_medicina_trabalho[$i], 2, ",", ".");  
      
        $salarios_ordenados_adm1[$i]=salario($i,$ano,3);
        $alcancado[$i]=$alcancado[$i]+ $salarios_ordenados_adm1[$i];
      $diferencasalarios_ordenados_adm[$i]=$messalarios_ordenados_adm-$salarios_ordenados_adm1[$i];
      $salarios_ordenados_adm1[$i]=number_format($salarios_ordenados_adm1[$i], 2, ",", "."); 
      $messalarios_ordenados_adm1[$i]=number_format($messalarios_ordenados_adm, 2, ",", "."); 
      $diferencasalarios_ordenados_adm[$i]=number_format($diferencasalarios_ordenados_adm[$i], 2, ",", ".");  
      
      $copa_cozinha1[$i]=retornavalor17($i,$i,$ano,265);
      $alcancado[$i]=$alcancado[$i]+ $copa_cozinha1[$i];
      $diferencacopa_cozinha[$i]=$mescopa_cozinha-$copa_cozinha1[$i];
      $copa_cozinha1[$i]=number_format($copa_cozinha1[$i], 2, ",", "."); 
      $mescopa_cozinha1[$i]=number_format($mescopa_cozinha, 2, ",", "."); 
      $diferencacopa_cozinha[$i]=number_format($diferencacopa_cozinha[$i], 2, ",", ".");  
      
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
                            Plano Orçamentario <?php echo $ano?>: Projetado X Alcançado
                            </h4>
                            </center>
                        </div>
                       
                    </div>
                    <center>
                    <a href="<?php echo "orcamentoano.php?ano1=$ano";?>">
                    <button type="submit" class="btn btn-success">1ª Semestre</button>
                    </a>
                    <a href="<?php echo "orcamentoano01.php?ano1=$ano";?>">
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
                      <tr class="success">                                                                                  
                        <th>Comunicação Prod./Assist. </th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mescomunicacao_entregas1[$cont]</td> 
                      <td><font color=red>  $comunicacao_entregas1[$cont] </td>       
                      <th><font color=blue> $diferencacomunicacao_entregas[$cont]</th>"; 
                      }
                      ?>
                      </tr>  
                      
                      
                      
                      
                      <tr class="danger">                                                                                  
                        <th>Salario Comercial</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $messalarios_comercial1[$cont]</td> 
                      <td><font color=red>  $salarios_comercial1[$cont] </td>       
                      <th><font color=blue> $diferencasalarios_comercial[$cont]</th>"; 
                      }
                      ?>
                      </tr>                                              
                      
                      <tr class="danger">                                                                                  
                        <th>Despesa Viagem Comercial</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesviagem_comercial1[$cont]</td> 
                      <td><font color=red>  $viagem_comercial1[$cont] </td>       
                      <th><font color=blue> $diferencaviagem_comercial[$cont]</th>"; 
                      }
                      ?>
                      </tr> 
                      
                      <tr class="danger">                                                                                  
                        <th>Despesa com Feiras</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesdespesa_feiras1[$cont]</td> 
                      <td><font color=red>  $despesa_feiras1[$cont] </td>       
                      <th><font color=blue> $diferencadespesa_feiras[$cont]</th>"; 
                      }
                      ?>
                      </tr> 
                      
                        <tr class="danger">                                                                                  
                        <th>Outras Despesas Comerciais</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesoutras_despesas_comercial1[$cont]</td> 
                      <td><font color=red>  $outras_despesas_comercial1[$cont] </td>       
                      <th><font color=blue> $diferencaoutras_despesas_comercial[$cont]</th>"; 
                      }
                      ?>
                      </tr> 
                      
                        <tr class="danger">                                                                                  
                        <th>Despesas Estadias Cli./Superv.</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesdespesas_estadias_supervisores1[$cont]</td> 
                      <td><font color=red>  $despesas_estadias_supervisores1[$cont] </td>       
                      <th><font color=blue> $diferencadespesas_estadias_supervisores[$cont]</th>"; 
                      }
                      ?>
                      </tr>                                                                                                                        
                       
                  <tr class="danger">                                                                                  
                        <th>Material Gráfico</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesmaterial_grafico1[$cont]</td> 
                      <td><font color=red>  $material_grafico1[$cont] </td>       
                      <th><font color=blue> $diferencamaterial_grafico[$cont]</th>"; 
                      }
                      ?>
                      </tr>   
                      
                       <tr class="danger">                                                                                  
                        <th>Despesa Viagens Motoristas</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesdespesas_motoristas1[$cont]</td> 
                      <td><font color=red>  $despesas_motoristas1[$cont] </td>       
                      <th><font color=blue> $diferencadespesas_motoristas[$cont]</th>"; 
                      }
                      ?>
                      </tr>  
                      
                       <tr class="danger">                                                                                  
                        <th>Top 10 em  2016</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mestop10_20161[$cont]</td> 
                      <td><font color=red>  $top10_20161[$cont] </td>       
                      <th><font color=blue> $diferencatop10_2016[$cont]</th>"; 
                      }
                      ?>
                      </tr>    
                      
                       <tr class="danger">                                                                                  
                        <th>Brindes e Prem./Repres.</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesbrindes_representantes1[$cont]</td> 
                      <td><font color=red>  $brindes_representantes1[$cont] </td>       
                      <th><font color=blue> $diferencabrindes_representantes[$cont]</th>"; 
                      }
                      ?>
                      </tr> 
                      
                       <tr class="danger">                                                                                  
                        <th>Material Gráfico Comercial</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mesmaterial_grafico_comercial1[$cont]</td> 
                      <td><font color=red>  $material_grafico_comercial1[$cont] </td>       
                      <th><font color=blue> $diferencamaterial_grafico_comercial[$cont]</th>"; 
                      }
                      ?>
                      </tr>   
                      
                       <tr class="danger">                                                                                  
                        <th>Propag. e Public. Comercial</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mespropaganda_comercial1[$cont]</td> 
                      <td><font color=red>  $propaganda_comercial1[$cont] </td>       
                      <th><font color=blue> $diferencapropaganda_comercial[$cont]</th>"; 
                      }
                      ?>
                                                                                                       
                    
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
                      
                      
                     <tr class="success">         
                      
                        <th>Seg.Med. Trab. Prod.</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $messegurancao_medicina_trabalho1[$cont]</td> 
                      <td><font color=red>  $segurancao_medicina_trabalho1[$cont] </td>       
                      <th><font color=blue> $diferencasegurancao_medicina_trabalho[$cont]</th>"; 
                      }
                      ?>
                      
                      
                      </tr> 
                      
                      <tr class="success">         
                      
                        <th>Salarios Ordenados Admin.</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $messalarios_ordenados_adm1[$cont]</td> 
                      <td><font color=red>  $salarios_ordenados_adm1[$cont] </td>       
                      <th><font color=blue> $diferencasalarios_ordenados_adm[$cont]</th>"; 
                      }
                      ?>
                      
                      
                      </tr>      
                      
                      <tr class="success">         
                      
                        <th>Copa/Cozinha</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $mescopa_cozinha1[$cont]</td> 
                      <td><font color=red>  $copa_cozinha1[$cont] </td>       
                      <th><font color=blue> $diferencacopa_cozinha[$cont]</th>"; 
                      }
                      ?>
                      
                      <tr class="danger">         
                      
                        <th>Salarios e Ordenados</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $messervicos_terceiros_producao1[$cont]</td> 
                      <td><font color=red>  $servicos_terceiros_producao1[$cont] </td>       
                      <th><font color=blue> $diferencaservicos_terceiros_producao[$cont]</th>"; 
                      }
                      ?>
                      
                       <tr class="danger">         
                      
                        <th>Manut. Corretiva Maq.</th> 
                        <?php
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
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
                        
                        for($cont=1;$cont<=6; $cont++){
                        echo "
                      <td><font color=green> $messaida_material_assistencia071[$cont]</td> 
                      <td><font color=red>  $saida_material_assistencia071[$cont] </td>       
                      <th><font color=blue> $diferencasaida_material_assistencia07[$cont]</th>"; 
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
          
                                                           
    
  