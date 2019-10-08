<?php
	//Require das Classes
	require_once('../../classes/db.php');
	require_once('../../classes/project.php');
	//Valores do Form
	$name = $_POST['nome'];
	$method = $_POST['metodologia'];

	//Objetos
	$db = new db();
	$project = new project($name, $method);
	$db->insert($project);

?>