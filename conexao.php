<?php   // Conexão ao banco de dados 
    
    try{
        $db = new PDO("mysql:dbname=inove;host=localhost","root","");
    }catch(PDOException $e){
        echo "Erro: " . $e->getMessage();
    }
?>