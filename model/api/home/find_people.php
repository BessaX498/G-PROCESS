<?php
	//Requerimento das Classes
	require_once('../../classes/db.php');
	include('../../../control/header.html');
	//Variáveis de Sessão
	session_start();
	$id = $_SESSION['id'];
	
	//Ojeto de Busca
	$db = new db();
	$colunas = 'name, email, number_phone';
	$tabela = ' user ';
	$condicao = "id <> '$id'";
	$resultado_id = $db->query($colunas, $tabela, $condicao);

	//Resultado da Busca
	if ($resultado_id) {
		
		echo "<ul data-role='listview' data-split-icon='user' data-filter='true' data-inset='true' class='ui-listview ui-listview-inset ui-corner-all ui-shadow'>";
		//echo "<form class='ui-filterable'><div class='ui-input-search ui-shadow-inset ui-input-has-clear ui-body-inherit ui-corner-all'><input data-type='search' placeholder='Procurar Pessoas...'><a href='#' tabindex='-1' aria-hidden='true' class='ui-input-clear ui-btn ui-icon-delete ui-btn-icon-notext ui-corner-all ui-input-clear-hidden' title='Clear text'>Clear text</a></div></form>";
		while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
				echo "<li class='ui-li-has-alt ui-li-has-thumb ui-first-child ui-last-child'>";
					echo "<a href='#perfil-membro' class='ui-btn'>";
						echo "<img src='../../img/user.png'>";
						echo "<h2>".$registro['name']."</h2>";
						echo "<p>".$registro['email']."</p>";
						echo "<p>".$registro['number_phone']."</p>";	
						echo "<a href='#purchase' data-rel='popup' data-position-to='window' data-transition='pop' aria-haspopup='true' aria-owns='purchase' aria-expanded='false' class='ui-btn ui-btn-icon-notext ui-icon-user' title='Purchase album'></a>";
					echo "<a>";
				echo "</li>";
			
		}
		echo "</ul>";
	}

?>