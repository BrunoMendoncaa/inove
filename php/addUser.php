<?php //Verificar se usuario já existe no banco de dados.
    session_start();

    $sql = $db->prepare("SELECT * FROM login WHERE usuario = :u");
    $sql->bindValue(":u" , $user);
    $sql->execute();

    if($sql->rowcount() > 0){
        $_SESSION['cadastro'] = 'invalido';

        header('location: ../index.php');
    }else{ //Adicionar usuario
        $sql = $db->prepare("INSERT INTO login (nome,usuario,senha,setor,adm) VALUES(:n,:u,:s,:st,0)");
        $sql->bindValue(":n"    ,  $nome);
        $sql->bindValue(":u"    ,  $user);
        $sql->bindValue(":s"    , md5($pass));
        $sql->bindValue(":st"   , $setor);
        $sql->execute();

        $_SESSION['cadastro'] = 'sucesso';
        header('location: ../index.php');
    }
?>
