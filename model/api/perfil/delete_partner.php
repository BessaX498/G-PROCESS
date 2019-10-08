<?php

    //Variáveis de Sessão
	session_start();
    $id = $_SESSION['id'];

    //Id do nosso parceiro
    $id_parceiro = $_POST['parceiro'];
    
    //Requerimento das Classes
    require_once('../../classes/db.php');
    $db = new db();

    //Busca do ID das parceirias
    $colunas = " * ";
    $tabela = " partner ";
    $condicao = " WHERE id_user = $id AND id_partner = $id_parceiro";
    $resultado_id = $db->query($colunas, $tabela, $condicao);
    $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
    
    //Inicio da Delecao
    $tabela_del = 'partner';
    $condicao_del = "WHERE id = ".$registro['id'];
    $db->delete($tabela_del, $condicao_del);
    
?>