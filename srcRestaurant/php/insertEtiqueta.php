<?php

    $dsn = 'mysql:host=localhost;dbname=rodizeira_bdd';
    $user = 'root';
    $pass = '';
    $success = 0;

    try{
        $conn = new PDO($dsn, $user, $pass);
        
        $resID = $_POST["resID"];
        $tagName = $_POST["name"];
        
        if(empty($resID)){
            $resID = 0;
        }
        
        $insert = 'INSERT 
                    INTO etiquetas (restaurant_id
                                  , nome_etiqueta)
                  VALUES ('.$resID.'
                        , "'.$tagName.'")';
                    
        $conn->query($insert);
        
        $conn->close();
        
    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
    }