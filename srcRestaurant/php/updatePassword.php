<?php

    $dsn = 'mysql:host=localhost;dbname=rodizeira_bdd';
    $user = 'root';
    $pass = '';
    $success = 0;

    try{
        $conn = new PDO($dsn, $user, $pass);
        
        $resID = $_POST["resID"];
        $newPass = $_POST["newPass"];
        
        if(empty($resID)){
            $resID = 0;
        }
        
        $update = 'UPDATE restaurant_login 
                      SET password = "'.$newPass.'"
                    WHERE restaurant_id = '.$resID;
                    
        $conn->query($update);
        
        $conn->close();
        
    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
    }