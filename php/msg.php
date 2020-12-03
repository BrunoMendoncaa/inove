<?php
    session_start();
    if($_SESSION == NULL){
        header('location: ../index.php');
    }
?>

<?php
    include 'conexao.php';

    $_SESSION['msg'] = 'sim';
    sleep(3);
    header('location: ../principal/form.php');
?>