<?php

    //Inicio da Sessao
    session_start();
    $id = $_SESSION['id'];

    //Requisicoes
    require_once("../../classes/db.php");
    $db = new db();

    //Formulário
    $name = $_POST['name'];
    $login = $_POST['login'];
    $password =  $_POST['password'];
    $number_phone = $_POST['number_phone'];
    $email = $_POST['email'];
    $id = 2;    
    //Parametros
    $edicao = "";
    $tabela = " user ";
    $condicao = " WHERE id = '$id'";
    //Condicional para ver se tem senha
    if($password == '' || $password == null){
        $edicao = " name = '$name', login = '$login', number_phone = '$number_phone', email = '$email' ";
    }else{
        $senha_mod = md5($password);
        $edicao = " name = '$name', login = '$login', password = '$senha_mod', number_phone = '$number_phone', email = '$email'";
    }

    //Resultado da Edicao
    if($db->update($edicao, $tabela, $condicao)){
        echo "Editado com sucesso";
    }else{
        echo "Editado com sucesso, Saia e Entre de novo para ver o Resultado!";
    }

?>