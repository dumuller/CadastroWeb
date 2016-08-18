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
           for ($i = 1; $i <= 6; $i++) {
		  if ($i<10){

       $sql= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-0$i' and descricao='Faturamento Produtos'";
       $sql1= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-0$i' and descricao='Devolucoes de Venda'";
       $sql2= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-0$i' and descricao='Despesas Variaveis de Venda'";
       $sql3= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-0$i' and descricao='Receita Operacional Liquida'";
      $sql4= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-0$i' and descricao='Custo Produtos Vendidos'";
       $sql5= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-0$i' and descricao='Margem de Contribuicao'";
       $sql6= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-0$i' and descricao='Custos Fixos'";
       $sql7= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-0$i' and descricao='Resultado Bruto'";
       $sql8= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-0$i' and descricao='Despesas Administrativas'";
        $sql9= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-0$i' and descricao='Despesas Comerciais'";
        $sql10= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-0$i' and descricao='EBITDA'";
        $sql11= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-0$i' and descricao='Depreciacao'";
        $sql12= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-0$i' and descricao='Resultado Financeiro'";
        $sql13= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-0$i' and descricao='Receitas Financeiras'";
        $sql14= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-0$i' and descricao='Despesas Financeiras'";
        $sql15= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-0$i' and descricao='Resultado Liquido'";
       
       }
       else{
       $sql= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-$i' and descricao='Faturamento Produtos'";
       $sql1= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-$i' and descricao='Devolucoes de Venda'";
       $sql2= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-$i' and descricao='Despesas Variaveis de Venda'";
       $sql3= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-$i' and descricao='Receita Operacional Liquida'";
      $sql4= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-$i' and descricao='Custo Produtos Vendidos'";
       $sql5= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-$i' and descricao='Margem de Contribuicao'";
       $sql6= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-$i' and descricao='Custos Fixos'";
       $sql7= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-$i' and descricao='Resultado Bruto'";
       $sql8= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-$i' and descricao='Despesas Administrativas'";
        $sql9= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-$i' and descricao='Despesas Comerciais'";
        $sql10= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-$i' and descricao='EBITDA'";
        $sql11= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-$i' and descricao='Depreciacao'";
        $sql12= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-$i' and descricao='Resultado Financeiro'";
        $sql13= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-$i' and descricao='Receitas Financeiras'";
        $sql14= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-$i' and descricao='Despesas Financeiras'";
        $sql15= "SELECT  valorpadrao,valoralcancado FROM indicadores  WHERE mesano ='$ano-$i' and descricao='Resultado Liquido'"; 
       
       
       }
       
  
 		  $editar =mysql_query($sql);			
      $editar1 =mysql_query($sql1);
     	$editar2 =mysql_query($sql2);
      $editar3 =mysql_query($sql3);
      $editar4 =mysql_query($sql4);
      $editar5 =mysql_query($sql5);
      $editar6 =mysql_query($sql6);
      $editar7 =mysql_query($sql7);
      $editar8 =mysql_query($sql8);
      $editar9 =mysql_query($sql9);
      $editar10 =mysql_query($sql10);
     	$editar11 =mysql_query($sql11);
      $editar12 =mysql_query($sql12);
      $editar13 =mysql_query($sql13);
      $editar14 =mysql_query($sql14);
      $editar15 =mysql_query($sql15);
      $editar16 =mysql_query($sql16);
                      
      
       list($valor,$alcancado)=@mysql_fetch_row($editar);
       $padraofaturamento[$i]= $valor;
       $alcancadofaturamento[$i]=$alcancado;
       if($alcancado<0){
       $variacaofaturamento[$i]=$alcancado-$valor;
       }
       else{
       $variacaofaturamento[$i]=$valor-$alcancado;
       }
       
       list($valor,$alcancado)=@mysql_fetch_row($editar1);
        $padraodevolucao[$i]= $valor;
       $alcancadodevolucao[$i]=$alcancado;
       if($alcancado<0){
       $variacaodevolucao[$i]=$alcancado-$valor;
       }
       else{
       $variacaodevolucao[$i]=$valor-$alcancado;
       }
       
       list($valor,$alcancado)=@mysql_fetch_row($editar2);
       $padraodespesavenda[$i]= $valor;
       $alcancadodespesavenda[$i]=$alcancado;
        if($alcancado<0){
       $variacaodespesavenda[$i]=$alcancado-$valor;
       }
       else{
       $variacaodespesavenda[$i]=$valor-$alcancado;
       }
       
       list($valor,$alcancado)=@mysql_fetch_row($editar3);
       $padraoreceitaliquida[$i]= $valor;
       $alcancadoreceitaliquida[$i]=$alcancado;
         if($alcancado<0){
       $variacaoreceitaliquida[$i]=$alcancado-$valor;
       }
       else{
       $variacaoreceitaliquida[$i]=$valor-$alcancado;
       }

       list($valor,$alcancado)=@mysql_fetch_row($editar4);
       $padraocustoprodutosvendidos[$i]= $valor;
       $alcancadocustoprodutosvendidos[$i]=$alcancado;
        if($alcancado<0){
       $variacaocustoprodutosvendidos[$i]=$alcancado-$valor;
       }
       else{
       $variacaocustoprodutosvendidos[$i]=$valor-$alcancado;
       }

      list($valor,$alcancado)=@mysql_fetch_row($editar5);
       $padraomargemcontribuicao[$i]= $valor;
       $alcancadomargemcontribuicao[$i]=$alcancado;
       if($alcancado<0){
       $variacaomargemcontribuicao[$i]=$alcancado-$valor;
       }
       else{
       $variacaomargemcontribuicao[$i]=$valor-$alcancado;
       }

      list($valor,$alcancado)=@mysql_fetch_row($editar6);
       $padraocustofixo[$i]= $valor;
      $alcancadocustofixo[$i]=$alcancado;
      if($alcancado<0){
       $variacaocustofixo[$i]=$alcancado-$valor;
       }
       else{
       $variacaocustofixo[$i]=$valor-$alcancado;
       }

       list($valor,$alcancado)=@mysql_fetch_row($editar7);
       $padraoresultadobruto[$i]= $valor;
        $alcancadoresultadobruto[$i]=$alcancado;
       if($alcancado<0){
       $variacaoresultadobruto[$i]=$alcancado-$valor;
       }
       else{
       $variacaoresultadobruto[$i]=$valor-$alcancado;
       }

       list($valor,$alcancado)=@mysql_fetch_row($editar8);
       $padraodespesaadministrativa[$i]= $valor;
        $alcancadodespesaadministrativa[$i]=$alcancado;
        if($alcancado<0){
       $variacaodespesaadministrativa[$i]=$alcancado-$valor;
       }
       else{
       $variacaodespesaadministrativa[$i]=$valor-$alcancado;
       }
        
        
      list($valor,$alcancado)=@mysql_fetch_row($editar9);
       $padraodespesacomercial[$i]= $valor;
        $alcancadodespesacomercial[$i]=$alcancado;
        if($alcancado<0){
       $variacaodespesacomercial[$i]=$alcancado-$valor;
       }
       else{
       $variacaodespesacomercial[$i]=$valor-$alcancado;
       }
        
        list($valor,$alcancado)=@mysql_fetch_row($editar10);
       $padraoebitda[$i]= $valor;
        $alcancadoebitda[$i]=$alcancado;
        if($alcancado<0){
       $variacaoebitda[$i]=$alcancado-$valor;
       }
       else{
       $variacaoebitda[$i]=$valor-$alcancado;
       }


      list($valor,$alcancado)=@mysql_fetch_row($editar11);
        $padraodepreciacao[$i]= $valor;
       $alcancadodepreciacao[$i]=$alcancado;
        if($alcancado<0){
       $variacaodepreciacao[$i]=$alcancado-$valor;
       }
       else{
       $variacaodepreciacao[$i]=$valor-$alcancado;
       }
       list($valor,$alcancado)=@mysql_fetch_row($editar12);
       $padraoresultadofinanceiro[$i]= $valor;
       $alcancadoresultadofinanceiro[$i]=$alcancado;
       if($alcancado<0){
       $variacaoresultadofinanceiro[$i]=$alcancado-$valor;
       }
       else{
       $variacaoresultadofinanceiro[$i]=$valor-$alcancado;
       }
       list($valor,$alcancado)=@mysql_fetch_row($editar13);
       $padraoreceitafinanceira[$i]= $valor;
        $alcancadoreceitafinanceira[$i]=$alcancado;
         if($alcancado<0){
       $variacaoreceitafinanceira[$i]=$alcancado-$valor;
       }
       else{
       $variacaoreceitafinanceira[$i]=$valor-$alcancado;
       }
       list($valor,$alcancado)=@mysql_fetch_row($editar14);
       $padraodespesafinanceira[$i]= $valor;
       $alcancadodespesafinanceira[$i]=$alcancado;
        if($alcancado<0){
       $variacaodespesafinanceira[$i]=$alcancado-$valor;
       }
       else{
       $variacaodespesafinanceira[$i]=$valor-$alcancado;
       }

       list($valor,$alcancado)=@mysql_fetch_row($editar15);
       $padraoresultadoliquido[$i]= $valor;
       $alcancadoresultadoliquido[$i]=$alcancado;
        if($alcancado<0){
       $variacaoresultadoliquido[$i]=$alcancado-$valor;
       }
       else{
       $variacaoresultadoliquido[$i]=$valor-$alcancado;
       }
        if($padraofaturamento[$i]==''){
       $padraofaturamento[$i]=0.00;
      } 
      if($alcancadofaturamento[$i]==''){
       $alcancadofaturamento[$i]=0.00;
      } 
      if($variacaofaturamento[$i]==''){
       $variacaofaturamento[$i]=0.00;
      } 
       if($padraodevolucao[$i]==''){
       $padraodevolucao[$i]=0.00;
      } 
      if($alcancadodevolucao[$i]==''){
       $alcancadodevolucao[$i]=0.00;
      } 
      if($variacaodevolucao[$i]==''){
       $variacaodevolucao[$i]=0.00;
      } 
       if($padraodespesavenda[$i]==''){
       $padraodespesavenda[$i]=0.00;
      } 
      if($alcancadodespesavenda[$i]==''){
       $alcancadodespesavenda[$i]=0.00;
      } 
      if($variacaodespesavenda[$i]==''){
       $variacaodespesavenda[$i]=0.00;
      } 
      
      if($padraoreceitaliquida[$i]==''){
       $padraoreceitaliquida[$i]=0.00;
      } 
      if($alcancadoreceitaliquida[$i]==''){
       $alcancadoreceitaliquida[$i]=0.00;
      } 
      if($variacaoreceitaliquida[$i]==''){
       $variacaoreceitaliquida[$i]=0.00;
      } 
      
      if($padraocustoprodutosvendidos[$i]==''){
       $padraocustoprodutosvendidos[$i]=0.00;
      } 
      if($alcancadocustoprodutosvendidos[$i]==''){
       $alcancadocustoprodutosvendidos[$i]=0.00;
      } 
      if($variacaocustoprodutosvendidos[$i]==''){
       $variacaocustoprodutosvendidos[$i]=0.00;
      } 
      
      if($padraomargemcontribuicao[$i]==''){
       $padraomargemcontribuicao[$i]=0.00;
      } 
      if($alcancadomargemcontribuicao[$i]==''){
       $alcancadomargemcontribuicao[$i]=0.00;
      } 
      if($variacaomargemcontribuicao[$i]==''){
       $variacaomargemcontribuicao[$i]=0.00;
      } 
      
       if($padraocustofixo[$i]==''){
       $padraocustofixo[$i]=0.00;
      } 
      if($alcancadocustofixo[$i]==''){
       $alcancadocustofixo[$i]=0.00;
      } 
      if($variacaocustofixo[$i]==''){
       $variacaocustofixo[$i]=0.00;
      } 
      
       if($padraoresultadobruto[$i]==''){
       $padraoresultadobruto[$i]=0.00;
      } 
      if($alcancadoresultadobruto[$i]==''){
       $alcancadoresultadobruto[$i]=0.00;
      } 
      if($variacaoresultadobruto[$i]==''){
       $variacaoresultadobruto[$i]=0.00;
      } 
      
      
      if($padraodespesaadministrativa[$i]==''){
       $padraodespesaadministrativa[$i]=0.00;
      } 
      if($alcancadodespesaadministrativa[$i]==''){
       $alcancadodespesaadministrativa[$i]=0.00;
      } 
      if($variacaodespesaadministrativa[$i]==''){
       $variacaodespesaadministrativa[$i]=0.00;
      } 
      
      
       if($padraodespesacomercial[$i]==''){
       $padraodespesacomercial[$i]=0.00;
      } 
      if($alcancadodespesacomercial[$i]==''){
       $alcancadodespesacomercial[$i]=0.00;
      } 
      if($variacaodespesacomercial[$i]==''){
       $variacaodespesacomercial[$i]=0.00;
      } 
      
      if($padraoebitda[$i]==''){
       $padraoebitda[$i]=0.00;
      } 
      if($alcancadoebitda[$i]==''){
       $alcancadoebitda[$i]=0.00;
      } 
      if($variacaoebitda[$i]==''){
       $variacaoebitda[$i]=0.00;
      } 
      
      
        if($padraodepreciacao[$i]==''){
       $padraodepreciacao[$i]=0.00;
      } 
      if($alcancadodepreciacao[$i]==''){
       $alcancadodepreciacao[$i]=0.00;
      } 
      if($variacaodepreciacao[$i]==''){
       $variacaodepreciacao[$i]=0.00;
      } 
      
      
        if($padraoresultadofinanceiro[$i]==''){
       $padraoresultadofinanceiro[$i]=0.00;
      } 
      if($alcancadoresultadofinanceiro[$i]==''){
       $alcancadoresultadofinanceiro[$i]=0.00;
      } 
      if($variacaoresultadofinanceiro[$i]==''){
       $variacaoresultadofinanceiro[$i]=0.00;
      } 
      
       if($padraoreceitafinanceira[$i]==''){
       $padraoreceitafinanceira[$i]=0.00;
      } 
      if($alcancadoreceitafinanceira[$i]==''){
       $alcancadoreceitafinanceira[$i]=0.00;
      } 
      if($variacaoreceitafinanceira[$i]==''){
       $variacaoreceitafinanceira[$i]=0.00;
      } 
      
       if($padraodespesafinanceira[$i]==''){
       $padraodespesafinanceira[$i]=0.00;
      } 
      if($alcancadodespesafinanceira[$i]==''){
       $alcancadodespesafinanceira[$i]=0.00;
      } 
      if($variacaodespesafinanceira[$i]==''){
       $variacaodespesafinanceira[$i]=0.00;
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
      
       
       
       
  
       
      $padraofaturamento[$i]=number_format($padraofaturamento[$i], 2, ",", ".");
      $alcancadofaturamento[$i]=number_format($alcancadofaturamento[$i], 2, ",", ".");
       $variacaofaturamento[$i]=number_format($variacaofaturamento[$i], 2, ",", ".");
      
      
      $padraodevolucao[$i]=number_format($padraodevolucao[$i], 2, ",", ".");
      $alcancadodevolucao[$i]=number_format($alcancadodevolucao[$i], 2, ",", ".");
      $variacaodevolucao[$i]=number_format($variacaodevolucao[$i], 2, ",", ".");
      
       $padraodespesavenda[$i]=number_format($padraodespesavenda[$i], 2, ",", ".");
      $alcancadodespesavenda[$i]=number_format($alcancadodespesavenda[$i], 2, ",", ".");
      $variacaodespesavenda[$i]=number_format($variacaodespesavenda[$i], 2, ",", ".");
      
      $padraoreceitaliquida[$i]=number_format($padraoreceitaliquida[$i], 2, ",", ".");
      $alcancadoreceitaliquida[$i]=number_format($alcancadoreceitaliquida[$i], 2, ",", ".");
      $variacaoreceitaliquida[$i]=number_format($variacaoreceitaliquida[$i], 2, ",", ".");
      
      $padraocustoprodutosvendidos[$i]=number_format($padraocustoprodutosvendidos[$i], 2, ",", ".");
      $alcancadocustoprodutosvendidos[$i]=number_format($alcancadocustoprodutosvendidos[$i], 2, ",", ".");
      $variacaocustoprodutosvendidos[$i]=number_format($variacaocustoprodutosvendidos[$i], 2, ",", ".");
    
      
      $padraomargemcontribuicao[$i]=number_format($padraomargemcontribuicao[$i], 2, ",", ".");
      $alcancadomargemcontribuicao[$i]=number_format($alcancadomargemcontribuicao[$i], 2, ",", ".");
      $variacaomargemcontribuicao[$i]=number_format($variacaomargemcontribuicao[$i], 2, ",", ".");
      
      $padraocustofixo[$i]=number_format($padraocustofixo[$i], 2, ",", ".");
      $alcancadocustofixo[$i]=number_format($alcancadocustofixo[$i], 2, ",", ".");
      $variacaocustofixo[$i]=number_format($variacaocustofixo[$i], 2, ",", ".");
      
       $padraoresultadobruto[$i]=number_format($padraoresultadobruto[$i], 2, ",", ".");
      $alcancadoresultadobruto[$i]=number_format($alcancadoresultadobruto[$i], 2, ",", ".");
      $variacaoresultadobruto[$i]=number_format($variacaoresultadobruto[$i], 2, ",", ".");
      
      $padraodespesaadministrativa[$i]=number_format($padraodespesaadministrativa[$i], 2, ",", ".");
      $alcancadodespesaadministrativa[$i]=number_format($alcancadodespesaadministrativa[$i], 2, ",", ".");
      $variacaodespesaadministrativa[$i]=number_format($variacaodespesaadministrativa[$i], 2, ",", ".");
      
      $padraodespesacomercial[$i]=number_format($padraodespesacomercial[$i], 2, ",", ".");
      $alcancadodespesacomercial[$i]=number_format($alcancadodespesacomercial[$i], 2, ",", ".");
      $variacaodespesacomercial[$i]=number_format($variacaodespesacomercial[$i], 2, ",", ".");
      
      $padraoebitda[$i]=number_format($padraoebitda[$i], 2, ",", ".");
      $alcancadoebitda[$i]=number_format($alcancadoebitda[$i], 2, ",", ".");
      $variacaoebitda[$i]=number_format($variacaoebitda[$i], 2, ",", ".");
      
      $padraodepreciacao[$i]=number_format($padraodepreciacao[$i], 2, ",", ".");
      $alcancadodepreciacao[$i]=number_format($alcancadodepreciacao[$i], 2, ",", ".");
      $variacaodepreciacao[$i]=number_format($variacaodepreciacao[$i], 2, ",", ".");
      
      $padraoresultadofinanceiro[$i]=number_format($padraoresultadofinanceiro[$i], 2, ",", ".");
      $alcancadoresultadofinanceiro[$i]=number_format($alcancadoresultadofinanceiro[$i], 2, ",", ".");
      $variacaoresultadofinanceiro[$i]=number_format($variacaoresultadofinanceiro[$i], 2, ",", ".");
      
       $padraoreceitafinanceira[$i]=number_format($padraoreceitafinanceira[$i], 2, ",", ".");
      $alcancadoreceitafinanceira[$i]=number_format($alcancadoreceitafinanceira[$i], 2, ",", ".");
      $variacaoreceitafinanceira[$i]=number_format($variacaoreceitafinanceira[$i], 2, ",", ".");
      
       $padraodespesafinanceira[$i]=number_format($padraodespesafinanceira[$i], 2, ",", ".");
      $alcancadodespesafinanceira[$i]=number_format($alcancadodespesafinanceira[$i], 2, ",", ".");
      $variacaodespesafinanceira[$i]=number_format($variacaodespesafinanceira[$i], 2, ",", ".");
      
       $padraoresultadoliquido[$i]=number_format($padraoresultadoliquido[$i], 2, ",", ".");
      $alcancadoresultadoliquido[$i]=number_format($alcancadoresultadoliquido[$i], 2, ",", ".");
      $variacaoresultadoliquido[$i]=number_format($variacaoresultadoliquido[$i], 2, ",", ".");
      
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

        <div id="page-wrapper">
           
            <!-- /.row -->
            <div class="row">
              
                    <div class="panel panel-green">
                        <div class="panel-heading">
                        <center>
                        <h4>
                            Indicadores De Desempenho no ano de <?php echo $ano?>
                            </h4>
                            </center>
                        </div>
                       
                    </div>
                    <center>
                    <a href="<?php echo "indicadoresano.php?ano1=$ano";?>">
                    <button type="submit" class="btn btn-success">1ª Semestre</button>
                    </a>
                    <a href="<?php echo "indicadoresano01.php?ano1=$ano";?>">
                    <button type="button" class="btn btn-warning">2ª Semestre</button>
                    </a>
                    </br>
                    </br>
                  
                        <!-- /.panel-heading -->
                         <div class="panel">                           
                <div > 
                <table width="100%" class="table table-striped table-bordered table-hover"> 
                                        
                      <tr>  
                    <b>  <td><b><font color="blue">Indicadores</font></td>                                     
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
                        <th><font color="blue">Ideal
                        <th><font color="blue">Alc.</th>
                        <th><font color="blue">Var.</th>
                         <th><font color="red">Ideal
                        <th><font color="red">Alc.</th>
                        <th><font color="red">Var.</th>
                         <th><font color="#006600">Ideal
                        <th><font color="#006600">Alc.</th>
                        <th><font color="#006600">Var.</th>
                         <th><font color="#FF33CC">Ideal
                        <th><font color="#FF33CC">Alc.</th>
                        <th><font color="#FF33CC">Var.</th>
                         <th><font color="#9966CC">Ideal
                        <th><font color="#9966CC">Alc.</th>
                        <th><font color="#9966CC">Var.</th>
                          <th><font color="#996633">Ideal
                        <th><font color="#996633">Alc.</th>
                        <th><font color="#996633">Var.</th>
                         
                                            </tr>             
                    </thead>                                    
                    <tbody>                                        
                      <tr class="success">                                                                                  
                        <th>Faturamento Produtos
                        </th> 
                        <th><font color="blue"> <?php echo $padraofaturamento[1]?>% </th>         
                      <td><font color="blue"><?php echo $alcancadofaturamento[1]?>%</td>  
                      <td><font color="blue"><?php echo $variacaofaturamento[1]?>%</td>
                      <th><font color="red"> <?php echo $padraofaturamento[2]?>%</th>  
                       <td><font color="red"><?php echo $alcancadofaturamento[2]?>%</td>  
                      <td><font color="red"><?php echo $variacaofaturamento[2]?>%</td> 
                      <th><font color="#006600"> <?php echo $padraofaturamento[3]?>%</th>  
                       <td><font color="#006600"><?php echo $alcancadofaturamento[3]?>%</td>  
                      <td><font color="#006600"><?php echo $variacaofaturamento[3]?>%</td> 
                      <th> <font color="#FF33CC"> <?php echo $padraofaturamento[4]?>%</th>  
                       <td><font color="#FF33CC"><?php echo $alcancadofaturamento[4]?>%</td>  
                      <td><font color="#FF33CC"><?php echo $variacaofaturamento[4]?>%</td>
                      <th><font color="#9966CC"><?php echo $padraofaturamento[5]?>%</th>  </b>
                       <td><font color="#9966CC"><?php echo $alcancadofaturamento[5]?>%</td>  
                      <td><font color="#9966CC"><?php echo $variacaofaturamento[5]?>%</td> 
                      <th><font color="#996633"><?php echo $padraofaturamento[6]?>%</th>  
                       <td><font color="#996633"><?php echo $alcancadofaturamento[6]?>%</td>  
                      <td><font color="#996633"><?php echo $variacaofaturamento[6]?>%</td> 
                                                                                 
                      </tr>  
                      
                       <tr class="danger">
                                           
                                            <th>(-)Devoluções de Vendas</th>
                                            <th><font color="blue"><?php echo $padraodevolucao[1]?>%</th>
                                            <td><font color="blue"><?php echo $alcancadodevolucao[1]?>%</td>
                                            <td><font color="blue"><?php echo $variacaodevolucao[1]?>%</td>
                                            <th><font color="red"><?php echo $padraodevolucao[2]?>%</th>
                                            <td><font color="red"><?php echo $alcancadodevolucao[2]?>%</td>
                                            <td><font color="red"><?php echo $variacaodevolucao[2]?>%</td>
                                            <th><font color="#006600"><?php echo $padraodevolucao[3]?>%</th>
                                            <td><font color="#006600"><?php echo $alcancadodevolucao[3]?>%</td>
                                            <td><font color="#006600"><?php echo $variacaodevolucao[3]?>%</td>
                                            <th><font color="#FF33CC"><?php echo $padraodevolucao[4]?>%</th>
                                            <td><font color="#FF33CC"><?php echo $alcancadodevolucao[4]?>%</td>
                                            <td><font color="#FF33CC"><?php echo $variacaodevolucao[4]?>%</td>
                                            <th><font color="#9966CC"><?php echo $padraodevolucao[5]?>%</th>
                                            <td><font color="#9966CC"><?php echo $alcancadodevolucao[5]?>%</td>
                                            <td><font color="#9966CC"><?php echo $variacaodevolucao[5]?>%</td>
                                            <th><font color="#996633"><?php echo $padraodevolucao[6]?>%</th>
                                            <td><font color="#996633"><?php echo $alcancadodevolucao[6]?>%</td>
                                            <td><font color="#996633"><?php echo $variacaodevolucao[6]?>%</td>
                                           
                                            

                                        </tr>                                      
                      <tr class="info">                                                                                        
                        <th>Despesas Váriaveis de Venda
                        </th>
                        <th><font color="blue"> <?php echo $padraodespesavenda[1]?>%</th>                                            
                          <td><font color="blue"><?php echo $alcancadodespesavenda[1]?>%</td>  
                          <td><font color="blue"><?php echo $variacaodespesavenda[1]?>%</td> 
                          <th><font color="red"> <?php echo $padraodespesavenda[2]?>%</th>   
                          <td><font color="red"><?php echo $alcancadodespesavenda[2]?>%</td>  
                          <td><font color="red"><?php echo $variacaodespesavenda[2]?>%</td>
                          <th><font color="#006600"> <?php echo $padraodespesavenda[3]?>%</th> 
                          <td><font color="#006600"><?php echo $alcancadodespesavenda[3]?>%</td>  
                          <td><font color="#006600"><?php echo $variacaodespesavenda[3]?>%</td>
                          <th><font color="#FF33CC"> <?php echo $padraodespesavenda[4]?>%</th> 
                          <td><font color="#FF33CC"><?php echo $alcancadodespesavenda[4]?>%</td>  
                          <td><font color="#FF33CC"><?php echo $variacaodespesavenda[4]?>%</td>
                          <th><font color="#9966CC"> <?php echo $padraodespesavenda[5]?>%</th>  
                          <td><font color="#9966CC"><?php echo $alcancadodespesavenda[5]?>%</td>  
                          <td><font color="#9966CC"><?php echo $variacaodespesavenda[5]?>%</td>
                          <th><font color="#996633"> <?php echo $padraodespesavenda[6]?>%</th> 
                          <td><font color="#996633"><?php echo $alcancadodespesavenda[6]?>%</td>  
                          <td><font color="#996633"><?php echo $variacaodespesavenda[6]?>%</td> 
                                                                               
                      </tr>                                        
                      <tr class="danger">                                                                                 
                        <th>Receita Operacional Liquida
                        </th>                                            
                         <th><font color="blue"> <?php echo $padraoreceitaliquida[1]?>%</th>                                           
                           <td><font color="blue"><?php echo $alcancadoreceitaliquida[1]?>%</td>
                            <td><font color="blue"><?php echo $variacaoreceitaliquida[1]?>%</td>
                             <th><font color="red"> <?php echo $padraoreceitaliquida[2]?>%</th>  
                             <td><font color="red"><?php echo $alcancadoreceitaliquida[2]?>%</td>
                            <td><font color="red"><?php echo $variacaoreceitaliquida[2]?>%</td> 
                             <th><font color="#006600"> <?php echo $padraoreceitaliquida[3]?>%</th> 
                             <td><font color="#006600"><?php echo $alcancadoreceitaliquida[3]?>%</td>
                            <td><font color="#006600"></b><?php echo $variacaoreceitaliquida[3]?>%</td> 
                             <th><font color="#FF33CC"> <?php echo $padraoreceitaliquida[4]?>%</th> 
                             <td><font color="#FF33CC"><?php echo $alcancadoreceitaliquida[4]?>%</td>
                            <td><font color="#FF33CC"><?php echo $variacaoreceitaliquida[4]?>%</td> 
                             <th> <font color="#9966CC"><?php echo $padraoreceitaliquida[5]?>%</th> 
                             <td><font color="#9966CC"><?php echo $alcancadoreceitaliquida[5]?>%</td>
                            <td><font color="#9966CC"><?php echo $variacaoreceitaliquida[5]?>%</td> 
                             <th><font color="#996633"> <?php echo $padraoreceitaliquida[6]?>%</th> 
                             <td><font color="#996633"><?php echo $alcancadoreceitaliquida[6]?>%</td>
                            <td><font color="#996633"><?php echo $variacaoreceitaliquida[6]?>%</td> 
                                                                                          
                      </tr>                                        
                      <tr class="warning">                                                                                       
                        <th>Custo Produtos Vendidos
                        </th>                                            
                          <th><font color="red"><font color="blue"><?php echo $padraocustoprodutosvendidos[1]?>%</th>                                            
                          <td><font color="red"><font color="blue"><?php echo $alcancadocustoprodutosvendidos[1]?>%</td>   
                          <td><font color="red"><font color="blue"><?php echo $variacaocustoprodutosvendidos[1]?>%</td>
                          <th><font color="red"><?php echo $padraocustoprodutosvendidos[2]?>%</th> 
                          <td><font color="red"><?php echo $alcancadocustoprodutosvendidos[2]?>%</td>   
                          <td><font color="red"><?php echo $variacaocustoprodutosvendidos[2]?>%</td> 
                          <th><font color="#006600"><?php echo $padraocustoprodutosvendidos[3]?>%</th> 
                          <td><font color="#006600"><?php echo $alcancadocustoprodutosvendidos[3]?>%</td>   
                          <td><font color="#006600"><?php echo $variacaocustoprodutosvendidos[3]?>%</td> 
                          <th><font color="#FF33CC"><?php echo $padraocustoprodutosvendidos[4]?>%</th> 
                          <td><font color="#FF33CC"><?php echo $alcancadocustoprodutosvendidos[4]?>%</td>   
                          <td><font color="#FF33CC"><?php echo $variacaocustoprodutosvendidos[4]?>%</td>
                          <th><font color="#9966CC"><?php echo $padraocustoprodutosvendidos[5]?>%</th>     
                          <td><font color="#9966CC"><?php echo $alcancadocustoprodutosvendidos[5]?>%</td>   
                          <td><font color="#9966CC"><?php echo $variacaocustoprodutosvendidos[5]?>%</td>
                          <th><font color="#996633"><?php echo $padraocustoprodutosvendidos[6]?>%</th> 
                          <td><font color="#996633"><?php echo $alcancadocustoprodutosvendidos[6]?>%</td>   
                          <td><font color="#996633"><?php echo $variacaocustoprodutosvendidos[6]?>%</td>  
                                                                                       
                      </tr>                                      
                      <tr class="danger">                                                                                 
                        <th>Margem de Contribuição
                        </th>                                            
                         <th><font color="blue"> <?php echo $padraomargemcontribuicao[1]?>%</th>                                           
                          <td><font color="blue"><?php echo $alcancadomargemcontribuicao[1]?>%</td> 
                          <td><font color="blue"><?php echo $variacaomargemcontribuicao[1]?>%</td> 
                          <th><font color="red"> <?php echo $padraomargemcontribuicao[2]?>%</th> 
                          <td><font color="red"><?php echo $alcancadomargemcontribuicao[2]?>%</td> 
                          <td><font color="red"><?php echo $variacaomargemcontribuicao[2]?>%</td> 
                          <th><font color="#006600"> <?php echo $padraomargemcontribuicao[3]?>%</th> 
                          <td><font color="#006600"><?php echo $alcancadomargemcontribuicao[3]?>%</td> 
                          <td><font color="#006600"><?php echo $variacaomargemcontribuicao[3]?>%</td>
                          <th><font color="#FF33CC"> <?php echo $padraomargemcontribuicao[4]?>%</th>  
                          <td><font color="#FF33CC"><?php echo $alcancadomargemcontribuicao[4]?>%</td> 
                          <td><font color="#FF33CC"><?php echo $variacaomargemcontribuicao[4]?>%</td>
                          <th><font color="#9966CC"> <?php echo $padraomargemcontribuicao[5]?>%</th> 
                          <td><font color="#9966CC"><?php echo $alcancadomargemcontribuicao[5]?>%</td> 
                          <td><font color="#9966CC"><?php echo $variacaomargemcontribuicao[5]?>%</td>
                          <th><font color="#996633"> <?php echo $padraomargemcontribuicao[6]?>%</th>    
                          <td><font color="#996633"><?php echo $alcancadomargemcontribuicao[6]?>%</td> 
                          <td><font color="#996633"><?php echo $variacaomargemcontribuicao[6]?>%</td>
                                                              
                      </tr>                                        
                      <tr class="warning">                                                                                 
                        <th>Custos Fixos
                        </th>                                           
                          <th><font color="blue"><?php echo $padraocustofixo[1]?>%</th>                                           
                           <td><font color="blue"><?php echo $alcancadocustofixo[1]?>%</td> 
                           <td><font color="blue"><?php echo $variacaocustofixo[1]?>%</td>
                            <th><font color="red"><?php echo $padraocustofixo[2]?>%</th>    
                           <td><font color="red"><?php echo $alcancadocustofixo[2]?>%</td> 
                           <td><font color="red"><?php echo $variacaocustofixo[2]?>%</td> 
                            <th><font color="#006600"><?php echo $padraocustofixo[3]?>%</th>   
                           <td><font color="#006600"><?php echo $alcancadocustofixo[3]?>%</td> 
                           <td><font color="#006600"><?php echo $variacaocustofixo[3]?>%</td>
                            <th><font color="#FF33CC"><?php echo $padraocustofixo[4]?>%</th>  
                           <td><font color="#FF33CC"><?php echo $alcancadocustofixo[4]?>%</td> 
                           <td><font color="#FF33CC"><?php echo $variacaocustofixo[4]?>%</td>
                            <th><font color="#9966CC"><?php echo $padraocustofixo[5]?>%</th> 
                           <td><font color="#9966CC"><?php echo $alcancadocustofixo[5]?>%</td> 
                           <td><font color="#9966CC"><?php echo $variacaocustofixo[5]?>%</td> 
                            <th><font color="#996633"><?php echo $padraocustofixo[6]?>%</th>  
                           <td><font color="#996633"><?php echo $alcancadocustofixo[6]?>%</td> 
                           <td><font color="#996633"><?php echo $variacaocustofixo[6]?>%</td>
                                 
                                                                                 
                      </tr>                                       
                      <tr class="danger">                                                                                 
                        <th>Resultado Bruto
                        </th>                                             
                          <th><font color="blue"><?php echo $padraoresultadobruto[1]?>%</th>                                           
                           <td><font color="blue"><?php echo $alcancadoresultadobruto[1]?>%</td> 
                           <td><font color="blue"><?php echo $variacaoresultadobruto[1]?>%</td>
                           <th><font color="red"><?php echo $padraoresultadobruto[2]?>%</th>  
                           <td><font color="red"><?php echo $alcancadoresultadobruto[2]?>%</td> 
                           <td><font color="red"><?php echo $variacaoresultadobruto[2]?>%</td>
                           <th><font color="#006600"><?php echo $padraoresultadobruto[3]?>%</th>   
                           <td><font color="#006600"><?php echo $alcancadoresultadobruto[3]?>%</td> 
                           <td><font color="#006600"><?php echo $variacaoresultadobruto[3]?>%</td> 
                           <th><font color="#FF33CC"><?php echo $padraoresultadobruto[4]?>%</th>
                           <td><font color="#FF33CC"><?php echo $alcancadoresultadobruto[4]?>%</td> 
                           <td><font color="#FF33CC"><?php echo $variacaoresultadobruto[4]?>%</td> 
                           <th><font color="#9966CC"><?php echo $padraoresultadobruto[5]?>%</th> 
                           <td><font color="#9966CC"><?php echo $alcancadoresultadobruto[5]?>%</td> 
                           <td><font color="#9966CC"><?php echo $variacaoresultadobruto[5]?>%</td> 
                           <th><font color="#996633"><?php echo $padraoresultadobruto[6]?>%</th>
                           <td><font color="#996633"><?php echo $alcancadoresultadobruto[6]?>%</td> 
                           <td><font color="#996633"><?php echo $variacaoresultadobruto[6]?>%</td> 
                                                                                          
                      </tr>                                        
                      <tr class="success">                                                                                  
                        <th>Despesas Administrativas
                        </th>                                            
                           <th><font color="blue"> <?php echo $padraodespesaadministrativa[1]?>%</th>                                           
                           <td><font color="blue"><?php echo $alcancadodespesaadministrativa[1]?>%</td>  
                           <td><font color="blue"><?php echo $variacaodespesaadministrativa[1]?>%</td> 
                           <th><font color="red"> <?php echo $padraodespesaadministrativa[2]?>%</th>
                           <td><font color="red"><?php echo $alcancadodespesaadministrativa[2]?>%</td>  
                           <td><font color="red"><?php echo $variacaodespesaadministrativa[2]?>%</td>
                           <th><font color="#006600"> <?php echo $padraodespesaadministrativa[3]?>%</th>
                           <td><font color="#006600"><?php echo $alcancadodespesaadministrativa[3]?>%</td>  
                           <td><font color="#006600"><?php echo $variacaodespesaadministrativa[3]?>%</td> 
                           <th><font color="#FF33CC"> <?php echo $padraodespesaadministrativa[4]?>%</th> 
                           <td><font color="#FF33CC"><?php echo $alcancadodespesaadministrativa[4]?>%</td>  
                           <td><font color="#FF33CC"><?php echo $variacaodespesaadministrativa[4]?>%</td>
                           <th><font color="#9966CC"> <?php echo $padraodespesaadministrativa[5]?>%</th>
                           <td><font color="#9966CC"><?php echo $alcancadodespesaadministrativa[5]?>%</td>  
                           <td><font color="#9966CC"><?php echo $variacaodespesaadministrativa[5]?>%</td> 
                           <th> <font color="#996633"><?php echo $padraodespesaadministrativa[6]?>%</th>
                           <td><font color="#996633"><?php echo $alcancadodespesaadministrativa[6]?>%</td>  
                           <td><font color="#996633"><?php echo $variacaodespesaadministrativa[6]?>%</td>
                                                                                                    
                      </tr>                                         
                      <tr class="danger">
                                    
                                            <th>Despesas Comerciais</th>
                                             <th><font color="blue"><?php echo $padraodespesacomercial[1]?>%</th>
                                            <td><font color="blue"><?php echo $alcancadodespesacomercial[1]?>%</td>
                                            <td><font color="blue"><?php echo $variacaodespesacomercial[1]?>%</td>
                                            <th><font color="red"><?php echo $padraodespesacomercial[2]?>%</th>
                                              <td><font color="red"><?php echo $alcancadodespesacomercial[2]?>%</td>
                                            <td><font color="red"><?php echo $variacaodespesacomercial[2]?>%</td>
                                            <th><font color="#006600"><?php echo $padraodespesacomercial[3]?>%</th>
                                              <td><font color="#006600"><?php echo $alcancadodespesacomercial[3]?>%</td>
                                            <td><font color="#006600"><?php echo $variacaodespesacomercial[3]?>%</td>
                                            <th><font color="#FF33CC"><?php echo $padraodespesacomercial[4]?>%</th>
                                              <td><font color="#FF33CC"><?php echo $alcancadodespesacomercial[4]?>%</td>
                                            <td><font color="#FF33CC"><?php echo $variacaodespesacomercial[4]?>%</td>
                                            <th><font color="#9966CC"><?php echo $padraodespesacomercial[5]?>%</th>
                                              <td><font color="#9966CC"><?php echo $alcancadodespesacomercial[5]?>%</td>
                                            <td><font color="#9966CC"><?php echo $variacaodespesacomercial[5]?>%</td>
                                            <th><font color="#996633"><?php echo $padraodespesacomercial[6]?>%</th>
                                              <td><font color="#996633"><?php echo $alcancadodespesacomercial[6]?>%</td>
                                            <td><font color="#996633"><?php echo $variacaodespesacomercial[6]?>%</td>
                                           
                                        </tr>
                                         <tr class="danger">
                                    
                                            <th>Ebitda</th>
                                             <th><font color="blue"><?php echo $padraoebitda[1]?>%</th>
                                            <td><font color="blue"><?php echo $alcancadoebitda[1]?>%</td>
                                            <td><font color="blue"><?php echo $variacaoebitda[1]?>%</td>
                                            <th><font color="red"><?php echo $padraoebitda[2]?>%</th>
                                              <td><font color="red"><?php echo $alcancadoebitda[2]?>%</td>
                                            <td><font color="red"><?php echo $variacaoebitda[2]?>%</td>
                                            <th><font color="#006600"><?php echo $padraoebitda[3]?>%</th></b>
                                            <td><font color="#006600"><?php echo $alcancadoebitda[3]?>%</td>
                                            <td><font color="#006600"><?php echo $variacaoebitda[3]?>%</td>
                                            <th><font color="#FF33CC"><?php echo $padraoebitda[4]?>%</th>
                                             <td><font color="#FF33CC"><?php echo $alcancadoebitda[4]?>%</td>
                                            <td><font color="#FF33CC"><?php echo $variacaoebitda[4]?>%</td>
                                            <th><font color="#9966CC"><?php echo $padraoebitda[5]?>%</th>
                                            <td><font color="#9966CC"><?php echo $alcancadoebitda[5]?>%</td>
                                            <td><font color="#9966CC"><?php echo $variacaoebitda[5]?>%</td>
                                            <th><font color="#996633"><?php echo $padraoebitda[6]?>%</th>
                                            <td><font color="#996633"><?php echo $alcancadoebitda[6]?>%</td>
                                            <td><font color="#996633"><?php echo $variacaoebitda[6]?>%</td>
                                           
                                           
                                        </tr>
                                         <tr class="danger">
                                    
                                            <th>Depreciação</th>
                                             <th><font color="blue"><?php echo $padraodepreciacao[1]?>%</th>
                                            <td><font color="blue"><?php echo $alcancadodepreciacao[1]?>%</td>
                                            <td><font color="blue"><?php echo $variacaodepreciacao[1]?>%</td>
                                            <th><font color="red"><?php echo $padraodepreciacao[2]?>%</th>
                                             <td><font color="red"><?php echo $alcancadodepreciacao[2]?>%</td>
                                            <td><font color="red"><?php echo $variacaodepreciacao[2]?>%</td>
                                            <th><font color="#006600"><?php echo $padraodepreciacao[3]?>%</th>
                                              <td><font color="#006600"><?php echo $alcancadodepreciacao[3]?>%</td>
                                            <td><font color="#006600"><?php echo $variacaodepreciacao[3]?>%</td>
                                            <th><font color="#FF33CC"><?php echo $padraodepreciacao[4]?>%</th>
                                              <td><font color="#FF33CC"><?php echo $alcancadodepreciacao[4]?>%</td>
                                            <td><font color="#FF33CC"><?php echo $variacaodepreciacao[4]?>%</td>
                                            <th><font color="#9966CC"><?php echo $padraodepreciacao[5]?>%</th>
                                              <td><font color="#9966CC"><?php echo $alcancadodepreciacao[5]?>%</td>
                                            <td><font color="#9966CC"><?php echo $variacaodepreciacao[5]?>%</td>
                                            <th><font color="#996633"><?php echo $padraodepreciacao[6]?>%</th>
                                              <td><font color="#996633"><?php echo $alcancadodepreciacao[6]?>%</td>
                                            <td><font color="#996633"><?php echo $variacaodepreciacao[6]?>%</td>
                                            
                                            
                                        </tr>                     
                   
                      <tr class="success">                                                                                 
                        <th>Resultado Líquido
                        </th>                                            
                         <th><font color="blue"><?php echo $padraoresultadoliquido[1]?>%</th>                                           
                           <td><font color="blue"><?php echo $alcancadoresultadoliquido[1]?>%</td>
                           <td><font color="blue"><?php echo $variacaoresultadoliquido[1]?>%</td> 
                           <th><font color="red"><?php echo $padraoresultadoliquido[2]?>%</th>  
                           <td><font color="red"><?php echo $alcancadoresultadoliquido[2]?>%</td>
                           <td><font color="red"><?php echo $variacaoresultadoliquido[2]?>%</td>
                           <th><font color="#006600"><?php echo $padraoresultadoliquido[3]?>%</th>   
                           <td><font color="#006600"><?php echo $alcancadoresultadoliquido[3]?>%</td>
                           <td><font color="#006600"><?php echo $variacaoresultadoliquido[3]?>%</td>
                           <th><font color="#FF33CC"><?php echo $padraoresultadoliquido[4]?>%</th>    
                            <td><font color="#FF33CC"><?php echo $alcancadoresultadoliquido[4]?>%</td>
                           <td><font color="#FF33CC"><?php echo $variacaoresultadoliquido[4]?>%</td> 
                           <th><font color="#9966CC"><?php echo $padraoresultadoliquido[5]?>%</th>   
                            <td><font color="#9966CC"><?php echo $alcancadoresultadoliquido[5]?>%</td>
                           <td><font color="#9966CC"><?php echo $variacaoresultadoliquido[5]?>%</td>
                           <th><font color="#996633"><?php echo $padraoresultadoliquido[6]?>%</th>   
                            <td><font color="#996633"><?php echo $alcancadoresultadoliquido[6]?>%</td>
                           <td><font color="#996633"><?php echo $variacaoresultadoliquido[6]?>%</td>
                                                               
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
