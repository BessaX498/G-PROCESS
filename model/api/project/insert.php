<?php
	//Require das Classes
	require_once('../../classes/db.php');
	require_once('../../classes/project.php');
	//Valores do Form
	$name = $_POST['nome'];
	$method = $_POST['metodologia'];

	//Objetos
	$db = new db();
	$colunas = 'id_partner, name, method';
	$tabela = ' project ';
	$condicao = "";
	$project = new project($name, $method);
	$db->insert($project);

?>