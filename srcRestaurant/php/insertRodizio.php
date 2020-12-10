<?php

    $dsn = 'mysql:host=localhost;dbname=rodizeira_bdd';
    $user = 'root';
    $pass = '';
    $success = 0;

    try{
        $conn = new PDO($dsn, $user, $pass);
        
        $resID = $_POST["resID"];
        $rodName = $_POST["name"];
        $rodPrice = floatval($_POST["price"]);
        $rodDesc = $_POST["desc"];
        $rodTags = $_POST["tags"];
        
        if(empty($resID)){
            $resID = 0;
        }
        
        $insert = 'INSERT 
                    INTO rodizios (restaurant_id
                                 , nome_rodizio
                                 , preco_rodizio
                                 , descricao_rodizio
                                 , etiquetas_rodizio
                                 , qtd_pedidos)
                  VALUES ('.$resID.' 
                        , "'.$rodName.'"
                        , '.$rodPrice.'
                        , "'.$rodDesc.'"
                        , "'.$rodTags.'"
                        , 0)';
                    
        $conn->query($insert);
        
        $conn->close();
        
    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
    }