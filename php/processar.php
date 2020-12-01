<?php
    include 'conexao.php';
    
    // Informações coletadas
    $nome =         $_POST['nome'];     // Nome
    $user =      $_POST['user'];  // Usuario
    $pass =        $_POST['pass'];    // Senha
    $setor =        $_POST['setor'];    // Setor
    //===============================

    include 'addUser.php';
?>

