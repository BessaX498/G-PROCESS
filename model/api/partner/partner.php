<?php
    //Requerimento das Classes
	require_once('../../classes/db.php');
	
	//Variáveis de Sessão
	session_start();
	$id = $_POST['parceiro'];
	
	//Ojeto de Busca
	$db = new db();
	$colunas = 'id, name, login, number_phone, email';
	$tabela = ' user ';
	$condicao = "WHERE id = $id";
    $resultado_id = $db->query($colunas, $tabela, $condicao);
    
    $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);

    echo '<ul data-role="listview" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">
        <li class="ui-li-has-thumb ui-first-child ui-last-child"><a href="#" class="ui-btn ">
        <img src="img/user.png">
        <h2>'.$registro['name'].'</h2>
        <p>Email:'.$registro['email'].'</p>
        <p>Telefone:'.$registro['number_phone'].'</p>
        </a>
        </li>
    </ul>';


?>