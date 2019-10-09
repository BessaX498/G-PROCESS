<?php
	//Requerimento das Classes
	require_once('../../classes/db.php');
	
	//Variáveis de Sessão
	session_start();
	$id = $_SESSION['id'];
	
	//Ojeto de Busca
	$db = new db();
	$colunas = 'id_partner, name, login, number_phone, email';
	$tabela = ' user ';
	$condicao = "u join partner p on p.id_partner = u.id WHERE id_user = '$id' ORDER BY name";
	$resultado_id = $db->query($colunas, $tabela, $condicao);

	//Resultado da Busca
	if ($resultado_id) {
		echo "<ul data-role='listview' data-split-icon='delete' data-filter='true' data-split-theme='b' data-inset='true' class='ui-listview ui-listview-inset ui-corner-all ui-shadow'>";
		while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
			echo "<li class='ui-li-has-alt ui-li-has-thumb ui-first-child ui-last-child'>";
				echo "<a data-id_usuario=".$registro['id_partner']." href='#parceiro' class='ui-btn link_parceiro'>";
					echo "<img src='img/user.png'>";
					echo "<h2>".$registro['name']."</h2>";
					echo "<p>".$registro['email']."</p>";
					echo "<p>".$registro['number_phone']."</p>";
					echo "<a href='#solicitacao' data-id_partner=".$registro['id_partner']." data-position-to='window' aria-haspopup='true' aria-owns='solicitacao' aria-expanded='false' class='ui-btn ui-btn-icon-notext ui-icon-plus ui-btn-b '></a>";
				echo "</a>";
			echo "</li>";
		}
		echo "</ul>";
	}

?>
<script src="js/partner/perfil_partner.js"></script>

