<?php
	//Requerimento das Classes
	require_once('../../classes/db.php');
	
	//Variáveis de Sessão
	session_start();
	$id = $_POST['membro'];
	
	//Ojeto de Busca
	$db = new db();
	$colunas = 'id, name, login, number_phone, email';
	$tabela = ' user ';
	$condicao = "WHERE id = $id";
	$resultado_id = $db->query($colunas, $tabela, $condicao);

	if ($resultado_id) {
		echo "<ul data-role='listview' data-inset='true' class='ui-listview ui-listview-inset ui-corner-all ui-shadow'>";
		while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
			echo "<li class='ui-li-static ui-body-inherit ui-li-has-thumb ui-first-child ui-last-child'>";
				echo "<img src='../../img/user.png'>";
				echo "<h2>".$registro['name']."</h2>";
				echo "<p>Email: ".$registro['email']."</p>";
				echo "<p>Telefone: ".$registro['number_phone']."</p>";
			echo "</li>";
		}
		echo "</ul>";
	}
?>