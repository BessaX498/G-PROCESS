<?php

    //Variáveis de Sessão
	session_start();
    $id = $_SESSION['id'];

    //Id do nosso parceiro
    $id_parceiro = $_POST['parceiro'];
    
    //Requerimento das Classes
    require_once('../../classes/db.php');
    require_once('../../classes/partner.php');
    $db = new db();
    $partner = new partner($id, $id_parceiro);

    $db->insert($partner);


?>