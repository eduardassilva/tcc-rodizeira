<?php

    $dsn = 'mysql:host=localhost;dbname=rodizeira_bdd';
    $user = 'root';
    $pass = '';
    $success = 0;

    try{
        $conn = new PDO($dsn, $user, $pass);
        
        $resID = $_POST["resID"];
        $newName = $_POST["newName"];
        $newTelefone = $_POST["newTelefone"];
        $newEmail = $_POST["newEmail"];
        $newCep = $_POST["newCep"];
        $newEstado = $_POST["newEstado"];
        $newCidade = $_POST["newCidade"];
        $newEndereco = $_POST["newEndereco"];
        
        if(empty($resID)){
            $resID = 0;
        }
        
        $update = 'UPDATE restaurant_info
                      SET nome = "'.$newName.'"
                        , telefone = "'.$newTelefone.'"
                        , email = "'.$newEmail.'"
                        , cep = "'.$newCep.'"
                        , estado = "'.$newEstado.'"
                        , cidade = "'.$newCidade.'"
                        , endereco = "'.$newEndereco.'"
                    WHERE restaurant_id = '.$resID;
                    
        $conn->query($update);
        
        $conn->close();
        
    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
    }