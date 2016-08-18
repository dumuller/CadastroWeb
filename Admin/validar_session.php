

<?php
@session_start();

// inclui o arquivo de configuração do sistema
	include "conecta.php";

// verifica se a variavel existir
if(isset($_SESSION['login_usuario']) and isset($_SESSION['senha_usuario'])) {
	// se existie as sessões coloca os valores em uma varivel
	$login_usuario = $_SESSION['login_usuario'];
	$senha_usuario = $_SESSION['senha_usuario'];
} else {
	echo"<script>alert('Voce Nao esta logado!!!');</script>";
	echo "<script>window.location ='../index.php';</script>";
	exit;
}
// verifica se as variaveis estão atribuidas
if(!(empty($login_usuario) or empty($senha_usuario))) {
	// se estiverem atribuidos vamos ver se exist o login
	$consulta = mysql_query("select * from usuario where usuario = '$login_usuario'");
	if(mysql_num_rows($consulta) == 1) {
		// se o usuario existir vamos verificar a senha
		if($senha_usuario != mysql_result($consulta,0,"Senha")) {
			// se a senha está correta vamos apagar a
			// sessão que existia mas erra a errada
			unset($_SESSION['login_usuario']);
			unset($_SESSION['senha_usuario']);
			
				echo"<script>alert('Voce Nao esta logado!!!');</script>";
		echo "<script>window.location ='../index.php';</script>";
			exit;
		}
}

} else {
	// caso as sessões estarem vazias
echo"<script>alert('Voce Nao esta logado!!!');</script>";
		echo "<script>window.location ='../../index.php';</script>";
			exit;
}
?>
