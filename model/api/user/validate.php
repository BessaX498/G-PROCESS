<?php
	//Iniciar a Sessão
	session_start();

	//Requerir a Classe DB
	require_once('../../classes/db.php');

	//Variáveis
	$login = $_POST['login'];
	$password =  md5($_POST['password']);

	//Instruçãos
	$sql = "SELECT * FROM user WHERE login = '$login' AND password = '$password'";

	//Conexão
	$db = new db();
	$link = $db->conecta_mysql();

	//Resultado da Busca
	$resultado_id = mysqli_query($link, $sql);

	if ($resultado_id) {
		$dados_usuario = mysqli_fetch_array($resultado_id);
	
		if (isset($dados_usuario['name'])) {
			$_SESSION['id'] = $dados_usuario['id'];
			$_SESSION['name'] = $dados_usuario['name'];
			$_SESSION['login'] = $dados_usuario['login'];
			$_SESSION['password'] = $dados_usuario['password'];
			$_SESSION['number_phone'] = $dados_usuario['number_phone'];
			$_SESSION['email'] = $dados_usuario['email'];
			echo "Bem Vindo ".$_SESSION['name'];
		}else{
			echo "Usuário ou Senhas Inválidas";
		}
	}else{
		echo "Erro na Execução da Consulta";
	}
?>