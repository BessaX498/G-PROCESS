<?php
	//Inclusão das Classes
	include('../../classes/user.php');
	include('../../classes/db.php');
	//Variáveis
	$name = $_POST['name'];
	$login = $_POST['login'];
	$password = md5($_POST['password']);
	$number_phone = $_POST['number_phone'];
	$email = $_POST['email'];
	$nome_existe = true;
	$login_existe = true;
	$numero_existe = true;
	$email_existe = true;

	
	//Objetos
	$user = new user($name, $login, $password, $number_phone, $email);
	$db = new db();
	$link = $db->conecta_mysql();
	//Verificar se o Nome já existe
	$sql = "SELECT * from user Where name = '$name'";
	if ($resultado_id = mysqli_query($link, $sql)) {
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if (isset($dados_usuario['name'])) {
			echo "Nome de Usuário Já Existe -";
		}else{
			$nome_existe = false;
		}
	}else{
		echo "Erro ao se Comunicar com o banco";
	}

	//Verificar se o Login já existe
	$sql = "SELECT * from user Where login = '$login'";
	if ($resultado_id = mysqli_query($link, $sql)) {
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if (isset($dados_usuario['login'])) {
			echo "- Login de Usuário Já Existe -";
		}else{
			$login_existe = false;
		}
	}else{
		echo "Erro ao se Comunicar com o banco";
	}
	//Verificar se o Número de Telefone já existe
	$sql = "SELECT * from user Where number_phone = $number_phone";
	if ($resultado_id = mysqli_query($link, $sql)) {
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if (isset($dados_usuario['number_phone'])) {
			echo "- Número de Usuário Já Existe -";
		}else{
			$numero_existe = false;
		}
	}else{
		echo "Erro ao se Comunicar com o banco";
	}
	//Verificar se o Email já existe
	$sql = "SELECT * from user Where email = '$email'";
	if ($resultado_id = mysqli_query($link, $sql)) {
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if (isset($dados_usuario['email'])) {
			echo "- Email de Usuário Já Existe -";
		}else{
			$email_existe = false;
		}
	}else{
		echo "Erro ao se Comunicar com o banco";
	}
	
	if ($nome_existe || $login_existe || $numero_existe || $email_existe) {
		echo "Não pode se Cadastrar";
	}else{
		$db->insert($user);
	}
?>
