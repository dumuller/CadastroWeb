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
     
     $provisionado=8370711.80;
     $mesinicio=3;
     //denise
     $mescomunicacao_prod_assistencia=3000.00;
            
     $mescomunicacao_admin=100000.00;
     
      $mescorreio=50000.00;
     
     $mesmaterial_consumo=30000.00;
     
     $mesenergia_eletrica_adm=25000.00;
     
      $mesmanutencao_instalacao_admin=15000.00;

     
      $mesagua=8000.00;

     
     $mescomunicacao_comercial=20000.00;

      
     $mescomunicacao_entregas=0;

     
     //Eduardo
    $messalarios_comercial=1420330.90;
     
      $mesviagem_comercial=200000.00;
     
      $mesdespesa_feiras=150000.00;
        
      $mesoutras_despesas_comercial=20000.00;
     
      $mesdespesas_estadias_supervisores=15000.00;
     
    $mesmaterial_grafico=10000.00;
     
      $mesdespesas_motoristas=0.0;
     
       $mestop10_2016=5800.00;
     
      $mesbrindes_representantes=0.00;
     
       $mesmaterial_grafico_comercial=0.00;
     
       $mespropaganda_comercial=5000.00;
     
     
     //Ricardo
     
    $messeguros_instalacoes=12000.00;
     
       $messervicos_terceiros_adm=350000.00;
      
      $mesgastos_diversos_adm=50000.00;
    
      $mesimpostos_taxas=15000.00;
     
      $mesdespesas_viagens_adm=20000.00;
     
      $mespremios_direcao=10000.00;
     
      $mespremios_admn=2500.00;
     
       $messeguros_vida=0.00;
           
      $messeguranca_medicina_admin=18000.00;
     
      $mesoutras_despesas_admin=350.00;
     
      $mesoutras_despesas_direcao=0.00;
     
      $messeguranca_medicina_comercial=2000.00;
     
      $mespremios_bonificacoes_comercial=1250.00;
     
     
     //Rudimar
     
      $mesdespesas_instalacoes_tanques=150000.00;
     
      $mesdespesas_veiculos_producao=30000.00;
     
       $mescombustivel_veiculos_producao=30000.00;
     
       $mesfretes_carretos=0.00;
     
      $messeguros_taxas_veiculos_producao=8000.00;
     
       $mesoutros_custos_motoristas=0.00;
     
      $mesdespesas_veiculos_adm=5000.00;
  
      $mescombustivel_adm=3000.00;
     
       $mescombustivel_comercial=100000.00;
     
       $mesmanuntecao_caminhoes=0.00;

      $mesdespesa_veiculos_comercial=25000.00;
     
      $messeguros_taxas_comercial=17500.00;
     
      $mescombustivel_caminhoes=0.00;
     
     //Sandra
     
      $messegurancao_medicina_trabalho=240000.00;
     
      $messalarios_ordenados_adm=949486.80;
     
       $mescopa_cozinha=3000.00;

     
     //Vitor
     
       $messalarios_ordenados=2800844.10;
     
      $mesassistencia_tecnica=500000.00;
     
      $messaida_material_consumo06=405000.00;
     
       $messervicos_terceiros_producao=180000.00;
     
       $mesmanutencao_corretiva_maquinas=80000.00;
     
       $mesenergia_eletrica_producao=110000.00;
     
       $mesdespesa_viagem_producao=50000.00;
     
       $mespremios_bonificacoes_producao=32500.00;
     
       $mesalugueis_producao=33200.00;
     
      $mesoutras_despesas_producao=0.00;
     
      $messaida_material_epi06=22500.00;
     
      $messaida_material_assistencia06=9000.00;
     
      $messaida_material_consumo_producao07=9000.00;
     
       $messaida_material_consumo_producao08=4500.00;
     
       $messaida_material_consumo_producao10=4500.00;
     
       $mesmanutencao_preventiva_maquinas=5000.00;
     
       $messaida_material_assistencia07=450.00;
       
       }
       else{
        $mesinicio=1;
       }
       
       function retornavalor16($mes,$ano,$codigo){  
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
  AND (EXTRACT(MONTH FROM CAIXA_ITENS.CXI_DATA) BETWEEN $mes AND 12))
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
  AND (EXTRACT(MONTH FROM PAGAR_TITULOS.PAG_DATACOMPETENCIA) BETWEEN $mes AND 12))
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

  function retornavalor17($mes,$ano,$codigo){  
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
  AND (EXTRACT(MONTH FROM CAIXA_ITENS.CXI_DATA) BETWEEN $mes AND 12))
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
  AND (EXTRACT(MONTH FROM PAGAR_TITULOS.PAG_DATACOMPETENCIA) BETWEEN $mes AND 12))
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

function salario($ano,$codigo){  
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
departamentos.dep_tdp_codigo=$codigo";  

 
  
  	$editar =ibase_query($sql);
  	 list($valorcompra)=ibase_fetch_row($editar);
  	 $valor=$valorcompra;    	 
  	 
  	 
  	 return $valor;
  	 
     
} 

function consumo($mes,$ano,$requisicao,$tipofiscal){ 

if($mes==1){
$mes='01';
}

if($mes==2){
$mes='02';
}

if($mes==3){
$mes='03';
}

if($mes==4){
$mes='04';
}

if($mes==5){
$mes='05';
}

if($mes==6){
$mes='06';
}

if($mes==7){
$mes='07';
}

if($mes==8){
$mes='08';
}

if($mes==9){
$mes='09';
}

if($mes==10){
$mes='10';
}

if($mes==11){
$mes='11';
}

if($mes==12){
$mes='12';
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
WHERE (CAST(REQUISICOES.REQ_DATA AS DATE) BETWEEN '01.$mes.$ano' and '31.12.$ano')
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

       //denise
       
      $comunicacao_producao_assistencia1=retornavalor16($mesinicio,$ano,194);
      $alcancado=$alcancado+$comunicacao_producao_assistencia1;
      $diferencacomunicacao_prod_assistencia=$mescomunicacao_prod_assistencia-$comunicacao_producao_assistencia1;
      $comunicacao_producao_assistencia1=number_format($comunicacao_producao_assistencia1, 2, ",", "."); 
      $mescomunicacao_prod_assistencia1=number_format($mescomunicacao_prod_assistencia, 2, ",", "."); 
      $diferencacomunicacao_prod_assistencia=number_format($diferencacomunicacao_prod_assistencia, 2, ",", "."); 
       
      $comunicacao_admin1=retornavalor17($mesinicio,$ano,71);
      $alcancado=$alcancado+$comunicacao_admin1;
      $diferencacomunicacao_admin=$mescomunicacao_admin-$comunicacao_admin1;
      $comunicacao_admin1=number_format($comunicacao_admin1, 2, ",", "."); 
      $mescomunicacao_admin1=number_format($mescomunicacao_admin, 2, ",", "."); 
      $diferencacomunicacao_admin=number_format($diferencacomunicacao_admin, 2, ",", ".");  
      
      $correio1=retornavalor17($mesinicio,$ano,202);
      $alcancado=$alcancado+$correio1;
      $diferencacorreio=$mescorreio-$correio1;
      $correio1=number_format($correio1, 2, ",", "."); 
      $mescorreio1=number_format($mescorreio, 2, ",", "."); 
      $diferencacorreio=number_format($diferencacorreio, 2, ",", ".");   
      
       $material_consumo1=retornavalor17($mesinicio,$ano,74);
       $alcancado=$alcancado+$material_consumo1;
      $diferencamaterial_consumo=$mesmaterial_consumo-$material_consumo1;
      $material_consumo1=number_format($material_consumo1, 2, ",", "."); 
      $mesmaterial_consumo1=number_format($mesmaterial_consumo, 2, ",", "."); 
      $diferencamaterial_consumo=number_format($diferencamaterial_consumo, 2, ",", ".");   
     
      $energia_eletrica_adm1=retornavalor17($mesinicio,$ano,260);
       $alcancado=$alcancado+$energia_eletrica_adm1;
       $diferencaenergia_eletrica_adm=$mesenergia_eletrica_adm-$energia_eletrica_adm1;
      $energia_eletrica_adm1=number_format($energia_eletrica_adm1, 2, ",", "."); 
      $mesenergia_eletrica_adm1=number_format($mesenergia_eletrica_adm, 2, ",", "."); 
      $diferencaenergia_eletrica_adm=number_format($diferencaenergia_eletrica_adm, 2, ",", ".");   
        
       $manutencao_instalacao_admin1=retornavalor17($mesinicio,$ano,73);
        $alcancado=$alcancado+ $manutencao_instalacao_admin1;
       $diferencamanutencao_instalacao_admin=$mesmanutencao_instalacao_admin-$manutencao_instalacao_admin1;
      $manutencao_instalacao_admin1=number_format($manutencao_instalacao_admin1, 2, ",", "."); 
      $mesmanutencao_instalacao_admin1=number_format($mesmanutencao_instalacao_admin, 2, ",", "."); 
      $diferencamanutencao_instalacao_admin=number_format($diferencamanutencao_instalacao_admin, 2, ",", ".");   
      
      
      $agua1=retornavalor17($mesinicio,$ano,58);
      $alcancado=$alcancado+ $agua1;
       $diferencaagua=$mesagua-$agua1;
      $agua1=number_format($agua1, 2, ",", "."); 
      $mesagua1=number_format($mesagua, 2, ",", "."); 
      $diferencaagua=number_format($diferencaagua, 2, ",", ".");  
      
      $comunicacao_comercial1=retornavalor17($mesinicio,$ano,156);
      $alcancado=$alcancado+ $comunicacao_comercial1;
       $diferencacomunicacao_comercial=$mescomunicacao_comercial-$comunicacao_comercial1;
      $comunicacao_comercial1=number_format($comunicacao_comercial1, 2, ",", "."); 
      $mescomunicacao_comercial1=number_format($mescomunicacao_comercial, 2, ",", "."); 
      $diferencacomunicacao_comercial=number_format($diferencacomunicacao_comercial, 2, ",", ".");   
      
      $comunicacao_entregas1=retornavalor17($mesinicio,$ano,127);
      $alcancado=$alcancado+ $comunicacao_entregas1;
      $diferencacomunicacao_entregas=$mescomunicacao_entregas-$comunicacao_entregas1;
      $comunicacao_entregas1=number_format($comunicacao_entregas1, 2, ",", "."); 
      $mescomunicacao_entregas1=number_format($mescomunicacao_entregas, 2, ",", "."); 
      $diferencacomunicacao_entregas=number_format($diferencacomunicacao_entregas, 2, ",", ".");   
      
      
      //Eduardo
      
      $salarios_comercial1=salario($ano,4);
       $alcancado=$alcancado+ $salarios_comercial1;
      $diferencasalarios_comercial=$messalarios_comercial-$salarios_comercial1;
      $salarios_comercial1=number_format($salarios_comercial1, 2, ",", "."); 
      $messalarios_comercial1=number_format($messalarios_comercial, 2, ",", "."); 
      $diferencasalarios_comercial=number_format($diferencasalarios_comercial, 2, ",", "."); 
      
      $viagem_comercial1=retornavalor17($mesinicio,$ano,155);
      $alcancado=$alcancado+ $viagem_comercial1;
      $diferencaviagem_comercial=$mesviagem_comercial-$viagem_comercial1;
      $viagem_comercial1=number_format($viagem_comercial1, 2, ",", "."); 
      $mesviagem_comercial1=number_format($mesviagem_comercial, 2, ",", "."); 
      $diferencaviagem_comercial=number_format($diferencaviagem_comercial, 2, ",", "."); 
      
      $despesa_feiras1=retornavalor17($mesinicio,$ano,161);
      $alcancado=$alcancado+  $despesa_feiras1;
      $diferencadespesa_feiras=$mesdespesa_feiras-$despesa_feiras1;
      $despesa_feiras1=number_format($despesa_feiras1, 2, ",", "."); 
      $mesdespesa_feiras1=number_format($mesdespesa_feiras, 2, ",", "."); 
      $diferencadespesa_feiras=number_format($diferencadespesa_feiras, 2, ",", "."); 
      
       $outras_despesas_comercial1=retornavalor17($mesinicio,$ano,153);
       $alcancado=$alcancado+ $outras_despesas_comercial1;
      $diferencaoutras_despesas_comercial=$mesoutras_despesas_comercial-$outras_despesas_comercial1;
      $outras_despesas_comercial1=number_format($outras_despesas_comercial1, 2, ",", "."); 
      $mesoutras_despesas_comercial1=number_format($mesoutras_despesas_comercial, 2, ",", "."); 
      $diferencaoutras_despesas_comercial=number_format($diferencaoutras_despesas_comercial, 2, ",", "."); 
      
      $despesas_estadias_supervisores1=retornavalor17($mesinicio,$ano,262);
      $alcancado=$alcancado+ $despesas_estadias_supervisores1;
      $diferencadespesas_estadias_supervisores=$mesdespesas_estadias_supervisores-$despesas_estadias_supervisores1;
      $despesas_estadias_supervisores1=number_format($despesas_estadias_supervisores1, 2, ",", "."); 
      $mesdespesas_estadias_supervisores1=number_format($mesdespesas_estadias_supervisores, 2, ",", "."); 
      $diferencadespesas_estadias_supervisores=number_format($diferencadespesas_estadias_supervisores, 2, ",", "."); 
      
       $material_grafico1=retornavalor17($mesinicio,$ano,75);
       $alcancado=$alcancado+ $material_grafico1;
      $diferencamaterial_grafico=$mesmaterial_grafico-$material_grafico1;
      $material_grafico1=number_format($material_grafico1, 2, ",", "."); 
      $mesmaterial_grafico1=number_format($mesmaterial_grafico, 2, ",", "."); 
      $diferencamaterial_grafico=number_format($diferencamaterial_grafico, 2, ",", "."); 
      
      $despesas_motoristas1=retornavalor17($mesinicio,$ano,37);
      $alcancado=$alcancado+ $despesas_motoristas1;
      $diferencadespesas_motoristas=$mesdespesas_motoristas-$despesas_motoristas1;
      $despesas_motoristas1=number_format($despesas_motoristas1, 2, ",", "."); 
      $mesdespesas_motoristas1=number_format($mesdespesas_motoristas, 2, ",", "."); 
      $diferencadespesas_motoristas=number_format($diferencadespesas_motoristas, 2, ",", "."); 
      
      $top10_20161=retornavalor17($mesinicio,$ano,269);
      $alcancado=$alcancado+ $top10_20161;
      $diferencatop10_2016=$mestop10_2016-$top10_20161;
      $top10_20161=number_format($top10_20161, 2, ",", "."); 
      $mestop10_20161=number_format($mestop10_2016, 2, ",", "."); 
      $diferencatop10_2016=number_format($diferencatop10_2016, 2, ",", "."); 
      
      $brindes_representantes1=retornavalor17($mesinicio,$ano,187);
       $alcancado=$alcancado+ $brindes_representantes1;
      $diferencabrindes_representantes=$mesbrindes_representantes-$brindes_representantes1;
      $brindes_representantes1=number_format($brindes_representantes1, 2, ",", "."); 
      $mesbrindes_representantes1=number_format($mesbrindes_representantes, 2, ",", "."); 
      $diferencabrindes_representantes=number_format($diferencabrindes_representantes, 2, ",", "."); 
      
      $material_grafico_comercial1=retornavalor17($mesinicio,$ano,157);
      $alcancado=$alcancado+ $material_grafico_comercial1;
      $diferencamaterial_grafico_comercial=$mesmaterial_grafico_comercial-$material_grafico_comercial1;
      $material_grafico_comercial1=number_format($material_grafico_comercial1, 2, ",", "."); 
      $mesmaterial_grafico_comercial1=number_format($mesmaterial_grafico_comercial, 2, ",", "."); 
      $diferencamaterial_grafico_comercial=number_format($diferencamaterial_grafico_comercial, 2, ",", ".");
      
      $propaganda_comercial1=retornavalor17($mesinicio,$ano,158);
      $alcancado=$alcancado+ $propaganda_comercial1;
      $diferencapropaganda_comercial=$mespropaganda_comercial-$propaganda_comercial1;
      $propaganda_comercial1=number_format($propaganda_comercial1, 2, ",", "."); 
      $mespropaganda_comercial1=number_format($mespropaganda_comercial, 2, ",", "."); 
      $diferencapropaganda_comercial=number_format($diferencapropaganda_comercial, 2, ",", ".");
            
        //Ricardo
        
      $seguros_instalacoes1=retornavalor16($mesinicio,$ano,259);
      $alcancado=$alcancado+ $seguros_instalacoes1;
      $diferencaseguros_instalacoes=$messeguros_instalacoes-$seguros_instalacoes1;
      $seguros_instalacoes1=number_format($seguros_instalacoes1, 2, ",", "."); 
      $messeguros_instalacoes1=number_format($messeguros_instalacoes, 2, ",", "."); 
      $diferencaseguros_instalacoes=number_format($diferencaseguros_instalacoes, 2, ",", ".");
      
      $servicos_terceiros_adm1=retornavalor17($mesinicio,$ano,70);
      $alcancado=$alcancado+ $servicos_terceiros_adm1;
      $diferencaservicos_terceiros_adm=$messervicos_terceiros_adm-$servicos_terceiros_adm1;
      $servicos_terceiros_adm1=number_format($servicos_terceiros_adm1, 2, ",", "."); 
      $messervicos_terceiros_adm1=number_format($messervicos_terceiros_adm, 2, ",", "."); 
      $diferencaservicos_terceiros_adm=number_format($diferencaservicos_terceiros_adm, 2, ",", ".");
      
       $gastos_diversos_adm1=retornavalor17($mesinicio,$ano,78);
      $alcancado=$alcancado+ $gastos_diversos_adm1;
      $diferencagastos_diversos_adm=$mesgastos_diversos_adm-$gastos_diversos_adm1;
      $gastos_diversos_adm1=number_format($gastos_diversos_adm1, 2, ",", "."); 
      $mesgastos_diversos_adm1=number_format($mesgastos_diversos_adm, 2, ",", "."); 
      $diferencagastos_diversos_adm=number_format($diferencagastos_diversos_adm, 2, ",", ".");
      
       $impostos_taxas1=retornavalor17($mesinicio,$ano,72);
       $alcancado=$alcancado+ $impostos_taxas1;
      $diferencaimpostos_taxas=$mesimpostos_taxas-$impostos_taxas1;
      $impostos_taxas1=number_format($impostos_taxas1, 2, ",", "."); 
      $mesimpostos_taxas1=number_format($mesimpostos_taxas, 2, ",", "."); 
      $diferencaimpostos_taxas=number_format($diferencaimpostos_taxas, 2, ",", ".");
      
       $despesas_viagens_adm1=retornavalor17($mesinicio,$ano,77);
       $alcancado=$alcancado+ $despesas_viagens_adm1;
      $diferencadespesas_viagens_adm=$mesdespesas_viagens_adm-$despesas_viagens_adm1;
      $despesas_viagens_adm1=number_format($despesas_viagens_adm1, 2, ",", "."); 
      $mesdespesas_viagens_adm1=number_format($mesdespesas_viagens_adm, 2, ",", "."); 
      $diferencadespesas_viagens_adm=number_format($diferencadespesas_viagens_adm, 2, ",", ".");
      
       $premios_direcao1=retornavalor17($mesinicio,$ano,82);
      $diferencapremios_direcao=$mespremios_direcao-$premios_direcao1;
      $premios_direcao1=number_format($premios_direcao1, 2, ",", "."); 
      $mespremios_direcao1=number_format($mespremios_direcao, 2, ",", "."); 
      $diferencapremios_direcao=number_format($diferencapremios_direcao, 2, ",", ".");
      
         $premios_admn1=retornavalor17($mesinicio,$ano,68);
          $alcancado=$alcancado+ $premios_admn1;
      $diferencapremios_admn=$mespremios_admn-$premios_admn1;
      $premios_admn1=number_format($premios_admn1, 2, ",", "."); 
      $mespremios_admn1=number_format($mespremios_admn, 2, ",", "."); 
      $diferencapremios_admn=number_format($diferencapremios_admn, 2, ",", ".");
      
       $seguros_vida1=retornavalor17($mesinicio,$ano,263);
       $alcancado=$alcancado+ $seguros_vida1;
      $diferencaseguros_vida=$messeguros_vida-$seguros_vida1;
      $seguros_vida1=number_format($seguros_vida1, 2, ",", "."); 
      $messeguros_vida1=number_format($messeguros_vida, 2, ",", "."); 
      $diferencaseguros_vida=number_format($diferencaseguros_vida, 2, ",", ".");
      
       $seguranca_medicina_admin1=retornavalor17($mesinicio,$ano,69);
       $alcancado=$alcancado+ $seguranca_medicina_admin1;
      $diferencaseguranca_medicina_admin=$messeguranca_medicina_admin-$seguranca_medicina_admin1;
      $seguranca_medicina_admin1=number_format($seguranca_medicina_admin1, 2, ",", "."); 
      $messeguranca_medicina_admin1=number_format($messeguranca_medicina_admin, 2, ",", "."); 
      $diferencaseguranca_medicina_admin=number_format($diferencaseguranca_medicina_admin, 2, ",", ".");
      
      $outras_despesas_direcao1=retornavalor17($mesinicio,$ano,84);
      $alcancado=$alcancado+ $outras_despesas_direcao1;
      $diferencaoutras_despesas_direcao=$mesoutras_despesas_direcao-$outras_despesas_direcao1;
      $outras_despesas_direcao1=number_format($outras_despesas_direcao1, 2, ",", "."); 
      $mesoutras_despesas_direcao1=number_format($mesoutras_despesas_direcao, 2, ",", "."); 
      $diferencaoutras_despesas_direcao=number_format($diferencaoutras_despesas_direcao, 2, ",", ".");
        
       $seguranca_medicina_comercial1=retornavalor17($mesinicio,$ano,190);
       $alcancado=$alcancado+ $seguranca_medicina_comercial1;
      $diferencaseguranca_medicina_comercial=$messeguranca_medicina_comercial-$seguranca_medicina_comercial1;
      $seguranca_medicina_comercial1=number_format($seguranca_medicina_comercial1, 2, ",", "."); 
      $messeguranca_medicina_comercial1=number_format($messeguranca_medicina_comercial, 2, ",", "."); 
      $diferencaseguranca_medicina_comercial=number_format($diferencaseguranca_medicina_comercial, 2, ",", ".");
      
      $premios_bonificacoes_comercial1=retornavalor17($mesinicio,$ano,152);
      $alcancado=$alcancado+ $premios_bonificacoes_comercial1;
      $diferencapremios_bonificacoes_comercial=$mespremios_bonificacoes_comercial-$premios_bonificacoes_comercial1;
      $premios_bonificacoes_comercial1=number_format($premios_bonificacoes_comercial1, 2, ",", "."); 
      $mespremios_bonificacoes_comercial1=number_format($mespremios_bonificacoes_comercial, 2, ",", "."); 
      $diferencapremios_bonificacoes_comercial=number_format($diferencapremios_bonificacoes_comercial, 2, ",", "."); 
      
      
      // Rudimar
      
      $despesas_instalacoes_tanques1=retornavalor16($mesinicio,$ano,128);
      $alcancado=$alcancado+ $despesas_instalacoes_tanques1;
      $diferencadespesas_instalacoes_tanques=$mesdespesas_instalacoes_tanques-$despesas_instalacoes_tanques1;
      $despesas_instalacoes_tanques1=number_format($despesas_instalacoes_tanques1, 2, ",", "."); 
      $mesdespesas_instalacoes_tanques1=number_format($mesdespesas_instalacoes_tanques, 2, ",", "."); 
      $diferencadespesas_instalacoes_tanques=number_format($diferencadespesas_instalacoes_tanques, 2, ",", "."); 
      
      $despesas_veiculos_producao1=retornavalor16($mesinicio,$ano,62);
      $alcancado=$alcancado+ $despesas_veiculos_producao1;
      $diferencadespesas_veiculos_producao=$mesdespesas_veiculos_producao-$despesas_veiculos_producao1;
      $despesas_veiculos_producao1=number_format($despesas_veiculos_producao1, 2, ",", "."); 
      $mesdespesas_veiculos_producao1=number_format($mesdespesas_veiculos_producao, 2, ",", "."); 
      $diferencadespesas_veiculos_producao=number_format($diferencadespesas_veiculos_producao, 2, ",", "."); 
      
      $combustivel_veiculos_producao1=retornavalor16($mesinicio,$ano,189);
      $alcancado=$alcancado+ $combustivel_veiculos_producao1;
      $diferencacombustivel_veiculos_producao=$mescombustivel_veiculos_producao-$combustivel_veiculos_producao1;
      $combustivel_veiculos_producao1=number_format($combustivel_veiculos_producao1, 2, ",", "."); 
      $mescombustivel_veiculos_producao1=number_format($mescombustivel_veiculos_producao, 2, ",", "."); 
      $diferencacombustivel_veiculos_producao=number_format($diferencacombustivel_veiculos_producao, 2, ",", "."); 
      
      $fretes_carretos1=retornavalor16($mesinicio,$ano,112);
      $alcancado=$alcancado+ $fretes_carretos1;
      $diferencafretes_carretos=$mesfretes_carretos-$fretes_carretos1;
      $fretes_carretos1=number_format($fretes_carretos1, 2, ",", "."); 
      $mesfretes_carretos1=number_format($mesfretes_carretos, 2, ",", "."); 
      $diferencafretes_carretos=number_format($diferencafretes_carretos, 2, ",", "."); 
      
      $seguros_taxas_veiculos_producao1=retornavalor16($mesinicio,$ano,172);
      $alcancado=$alcancado+ $seguros_taxas_veiculos_producao1;
      $diferencaseguros_taxas_veiculos_producao=$messeguros_taxas_veiculos_producao-$seguros_taxas_veiculos_producao1;
      $seguros_taxas_veiculos_producao1=number_format($seguros_taxas_veiculos_producao1, 2, ",", "."); 
      $messeguros_taxas_veiculos_producao1=number_format($messeguros_taxas_veiculos_producao, 2, ",", "."); 
      $diferencaseguros_taxas_veiculos_producao=number_format($diferencaseguros_taxas_veiculos_producao, 2, ",", "."); 
      
       $outros_custos_motoristas1=retornavalor16($mesinicio,$ano,34);
       $alcancado=$alcancado+ $outros_custos_motoristas1;
      $diferencaoutros_custos_motoristas=$mesoutros_custos_motoristas-$outros_custos_motoristas1;
      $outros_custos_motoristas1=number_format($outros_custos_motoristas1, 2, ",", "."); 
      $mesoutros_custos_motoristas1=number_format($mesoutros_custos_motoristas, 2, ",", "."); 
      $diferencaoutros_custos_motoristas=number_format($diferencaoutros_custos_motoristas, 2, ",", "."); 
      
       $despesas_veiculos_adm1=retornavalor17($mesinicio,$ano,130);
       $alcancado=$alcancado+ $despesas_veiculos_adm1;
      $diferencadespesas_veiculos_adm=$mesdespesas_veiculos_adm-$despesas_veiculos_adm1;
      $despesas_veiculos_adm1=number_format($despesas_veiculos_adm1, 2, ",", "."); 
      $mesdespesas_veiculos_adm1=number_format($mesdespesas_veiculos_adm, 2, ",", "."); 
      $diferencadespesas_veiculos_adm=number_format($diferencadespesas_veiculos_adm, 2, ",", "."); 
      
       $combustivel_adm1=retornavalor17($mesinicio,$ano,188);
       $alcancado=$alcancado+ $combustivel_adm1;
      $diferencacombustivel_adm=$mescombustivel_adm-$combustivel_adm1;
      $combustivel_adm1=number_format($combustivel_adm1, 2, ",", "."); 
      $mescombustivel_adm1=number_format($mescombustivel_adm, 2, ",", "."); 
      $diferencacombustivel_adm=number_format($diferencacombustivel_adm, 2, ",", "."); 
      
       $combustivel_comercial1=retornavalor17($mesinicio,$ano,154);
       $alcancado=$alcancado+ $combustivel_comercial1;
      $diferencacombustivel_comercial=$mescombustivel_comercial-$combustivel_comercial1;
      $combustivel_comercial1=number_format($combustivel_comercial1, 2, ",", "."); 
      $mescombustivel_comercial1=number_format($mescombustivel_comercial, 2, ",", "."); 
      $diferencacombustivel_comercial=number_format($diferencacombustivel_comercial, 2, ",", ".");
      
       $manutencao_caminhoes1=retornavalor17($mesinicio,$ano,35);
       $alcancado=$alcancado+ $manutencao_caminhoes1;
      $diferencamanutencao_caminhoes=$mesmanutencao_caminhoes-$manutencao_caminhoes1;
      $manutencao_caminhoes1=number_format($manutencao_caminhoes1, 2, ",", "."); 
      $mesmanutencao_caminhoes1=number_format($mesmanutencao_caminhoes, 2, ",", "."); 
      $diferencamanutencao_caminhoes=number_format($diferencamanutencao_caminhoes, 2, ",", "."); 
      
       $despesa_veiculos_comercial1=retornavalor17($mesinicio,$ano,169);
       $alcancado=$alcancado+ $despesa_veiculos_comercial1;
      $diferencadespesa_veiculos_comercial=$mesdespesa_veiculos_comercial-$despesa_veiculos_comercial1;
      $despesa_veiculos_comercial1=number_format($despesa_veiculos_comercial1, 2, ",", "."); 
      $mesdespesa_veiculos_comercial1=number_format($mesdespesa_veiculos_comercial, 2, ",", "."); 
      $diferencadespesa_veiculos_comercial=number_format($diferencadespesa_veiculos_comercial, 2, ",", "."); 
      
      $seguros_taxas_comercial1=retornavalor17($mesinicio,$ano,170);
      $alcancado=$alcancado+ $seguros_taxas_comercial1;
      $diferencaseguros_taxas_comercial=$messeguros_taxas_comercial-$seguros_taxas_comercial1;
      $seguros_taxas_comercial1=number_format($seguros_taxas_comercial1, 2, ",", "."); 
      $messeguros_taxas_comercial1=number_format($messeguros_taxas_comercial, 2, ",", "."); 
      $diferencaseguros_taxas_comercial=number_format($diferencaseguros_taxas_comercial, 2, ",", "."); 
      
      $combustivel_caminhoes1=retornavalor17($mesinicio,$ano,36);
      $alcancado=$alcancado+ $combustivel_caminhoes1;
      $diferencacombustivel_caminhoes=$mescombustivel_caminhoes-$combustivel_caminhoes1;
      $combustivel_caminhoes1=number_format($combustivel_caminhoes1, 2, ",", "."); 
      $mescombustivel_caminhoes1=number_format($mescombustivel_caminhoes, 2, ",", "."); 
      $diferencacombustivel_caminhoes=number_format($diferencacombustivel_caminhoes, 2, ",", "."); 
      
      
      // Sandra
      
      $segurancao_medicina_trabalho1=retornavalor16($mesinicio,$ano,56);
      $alcancado=$alcancado+ $segurancao_medicina_trabalho1;
      $diferencasegurancao_medicina_trabalho=$messegurancao_medicina_trabalho-$segurancao_medicina_trabalho1;
      $segurancao_medicina_trabalho1=number_format($segurancao_medicina_trabalho1, 2, ",", "."); 
      $messegurancao_medicina_trabalho1=number_format($messegurancao_medicina_trabalho, 2, ",", "."); 
      $diferencasegurancao_medicina_trabalho=number_format($diferencasegurancao_medicina_trabalho, 2, ",", ".");  
      
        $salarios_ordenados_adm1=salario($ano,3);
        $alcancado=$alcancado+ $salarios_ordenados_adm1;
      $diferencasalarios_ordenados_adm=$messalarios_ordenados_adm-$salarios_ordenados_adm1;
      $salarios_ordenados_adm1=number_format($salarios_ordenados_adm1, 2, ",", "."); 
      $messalarios_ordenados_adm1=number_format($messalarios_ordenados_adm, 2, ",", "."); 
      $diferencasalarios_ordenados_adm=number_format($diferencasalarios_ordenados_adm, 2, ",", ".");  
      
      $copa_cozinha1=retornavalor17($mesinicio,$ano,265);
      $alcancado=$alcancado+ $copa_cozinha1;
      $diferencacopa_cozinha=$mescopa_cozinha-$copa_cozinha1;
      $copa_cozinha1=number_format($copa_cozinha1, 2, ",", "."); 
      $mescopa_cozinha1=number_format($mescopa_cozinha, 2, ",", "."); 
      $diferencacopa_cozinha=number_format($diferencacopa_cozinha, 2, ",", ".");  
      
      // Vitor
       $salarios_ordenadosprod=salario($ano,1);
       $salarios_ordenadosprod1=salario($ano,2);
       $salarios_ordenados1=$salarios_ordenadosprod+$salarios_ordenadosprod1;
       $alcancado=$alcancado+ $salarios_ordenados1;
      $diferencasalarios_ordenados=$messalarios_ordenados-$salarios_ordenados1;
      $salarios_ordenados1=number_format($salarios_ordenados1, 2, ",", "."); 
      $messalarios_ordenados1=number_format($messalarios_ordenados, 2, ",", "."); 
      $diferencasalarios_ordenados=number_format($diferencasalarios_ordenados, 2, ",", ".");
      
      $assistencia_tecnica1=retornavalor16($mesinicio,$ano,148);
      $alcancado=$alcancado+ $assistencia_tecnica1;
      $diferencaassistencia_tecnica=$mesassistencia_tecnica-$assistencia_tecnica1;
      $assistencia_tecnica1=number_format($assistencia_tecnica1, 2, ",", "."); 
      $mesassistencia_tecnica1=number_format($mesassistencia_tecnica, 2, ",", "."); 
      $diferencaassistencia_tecnica=number_format($diferencaassistencia_tecnica, 2, ",", ".");   
      
      $servicos_terceiros_producao1=retornavalor16($mesinicio,$ano,57);
      $alcancado=$alcancado+$servicos_terceiros_producao1;
      $diferencaservicos_terceiros_producao=$messervicos_terceiros_producao-$servicos_terceiros_producao1;
      $servicos_terceiros_producao1=number_format($servicos_terceiros_producao1, 2, ",", "."); 
      $messervicos_terceiros_producao1=number_format($messervicos_terceiros_producao, 2, ",", "."); 
      $diferencaservicos_terceiros_producao=number_format($diferencaservicos_terceiros_producao, 2, ",", ".");   
      
      $manutencao_corretiva_maquinas1=retornavalor16($mesinicio,$ano,60);
      $alcancado=$alcancado+$manutencao_corretiva_maquinas1;
      $diferencamanutencao_corretiva_maquinas=$mesmanutencao_corretiva_maquinas-$manutencao_corretiva_maquinas1;
      $manutencao_corretiva_maquinas1=number_format($manutencao_corretiva_maquinas1, 2, ",", "."); 
      $mesmanutencao_corretiva_maquinas1=number_format($mesmanutencao_corretiva_maquinas, 2, ",", "."); 
      $diferencamanutencao_corretiva_maquinas=number_format($diferencamanutencao_corretiva_maquinas, 2, ",", ".");       
      
      $energia_eletrica_producao1=retornavalor16($mesinicio,$ano,59);
      $alcancado=$alcancado+$energia_eletrica_producao1;
      $diferencaenergia_eletrica_producao=$mesenergia_eletrica_producao-$energia_eletrica_producao1;
      $energia_eletrica_producao1=number_format($energia_eletrica_producao1, 2, ",", "."); 
      $mesenergia_eletrica_producao1=number_format($mesenergia_eletrica_producao, 2, ",", "."); 
      $diferencaenergia_eletrica_producao=number_format($diferencaenergia_eletrica_producao, 2, ",", ".");  
      
      $despesa_viagem_producao1=retornavalor16($mesinicio,$ano,63);
      $alcancado=$alcancado+$despesa_viagem_producao1;
      $diferencadespesa_viagem_producao=$mesdespesa_viagem_producao-$despesa_viagem_producao1;
      $despesa_viagem_producao1=number_format($despesa_viagem_producao1, 2, ",", "."); 
      $mesdespesa_viagem_producao1=number_format($mesdespesa_viagem_producao, 2, ",", "."); 
      $diferencadespesa_viagem_producao=number_format($diferencadespesa_viagem_producao, 2, ",", ".");  
      
      $premios_bonificacoes_producao1=retornavalor16($mesinicio,$ano,55);
      $alcancado=$alcancado+$premios_bonificacoes_producao1;
      $diferencapremios_bonificacoes_producao=$mespremios_bonificacoes_producao-$premios_bonificacoes_producao1;
      $premios_bonificacoes_producao1=number_format($premios_bonificacoes_producao1, 2, ",", "."); 
      $mespremios_bonificacoes_producao1=number_format($mespremios_bonificacoes_producao, 2, ",", "."); 
      $diferencapremios_bonificacoes_producao=number_format($diferencapremios_bonificacoes_producao, 2, ",", ".");  
        
      $alugueis_producao1=retornavalor16($mesinicio,$ano,267);
      $alcancado=$alcancado+$alugueis_producao1;
      $diferencaalugueis_producao=$mesalugueis_producao-$alugueis_producao1;
      $alugueis_producao1=number_format($alugueis_producao1, 2, ",", "."); 
      $mesalugueis_producao1=number_format($mesalugueis_producao, 2, ",", "."); 
      $diferencaalugueis_producao=number_format($diferencaalugueis_producao, 2, ",", ".");  
          
         
      $outras_despesas_producao1=retornavalor16($mesinicio,$ano,64);
      $alcancado=$alcancado+$outras_despesas_producao1;
      $diferencaoutras_despesas_producao=$mesoutras_despesas_producao-$outras_despesas_producao1;
      $outras_despesas_producao1=number_format($outras_despesas_producao1, 2, ",", "."); 
      $mesoutras_despesas_producao1=number_format($mesoutras_despesas_producao, 2, ",", "."); 
      $diferencaoutras_despesas_producao=number_format($diferencaoutras_despesas_producao, 2, ",", "."); 
      
       $manutencao_preventiva_maquinas1=retornavalor16($mesinicio,$ano,261);
       $alcancado=$alcancado+$manutencao_preventiva_maquinas1;
      $diferencamanutencao_preventiva_maquinas=$mesmanutencao_preventiva_maquinas-$manutencao_preventiva_maquinas1;
      $manutencao_preventiva_maquinas1=number_format($manutencao_preventiva_maquinas1, 2, ",", "."); 
      $mesmanutencao_preventiva_maquinas1=number_format($mesmanutencao_preventiva_maquinas, 2, ",", "."); 
      $diferencamanutencao_preventiva_maquinas=number_format($diferencamanutencao_preventiva_maquinas, 2, ",", "."); 
      
       $saida_material_consumo061=consumo($mesinicio,$ano,02,'06');
       $alcancado=$alcancado+$saida_material_consumo061;
      $diferencasaida_material_consumo06=$messaida_material_consumo06-$saida_material_consumo061;
      $saida_material_consumo061=number_format($saida_material_consumo061, 2, ",", "."); 
      $messaida_material_consumo061=number_format($messaida_material_consumo06, 2, ",", "."); 
      $diferencasaida_material_consumo06=number_format($diferencasaida_material_consumo06, 2, ",", ".");   
      
      $saida_material_epi061=consumo($mesinicio,$ano,'04','06');
      $alcancado=$alcancado+$saida_material_epi061;
      $diferencasaida_material_epi06=$messaida_material_epi06-$saida_material_epi061;
      $saida_material_epi061=number_format($saida_material_epi061, 2, ",", "."); 
      $messaida_material_epi061=number_format($messaida_material_epi06, 2, ",", "."); 
      $diferencasaida_material_epi06=number_format($diferencasaida_material_epi06, 2, ",", ".");   
      
      $saida_material_assistencia061=consumo($mesinicio,$ano,'09','06');
      $alcancado=$alcancado+$saida_material_assistencia061;
      $diferencasaida_material_assistencia06=$messaida_material_assistencia06-$saida_material_assistencia061;
      $saida_material_assistencia061=number_format($saida_material_assistencia061, 2, ",", "."); 
      $messaida_material_assistencia061=number_format($messaida_material_assistencia06, 2, ",", "."); 
      $diferencasaida_material_assistencia06=number_format($diferencasaida_material_assistencia06, 2, ",", ".");  
      
      $saida_material_consumo_producao071=consumo($mesinicio,$ano,'02','07');
      $alcancado=$alcancado+$saida_material_consumo_producao071;
      $diferencasaida_material_consumo_producao07=$messaida_material_consumo_producao07-$saida_material_consumo_producao071;
      $saida_material_consumo_producao071=number_format($saida_material_consumo_producao071, 2, ",", "."); 
      $messaida_material_consumo_producao071=number_format($messaida_material_consumo_producao07, 2, ",", "."); 
      $diferencasaida_material_consumo_producao07=number_format($diferencasaida_material_consumo_producao07, 2, ",", ".");  
      
      $saida_material_consumo_producao081=consumo($mesinicio,$ano,'02','08');
      $alcancado=$alcancado+$saida_material_consumo_producao081;
      $diferencasaida_material_consumo_producao08=$messaida_material_consumo_producao08-$saida_material_consumo_producao081;
      $saida_material_consumo_producao081=number_format($saida_material_consumo_producao081, 2, ",", "."); 
      $messaida_material_consumo_producao081=number_format($messaida_material_consumo_producao08, 2, ",", "."); 
      $diferencasaida_material_consumo_producao08=number_format($diferencasaida_material_consumo_producao08, 2, ",", "."); 
      
       $saida_material_consumo_producao101=consumo($mesinicio,$ano,'02','10');
      $alcancado=$alcancado+$saida_material_consumo_producao101;
      $diferencasaida_material_consumo_producao10=$messaida_material_consumo_producao10-$saida_material_consumo_producao101;
      $saida_material_consumo_producao101=number_format($saida_material_consumo_producao101, 2, ",", "."); 
      $messaida_material_consumo_producao101=number_format($messaida_material_consumo_producao10, 2, ",", "."); 
      $diferencasaida_material_consumo_producao10=number_format($diferencasaida_material_consumo_producao10, 2, ",", ".");   
     
      $saida_material_assistencia071=consumo($mesinicio,$ano,'09','07');
      $alcancado=$alcancado+$saida_material_assistencia071;
      $diferencasaida_material_assistencia07=$messaida_material_assistencia07-$saida_material_assistencia071;
      $saida_material_assistencia071=number_format($saida_material_assistencia071, 2, ",", "."); 
      $messaida_material_assistencia071=number_format($messaida_material_assistencia07, 2, ",", "."); 
      $diferencasaida_material_assistencia07=number_format($diferencasaida_material_assistencia07, 2, ",", ".");   
      
     $provisionado1=$provisionado;     
     $saldo=$provisionado1- $alcancado;
    
    $saldo=number_format($saldo, 2, ",", "."); 
    $alcancado=number_format($alcancado, 2, ",", "."); 
    $provisionado1=number_format($provisionado1, 2, ",", "."); 
     
                







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
                        <th>Descrição&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </th>                                            
                        <th><font color="blue">Projetado</th>
                        <th><font color="blue">Alcançado</th>
                        <th><font color="blue">Saldo</th>
                         
                                            </tr>             
                    </thead>                                    
                    <tbody>                                        
                      <tr class="success">                                                                                  
                        <th>Comunicação Prod./Assist. </th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mescomunicacao_prod_assistencia1</td> 
                      <td><font color=red>  $comunicacao_producao_assistencia1 </td>       
                      <th><font color=blue> $diferencacomunicacao_prod_assistencia</th>"; 
                      }
                      ?>
                      </tr>  
                      
                       <tr class="success">                                                                                  
                        <th>Comunicação(Tel/Cel.) Admin </th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mescomunicacao_admin1</td> 
                      <td><font color=red>  $comunicacao_admin1 </td>       
                      <th><font color=blue> $diferencacomunicacao_admin</th>"; 
                      }
                      ?>
                      </tr>  
                      
                       <tr class="success">                                                                                  
                        <th>Correios </th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mescorreio1</td> 
                      <td><font color=red>  $correio1 </td>       
                      <th><font color=blue> $diferencacorreio</th>"; 
                      }
                      ?>
                      </tr>  
                    
                     
                       <tr class="success">                                                                                  
                        <th>Material Consumo/Exped. </th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesmaterial_consumo1</td> 
                      <td><font color=red>  $material_consumo1 </td>       
                      <th><font color=blue> $diferencamaterial_consumo</th>"; 
                      }
                      ?>
                      </tr> 
                      
                      <tr class="success">                                                                                  
                        <th>Energia Elétrica Admin. </th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesenergia_eletrica_adm1</td> 
                      <td><font color=red>  $energia_eletrica_adm1 </td>       
                      <th><font color=blue> $diferencaenergia_eletrica_adm</th>"; 
                      }
                      ?>
                      </tr> 
                      
                       <tr class="success">                                                                                  
                        <th>Manutenção Equip. Admin. </th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesmanutencao_instalacao_admin1</td> 
                      <td><font color=red>  $manutencao_instalacao_admin1 </td>       
                      <th><font color=blue> $diferencamanutencao_instalacao_admin</th>"; 
                      }
                      ?>
                      </tr>             
                      
                        <tr class="success">                                                                                  
                        <th>Agua </th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesagua1</td> 
                      <td><font color=red>  $agua1 </td>       
                      <th><font color=blue> $diferencaagua</th>"; 
                      }
                      ?>
                      </tr>  
                      
                      <tr class="success">                                                                                  
                        <th>Comunicação Comercial </th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mescomunicacao_comercial1</td> 
                      <td><font color=red>  $comunicacao_comercial1 </td>       
                      <th><font color=blue> $diferencacomunicacao_comercial</th>"; 
                      }
                      ?>
                      </tr>                        
                      
                       <tr class="success">                                                                                  
                        <th>Comunicação Entregas </th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mescomunicacao_entregas1</td> 
                      <td><font color=red>  $comunicacao_entregas1 </td>       
                      <th><font color=blue> $diferencacomunicacao_entregas</th>"; 
                      }
                      ?>
                      </tr>  
                      
                      
                      
                      
                      <tr class="danger">                                                                                  
                        <th>Salario Comercial</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $messalarios_comercial1</td> 
                      <td><font color=red>  $salarios_comercial1 </td>       
                      <th><font color=blue> $diferencasalarios_comercial</th>"; 
                      }
                      ?>
                      </tr>                                              
                      
                      <tr class="danger">                                                                                  
                        <th>Despesa Viagem Comercial</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesviagem_comercial1</td> 
                      <td><font color=red>  $viagem_comercial1 </td>       
                      <th><font color=blue> $diferencaviagem_comercial</th>"; 
                      }
                      ?>
                      </tr> 
                      
                      <tr class="danger">                                                                                  
                        <th>Despesa com Feiras</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesdespesa_feiras1</td> 
                      <td><font color=red>  $despesa_feiras1 </td>       
                      <th><font color=blue> $diferencadespesa_feiras</th>"; 
                      }
                      ?>
                      </tr> 
                      
                        <tr class="danger">                                                                                  
                        <th>Outras Despesas Comerciais</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesoutras_despesas_comercial1</td> 
                      <td><font color=red>  $outras_despesas_comercial1 </td>       
                      <th><font color=blue> $diferencaoutras_despesas_comercial</th>"; 
                      }
                      ?>
                      </tr> 
                      
                        <tr class="danger">                                                                                  
                        <th>Despesas Estadias Cli./Superv.</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesdespesas_estadias_supervisores1</td> 
                      <td><font color=red>  $despesas_estadias_supervisores1 </td>       
                      <th><font color=blue> $diferencadespesas_estadias_supervisores</th>"; 
                      }
                      ?>
                      </tr>                                                                                                                        
                       
                  <tr class="danger">                                                                                  
                        <th>Material Gráfico</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesmaterial_grafico1</td> 
                      <td><font color=red>  $material_grafico1 </td>       
                      <th><font color=blue> $diferencamaterial_grafico</th>"; 
                      }
                      ?>
                      </tr>   
                      
                       <tr class="danger">                                                                                  
                        <th>Despesa Viagens Motoristas</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesdespesas_motoristas1</td> 
                      <td><font color=red>  $despesas_motoristas1 </td>       
                      <th><font color=blue> $diferencadespesas_motoristas</th>"; 
                      }
                      ?>
                      </tr>  
                      
                       <tr class="danger">                                                                                  
                        <th>Top 10 em  2016</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mestop10_20161</td> 
                      <td><font color=red>  $top10_20161 </td>       
                      <th><font color=blue> $diferencatop10_2016</th>"; 
                      }
                      ?>
                      </tr>    
                      
                       <tr class="danger">                                                                                  
                        <th>Brindes e Prem./Repres.</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesbrindes_representantes1</td> 
                      <td><font color=red>  $brindes_representantes1 </td>       
                      <th><font color=blue> $diferencabrindes_representantes</th>"; 
                      }
                      ?>
                      </tr> 
                      
                       <tr class="danger">                                                                                  
                        <th>Material Gráfico Comercial</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesmaterial_grafico_comercial1</td> 
                      <td><font color=red>  $material_grafico_comercial1 </td>       
                      <th><font color=blue> $diferencamaterial_grafico_comercial</th>"; 
                      }
                      ?>
                      </tr>   
                      
                       <tr class="danger">                                                                                  
                        <th>Propag. e Public. Comercial</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mespropaganda_comercial1</td> 
                      <td><font color=red>  $propaganda_comercial1 </td>       
                      <th><font color=blue> $diferencapropaganda_comercial</th>"; 
                      }
                      ?>
                                                                                                       
                    
                     <tr class="info">                                                                                  
                        <th>Seguros Instal. Maq./Equip.</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $messeguros_instalacoes1</td> 
                      <td><font color=red>  $seguros_instalacoes1 </td>       
                      <th><font color=blue> $diferencaseguros_instalacoes</th>"; 
                      }
                      ?>
                      </tr>  
                      
                       <tr class="info">                                                                                  
                        <th>Serviços de Terceiros Admin</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $messervicos_terceiros_adm1</td> 
                      <td><font color=red>  $servicos_terceiros_adm1 </td>       
                      <th><font color=blue> $diferencaservicos_terceiros_adm</th>"; 
                      }
                      ?>
                      </tr>   
                      
                      <tr class="info">                                                                                  
                        <th>Gastos Diversos Admin</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesgastos_diversos_adm1</td> 
                      <td><font color=red>  $gastos_diversos_adm1 </td>       
                      <th><font color=blue> $diferencagastos_diversos_adm</th>"; 
                      }
                      ?>
                      </tr>        
                      
                      <tr class="info">                                                                                  
                        <th>Impostos e Taxas Diversas</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesimpostos_taxas1</td> 
                      <td><font color=red>  $impostos_taxas1 </td>       
                      <th><font color=blue> $diferencaimpostos_taxas</th>"; 
                      }
                      ?>
                      </tr>        
                      
                      <tr class="info">                                                                                  
                        <th>Despesas Viagens Admin</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesdespesas_viagens_adm1</td> 
                      <td><font color=red>  $despesas_viagens_adm1 </td>       
                      <th><font color=blue> $diferencadespesas_viagens_adm</th>"; 
                      }
                      ?>
                      </tr>                                                                                                                                                                             
                      
                      <tr class="info">                                                                                  
                        <th>Prêmios e Bonif. Direção</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mespremios_direcao1</td> 
                      <td><font color=red>  $premios_direcao1 </td>       
                      <th><font color=blue> $diferencapremios_direcao</th>"; 
                      }
                      ?>
                      </tr>   
                      
                        <tr class="info">                                                                                  
                        <th>Prêmios e Bonif. Admin.</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mespremios_admn1</td> 
                      <td><font color=red>  $premios_admn1 </td>       
                      <th><font color=blue> $diferencapremios_admn</th>"; 
                      }
                      ?>
                      </tr>  
                       
                      
                        <tr class="info">                                                                                  
                        <th>Segurança Med. Trab. Adm.</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $messeguranca_medicina_admin1</td> 
                      <td><font color=red>  $seguranca_medicina_admin1 </td>       
                      <th><font color=blue> $diferencaseguranca_medicina_admin</th>"; 
                      }
                      ?>
                      </tr>  
                      
                        <tr class="info">                                                                                  
                        <th>Outras Despesas Direção</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesoutras_despesas_direcao1</td> 
                      <td><font color=red>  $outras_despesas_direcao1 </td>       
                      <th><font color=blue> $diferencaoutras_despesas_direcao</th>"; 
                      }
                      ?>
                      </tr> 
                      
                       <tr class="info">                                                                                  
                        <th>Segurança Med. Trab. Com.</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $messeguranca_medicina_comercial1</td> 
                      <td><font color=red>  $seguranca_medicina_comercial1 </td>       
                      <th><font color=blue> $diferencaseguranca_medicina_comercial</th>"; 
                      }
                      ?>
                      </tr>  
                      
                       <tr class="info">                                                                                  
                        <th>Premios e Bonif. Comercial</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mespremios_bonificacoes_comercial1</td> 
                      <td><font color=red>  $premios_bonificacoes_comercial1 </td>       
                      <th><font color=blue> $diferencapremios_bonificacoes_comercial</th>"; 
                      }
                      ?>
                      </tr>
                      
                       <tr class="warning">                                                                                  
                        <th>Despesas Instal. Tanques</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesdespesas_instalacoes_tanques1</td> 
                      <td><font color=red>  $despesas_instalacoes_tanques1 </td>       
                      <th><font color=blue> $diferencadespesas_instalacoes_tanques</th>"; 
                      }
                      ?>
                      </tr>     
                      
                       <tr class="warning">                                                                                  
                        <th>Despesas Veiculos Produção</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesdespesas_veiculos_producao1</td> 
                      <td><font color=red>  $despesas_veiculos_producao1 </td>       
                      <th><font color=blue> $diferencadespesas_veiculos_producao</th>"; 
                      }
                      ?>
                      </tr>   
                      
                      
                       <tr class="warning">                                                                                  
                        <th>Combustivel Veic. Produção</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mescombustivel_veiculos_producao1</td> 
                      <td><font color=red>  $combustivel_veiculos_producao1 </td>       
                      <th><font color=blue> $diferencacombustivel_veiculos_producao</th>"; 
                      }
                      ?>
                      </tr> 
                      
                       <tr class="warning">                                                                                  
                        <th>Fretes e Carretos Diversos</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesfretes_carretos1</td> 
                      <td><font color=red>  $fretes_carretos1 </td>       
                      <th><font color=blue> $diferencafretes_carretos</th>"; 
                      }
                      ?>
                      </tr>   
                      
                       <tr class="warning">                                                                                  
                        <th>Seg./Taxas/Multas Veic. Prod.</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $messeguros_taxas_veiculos_producao1</td> 
                      <td><font color=red>  $seguros_taxas_veiculos_producao1 </td>       
                      <th><font color=blue> $diferencaseguros_taxas_veiculos_producao</th>"; 
                      }
                      ?>
                      </tr> 
                      
                      
                       <tr class="warning">                                                                                  
                        <th>Outros Cust. com Pess./Mot.</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesoutros_custos_motoristas1</td> 
                      <td><font color=red>  $outros_custos_motoristas1 </td>       
                      <th><font color=blue> $diferencaoutros_custos_motoristas</th>"; 
                      }
                      ?>
                      </tr>  
                      
                        <tr class="warning">                                                                                  
                        <th>Despesas com Veic. Admin.</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesdespesas_veiculos_adm1</td> 
                      <td><font color=red>  $despesas_veiculos_adm1 </td>       
                      <th><font color=blue> $diferencadespesas_veiculos_adm</th>"; 
                      }
                      ?>
                      </tr>                                                                                  
                      
                      
                        <tr class="warning">                                                                                  
                        <th>Combustivel Veic. Admin.</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mescombustivel_adm1</td> 
                      <td><font color=red>  $combustivel_adm1 </td>       
                      <th><font color=blue> $diferencacombustivel_adm</th>"; 
                      }
                      ?>
                      </tr> 
                      
                        <tr class="warning">                                                                                  
                        <th>Combustivel Veic. Comercial</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mescombustivel_comercial1</td> 
                      <td><font color=red>  $combustivel_comercial1 </td>       
                      <th><font color=blue> $diferencacombustivel_comercial</th>"; 
                      }
                      ?>
                      </tr> 
                      
                      <tr class="warning">                                                                                  
                        <th>Manutenção de Caminhões</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesmanutencao_caminhoes1</td> 
                      <td><font color=red>  $manutencao_caminhoes1 </td>       
                      <th><font color=blue> $diferencamanutencao_caminhoes</th>"; 
                      }
                      ?>
                      </tr> 
                      <tr class="warning"> 
                      
                        <th>Despesas com Veíc. Comercial</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesdespesa_veiculos_comercial1</td> 
                      <td><font color=red>  $despesa_veiculos_comercial1 </td>       
                      <th><font color=blue> $diferencadespesa_veiculos_comercial</th>"; 
                      }
                      ?>
                      </tr>                 
                      
                      <tr class="warning"> 
                      
                        <th>Seg./Taxas/Multas Veic. Com.</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $messeguros_taxas_comercial1</td> 
                      <td><font color=red>  $seguros_taxas_comercial1 </td>       
                      <th><font color=blue> $diferencaseguros_taxas_comercial</th>"; 
                      }
                      ?>
                      </tr> 
                      
                         <tr class="warning"> 
                      
                        <th>Combustivel Caminhões</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mescombustivel_caminhoes1</td> 
                      <td><font color=red>  $combustivel_caminhoes1 </td>       
                      <th><font color=blue> $diferencacombustivel_caminhoes</th>"; 
                      }
                      ?>
                      </tr>     
                      
                      
                     <tr class="success">         
                      
                        <th>Seg.Med. Trab. Prod.</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $messegurancao_medicina_trabalho1</td> 
                      <td><font color=red>  $segurancao_medicina_trabalho1 </td>       
                      <th><font color=blue> $diferencasegurancao_medicina_trabalho</th>"; 
                      }
                      ?>
                      
                      
                      </tr> 
                      
                      <tr class="success">         
                      
                        <th>Salarios Ordenados Admin.</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $messalarios_ordenados_adm1</td> 
                      <td><font color=red>  $salarios_ordenados_adm1 </td>       
                      <th><font color=blue> $diferencasalarios_ordenados_adm</th>"; 
                      }
                      ?>
                      
                      
                      </tr>      
                      
                      <tr class="success">         
                      
                        <th>Copa/Cozinha</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mescopa_cozinha1</td> 
                      <td><font color=red>  $copa_cozinha1 </td>       
                      <th><font color=blue> $diferencacopa_cozinha</th>"; 
                      }
                      ?>
                      
                      <tr class="danger">         
                      
                        <th>Salarios e Ordenados</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $messalarios_ordenados1</td> 
                      <td><font color=red>  $salarios_ordenados1 </td>       
                      <th><font color=blue> $diferencasalarios_ordenados</th>"; 
                      }
                      ?>
                      
                      </tr>     
                      
                       <tr class="danger">         
                      
                        <th>Assistência Técnica</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesassistencia_tecnica1</td> 
                      <td><font color=red>  $assistencia_tecnica1 </td>       
                      <th><font color=blue> $diferencaassistencia_tecnica</th>"; 
                      }
                      ?>
                      
                      
                      </tr>   
                               
                      
                      </tr>   
                      
                      <tr class="danger">         
                      
                        <th>Serviços Terc. Produção</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $messervicos_terceiros_producao1</td> 
                      <td><font color=red>  $servicos_terceiros_producao1 </td>       
                      <th><font color=blue> $diferencaservicos_terceiros_producao</th>"; 
                      }
                      ?>
                      
                       <tr class="danger">         
                      
                        <th>Manut. Corretiva Maq.</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesmanutencao_corretiva_maquinas1</td> 
                      <td><font color=red>  $manutencao_corretiva_maquinas1 </td>       
                      <th><font color=blue> $diferencamanutencao_corretiva_maquinas</th>"; 
                      }
                      ?>
                      
                      
                      </tr>    
                      
                       <tr class="danger">         
                      
                        <th>Energia Elétrica Produção</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesenergia_eletrica_producao1</td> 
                      <td><font color=red>  $energia_eletrica_producao1 </td>       
                      <th><font color=blue> $diferencaenergia_eletrica_producao</th>"; 
                      }
                      ?>
                      
                      
                      </tr>    
                      
                       <tr class="danger">         
                      
                        <th>Despesas Viagem Produção</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesdespesa_viagem_producao1</td> 
                      <td><font color=red>  $despesa_viagem_producao1 </td>       
                      <th><font color=blue> $diferencadespesa_viagem_producao</th>"; 
                      }
                      ?>
                      
                      
                      </tr>   
                      
                       <tr class="danger">         
                      
                        <th>Prêmios e Bonif. Prod.</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mespremios_bonificacoes_producao1</td> 
                      <td><font color=red>  $premios_bonificacoes_producao1 </td>       
                      <th><font color=blue> $diferencapremios_bonificacoes_producao</th>"; 
                      }
                      ?>
                      
                      
                      </tr>        
                      
                       <tr class="danger">         
                      
                        <th>Aluguéis/ Cond. Prod.</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesalugueis_producao1</td> 
                      <td><font color=red>  $alugueis_producao1 </td>       
                      <th><font color=blue> $diferencaalugueis_producao</th>"; 
                      }
                      ?>
                      
                      
                      </tr>  
                      
                      <tr class="danger">         
                      
                        <th>Outras Despesas Prod.</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesoutras_despesas_producao1</td> 
                      <td><font color=red>  $outras_despesas_producao1 </td>       
                      <th><font color=blue> $diferencaoutras_despesas_producao</th>"; 
                      }
                      ?>
                       </tr>
                       
                        <tr class="danger">         
                      
                        <th>Manut.Prevent. Maq. Equip.</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $mesmanutencao_preventiva_maquinas1</td> 
                      <td><font color=red>  $manutencao_preventiva_maquinas1 </td>       
                      <th><font color=blue> $diferencamanutencao_preventiva_maquinas</th>"; 
                      }
                      ?>
                      
                      
                      </tr>
                      
                       <tr class="danger">         
                      
                        <th>Saida Mat. Cons. Prod(TF06)</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $messaida_material_consumo061</td> 
                      <td><font color=red>  $saida_material_consumo061 </td>       
                      <th><font color=blue> $diferencasaida_material_consumo06</th>"; 
                      }
                      ?>
                      
                      
                      </tr>  
                      
                       <tr class="danger">         
                      
                        <th>Saida Mat. EPI´s(TF06)</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $messaida_material_epi061</td> 
                      <td><font color=red>  $saida_material_epi061 </td>       
                      <th><font color=blue> $diferencasaida_material_epi06</th>"; 
                      }
                      ?>
                      
                      
                      </tr> 
                      
                       <tr class="danger">         
                      
                        <th>Saida Mat. Assist. Tecn.(TF06)</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $messaida_material_assistencia061</td> 
                      <td><font color=red>  $saida_material_assistencia061 </td>       
                      <th><font color=blue> $diferencasaida_material_assistencia06</th>"; 
                      }
                      ?>
                      
                      
                      </tr>  
                      
                       <tr class="danger">         
                      
                        <th>Saida Mat. Cons. Prod.(TF07)</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $messaida_material_consumo_producao071</td> 
                      <td><font color=red>  $saida_material_consumo_producao071 </td>       
                      <th><font color=blue> $diferencasaida_material_consumo_producao07</th>"; 
                      }
                      ?>
                      
                      
                      </tr>  
                      
                      <tr class="danger">         
                      
                        <th>Saida Mat. Cons. Prod.(TF08)</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $messaida_material_consumo_producao081</td> 
                      <td><font color=red>  $saida_material_consumo_producao081 </td>       
                      <th><font color=blue> $diferencasaida_material_consumo_producao08</th>"; 
                      }
                      ?>
                      
                      
                      </tr>  
                      
                       
                      <tr class="danger">         
                      
                        <th>Saida Mat. Cons. Prod.(TF10)</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $messaida_material_consumo_producao101</td> 
                      <td><font color=red>  $saida_material_consumo_producao101 </td>       
                      <th><font color=blue> $diferencasaida_material_consumo_producao10</th>"; 
                      }
                      ?>
                      
                      
                      </tr> 
                      
                      <tr class="danger">         
                      
                        <th>Saida Mat. Assis.Tec.(TF07)</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $messaida_material_assistencia071</td> 
                      <td><font color=red>  $saida_material_assistencia071 </td>       
                      <th><font color=blue> $diferencasaida_material_assistencia07</th>"; 
                      }
                      ?>
                      
                      
                      </tr>   
                      
                      
                       <tr>         
                      <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $teste</td> 
                      <td><font color=red>  $stasda </td>       
                      <th><font color=blue> $fada</th>"; 
                      }
                      ?>
                      
                      </tr>   
                                                 
                  <tr class="success">         
                      <b>
                        <th>Total</th> 
                        <?php
                        
                        for($cont=1;$cont<=1; $cont++){
                        echo "
                      <td><font color=green> $provisionado1</td> 
                      <td><font color=red>  $alcancado </td>       
                      <th><font color=blue> $saldo</th>"; 
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
          
                                                           
    
  