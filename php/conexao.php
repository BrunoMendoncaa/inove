<?php
    try{
        $db = new PDO("mysql:dbname=inove;host=localhost","bruno.mendonca","theo2020");
    }catch(PDOException $erro){
        echo "Falha ao conectar banco de dados: " . $erro->getMessage();
    }
?>