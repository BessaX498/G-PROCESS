<?php
	//Requerimento das Classes
	require_once('../../classes/db.php');
	
	//Variáveis de Sessão
	session_start();
	$id = $_SESSION['id'];
	
	//Ojeto de Busca
	$db = new db();
	$colunas = 'id, name, email, number_phone';
	$tabela = ' user ';
	$condicao = " where id != $id and id not in(select id_partner from user u join partner p on p.id_user = $id)";
	$resultado_id = $db->query($colunas, $tabela, $condicao);

	//Resultado da Busca
	if ($resultado_id) {
		echo "<ul data-role='listview' data-split-icon='user' data-filter='true' data-split-theme='b' data-inset='true' class='ui-listview ui-listview-inset ui-corner-all ui-shadow'>";
		while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
			echo "<li class='ui-li-has-alt ui-li-has-thumb ui-first-child ui-last-child'>";
				echo "<a href='#perfil-membro' data-id_membro=".$registro['id']." class='ui-btn link_membro lista_membros'>";
					echo "<img src='img/user.png'>";
					echo "<h2>".$registro['name']."</h2>";
					echo "<p>".$registro['email']."</p>";
					echo "<p>".$registro['number_phone']."</p>";
					echo "<a href='#solicitacao' data-id_usuario=".$registro['id']." data-position-to='window' aria-haspopup='true' aria-owns='solicitacao' aria-expanded='false' class='ui-btn ui-btn-icon-notext ui-icon-plus ui-btn-b btn_parceiro'></a>";
				echo "</a>";
			echo "</li>";
		}
		echo "</ul>";
	}

?>
<script type="text/javascript" src="js/home/add_partner.js"></script>
<script src="js/member/perfil_member.js"></script>
