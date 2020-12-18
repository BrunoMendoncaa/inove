<?php
    session_start();
    sleep(2);
    include 'conexao.php';

    $nome   = $_GET['nome'];
    $user   = $_GET['user'];
    $pass   = $_GET['pass'];
    $setor  = $_GET['setor'];
    $adm = "n";

    $sql = $db->prepare("SELECT * FROM login WHERE usuario = :u");
    $sql->bindValue(":u" , $user);
    $sql->execute();

    if($sql->rowCount() > 0){
        $_SESSION['cadastro'] = 'invalido';
        header('location: ../index.php');
    }else{
        $sql = $db->prepare("INSERT INTO login (nome,usuario,senha,setor,adm) VALUES(:n,:u,:s,:ss,:a)");
        
        $sql->bindValue(":n",$nome);
        $sql->bindValue(":u",$user);
        $sql->bindValue(":s",$pass);
        $sql->bindValue(":ss",$setor);
        $sql->bindValue(":a",$adm);
        
        $sql->execute();

        $_SESSION['cadastro'] = 'sucesso';
        header('location: ../index.php');
    }

?>