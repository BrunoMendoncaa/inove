<?php
    session_start();    // Iniciar Sessão.
    include 'conexao.php';  // Conexão com o banco de dados.


    $user = $_POST['user']; // Atribuir valor de usuario a variavel user.
    $pass = $_POST['pass']; // Atribuir valor de senha a variavel pass.

    // Verificar se o usuario já esta cadastrado.
    $sql = $db->prepare("SELECT * FROM login WHERE usuario = :u AND senha = :s");
    $sql->bindValue(":u" , $user);
    $sql->bindValue(":s" , md5($pass));
    $sql->execute();

    $resultado = $sql->fetchAll();
    foreach($resultado as $row){
        $_SESSION['nome'] = $row[1];
        $_SESSION['adm'] = $row[5];
    }

    if($sql->rowcount() > 0){
        // Logado com sucesso.
        $_SESSION['user'] = $user;
        $_SESSION['msg'] = 'nao';

        header('location: ../principal/index.php');
        

        sleep(2);
    }else{
        // Usuario e/ou senha invalidos.
        $_SESSION['cadastro'] = 'errado';
        sleep(2);
        header('location: ../index.php');
    }


?>