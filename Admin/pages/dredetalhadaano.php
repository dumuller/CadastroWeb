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
    
     <style>
        

        img.maismenos {
            /* border: none; */
            margin-bottom: -2px;
            margin-right: 8px;
            margin-left: 4px;
            width: 14px;
        }

        .btnMaisMenos {
            cursor: pointer;
            background-color: #fff;
            padding: 1px 5px 6px 5px;
            font-family: Arial;
            width: 25px;
            height: 25px;
            text-align: center;
            vertical-align: middle;
            border: 1px solid #000;
            border-radius: 5px;
            font-weight: bold;
        }

        .colBotao {
            width: 1px;
        }

        .vivo {
            height: 100%;
        }

        .morto {
            display: none;
        }
    </style>
   <script type="text/javascript">
        function troca(idBotao, texto, id) {
            if (texto === '+') {
                document.getElementById(idBotao).innerText = '-';
                document.getElementById(id).className = 'vivo';
            } 
            else {
                document.getElementById(idBotao).innerText = '+';
                document.getElementById(id).className = 'morto';
            }
        }
    </script>
    
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
       $totalreceita_bruta=$totalreceita_bruta+ $receita_bruta[$i];
       
       
       $faturamento_produtos[$i]= dre($ano,$i,"Faturamento Produtos");
       $totalfaturamento_produtos=$totalfaturamento_produtos+$faturamento_produtos[$i];
       
       $faturamento_servicos[$i]= dre($ano,$i,"Faturamento Servicos");
       $totalfaturamento_servicos=$totalfaturamento_servicos+$faturamento_servicos[$i];
       

       $devolucao_venda[$i]=dre($ano,$i,"DEVOLUCAO DE VENDAS");
       $totaldevolucao_venda=$totaldevolucao_venda+$devolucao_venda[$i];
       
       $devolucao_vendas1[$i]= dre($ano,$i,"Devolucoes de Venda");
       $totaldevolucao_vendas1=$totaldevolucao_vendas1+$devolucao_vendas1[$i];
       
       $receita_operacional_bruta[$i]= dre($ano,$i,"RECEITA OPERACIONAL BRUTA");
        $totalreceita_operacional_bruta=$totalreceita_operacional_bruta+ $receita_operacional_bruta[$i];
       
       $despesa_variavel_venda[$i]= dre($ano,$i,"DESPESAS VARIAVEIS DE VENDA");
       $totaldespesa_variavel_venda=$totaldespesa_variavel_venda+$despesa_variavel_venda[$i];
       
       $icms[$i]= dre($ano,$i,"ICMS");
       $totalicms=$totalicms+$icms[$i];
       
       $comissao_externa[$i]= dre($ano,$i,"COMISSAO EXTERNA");
       $totalcomissao_externa=$totalcomissao_externa+ $comissao_externa[$i];
       
       $cofins[$i]=dre($ano,$i,"COFINS");
       $totalcofins=$totalcofins+$cofins[$i]; 
       
       $pis[$i]= dre($ano,$i,"PIS");
       $totalpis=$totalpis+$pis[$i]; 
       
       $fretes_vendas[$i]= dre($ano,$i,"Frete sobre Vendas");
       $totalfretes_vendas=$totalfretes_vendas+$fretes_vendas[$i]; 
       
       $icms_st[$i]= dre($ano,$i,"ICMS ST"); 
       $totalicms_st=$totalicms_st+ $icms_st[$i]; 
       
       
       
       
       $receita_operacional_liquida[$i]= dre($ano,$i,"RECEITA OPERACIONAL LIQUIDA");
       $totalreceita_operacional_liquida=$totalreceita_operacional_liquida+ $receita_operacional_liquida[$i];

   
       $custo_produtos_vendidos[$i]= dre($ano,$i,"CUSTO PRODUTOS VENDIDOS");
       $totalcusto_produtos_vendidos=$totalcusto_produtos_vendidos+$custo_produtos_vendidos[$i];
       
  
       $materia_prima[$i]= dre($ano,$i,"Materia Prima");
       $totalmateria_prima=$totalmateria_prima+$$materia_prima[$i];
       

       $servico_terceiro[$i]= dre($ano,$i,"Servico de Terceiros (transformacao de MP)");
       $totalservico_terceiro=$totalservico_terceiro+$servico_terceiro[$i];
       

       $margem_contribuicao[$i]= dre($ano,$i,"MARGEM DE CONTRIBUICAO");
       $totalmargem_contribuicao=$totalmargem_contribuicao+ $margem_contribuicao[$i];


       $custo_fixo[$i]= dre($ano,$i,"CUSTOS FIXOS");
       $totalcusto_fixo=$totalcusto_fixo+$custo_fixo[$i];
       
       $salarios_ordenados[$i]= dre($ano,$i,"Salarios e Ordenados");
      $totalsalarios_ordenados=$totalsalarios_ordenados+$salarios_ordenados[$i];
      
       $assistencia_tecnica[$i]= dre($ano,$i,"Assistencia Tecnica");       
      $totalassistencia_tecnica=$totalassistencia_tecnica+ $assistencia_tecnica[$i];
           
       $saida_consumo_producao06[$i]= dre($ano,$i,"Saida Material de Consumo Producao (TF-06)");  
      $totalsaida_consumo_producao06=$totalsaida_consumo_producao06+ $saida_consumo_producao06[$i];
      
       $medicina_trabalho_producao[$i]= dre($ano,$i,"Seguranca e Medicina Trabalho - Producao");  
      $totalmedicina_trabalho_producao=$totalmedicina_trabalho_producao+$medicina_trabalho_producao[$i];
      
       $servicos_terceiros_producao[$i]= dre($ano,$i,"Servico Terceiros Prod. (Manut/Outros)");  
      $totalservicos_terceiros_producao=$totalservicos_terceiros_producao+$servicos_terceiros_producao[$i];
      
       $despesa_instalacao_tanque[$i]= dre($ano,$i,"Despesas Instalacoes Tanques/Ordenhas"); 
      $totaldespesa_instalacao_tanque=$totaldespesa_instalacao_tanque+$despesa_instalacao_tanque[$i];

       $manutencao_corretiva_maquinas[$i]= dre($ano,$i,"Manutencao Corretiva Maquinas e Equip.");
      $totalmanutencao_corretiva_maquinas=$totalmanutencao_corretiva_maquinas+$manutencao_corretiva_maquinas[$i];
      
       $energia_eletrica_producao[$i]= dre($ano,$i,"Energia Eletrica Producao");
      $totalenergia_eletrica_producao=$totalenergia_eletrica_producao+$energia_eletrica_producao[$i];
      
       $despesa_viagem_producao[$i]=  dre($ano,$i,"Despesas c/ Viagens/Producao");
      $totaldespesa_viagem_producao=$totaldespesa_viagem_producao+$despesa_viagem_producao[$i];
      
       $despesas_veiculos_producao[$i]= dre($ano,$i,"Despesas c/ Veiculos/Producao");
      $totaldespesas_veiculos_producao=$totaldespesas_veiculos_producao+$despesas_veiculos_producao[$i];     
      
       $combustivel_veiculo_producao[$i]= dre($ano,$i,"Combustivel Veic. Producao");
      $totalcombustivel_veiculo_producao=$totalcombustivel_veiculo_producao+$combustivel_veiculo_producao[$i];
      
       $premio_bonificacao_producao[$i]= dre($ano,$i,"Premios e Bonific. da Producao");
      $totalpremio_bonificacao_producao=$totalpremio_bonificacao_producao+ $premio_bonificacao_producao[$i];
      
       $alugueis_condominio_producao[$i]= dre($ano,$i,"Alugueis e Condominios Producao");
      $totalalugueis_condominio_producao=$totalalugueis_condominio_producao+$alugueis_condominio_producao[$i];
      
      $outras_despesas_producao[$i]= dre($ano,$i,"Outras Despesas/Producao");
      $totaloutras_despesas_producao=$totaloutras_despesas_producao+$outras_despesas_producao[$i];
      
       
       $saida_material_epi06[$i]= dre($ano,$i,"Saida de Material de EPIs (TF-06)");
      $totalsaida_material_epi06=$totalsaida_material_epi06+$saida_material_epi06[$i];
      
       $manutencao_instalacao_producao[$i]= dre($ano,$i,"Manutencao de Instalacoes/Equip.Producao");
      $totalmanutencao_instalacao_producao=$totalmanutencao_instalacao_producao+$manutencao_instalacao_producao[$i];
      
       $saida_material_assistencia[$i]= dre($ano,$i,"Saida Material para Assistencia Tecnica (TF-06)");
      $totalsaida_material_assistencia=$totalsaida_material_assistencia+$saida_material_assistencia[$i];
      
       $saida_material_consumo_producao[$i]= dre($ano,$i,"Saida Material de Consumo Producao (TF-07)");
      $totalsaida_material_consumo_producao=$totalsaida_material_consumo_producao+ $saida_material_consumo_producao[$i];
      
       $seguro_instalacoes[$i]= dre($ano,$i,"Seguros Instalacoes/Maq/Equip./Estoques");
      $totalseguro_instalacoes=$totalseguro_instalacoes+$seguro_instalacoes[$i];
      
       $fretes_carretos_diversos[$i]= dre($ano,$i,"Fretes e Carretos Diversos");
      $totalfretes_carretos_diversos=$totalfretes_carretos_diversos+$fretes_carretos_diversos[$i];
      
       $seguros_taxas_producao[$i]= dre($ano,$i,"Seguros/Taxas/Multas Veic.Prod.");
      $totalseguros_taxas_producao=$totalseguros_taxas_producao+$seguros_taxas_producao[$i];
      
       $saida_material_consumo_producao08[$i]=dre($ano,$i,"Saida Material de Consumo Producao (TF-08)");
      $totalsaida_material_consumo_producao08=$totalsaida_material_consumo_producao08+$saida_material_consumo_producao08[$i];
      
       $comunicacao_producao_assistencia[$i]= dre($ano,$i,"Comunic. Producao/Assistencia");
      $totalcomunicacao_producao_assistencia=$totalcomunicacao_producao_assistencia+$comunicacao_producao_assistencia[$i];
      
       $saida_material_consumo_producao10[$i]= dre($ano,$i,"Saida Material de Consumo Producao (TF-10)");
      $totalsaida_material_consumo_producao10=$totalsaida_material_consumo_producao10+$saida_material_consumo_producao10[$i];
      
       $outros_custos_motoristas[$i]=dre($ano,$i,"Outros Custos c/Pessoal Motoristas");
      $totaloutros_custos_motoristas=$totaloutros_custos_motoristas+$outros_custos_motoristas[$i];
      
       $manutencao_preventiva_equipamentos[$i]= dre($ano,$i,"Manutencao Preventiva Maquinas e Equip.");
      $totalmanutencao_preventiva_equipamentos=$totalmanutencao_preventiva_equipamentos+$manutencao_preventiva_equipamentos[$i];
      
       $saida_material_assistencia07[$i]= dre($ano,$i,"Saida Material para Assistencia Tecnica (TF-07)");
      $totalsaida_material_assistencia07=$totalsaida_material_assistencia07+$saida_material_assistencia07[$i];
       
       $resultado_bruto[$i]= dre($ano,$i,"RESULTADO BRUTO");
        $totalresultado_bruto=$totalresultado_bruto+$resultado_bruto[$i];
        
        $despesa_operacional[$i]= dre($ano,$i,"DESPESAS OPERACIONAIS");
        $totaldespesa_operacional=$totaldespesa_operacional+$despesa_operacional[$i];

       $despesa_administrativa[$i]= dre($ano,$i,"DESPESAS ADMINISTRATIVAS");
       $totaldespesa_administrativa=$totaldespesa_administrativa+$despesa_administrativa[$i];
       
       $salarios_ordenados_administrativo[$i]= dre($ano,$i,"Salarios e Ordenados Administrativo");
       $totalsalarios_ordenados_administrativo=$totalsalarios_ordenados_administrativo+$salarios_ordenados_administrativo[$i];
       
       $servicos_terceiros_admin[$i]= dre($ano,$i,"Servicos de Terceiros/Admin.");
       $totalservicos_terceiros_admin=$totalservicos_terceiros_admin+$servicos_terceiros_admin[$i];
       
       $comunicacao_telefone[$i]= dre($ano,$i,"Comunicacoes(Telefone,Celular)");
       $totalcomunicacao_telefone=$totalcomunicacao_telefone+$comunicacao_telefone[$i];
       
       $gastos_diversos_administracao[$i]= dre($ano,$i,"Gastos Diversos/Administracao");
       $totalgastos_diversos_administracao=$totalgastos_diversos_administracao+$gastos_diversos_administracao[$i];
       

       $correio[$i]= dre($ano,$i,"Correio");
       $totalcorreio=$totalcorreio+$correio[$i];
       

       $impostos_taxas_diversas[$i]= dre($ano,$i,"Impostos e Taxas Diversas");
       $totalimpostos_taxas_diversas=$totalimpostos_taxas_diversas+$impostos_taxas_diversas[$i];
       
       $material_consumo_expediente[$i]=dre($ano,$i,"Material de Consumo/Expediente");
       $totalmaterial_consumo_expediente=$totalmaterial_consumo_expediente+$material_consumo_expediente[$i];
       
       $despesas_viagem_admin[$i]= dre($ano,$i,"Despesas c/ Viagens/Admin.");
       $totaldespesas_viagem_admin=$totaldespesas_viagem_admin+ $despesas_viagem_admin[$i];
       
       $energia_eletrica_admin[$i]= dre($ano,$i,"Energia Eletrica Administrativo");
       $totalenergia_eletrica_admin=$totalenergia_eletrica_admin+$energia_eletrica_admin[$i];
       
       $manutencao_instalacao_equip_admin[$i]= dre($ano,$i,"Manutencao Instalacoes/Equip. ADM");
       $totalmanutencao_instalacao_equip_admin=$totalmanutencao_instalacao_equip_admin+$manutencao_instalacao_equip_admin[$i];
       
       $seguranca_medicina_trabalho_admin[$i]= dre($ano,$i,"Seguranca e Medicina do Trabalho - ADM");
       $totalseguranca_medicina_trabalho_admin=$totalseguranca_medicina_trabalho_admin+$seguranca_medicina_trabalho_admin[$i];
       
       $copa_cozinha[$i]=dre($ano,$i,"Copa/Cozinha");
       $totalcopa_cozinha=$totalcopa_cozinha+$copa_cozinha[$i];
       
       $premios_bonificacao_direcao[$i]= dre($ano,$i,"Premios e Bonificacoes Direcao");
       $totalpremios_bonificacao_direcao=$totalpremios_bonificacao_direcao+$premios_bonificacao_direcao[$i];
       
       $premios_bonificacao_admin[$i]= dre($ano,$i,"Premios e Bonific. Administ.");
       $totalpremios_bonificacao_admin=$totalpremios_bonificacao_admin+$premios_bonificacao_admin[$i];
       
       $agua[$i]= dre($ano,$i,"Agua");
       $totalagua=$totalagua+$agua[$i];
       

       $seguros_vida[$i]= dre($ano,$i,"Seguros de Vida");
       $totalseguros_vida=$totalseguros_vida+$seguros_vida[$i];
       
       $despesas_veiculos_admin[$i]= dre($ano,$i,"Despesas c/ Veiculos Admin.");
       $totaldespesas_veiculos_admin=$totaldespesas_veiculos_admin+ $despesas_veiculos_admin[$i];
       
       $outros_custos_pessoal_admin[$i]= dre($ano,$i,"Outros Custos c/Pessoal Admin");
       $totaloutros_custos_pessoal_admin=$totaloutros_custos_pessoal_admin+$outros_custos_pessoal_admin[$i];
       
       $combustivel_veiculos_admin[$i]=dre($ano,$i,"Combustivel Veic. Administracao");
       $totalcombustivel_veiculos_admin=$totalcombustivel_veiculos_admin+$combustivel_veiculos_admin[$i];
       
       
       $outras_despesas_direcao[$i]= dre($ano,$i,"Outras Despesas c/ Direcao");
       $totaloutras_despesas_direcao=$totaloutras_despesas_direcao+$outras_despesas_direcao[$i];
       
       
       $despesa_comercial[$i]= dre($ano,$i,"DESPESAS COMERCIAL");
       $totaldespesa_comercial=$totaldespesa_comercial+$despesa_comercial[$i];
       
       $salarios_ordenados_comercial[$i]= dre($ano,$i,"Salarios e Ordenados Comercial");
       $totalsalarios_ordenados_comercial=$totalsalarios_ordenados_comercial+$salarios_ordenados_comercial[$i];
       
       $despesas_viagem_comercial[$i]= dre($ano,$i,"Despesas c/ Viagens Comercial");
       $totaldespesas_viagem_comercial=$totaldespesas_viagem_comercial+$despesas_viagem_comercial[$i];
       
       $despesas_comercial_feira[$i]=  dre($ano,$i,"Despesas Comercial c/ Feiras");
       $totaldespesas_comercial_feira=$totaldespesas_comercial_feira+$despesas_comercial_feira[$i];
       
       $combustivel_comercial[$i]= dre($ano,$i,"Combustiveis c/ Comercial");
       $totalcombustivel_comercial=$totalcombustivel_comercial+$combustivel_comercial[$i];
       
       $manutencao_caminhao[$i]= dre($ano,$i,"Manutencao de Caminhoes");
       $totalmanutencao_caminhao=$totalmanutencao_caminhao+$manutencao_caminhao[$i];
       
       $outras_despesas_comercial[$i]= dre($ano,$i,"Outras Despesas c/ Comercial");
       $totaloutras_despesas_comercial=$totaloutras_despesas_comercial+$outras_despesas_comercial[$i];
       
       $despesas_veiculos_comercial[$i]= dre($ano,$i,"Despesas c/ Veiculos/Comercial");
       $totaldespesas_veiculos_comercial=$totaldespesas_veiculos_comercial+$despesas_veiculos_comercial[$i];
       
       $despesas_clientes_supervisores[$i]= dre($ano,$i,"Despesas Estadias Clientes/Supervisores");
       $totaldespesas_clientes_supervisores=$totaldespesas_clientes_supervisores+$despesas_clientes_supervisores[$i];
       
       $material_grafico[$i]=dre($ano,$i,"Material Grafico");
       $totalmaterial_grafico=$totalmaterial_grafico+$material_grafico[$i];
       
       $despesas_viagens_motorista[$i]= dre($ano,$i,"Despesas c/ Viagens Motoristas");
       $totaldespesas_viagens_motorista=$totaldespesas_viagens_motorista+$despesas_viagens_motorista[$i];
       
       $comunicacao_comercial[$i]= dre($ano,$i,"Comunicacoes c/ Comercial");
       $totalcomunicacao_comercial=$totalcomunicacao_comercial+$comunicacao_comercial[$i];
       
       $top10_2016[$i]= dre($ano,$i,"Top 10 em 2016");
       $totaltop10_2016=$totaltop10_2016+$top10_2016[$i];
       
       $seguranca_medicina_comercial[$i]= dre($ano,$i,"Seguranca e Medicina do Trabalho - CML");
       $totalseguranca_medicina_comercial=$totalseguranca_medicina_comercial+$seguranca_medicina_comercial[$i];
       
       
       
       $comunicacao_entregas[$i]= dre($ano,$i,"Comunicacoes c/ Entregas");
       $totalcomunicacao_entregas=$totalcomunicacao_entregas+$comunicacao_entregas[$i];
       
       $seguros_taxas_comercial[$i]= dre($ano,$i,"Seguros/Taxas/Multas Veic.Com.");
       $totalseguros_taxas_comercial=$totalseguros_taxas_comercial+$seguros_taxas_comercial[$i];
       
       $combustivel_caminhoes[$i]= dre($ano,$i,"Combustiveis p/ Caminhoes");
       $totalcombustivel_caminhoes=$totalcombustivel_caminhoes+$combustivel_caminhoes[$i];
       
       $brindes_premiacoes_representantes[$i]= dre($ano,$i,"Brindes e Premiacoes p/Represent.");
       $totalbrindes_premiacoes_representantes=$totalbrindes_premiacoes_representantes+$brindes_premiacoes_representantes[$i];
       
       $material_grafico_comercial[$i]=dre($ano,$i,"Material Grafico c/ Comercial");
       $totalmaterial_grafico_comercial=$totalmaterial_grafico_comercial+$material_grafico_comercial[$i];
       
   
       $marketing[$i]= dre($ano,$i,"Propag. e Public.(Marketing)");
       $totalmarketing=$totalmarketing+$marketing[$i];
       
       $outros_custos_pessoal_comercial[$i]= dre($ano,$i,"Outros Custos c/Pessoal Comercial");
       $totaloutros_custos_pessoal_comercial=$totaloutros_custos_pessoal_comercial+$outros_custos_pessoal_comercial[$i];
       
       $premios_bonificacao_comercial[$i]= dre($ano,$i,"Premios e Bonific./Comercial");
       $totalpremios_bonificacao_comercial=$totalpremios_bonificacao_comercial+$premios_bonificacao_comercial[$i];
       
       
       $top10_2015[$i]= dre($ano,$i,"Top 10 em 2015");
       $totaltop10_2015=$totaltop10_2015+$$top10_2015[$i];
       
        $despesa_comex[$i]= dre($ano,$i,"DESPESAS COMEX");
       $totaldespesa_comex=$totaldespesa_comex+$despesa_comex[$i];
       
        $salarios_ordenados_comex[$i]= dre($ano,$i,"Salarios e Ordenados Comex");
       $totalsalarios_ordenados_comex=$totalsalarios_ordenados_comex+$salarios_ordenados_comex[$i];
       
        $despesa_viagem_comex[$i]= dre($ano,$i,"Despesas c/ Viagens Comercio Exterior");
       $totaldespesa_viagem_comex=$totaldespesa_viagem_comex+$despesa_viagem_comex[$i];
       
       $despesa_feira_comex[$i]= dre($ano,$i,"Desp. Feiras/Eventos Comercio Exterior");
       $totaldespesa_feira_comex=$totaldespesa_feira_comex+$despesa_feira_comex[$i];
       
        $servico_terceiro_comex[$i]= dre($ano,$i,"Servicos de Terceiros Comercio Exterior");
       $totalservico_terceiro_comex=$totalservico_terceiro_comex+$servico_terceiro_comex[$i];
       
       $fretes_comex[$i]= dre($ano,$i,"Fretes Diversos Comercio Exterior");
       $totalfretes_comex=$totalfretes_comex+$fretes_comex[$i];
       
       $combustivel_comex[$i]= dre($ano,$i,"Combustiveis c/ Comercio Exterior");
       $totalcombustivel_comex=$totalcombustivel_comex+$combustivel_comex[$i];
       
        $comunicacao_comex[$i]= dre($ano,$i,"Comunicacoes c/ Comercio Exterior");
       $totalcomunicacao_comex=$totalcomunicacao_comex+$comunicacao_comex[$i];
       
       $despesas_portuarias_comex[$i]= dre($ano,$i,"Despesas Portuarias Comercio Exterior");
       $totaldespesas_portuarias_comex=$totaldespesas_portuarias_comex+$despesas_portuarias_comex[$i];
       
        $seguranca_medicina_comex[$i]= dre($ano,$i,"Seguranca e Medicina do Trabalho - COMEX");
       $totalseguranca_medicina_comex=$totalseguranca_medicina_comex+$seguranca_medicina_comex[$i];
       
       $premios_bonificacoes_comex[$i]= dre($ano,$i,"Premios e Bonific. Comercio Exterior");
       $totalpremios_bonificacoes_comex=$totalpremios_bonificacoes_comex+$premios_bonificacoes_comex[$i];
       
       $despesa_veiculos_comex[$i]= dre($ano,$i,"Despesas c/ Veiculos Comercio Exterior");
       $totaldespesa_veiculos_comex=$totaldespesa_veiculos_comex+$despesa_veiculos_comex[$i];  



        $ebita[$i]= dre($ano,$i,"EBITDA");
       $totalebita=$totalebita+$ebita[$i];

       $depreciacao[$i]=dre($ano,$i,"DEPRECIACAO");
       $totaldepreciacao=$totaldepreciacao+$depreciacao[$i];
       
       $veiculos_passageiros[$i]= dre($ano,$i,"Veiculos de Passageiros");
       $totalveiculos_passageiros=$totalveiculos_passageiros+$veiculos_passageiros[$i];
       
      
       $maquinas_equipamentos[$i]= dre($ano,$i,"Maquinas e Equipamentos");
       $totalmaquinas_equipamentos=$totalveiculos_passageiros+$maquinas_equipamentos[$i];

       $resultado_antes_juros[$i]= dre($ano,$i,"RESULTADO ANTES DE JUROS - RAJIR");
        $totalresultado_antes_juros=$totalresultado_antes_juros+$resultado_antes_juros[$i];
        
         $resultado_financeiro[$i]= dre($ano,$i,"RESULTADO FINANCEIRO");
        $totalresultado_financeiro=$totalresultado_financeiro+$resultado_financeiro[$i];
        
        $receita_financeira[$i]= dre($ano,$i,"Receita Financeira");
        $totalreceita_financeira=$totalreceita_financeira+$receita_financeira[$i];
        
        $despesa_financeira[$i]= dre($ano,$i,"Despesa Financeira");
        $totaldespesa_financeira=$totaldespesa_financeira+$despesa_financeira[$i];
        
        
        

       $rair[$i]= dre($ano,$i,"RAIR");
       $totalrair=$totalrair+ $rair[$i];
       
       $provisao_irpj[$i]=dre($ano,$i,"Provisao para IRPJ");
       $totalprovisao_irpj=$totalprovisao_irpj+$provisao_irpj[$i];
       
       $provisao_irpj_adicional[$i]= dre($ano,$i,"Provisao para IRPJ Adicional");
       $totalprovisao_irpj_adicional=$totalprovisao_irpj_adicional+$provisao_irpj_adicional[$i];
       
       $provisao_csll[$i]=  dre($ano,$i,"Provisao para CSLL");
       $totalprovisao_csll=$totalprovisao_csll+ $provisao_csll[$i];
       

       $resultado_liquido[$i]=  dre($ano,$i,"RESULTADO LIQUIDO");
       $totalresultado_liquido=$totalresultado_liquido+$resultado_liquido[$i];                                    
       
                    
               
       
       
       
      $receita_bruta[$i]=number_format($receita_bruta[$i], 2, ",", ".");
      
      $faturamento_produtos[$i]=number_format($faturamento_produtos[$i], 2, ",", ".");
      
      $faturamento_servicos[$i]=number_format($faturamento_servicos[$i], 2, ",", ".");
      
      $devolucao_venda[$i]=number_format($devolucao_venda[$i], 2, ",", ".");     
  
      $receita_operacional_bruta[$i]=number_format($receita_operacional_bruta[$i], 2, ",", ".");
      

      $despesa_variavel_venda[$i]=number_format($despesa_variavel_venda[$i], 2, ",", ".");
      
      $icms[$i]=number_format($icms[$i], 2, ",", ".");
      $comissao_externa[$i]=number_format($comissao_externa[$i], 2, ",", ".");
      $cofins[$i]=number_format($cofins[$i], 2, ",", ".");
      $pis[$i]=number_format($pis[$i], 2, ",", ".");
      $fretes_vendas[$i]=number_format($fretes_vendas[$i], 2, ",", ".");
      $icms_st[$i]=number_format($icms_st[$i], 2, ",", ".");
      
      

      $receita_operacional_liquida[$i]=number_format($receita_operacional_liquida[$i], 2, ",", ".");
       
      $custo_produtos_vendidos[$i]=number_format($custo_produtos_vendidos[$i], 2, ",", ".");
      
      $materia_prima[$i]=number_format($materia_prima[$i], 2, ",", ".");
      
      $servico_terceiro[$i]=number_format($servico_terceiro[$i], 2, ",", ".");
      
    
      $margem_contribuicao[$i]=number_format($margem_contribuicao[$i], 2, ",", ".");
      

      $custo_fixo[$i]=number_format($custo_fixo[$i], 2, ",", ".");
      $salarios_ordenados[$i]=number_format($salarios_ordenados[$i], 2, ",", ".");
      $assistencia_tecnica[$i]=number_format($assistencia_tecnica[$i], 2, ",", ".");
      $saida_consumo_producao06[$i]=number_format($saida_consumo_producao06[$i], 2, ",", ".");
      $medicina_trabalho_producao[$i]=number_format($medicina_trabalho_producao[$i], 2, ",", ".");
      $servicos_terceiros_producao[$i]=number_format($servicos_terceiros_producao[$i], 2, ",", ".");
      $despesa_instalacao_tanque[$i]=number_format($despesa_instalacao_tanque[$i], 2, ",", ".");
      $manutencao_corretiva_maquinas[$i]=number_format($manutencao_corretiva_maquinas[$i], 2, ",", ".");
      $energia_eletrica_producao[$i]=number_format($energia_eletrica_producao[$i], 2, ",", ".");
      $despesa_viagem_producao[$i]=number_format($despesa_viagem_producao[$i], 2, ",", ".");
      $despesas_veiculos_producao[$i]=number_format($despesas_veiculos_producao[$i], 2, ",", ".");
      $combustivel_veiculo_producao[$i]=number_format($combustivel_veiculo_producao[$i], 2, ",", ".");      
      $premio_bonificacao_producao[$i]=number_format($premio_bonificacao_producao[$i], 2, ",", ".");
      $alugueis_condominio_producao[$i]=number_format($alugueis_condominio_producao[$i], 2, ",", ".");
      $outras_despesas_producao[$i]=number_format($outras_despesas_producao[$i], 2, ",", ".");
      $saida_material_epi06[$i]=number_format($saida_material_epi06[$i], 2, ",", ".");           
       $manutencao_instalacao_producao[$i]=number_format($manutencao_instalacao_producao[$i], 2, ",", ".");
       $saida_material_assistencia[$i]=number_format($saida_material_assistencia[$i], 2, ",", ".");
     
      $saida_material_consumo_producao[$i]=number_format($saida_material_consumo_producao[$i], 2, ",", ".");
      $seguro_instalacoes[$i]=number_format($seguro_instalacoes[$i], 2, ",", ".");
      $fretes_carretos_diversos[$i]=number_format($fretes_carretos_diversos[$i], 2, ",", ".");
      $seguros_taxas_producao[$i]=number_format($seguros_taxas_producao[$i], 2, ",", ".");
      $saida_material_consumo_producao08[$i]=number_format($saida_material_consumo_producao08[$i], 2, ",", ".");
      $comunicacao_producao_assistencia[$i]=number_format($comunicacao_producao_assistencia[$i], 2, ",", ".");
      $saida_material_consumo_producao10[$i]=number_format($saida_material_consumo_producao10[$i], 2, ",", ".");
      $outros_custos_motoristas[$i]=number_format($outros_custos_motoristas[$i], 2, ",", ".");
      $manutencao_preventiva_equipamentos[$i]=number_format($manutencao_preventiva_equipamentos[$i], 2, ",", ".");
      $saida_material_assistencia07[$i]=number_format($saida_material_assistencia07[$i], 2, ",", ".");
      $resultado_bruto[$i]=number_format($resultado_bruto[$i], 2, ",", ".");
      $despesa_operacional[$i]=number_format($despesa_operacional[$i], 2, ",", ".");
      $despesa_administrativa[$i]=number_format($despesa_administrativa[$i], 2, ",", ".");
      $salarios_ordenados_administrativo[$i]=number_format($salarios_ordenados_administrativo[$i], 2, ",", ".");
      $servicos_terceiros_admin[$i]=number_format($servicos_terceiros_admin[$i], 2, ",", ".");
      $comunicacao_telefone[$i]=number_format($comunicacao_telefone[$i], 2, ",", ".");
      $gastos_diversos_administracao[$i]=number_format($gastos_diversos_administracao[$i], 2, ",", ".");
      $correio[$i]=number_format($correio[$i], 2, ",", ".");
      $impostos_taxas_diversas[$i]=number_format($impostos_taxas_diversas[$i], 2, ",", ".");   
      $material_consumo_expediente[$i]=number_format($material_consumo_expediente[$i], 2, ",", ".");
      $despesas_viagem_admin[$i]=number_format($despesas_viagem_admin[$i], 2, ",", ".");
      $energia_eletrica_admin[$i]=number_format($energia_eletrica_admin[$i], 2, ",", ".");
      $manutencao_instalacao_equip_admin[$i]=number_format($manutencao_instalacao_equip_admin[$i], 2, ",", ".");
      $seguranca_medicina_trabalho_admin[$i]=number_format($seguranca_medicina_trabalho_admin[$i], 2, ",", ".");
      $copa_cozinha[$i]=number_format($copa_cozinha[$i], 2, ",", ".");
     $premios_bonificacao_direcao[$i]=number_format($premios_bonificacao_direcao[$i], 2, ",", ".");
     $premios_bonificacao_admin[$i]=number_format($premios_bonificacao_admin[$i], 2, ",", ".");
     $agua[$i]=number_format($agua[$i], 2, ",", ".");
     $seguros_vida[$i]=number_format($seguros_vida[$i], 2, ",", ".");
     $despesas_veiculos_admin[$i]=number_format($despesas_veiculos_admin[$i], 2, ",", ".");
     $outros_custos_pessoal_admin[$i]=number_format($outros_custos_pessoal_admin[$i], 2, ",", ".");
     $combustivel_veiculos_admin[$i]=number_format($combustivel_veiculos_admin[$i], 2, ",", ".");
     $outras_despesas_direcao[$i]=number_format($outras_despesas_direcao[$i], 2, ",", ".");
    $despesa_comercial[$i]=number_format($despesa_comercial[$i], 2, ",", "."); 
    
    $salarios_ordenados_comercial[$i]=number_format($salarios_ordenados_comercial[$i], 2, ",", ".");
    $despesas_viagem_comercial[$i]=number_format($despesas_viagem_comercial[$i], 2, ",", ".");
    $despesas_comercial_feira[$i]=number_format($despesas_comercial_feira[$i], 2, ",", ".");
    $combustivel_comercial[$i]=number_format($combustivel_comercial[$i], 2, ",", ".");
    $manutencao_caminhao[$i]=number_format($manutencao_caminhao[$i], 2, ",", ".");
    $outras_despesas_comercial[$i]=number_format($outras_despesas_comercial[$i], 2, ",", ".");
    $despesas_veiculos_comercial[$i]=number_format($despesas_veiculos_comercial[$i], 2, ",", ".");
    $despesas_clientes_supervisores[$i]=number_format($despesas_clientes_supervisores[$i], 2, ",", ".");
    $material_grafico[$i]=number_format($material_grafico[$i], 2, ",", ".");
    $despesas_viagens_motorista[$i]=number_format($despesas_viagens_motorista[$i], 2, ",", ".");
    $comunicacao_comercial[$i]=number_format($comunicacao_comercial[$i], 2, ",", ".");
    $top10_2016[$i]=number_format($top10_2016[$i], 2, ",", ".");
    $seguranca_medicina_comercial[$i]=number_format($seguranca_medicina_comercial[$i], 2, ",", ".");
    
    $comunicacao_entregas[$i]=number_format($comunicacao_entregas[$i], 2, ",", ".");
    $seguros_taxas_comercial[$i]=number_format($seguros_taxas_comercial[$i], 2, ",", ".");
    $combustivel_caminhoes[$i]=number_format($combustivel_caminhoes[$i], 2, ",", ".");
    $brindes_premiacoes_representantes[$i]=number_format($brindes_premiacoes_representantes[$i], 2, ",", ".");
    $material_grafico_comercial[$i]=number_format($material_grafico_comercial[$i], 2, ",", ".");
    $marketing[$i]=number_format($marketing[$i], 2, ",", ".");
    $outros_custos_pessoal_comercial[$i]=number_format($outros_custos_pessoal_comercial[$i], 2, ",", ".");
    $premios_bonificacao_comercial[$i]=number_format($premios_bonificacao_comercial[$i], 2, ",", ".");
    $top10_2015[$i]=number_format($top10_2015[$i], 2, ",", "."); 
     $despesa_comex[$i]=number_format($despesa_comex[$i], 2, ",", "."); 
      $salarios_ordenados_comex[$i]=number_format($salarios_ordenados_comex[$i], 2, ",", "."); 
      $despesa_viagem_comex[$i]=number_format($despesa_viagem_comex[$i], 2, ",", ".");   
      $despesa_feira_comex[$i]=number_format($despesa_feira_comex[$i], 2, ",", "."); 
      $servico_terceiro_comex[$i]=number_format($servico_terceiro_comex[$i], 2, ",", "."); 
      $fretes_comex[$i]=number_format($fretes_comex[$i], 2, ",", ".");  
      $combustivel_comex[$i]=number_format($combustivel_comex[$i], 2, ",", "."); 
      $comunicacao_comex[$i]=number_format($comunicacao_comex[$i], 2, ",", "."); 
      $despesas_portuarias_comex[$i]=number_format($despesas_portuarias_comex[$i], 2, ",", "."); 
      $seguranca_medicina_comex[$i]=number_format($seguranca_medicina_comex[$i], 2, ",", ".");  
      $premios_bonificacoes_comex[$i]=number_format($premios_bonificacoes_comex[$i], 2, ",", ".");  
      $despesa_veiculos_comex[$i]=number_format($despesa_veiculos_comex[$i], 2, ",", ".");      
      
    
      $ebita[$i]=number_format($ebita[$i], 2, ",", ".");
     
    
      $depreciacao[$i]=number_format($depreciacao[$i], 2, ",", ".");
      $veiculos_passageiros[$i]=number_format($veiculos_passageiros[$i], 2, ",", ".");
       $maquinas_equipamentos[$i]=number_format($maquinas_equipamentos[$i], 2, ",", ".");
     
    
      $resultado_antes_juros[$i]=number_format($resultado_antes_juros[$i], 2, ",", ".");
      
      $resultado_financeiro[$i]=number_format($resultado_financeiro[$i], 2, ",", ".");
      
      $receita_financeira[$i]=number_format($receita_financeira[$i], 2, ",", ".");
      
      $despesa_financeira[$i]=number_format($despesa_financeira[$i], 2, ",", ".");
      
      
      
     

      $rair[$i]=number_format($rair[$i], 2, ",", ".");
      $provisao_irpj[$i]=number_format($provisao_irpj[$i], 2, ",", ".");
      $provisao_csll[$i]=number_format($provisao_csll[$i], 2, ",", ".");
      
  
      $resultado_liquido[$i]=number_format($resultado_liquido[$i], 2, ",", ".");
      

       
   } 
          
      $totalreceita_bruta=number_format($totalreceita_bruta, 2, ",", ".");
      
      $totalfaturamento_produtos=number_format($totalfaturamento_produtos, 2, ",", ".");
      
      $totalfaturamento_servicos=number_format($totalfaturamento_servicos, 2, ",", ".");
      
      $totaldevolucao_venda=number_format($totaldevolucao_venda, 2, ",", ".");     
  
      $totalreceita_operacional_bruta=number_format($totalreceita_operacional_bruta, 2, ",", ".");
      

      $totaldespesa_variavel_venda=number_format($totaldespesa_variavel_venda, 2, ",", ".");
      
      $totalicms=number_format($totalicms, 2, ",", ".");
      $totalcomissao_externa=number_format($totalcomissao_externa, 2, ",", ".");
      $totalcofins=number_format($totalcofins, 2, ",", ".");
      $totalpis=number_format($totalpis, 2, ",", ".");
      $totalfretes_vendas=number_format($totalfretes_vendas, 2, ",", ".");
      $totalicms_st=number_format($totalicms_st, 2, ",", ".");
      
      

      $totalreceita_operacional_liquida=number_format($totalreceita_operacional_liquida, 2, ",", ".");
       
      $totalcusto_produtos_vendidos=number_format($totalcusto_produtos_vendidos, 2, ",", ".");
      
      $totalmateria_prima=number_format($totalmateria_prima, 2, ",", ".");
      
      $totalservico_terceiro=number_format($totalservico_terceiro, 2, ",", ".");
      
    
      $totalmargem_contribuicao=number_format($totalmargem_contribuicao, 2, ",", ".");
      

      $totalcusto_fixo=number_format($totalcusto_fixo, 2, ",", ".");
      $totalsalarios_ordenados=number_format($totalsalarios_ordenados, 2, ",", ".");
      $totalassistencia_tecnica=number_format($totalassistencia_tecnica, 2, ",", ".");
      $totalsaida_consumo_producao06=number_format($totalsaida_consumo_producao06, 2, ",", ".");
      $totalmedicina_trabalho_producao=number_format($totalmedicina_trabalho_producao, 2, ",", ".");
      $totalservicos_terceiros_producao=number_format($totalservicos_terceiros_producao, 2, ",", ".");
      $totaldespesa_instalacao_tanque=number_format($totaldespesa_instalacao_tanque, 2, ",", ".");
      $totalmanutencao_corretiva_maquinas=number_format($totalmanutencao_corretiva_maquinas, 2, ",", ".");
      $totalenergia_eletrica_producao=number_format($totalenergia_eletrica_producao, 2, ",", ".");
      $totaldespesa_viagem_producao=number_format($totaldespesa_viagem_producao, 2, ",", ".");
      $totaldespesas_veiculos_producao=number_format($totaldespesas_veiculos_producao, 2, ",", ".");
      $totalcombustivel_veiculo_producao=number_format($totalcombustivel_veiculo_producao, 2, ",", ".");      
      $totalpremio_bonificacao_producao=number_format($totalpremio_bonificacao_producao, 2, ",", ".");
      $totalalugueis_condominio_producao=number_format($totalalugueis_condominio_producao, 2, ",", ".");
       $totaloutras_despesas_producao=number_format($totaloutras_despesas_producao, 2, ",", ".");     
      
      $totalsaida_material_epi06=number_format($totalsaida_material_epi06, 2, ",", ".");
       $totalmanutencao_instalacao_producao=number_format($totalmanutencao_instalacao_producao, 2, ",", ".");
       $totalsaida_material_assistencia=number_format($totalsaida_material_assistencia, 2, ",", ".");
     
      $totalsaida_material_consumo_producao=number_format($totalsaida_material_consumo_producao, 2, ",", ".");
      $totalseguro_instalacoes=number_format($totalseguro_instalacoes, 2, ",", ".");
      $totalfretes_carretos_diversos=number_format($totalfretes_carretos_diversos, 2, ",", ".");
      $totalseguros_taxas_producao=number_format($totalseguros_taxas_producao, 2, ",", ".");
      $totalsaida_material_consumo_producao08=number_format($totalsaida_material_consumo_producao08, 2, ",", ".");
      $totalcomunicacao_producao_assistencia=number_format($totalcomunicacao_producao_assistencia, 2, ",", ".");
      $totalsaida_material_consumo_producao10=number_format($totalsaida_material_consumo_producao10, 2, ",", ".");
      $totaloutros_custos_motoristas=number_format($totaloutros_custos_motoristas, 2, ",", ".");
      $totalmanutencao_preventiva_equipamentos=number_format($totalmanutencao_preventiva_equipamentos, 2, ",", ".");
      $totalsaida_material_assistencia07=number_format($totalsaida_material_assistencia07, 2, ",", ".");
      $totalresultado_bruto=number_format($totalresultado_bruto, 2, ",", ".");
      $totaldespesa_operacional=number_format($totaldespesa_operacional, 2, ",", ".");
      $totaldespesa_administrativa=number_format($totaldespesa_administrativa, 2, ",", ".");
      $totalsalarios_ordenados_administrativo=number_format($totalsalarios_ordenados_administrativo, 2, ",", ".");
      $totalservicos_terceiros_admin=number_format($totalservicos_terceiros_admin, 2, ",", ".");
      $totalcomunicacao_telefone=number_format($totalcomunicacao_telefone, 2, ",", ".");
      $totalgastos_diversos_administracao=number_format($totalgastos_diversos_administracao, 2, ",", ".");
      $totalcorreio=number_format($totalcorreio, 2, ",", ".");
      $totalimpostos_taxas_diversas=number_format($totalimpostos_taxas_diversas, 2, ",", ".");   
      $totalmaterial_consumo_expediente=number_format($totalmaterial_consumo_expediente, 2, ",", ".");
      $totaldespesas_viagem_admin=number_format($totaldespesas_viagem_admin, 2, ",", ".");
      $totalenergia_eletrica_admin=number_format($totalenergia_eletrica_admin, 2, ",", ".");
      $totalmanutencao_instalacao_equip_admin=number_format($totalmanutencao_instalacao_equip_admin, 2, ",", ".");
      $totalseguranca_medicina_trabalho_admin=number_format($totalseguranca_medicina_trabalho_admin, 2, ",", ".");
      $totalcopa_cozinha=number_format($totalcopa_cozinha, 2, ",", ".");
     $totalpremios_bonificacao_direcao=number_format($totalpremios_bonificacao_direcao, 2, ",", ".");
     $totalpremios_bonificacao_admin=number_format($totalpremios_bonificacao_admin, 2, ",", ".");
     $totalagua=number_format($totalagua, 2, ",", ".");
     $totalseguros_vida=number_format($totalseguros_vida, 2, ",", ".");
     $totaldespesas_veiculos_admin=number_format($totaldespesas_veiculos_admin, 2, ",", ".");
     $totaloutros_custos_pessoal_admin=number_format($totaloutros_custos_pessoal_admin, 2, ",", ".");
     $totalcombustivel_veiculos_admin=number_format($totalcombustivel_veiculos_admin, 2, ",", ".");
     $totaloutras_despesas_direcao=number_format($totaloutras_despesas_direcao, 2, ",", ".");
    $totaldespesa_comercial=number_format($totaldespesa_comercial, 2, ",", "."); 
    
    $totalsalarios_ordenados_comercial=number_format($totalsalarios_ordenados_comercial, 2, ",", ".");
    $totaldespesas_viagem_comercial=number_format($totaldespesas_viagem_comercial, 2, ",", ".");
    $totaldespesas_comercial_feira=number_format($totaldespesas_comercial_feira, 2, ",", ".");
    $totalcombustivel_comercial=number_format($totalcombustivel_comercial, 2, ",", ".");
    $totalmanutencao_caminhao=number_format($totalmanutencao_caminhao, 2, ",", ".");
    $totaloutras_despesas_comercial=number_format($totaloutras_despesas_comercial, 2, ",", ".");
    $totaldespesas_veiculos_comercial=number_format($totaldespesas_veiculos_comercial, 2, ",", ".");
    $totaldespesas_clientes_supervisores=number_format($totaldespesas_clientes_supervisores, 2, ",", ".");
    $totalmaterial_grafico=number_format($totalmaterial_grafico, 2, ",", ".");
    $totaldespesas_viagens_motorista=number_format($totaldespesas_viagens_motorista, 2, ",", ".");
    $totalcomunicacao_comercial=number_format($totalcomunicacao_comercial, 2, ",", ".");
    $totaltop10_2016=number_format($totaltop10_2016, 2, ",", ".");
    $totalseguranca_medicina_comercial=number_format($totalseguranca_medicina_comercial, 2, ",", ".");
    $totalcomunicacao_entregas=number_format($totalcomunicacao_entregas, 2, ",", ".");
    $totalseguros_taxas_comercial=number_format($totalseguros_taxas_comercial, 2, ",", ".");
    $totalcombustivel_caminhoes=number_format($totalcombustivel_caminhoes, 2, ",", ".");
    $totalbrindes_premiacoes_representantes=number_format($totalbrindes_premiacoes_representantes, 2, ",", ".");
    $totalmaterial_grafico_comercial=number_format($totalmaterial_grafico_comercial, 2, ",", ".");
    $totalmarketing=number_format($totalmarketing, 2, ",", ".");
    $totaloutros_custos_pessoal_comercial=number_format($totaloutros_custos_pessoal_comercial, 2, ",", ".");
    $totalpremios_bonificacao_comercial=number_format($totalpremios_bonificacao_comercial, 2, ",", ".");
    $totaltop10_2015=number_format($totaltop10_2015, 2, ",", ".");  
    
    $totaldespesa_comex=number_format($totaldespesa_comex, 2, ",", ".");
    $totalsalarios_ordenados_comex=number_format($totalsalarios_ordenados_comex, 2, ",", ".");
    $totaldespesa_viagem_comex=number_format($totaldespesa_viagem_comex, 2, ",", ".");
    $totaldespesa_feira_comex=number_format($totaldespesa_feira_comex, 2, ",", ".");
    $totalservico_terceiro_comex=number_format($totalservico_terceiro_comex, 2, ",", ".");
    $totalfretes_comex=number_format($totalfretes_comex, 2, ",", ".");
    $totalcombustivel_comex=number_format($totalcombustivel_comex, 2, ",", ".");
    $totalcomunicacao_comex=number_format($totalcomunicacao_comex, 2, ",", ".");
    $totaldespesas_portuarias_comex=number_format($totaldespesas_portuarias_comex, 2, ",", ".");
    $totalseguranca_medicina_comex=number_format($totalseguranca_medicina_comex, 2, ",", ".");
    $totalpremios_bonificacoes_comex=number_format($totalpremios_bonificacoes_comex, 2, ",", ".");
    $totaldespesa_veiculos_comex=number_format($totaldespesa_veiculos_comex, 2, ",", ".");   
    
      $totalebita=number_format($totalebita, 2, ",", ".");
     
    
      $totaldepreciacao=number_format($totaldepreciacao, 2, ",", ".");
      $totalveiculos_passageiros=number_format($totalveiculos_passageiros, 2, ",", ".");
       $totalmaquinas_equipamentos=number_format($totalmaquinas_equipamentos, 2, ",", ".");
     
    
      $totalresultado_antes_juros=number_format($totalresultado_antes_juros, 2, ",", ".");
      
      $totalresultado_financeiro=number_format($totalresultado_financeiro, 2, ",", ".");
      
      $totalreceita_financeira=number_format($totalreceita_financeira, 2, ",", ".");
      
       $totaldespesa_financeira=number_format($totaldespesa_financeira, 2, ",", ".");
      
     

      $totalrair=number_format($totalrair, 2, ",", ".");
      $totalprovisao_irpj=number_format($totalprovisao_irpj, 2, ",", ".");
      $totalprovisao_csll=number_format($totalprovisao_csll, 2, ",", ".");
      
  
      $totalresultado_liquido=number_format($totalresultado_liquido, 2, ",", ".");
      
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


        <div id="page-wrapper">
           
            <!-- /.row -->
            <div class="row">
              
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        <center>
                        <h4>
                           Demonstrativo Detalhado De Resultados no Ano de <?php echo $mes1?> <?php echo $ano?>
                            </h4>
                            </center>
                        </div>
                       
                    </div>
                        <!-- /.panel-heading -->
                          <!-- /.panel-heading -->
                        <div class="panel">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover">
                                     <thead>
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                     <thead>
                                        <tr>
                                        <th> </th>
                                            <th>Descrição&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
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
                                             <th class="colBotao"><div id="btnMaisMenos1" class="btnMaisMenos" onclick="troca(this.id, this.innerText, 'tabComedia')">+</th>
                                            <th>(=)Receita Bruta</th> 
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){  
                                                echo "                                         
                                            <td> $receita_bruta[$cont]</td>";
                                            }
                                             ?>
                                           
                                            <th><font color=#0000CC><?php echo $totalreceita_bruta?></font></th>
                                           
                                            
                                        </tr>
                                        <tbody id="tabComedia" class="morto">
                                        <tr class="success">
                                            <th> </th>
                                            <th>Faturamento Produtos</th> 
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){  
                                                echo "                                         
                                            <td> $faturamento_produtos[$cont]</td>";
                                            }
                                             ?>
                                            
                                            <th><font color=#0000CC><?php echo $totalfaturamento_produtos?></font></th>                                           
                                            
                                        </tr>
                                        
                                         <tr class="success">
                                            <th> </th>
                                            <th>Faturamento Serviços</th> 
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){ 
                                                echo "                                             
                                            <td>$faturamento_servicos[$cont]</td>";
                                            }
                                             ?>
                                            
                                            <th><font color=#0000CC><?php echo $totalfaturamento_servicos?></font></th>                                           
                                            
                                        </tr>
                                        </tbody>
                                        
                                         <tbody>
                                         <tr class="success">
                                             <th class="colBotao"><div id="btnMaisMenos12" class="btnMaisMenos" onclick="troca(this.id, this.innerText, 'tabComedia12')">+</th>
                                            <th>(-)Devolução Vendas</th> 
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){ 
                                                echo "                                          
                                            <td> $devolucao_venda[$cont]</td>";
                                            }
                                             ?>
                                            
                                            <th><font color=#0000CC><?php echo $totaldevolucao_venda?></font></th>
                                           
                                            
                                        </tr>
                                        <tbody id="tabComedia12" class="morto">
                                        <tr class="success">
                                            <th> </th>
                                             <th>Devoluções Vendas</th>
                                              <?php
                        
                                              for($cont=1;$cont<=12; $cont++){  
                                                echo "                                             
                                                    
                                            <td>$devolucao_venda[$cont]</td>";
                                            }
                                             ?>
                                            
                                            <th><font color=#0000CC><?php echo $totaldevolucao_venda?></font></th>
                                                                                 
                                            
                                        </tr>
                                        </tbody>
                                        <tr class="info">
                                        <th> </th>
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
                                            <th class="colBotao"><div id="btnMaisMenos3" class="btnMaisMenos" onclick="troca(this.id, this.innerText, 'tabOutros01')">+</th>
                                            <th>(-)Despesas Variaveis de Venda</th>
                                              <?php
                        
                                              for($cont=1;$cont<=12; $cont++){   
                                                echo "
                                            <td>$despesa_variavel_venda[$cont]</td>";
                                            }
                                             ?>                                        
                                           
                                           <th><font color=#0000CC><?php echo $totaldespesa_variavel_venda?></font></th>
                                        </tr>
                                        <tbody id="tabOutros01" class="morto">
                                         <tr class="danger">
                                            <th> </th>
                                            <th>Icms</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){   
                                                echo "
                                            <td> $icms[$cont]</td>";
                                            }
                                             ?> 
                                            
                                           <th><font color=#0000CC><?php echo $totalicms?></font></th>
                                        </tr>
                                        
                                         <tr class="danger">
                                            <th> </th>
                                            <th>Cofins</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){ 
                                                echo " 
                                            <td>$cofins[$cont]</td>";
                                            }
                                             ?> 
                                            
                                           <th><font color=#0000CC><?php echo $totalcofins?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                            <th> </th>
                                            <th>Comissão Externa</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){ 
                                                echo " 
                                            <td> $comissao_externa[$cont]</td>";
                                            }
                                             ?> 
                                            
                                           <th><font color=#0000CC><?php echo $totalcomissao_externa?></font></th>
                                        </tr>
                                       
                                        <tr class="danger">
                                            <th> </th>
                                            <th>Pis</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){  
                                                echo "
                                            <td> $pis[$cont]</td>";
                                            }
                                             ?> 
                                            
                                           <th><font color=#0000CC><?php echo $totalpis?></font></th>
                                        </tr>
                                         <tr class="danger">
                                            <th> </th>
                                            <th>Fretes sobre Vendas</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "  
                                            <td>$fretes_vendas[$cont]</td>";
                                            }
                                             ?> 
                                            
                                           <th><font color=#0000CC><?php echo $totalfretes_vendas?></font></th>
                                        </tr>
                                         <tr class="danger">
                                            <th> </th>
                                            <th>Icms ST</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){ 
                                                echo "
                                            <td> $icms_st[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalicms_st?></font></th>
                                        </tr>
                                        </tbody>
                                        <tr class="warning">
                                            <th> </th>
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
                                            <th class="colBotao"><div id="btnMaisMenos2" class="btnMaisMenos" onclick="troca(this.id, this.innerText, 'tabOutros')">+</th>
                                            <th>(-)Custo Produtos Vendidos</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){ 
                                                echo "
                                            
                                             <td> $custo_produtos_vendidos[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalcusto_produtos_vendidos?></font></th>
                                        </tr>
                                        <tbody id="tabOutros" class="morto">
                                        <tr class="danger">
                                            <th> </th>
                                            <th>Matéria Prima</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){ 
                                                echo "
                                              
                                             <td>$materia_prima[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalmateria_prima?></font></th>
                                        </tr>
                                          <tr class="danger">
                                          <th> </th>
                                            <th>Serviços de Terceiros( Transf. MP)</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){ 
                                                echo "
                                            
                                            <td> $servico_terceiro[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalservico_terceiro?></font></th>
                                        </tr>
                                        </tbody>
                                        <tr class="warning">
                                            <th> </th>
                                            <th>(=)Margem de Contribuição</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                               
                                             <td> $margem_contribuicao[$cont]</td>";
                                            }
                                             ?>
                                            
                                             <th><font color=#0000CC><?php echo $totalmargem_contribuicao?></font></th>
                                        </tr>
                                       <tr class="danger">
                                           <th class="colBotao"><div id="btnMaisMenos4" class="btnMaisMenos" onclick="troca(this.id, this.innerText, 'tabOutros02')">+</th>
                                            <th>(-)Custos Fixos</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           <td>$custo_fixo[$cont]</td>";
                                            }
                                             ?>
                                           
                                            <th><font color=#0000CC><?php echo $totalcusto_fixo?></font></th>
                                        </tr>
                                        <tbody id="tabOutros02" class="morto">
                                        <tr class="danger">
                                        <th> </th>
                                            <th>Salários e Ordenados</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td> $salarios_ordenados[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalsalarios_ordenados?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                          <th> </th>
                                            <th>Assistência Técnica</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td>$assistencia_tecnica[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalassistencia_tecnica?></font></th>
                                        </tr>
                                        
                                         <tr class="danger">
                                          <th> </th>
                                            <th>Saida Material Produção(TF-06)</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td> $saida_consumo_producao06[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalsaida_consumo_producao06?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                          <th> </th>
                                            <th>Medicina do Trabalho - Produção</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td>$medicina_trabalho_producao[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalmedicina_trabalho_producao?></font></th>
                                        </tr>
                                        
                                         <tr class="danger">
                                          <th> </th>
                                            <th>Serviços de Terceiros Produção</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td> $servicos_terceiros_producao[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalservicos_terceiros_producao?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                          <th> </th>
                                            <th>Despesa com Instalação de Tanque</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td> $despesa_instalacao_tanque[$cont]</td>";
                                            }
                                             ?>
                                           
                                           <th><font color=#0000CC><?php echo $totaldespesa_instalacao_tanque?></font></th>
                                        </tr>
                                        
                                        
                                         <tr class="danger">
                                          <th> </th>
                                            <th>Manutenção Corretiva Maquinas e Equip.</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td> $manutencao_corretiva_maquinas[$cont]</td>";
                                            }
                                             ?>
                                           
                                           <th><font color=#0000CC><?php echo $totalmanutencao_corretiva_maquinas?></font></th>
                                        </tr>
                                        <tr class="danger">
                                          <th> </th>
                                            <th>Energia Elétrica Produção</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td> $energia_eletrica_producao[$cont]</td>";
                                            }
                                             ?>
                                           
                                           <th><font color=#0000CC><?php echo $totalenergia_eletrica_producao?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                          <th> </th>
                                            <th>Despesas Viagem Produção</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td> $despesa_viagem_producao[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totaldespesa_viagem_producao?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                          <th> </th>
                                            <th>Despesas com Veiculos Produção</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            <td> $despesas_veiculos_producao[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totaldespesas_veiculos_producao?></font></th>
                                        </tr>
                                        
                                        
                                        
                                        
                                        <tr class="danger">
                                          <th> </th>
                                            <th>Combustivel Veiculo Produção</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            <td> $combustivel_veiculo_producao[$cont]</td>";
                                            }
                                             ?>
                                           
                                           <th><font color=#0000CC><?php echo $totalcombustivel_veiculo_producao?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                          <th> </th>
                                            <th>Premios e Bonificação Produção</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            <td>$premio_bonificacao_producao[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalpremio_bonificacao_producao?></font></th>
                                        </tr>
                                        
                                         <tr class="danger">
                                          <th> </th>
                                            <th>Alugueis e Condominios Produção</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            <td> $alugueis_condominio_producao[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalalugueis_condominio_producao?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                          <th> </th>
                                            <th>Outras Despesas Produção</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            
                                            <td> $outras_despesas_producao[$cont]</td>";
                                            }
                                             ?>
                                             
                                            
                                           <th><font color=#0000CC><?php echo $totaloutras_despesas_producao?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                          <th> </th>
                                            <th>Saída de Material de EPI´s(TF-06)</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            
                                            <td> $saida_material_epi06[$cont]</td>";
                                            }
                                             ?>
                                             
                                            
                                           <th><font color=#0000CC><?php echo $totalsaida_material_epi06?></font></th>
                                        </tr>
                                        
                                              
                                        <tr class="danger">
                                          <th> </th>
                                            <th>Manutencao Equip. Produção</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                              
                                            <td> $manutencao_instalacao_producao[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalmanutencao_instalacao_producao?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                          <th> </th>
                                            <th>Saida Material Ass. Técnica</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            
                                            <td> $saida_material_assistencia[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalsaida_material_assistencia?></font></th>
                                        </tr>
                                        
                                        
                                        <tr class="danger">
                                          <th> </th>
                                            <th>Saída Material Consumo Prod.</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            
                                            <td> $saida_material_consumo_producao[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalsaida_material_consumo_producao?></font></th>
                                        </tr>
                                        
                                       
                                      
                                         
                                  
                                         <tr class="danger">
                                          <th> </th>
                                            <th>Seguros Instalações</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            <td> $seguro_instalacoes[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalseguro_instalacoes?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                          <th> </th>
                                            <th>Fretes e Carretos Diversos</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            <td>$fretes_carretos_diversos[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalfretes_carretos_diversos?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                          <th> </th>
                                            <th>Seguros/Taxas/Multas Veic. Prod.</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            <td> $seguros_taxas_producao[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalseguros_taxas_producao?></font></th>
                                        </tr>
                                        
                                                    <tr class="danger">
                                          <th> </th>
                                            <th>Saída Material de Consumo Produção(TF-08)</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            
                                            <td> $saida_material_consumo_producao08[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalsaida_material_consumo_producao08?></font></th>
                                        </tr>
                                        
                                         <tr class="danger">
                                          <th> </th>
                                            <th>Comunicação Produção / Assistência</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            <td> $comunicacao_producao_assistencia[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalcomunicacao_producao_assistencia?></font></th>
                                        </tr>
                                        
                                              <tr class="danger">
                                          <th> </th>
                                            <th>Saída Material de Consumo Produção(TF-10)</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            
                                            <td> $saida_material_consumo_producao10[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalsaida_material_consumo_producao10?></font></th>
                                        </tr>
                                        
                                        
                                         
                                        <tr class="danger">
                                          <th> </th>
                                            <th>Outros Custos Motoristas</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            
                                            <td> $outros_custos_motoristas[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totaloutros_custos_motoristas?></font></th>
                                        </tr>
                                        
                                         
                                        
                                        <tr class="danger">
                                          <th> </th>
                                            <th>Manut.Prevent.Equipamentos</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            
                                            <td> $manutencao_preventiva_equipamentos[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalmanutencao_preventiva_equipamentos?></font></th>
                                        </tr>
                                        
                                        
                                        <tr class="danger">
                                          <th> </th>
                                            <th>Saída Material Assistencia(TF_07)</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            
                                            <td> $saida_material_assistencia07[$cont]</td>";
                                            }
                                             ?>
                                            
                                           <th><font color=#0000CC><?php echo $totalsaida_material_assistencia07?></font></th>
                                        </tr>
                                        </tbody>
                                        <tr class="success">
                                            <th> </th>
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
                                            <th> </th>
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
                                            <th class="colBotao"><div id="btnMaisMenos5" class="btnMaisMenos" onclick="troca(this.id, this.innerText, 'tabOutros03')">+</th>
                                            <th>(-)Despesas Administrativas</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            
                                             <td> $despesa_administrativa[$cont]</td>";
                                            }
                                             ?>
                                            
                                             <th><font color=#0000CC><?php echo $totaldespesa_administrativa?></font></th>
                                        </tr>
                                        <tbody id="tabOutros03" class="morto">
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Salarios e Ordenados Administrativo</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td> $salarios_ordenados_administrativo[$cont]</td>";
                                            }
                                             ?>
                                            
                                             <th><font color=#0000CC><?php echo $totalsalarios_ordenados_administrativo?></font></th>
                                        </tr>
                                        <tr class="danger">
                                            <th> </th>
                                           <th>Serviços de Terceiros/Admin</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $servicos_terceiros_admin[$cont]</td>";
                                            }
                                             ?>
                                             
                                            
                                             <th><font color=#0000CC><?php echo $totalservicos_terceiros_admin?></font></th>
                                        </tr>
                                        <tr class="danger">
                                            <th> </th>
                                           <th>Comunicação(Telefone,Celular)</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                                                                      
                                             <td> $comunicacao_telefone[$cont]</td>";
                                            }
                                             ?>
                                            
                                             <th><font color=#0000CC><?php echo $totalcomunicacao_telefone?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                            <th> </th>
                                           <th>Gastos Diveros /Administração</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $gastos_diversos_administracao[$cont]</td>";
                                            }
                                             ?>                                             
                                            
                                             <th><font color=#0000CC><?php echo $totalgastos_diversos_administracao?></font></th>
                                        </tr>
                                        <tr class="danger">
                                            <th> </th>
                                           <th>Correios</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $correio[$cont]</td>";
                                            }
                                             ?>                                             
                                             
                                            
                                             <th><font color=#0000CC><?php echo $totalcorreio?></font></th>
                                        </tr>
                                        
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Impostos e Taxas Diversas</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                                                                      
                                             <td> $impostos_taxas_diversas[$cont]</td>";
                                            }
                                             ?>                            
                                            
                                             <th><font color=#0000CC><?php echo $totalimpostos_taxas_diversas?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                            <th> </th>
                                           <th>Material de Consumo /Expediente</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $material_consumo_expediente[$cont]</td>";
                                            }
                                             ?>                            
                                            
                                             <th><font color=#0000CC><?php echo $totalmaterial_consumo_expediente?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                            <th> </th>
                                           <th>Despesas c/ Viagem Admin.</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td>$despesas_viagem_admin[$cont]</td>";
                                            }
                                             ?>                            
                                            
                                            <th><font color=#0000CC><?php echo $totaldespesas_viagem_admin?></font></th>
                                            </tr>
                                            
                                            <tr class="danger">
                                            <th> </th>
                                           <th>Energia Elétrica Administrativo</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $energia_eletrica_admin[$cont]</td>";
                                            }
                                             ?>                            
                                            
                                            <th><font color=#0000CC><?php echo $totalenergia_eletrica_admin?></font></th>
                                            </tr>
                                            
                                             <tr class="danger">
                                            <th> </th>
                                           <th>Manutenção Instalações/Equi. Adm.</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $manutencao_instalacao_equip_admin[$cont]</td>";
                                            }
                                             ?>                            
                                            
                                            <th><font color=#0000CC><?php echo $totalmanutencao_instalacao_equip_admin?></font></th>
                                        </tr> 
                                        
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Medicina do Trabalho-ADM</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $seguranca_medicina_trabalho_admin[$cont]</td>";
                                            }
                                             ?>                            
                                            
                                            <th><font color=#0000CC><?php echo $totalseguranca_medicina_trabalho_admin?></font></th>
                                        </tr>
                                        
                                        
                                        <tr class="danger">
                                            <th> </th>
                                           <th>Copa/Cozinha</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $copa_cozinha[$cont]</td>";
                                            }
                                             ?>                            
                                            
                                            <th><font color=#0000CC><?php echo $totalcopa_cozinha?></font></th>
                                        </tr>   
                                        
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Premios e Bonificações Direção</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td>$premios_bonificacao_direcao[$cont]</td>";
                                            }
                                             ?>                            
                                            
                                            <th><font color=#0000CC><?php echo $totalpremios_bonificacao_direcao?></font></th>
                                        </tr>
                                        
                                          <tr class="danger">
                                            <th> </th>
                                           <th>Premios e Bonificações Admin</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td>$premios_bonificacao_admin[$cont]</td>";
                                            }
                                             ?>                            
                                            
                                            <th><font color=#0000CC><?php echo $totalpremios_bonificacao_admin?></font></th>
                                        </tr>
                                        
                                             <tr class="danger">
                                          <th> </th>
                                            <th>Agua</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            
                                            <td> $agua[$cont]</td>";
                                            }
                                             ?>                            
                                           
                                           <th><font color=#0000CC><?php echo $totalagua?></font></th>
                                        </tr>
                                           
                                            
                                            <tr class="danger">
                                            <th> </th>
                                           <th>Seguros de Vida</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $seguros_vida[$cont]</td>";
                                            }
                                             ?>                     
                                            
                                            <th><font color=#0000CC><?php echo $totalseguros_vida?></font></th>
                                            </tr>
                                            
                                              <tr class="danger">
                                            <th> </th>
                                           <th>Despesa com Veiculos Admin</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $despesas_veiculos_admin[$cont]</td>";
                                            }
                                             ?>                     
                                             
                                            
                                            <th><font color=#0000CC><?php echo $totaldespesas_veiculos_admin?></font></th>
                                        </tr>
                                        
                                          <tr class="danger">
                                            <th> </th>
                                           <th>Outros Custos Pessoal Adm.</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $outros_custos_pessoal_admin[$cont]</td>";
                                            }
                                             ?>                     
                                            
                                            <th><font color=#0000CC><?php echo $totaloutros_custos_pessoal_admin?></font></th>
                                        </tr>
                                        
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Combustivel Veiculos Admin.</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $combustivel_veiculos_admin[$cont]</td>";
                                            }
                                             ?>                     
                                           
                                            <th><font color=#0000CC><?php echo $totalcombustivel_veiculos_admin?></font></th>
                                        </tr>
                                        
                                           
                                             <tr class="danger">
                                            <th> </th>
                                           <th>Outras Despesas Direção</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td>$outras_despesas_direcao[$cont]</td>";
                                            }
                                             ?>            
                                            
                                            <th><font color=#0000CC><?php echo $totaloutras_despesas_direcao?></font></th>
                                        </tr> 
                                        
                                       
                                       
                                           
                                        
                                         
                                        
                                    
                                        
                                         
                                       
                                        
                                        </tbody>
                                        
                                        <tr class="danger">
                                            <th class="colBotao"><div id="btnMaisMenos8" class="btnMaisMenos" onclick="troca(this.id, this.innerText, 'tabOutros08')">+</th>
                                            <th>(-)Despesas Comercial</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                                                                       
                                             <td> $despesa_comercial[$cont]</td>";
                                            }
                                             ?>            
                                          
                                             <th><font color=#0000CC><?php echo $totaldespesa_comercial?></font></th>
                                        </tr>
                                        <tbody id="tabOutros08" class="morto">
                                        <tr class="danger">
                                            <th> </th>
                                           <th>Salarios e Ordenados Comercial</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td>$salarios_ordenados_comercial[$cont]</td>";
                                            }
                                             ?>            
                                            
                                             <th><font color=#0000CC><?php echo $totalsalarios_ordenados_comercial?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                            <th> </th>
                                           <th>Despesas com Viagem Comercial</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $despesas_viagem_comercial[$cont]</td>";
                                            }
                                             ?>            
                                            
                                             <th><font color=#0000CC><?php echo $totaldespesas_viagem_comercial?></font></th>
                                        </tr>
                                        
                                          <tr class="danger">
                                            <th> </th>
                                           <th>Despesas Comercial c/ Feiras</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $despesas_comercial_feira[$cont]</td>";
                                            }
                                             ?>            
                                            
                                             <th><font color=#0000CC><?php echo $totaldespesas_comercial_feira?></font></th>
                                        </tr>
                                        
                                        
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Combustivel c/ Comercial</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $combustivel_comercial[$cont]</td>";
                                            }
                                             ?>            
                                           
                                             <th><font color=#0000CC><?php echo $totalcombustivel_comercial?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                            <th> </th>
                                           <th>Manutenção de Caminhões</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                              
                                            <td> $manutencao_caminhao[$cont]</td>";
                                            }
                                             ?>            
                                            
                                             <th><font color=#0000CC><?php echo $totalmanutencao_caminhao?></font></th>
                                        </tr>
                                        
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Outros Despesas c/ Comercial</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $outras_despesas_comercial[$cont]</td>";
                                            }
                                             ?>            
                                            
                                             <th><font color=#0000CC><?php echo $totaloutras_despesas_comercial?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                            <th> </th>
                                           <th>Despesas c/ Veiculo Comercial</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $despesas_veiculos_comercial[$cont]</td>";
                                            }
                                             ?>            
                                           
                                             <th><font color=#0000CC><?php echo $totaldespesas_veiculos_comercial?></font></th>
                                        </tr>
                                      
                                        
                                         <tr class="danger">
                                          <th> </th>
                                            <th>Despesas Estadias Clientes/Supervisores</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            <td> $despesas_clientes_supervisores[$cont]</td>";
                                            }
                                             ?>            
                                            
                                           <th><font color=#0000CC><?php echo $totaldespesas_clientes_supervisores?></font></th>
                                        </tr>   
                                        
                                        
                                        
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Material Gráfico</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $material_grafico[$cont]</td>";
                                            }
                                             ?>            
                                            
                                             <th><font color=#0000CC><?php echo $totalmaterial_grafico?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                            <th> </th>
                                           <th>Despesas c/ Viagem Motorista</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td> $despesas_viagens_motorista[$cont]</td>";
                                            }
                                             ?>            
                                            
                                            <th><font color=#0000CC><?php echo $totaldespesas_viagens_motorista?></font></th>
                                        </tr>
                                        
                                          <tr class="danger">
                                            <th> </th>
                                           <th>Comunicação c/ Comercial</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $comunicacao_comercial[$cont]</td>";
                                            }
                                             ?>            
                                            
                                            <th><font color=#0000CC><?php echo $totalcomunicacao_comercial?></font></th>
                                        </tr>
                                        
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Top 10 em 2016</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                              
                                             <td> $top10_2016[$cont]</td>";
                                            }
                                             ?>            
                                            
                                            <th><font color=#0000CC><?php echo $totaltop10_2016?></font></th>
                                        </tr>
                                        
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Segur. Medic. Comercial</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                              
                                             <td> $seguranca_medicina_comercial[$cont]</td>";
                                            }
                                             ?>            
                                            
                                            <th><font color=#0000CC><?php echo $totalseguranca_medicina_comercial?></font></th>
                                        </tr>
                                        
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Comunição com Entregas</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $comunicacao_entregas[$cont]</td>";
                                            }
                                             ?>            
                                            
                                            <th><font color=#0000CC><?php echo $totalcomunicacao_entregas?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                            <th> </th>
                                           <th>Seg./Taxas Veic. Comercial</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $seguros_taxas_comercial[$cont]</td>";
                                            }
                                             ?>            
                                           
                                            <th><font color=#0000CC><?php echo $totalseguros_taxas_comercial?></font></th>
                                        </tr>
                                        <tr class="danger">
                                            <th> </th>
                                           <th>Combustivel para Caminhões</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $combustivel_caminhoes[$cont]</td>";
                                            }
                                             ?>            
                                            
                                            <th><font color=#0000CC><?php echo $totalcombustivel_caminhoes?></font></th>
                                        </tr>
                                        
                                        <tr class="danger">
                                            <th> </th>
                                           <th>Brindes e Prem. Repres.</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                            <td> $brindes_premiacoes_representantes[$cont]</td>";
                                            }
                                             ?>            
                                            
                                            <th><font color=#0000CC><?php echo $totalbrindes_premiacoes_representantes?></font></th>
                                        </tr>
                                        
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Material Gráfico c/ Comercial</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $material_grafico_comercial[$cont]</td>";
                                            }
                                             ?>            
                                           
                                            <th><font color=#0000CC><?php echo $totalmaterial_grafico_comercial?></font></th>
                                        </tr>
                                       
                                       <tr class="danger">
                                            <th> </th>
                                           <th>Prop.e Public.(Marketing)</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td>$marketing[$cont]</td>";
                                            }
                                             ?>            
                                            
                                             <th><font color=#0000CC><?php echo $totalmarketing?></font></th>
                                        </tr>
                                        
                                          <tr class="danger">
                                            <th> </th>
                                           <th>Outros Custos Pessoal</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $outros_custos_pessoal_comercial[$cont]</td>";
                                            }
                                             ?>            
                                            
                                             <th><font color=#0000CC><?php echo $totaloutros_custos_pessoal_comercial?></font></th>
                                        </tr>
                                       
                                        
                                        
                                        
                                        <tr class="danger">
                                            <th> </th>
                                           <th>Prêmios e Bonif.Comercial</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td> $premios_bonificacao_comercial[$cont]</td>";
                                            }
                                             ?>            
                                            
                                             <th><font color=#0000CC><?php echo $totalpremios_bonificacao_comercial?></font></th>
                                        </tr>

                                       
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Top 10 em 2015</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td>$top10_2015[$cont]</td>";
                                            }
                                             ?>            
                                           
                                            <th><font color=#0000CC><?php echo $totaltop10_2015?></font></th>
                                        </tr>                                       
                                        
                                        </tbody>
                                        
                                        
                                         <tr class="danger">
                                            <th class="colBotao"><div id="btnMaisMenos212" class="btnMaisMenos" onclick="troca(this.id, this.innerText, 'tabOutros212')">+</th>
                                            <th>(-)Despesas Comex</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                                                                       
                                             <td> $despesa_comex[$cont]</td>";
                                            }
                                             ?>            
                                          
                                             <th><font color=#0000CC><?php echo $totaldespesa_comex?></font></th>
                                            
                                        </tr>
                                        <tbody id="tabOutros212" class="morto">
                                        <tr class="danger">
                                            <th> </th>
                                           <th>Salarios e Ordenados Comex</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td>$salarios_ordenados_comex[$cont]</td>";
                                            }
                                             ?>  
                                             <th><font color=#0000CC><?php echo $totalsalarios_ordenados_comex?></font></th>
                                             </tr>
                                             
                                              <tr class="danger">
                                            <th> </th>
                                           <th>Despesas Viagens Comex</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td>$despesa_viagem_comex[$cont]</td>";
                                            }
                                             ?>                      
                                         <th><font color=#0000CC><?php echo $totaldespesa_viagem_comex?></font></th>
                                         </tr>
                                         
                                          <tr class="danger">
                                            <th> </th>
                                           <th>Despesas Feiras Comex</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td>$despesa_feira_comex[$cont]</td>";
                                            }
                                             ?>                      
                                         <th><font color=#0000CC><?php echo $totaldespesa_feira_comex?></font></th>
                                         </tr>
                                         
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Serviços Terceiros Comex</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td>$servico_terceiro_comex[$cont]</td>";
                                            }
                                             ?>                      
                                         <th><font color=#0000CC><?php echo $totalservico_terceiro_comex?></font></th>
                                         </tr>
                                         
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Fretes Comex</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td>$fretes_comex[$cont]</td>";
                                            }
                                             ?>                      
                                         <th><font color=#0000CC><?php echo $totalfretes_comex?></font></th>
                                         </tr>
                                        
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Combustivel Comex</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td>$combustivel_comex[$cont]</td>";
                                            }
                                             ?>                      
                                         <th><font color=#0000CC><?php echo $totalcombustivel_comex?></font></th>
                                         </tr>
                                         
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Comunicação Comex</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td>$comunicacao_comex[$cont]</td>";
                                            }
                                             ?>                      
                                         <th><font color=#0000CC><?php echo $totalcomunicacao_comex?></font></th>
                                         </tr>
                                         
                                          <tr class="danger">
                                            <th> </th>
                                           <th>Desp. Portuarias Comex</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td>$despesas_portuarias_comex[$cont]</td>";
                                            }
                                             ?>                      
                                         <th><font color=#0000CC><?php echo $totaldespesas_portuarias_comex?></font></th>
                                         </tr>
                                         
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Seg. Medicina Comex</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td>$seguranca_medicina_comex[$cont]</td>";
                                            }
                                             ?>                      
                                         <th><font color=#0000CC><?php echo $totalseguranca_medicina_comex?></font></th>
                                         </tr>
                                         
                                          <tr class="danger">
                                            <th> </th>
                                         <th>Premios Bonif. Comex</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td>$premios_bonificacoes_comex[$cont]</td>";
                                            }
                                             ?>                      
                                         <th><font color=#0000CC><?php echo $totalpremios_bonificacoes_comex?></font></th>
                                         </tr>
                                         
                                         <tr class="danger">
                                            <th> </th>
                                           <th>Desp.Veiculos Comex</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                             <td>$despesa_veiculos_comex[$cont]</td>";
                                            }
                                             ?>                      
                                         <th><font color=#0000CC><?php echo $totaldespesa_veiculos_comex?></font></th>                                       </tr>
                                        </tbody>
                                                                               
                                          <tr class="success">
                                            <th> </th>
                                            <th>(=)Ebitda</th>
                                             <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            
                                            <td> $ebita[$cont]</td>";
                                            }
                                             ?>                      
                                            
                                            <th><font color=#0000CC><?php echo $totalebita?></font></th>
                                        </tr>
                                       <tr class="danger">
                                            <th class="colBotao"><div id="btnMaisMenos33" class="btnMaisMenos" onclick="troca(this.id, this.innerText, 'tabOutros33')">+</th>
                                            <th>(-)Depreciação</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            
                                           <td>$depreciacao[$cont]</td>";
                                            }
                                             ?>                      
                                           
                                            <th><font color=#0000CC><?php echo $totaldepreciacao?></font></th>
                                        </tr>
                                        
                                        <tbody id="tabOutros33" class="morto">
                                         <tr>
                                         <th> </th>
                                           <th>Veiculos de Passageiros</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td>$veiculos_passageiros[$cont]</td>";
                                            }
                                             ?>                      
                                            
                                            <th><font color=#0000CC><?php echo $totalveiculos_passageiros?></font></th>
                                        </tr>
                                        
                                        <tr>
                                         <th> </th>
                                           <th>Maquinas e Equipamentos</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td>$maquinas_equipamentos[$cont]</td>";
                                            }
                                             ?>                      
                                            
                                            <th><font color=#0000CC><?php echo $totalmaquinas_equipamentos?></font></th>
                                        </tr>
                                        </tbody>
                                        <tr class="success">
                                            <th> </th>
                                            <th>(=)Resultado antes dos juros-Rajir</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            
                                            <td>$resultado_antes_juros[$cont]</td>";
                                            }
                                             ?>                      
                                            
                                            <th><font color=#0000CC><?php echo $totalresultado_antes_juros?></font></th>
                                        </tr>
                                        
                                        
                                        <tr class="warning">
                                          <th class="colBotao"><div id="btnMaisMenos169" class="btnMaisMenos" onclick="troca(this.id, this.innerText, 'tabOutros169')">+</th>
                                            <th>Resultado Financeiro</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            
                                           <td>$resultado_financeiro[$cont]</td>";
                                            }
                                             ?>        
                                           
                                             <th><font color=#0000CC><?php echo $totalresultado_financeiro?></font></th>
                                        </tr>
                                        <tbody id="tabOutros169" class="morto">
                                         <tr>
                                         <th> </th>
                                           <th>Receita Financeira</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $receita_financeira[$cont]</td>";
                                            }
                                             ?> 
                                            
                                            <th><font color=#0000CC><?php echo $totalreceita_financeira?></font></th>
                                        </tr>
                                        <tr>
                                         <th> </th>
                                           <th>Despesa Financeira</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $despesa_financeira[$cont]</td>";
                                            }
                                             ?> 
                                            
                                            <th><font color=#0000CC><?php echo $totaldespesa_financeira?></font></th>
                                        </tr>
                                        </tbody>
                                        
                                         
                                        <tr class="warning">
                                          <th class="colBotao"><div id="btnMaisMenos16" class="btnMaisMenos" onclick="troca(this.id, this.innerText, 'tabOutros16')">+</th>
                                            <th>Rair</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                            
                                           <td>$rair[$cont]</td>";
                                            }
                                             ?>        
                                           
                                             <th><font color=#0000CC><?php echo $totalrair?></font></th>
                                        </tr>
                                        <tbody id="tabOutros16" class="morto">
                                         <tr>
                                         <th> </th>
                                           <th>Provisão para IRPJ</th>
                                            <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $provisao_irpj[$cont]</td>";
                                            }
                                             ?> 
                                            
                                            <th><font color=#0000CC><?php echo $totalprovisao_irpj?></font></th>
                                        </tr>
                                        <tr>
                                         <th> </th>
                                           <th>Provisão para CSLL</th>
                                           <?php
                        
                                              for($cont=1;$cont<=12; $cont++){
                                                echo "
                                           
                                             <td> $provisao_csll[$cont]</td>";
                                            }
                                             ?> 
                                            
                                            <th><font color=#0000CC><?php echo $totalprovisao_csll?></font></th>
                                        </tr>
                                        </tbody>
                                        <tr class="success">
                                            <th> </th>
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
