<?php

    $dsn = 'mysql:host=localhost;dbname=rodizeira_bdd';
    $user = 'root';
    $pass = '';
    $success = 0;

    try{
        $conn = new PDO($dsn, $user, $pass);
        
        $resID = $_POST["resID"];
        $rodName = $_POST["name"];
        
        if(empty($resID)){
            $resID = 0;
        }
        
        $delete = 'DELETE 
                     FROM rodizios
                    WHERE restaurant_id = '.$resID.'
                      AND nome_rodizio = "'.$rodName.'"';
                    
        $conn->query($delete);
        
        $conn->close();
        
    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
    }