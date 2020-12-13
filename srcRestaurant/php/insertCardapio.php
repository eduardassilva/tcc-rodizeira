<?php

    $dsn = 'mysql:host=localhost;dbname=rodizeira_bdd';
    $user = 'root';
    $pass = '';
    $success = 0;

    try{
        $conn = new PDO($dsn, $user, $pass);
        
        $resID = $_POST["resID"];
        $itemName = $_POST["name"];
        $itemDesc = $_POST["desc"];
        $itemTags = $_POST["tags"];
        
        if(empty($resID)){
            $resID = 0;
        }
        
        $insert = 'INSERT 
                    INTO cardapios (restaurant_id
                                  , nome
                                  , descricao
                                  , etiquetas
                                  , qtd_pedidos)
                  VALUES ('.$resID.'
                        , "'.$itemName.'"
                        , "'.$itemDesc.'"
                        , "'.$itemTags.'"
                        , 0)';
                    
        $conn->query($insert);
        
        $conn->close();
        
    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
    }