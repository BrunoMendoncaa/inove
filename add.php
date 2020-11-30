<?php
    include 'conexao.php';

    // Informações coletadas
    
    $nome = 'Bruno mendonca';
    $user = $_POST['user'];
    $pass = $_POST['senha'];
    $setor = $_POST['setor'];

    //===============================
    
    // Inclusão no banco de dados

    include 'addUser.php'; // Adicionar Usuario.
    
    //===============================

?>

