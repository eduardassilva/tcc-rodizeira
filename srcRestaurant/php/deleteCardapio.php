<?php

    $dsn = 'mysql:host=localhost;dbname=rodizeira_bdd';
    $user = 'root';
    $pass = '';
    $success = 0;

    try{
        $conn = new PDO($dsn, $user, $pass);
        
        $resID = $_POST["resID"];
        $itemName = $_POST["name"];
        
        if(empty($resID)){
            $resID = 0;
        }
        
        $delete = 'DELETE 
                     FROM cardapios
                    WHERE restaurant_id = '.$resID.'
                      AND nome = "'.$itemName.'"';
                    
        $conn->query($delete);
        
        $update = 'UPDATE pedidos
                      SET aberto = 0
                    WHERE restaurant_id = '.$resID.'
                      AND item_id IN (SELECT item_id
                                        FROM cardapios
                                       WHERE nome = "'.$itemName.'")';
                    
        $conn->query($update);
        
        $conn->close();
        
    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
    }