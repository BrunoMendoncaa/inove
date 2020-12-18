<?php
    session_start();
    sleep(2);
    include 'conexao.php';

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = $db->prepare("SELECT * FROM login WHERE usuario = :u AND senha = :s");

    $sql->bindValue(":u" , $user);
    $sql->bindValue(":s" , $pass);
    $sql->execute();

    if($sql->rowcount() > 0){
        $_SESSION['user'] = $user;

        $nRow = $sql->fetchAll();
        
        foreach($nRow as $row){
            $_SESSION['name'] = $row[1];
            $_SESSION['adm'] = $row[5];
        }

        header('location: ../principal/index.php');
    }else{
        $_SESSION['cadastro'] = 'errado';
        header('location: ../index.php');
    }
?>