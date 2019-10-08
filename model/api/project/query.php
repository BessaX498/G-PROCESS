<?php

	//Requerimento das Classes
	require_once('../../classes/db.php');
	
	//Variáveis de Sessão
	session_start();
	$id = $_SESSION['id'];
	//Ojeto de Busca
	$db = new db();
	$colunas = 'name, method';
	$tabela = ' project ';
	$condicao = "";
	$resultado_id = $db->query($colunas, $tabela, $condicao);
	//Resultado da Busca
	if ($resultado_id) {
		echo "<ul data-role='listview' data-filter='true' class='ui-listview'>";
		while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
			echo "<li class='ui-first-child'>";
				echo "<a href='#'' class='ui-btn ui-btn-icon-right ui-icon-carat-r'>".$registro['name']."</a>";
			echo "</li>";
		}
		echo "</ul>";
	}
?>