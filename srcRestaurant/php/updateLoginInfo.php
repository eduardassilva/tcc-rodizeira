<?php

    $dsn = 'mysql:host=localhost;dbname=rodizeira_bdd';
    $user = 'root';
    $pass = '';
    $success = 0;

    try{
        $conn = new PDO($dsn, $user, $pass);
        
        $resID = $_POST["resID"];
        $newUser = $_POST["newUser"];
        $passUser = $_POST["passUser"];
        $oldPass = $_POST["oldPass"];
        $newPass = $_POST["newPass"];
        
        if(empty($resID)){
            $resID = 0;
        }
        
        //Atualização do Username
        if(empty($oldPass)){
            
            $query = 'SELECT * 
                        FROM restaurant_login
                       WHERE restaurant_id = '.$resID;
                    
            $query_result = $conn->query($query);
            $result = $query_result->fetch(PDO::FETCH_OBJ);
            
            if($result->password == $passUser){
                $update = 'UPDATE restaurant_login 
                              SET login = "'.$newUser.'"
                            WHERE restaurant_id = '.$resID;
                    
                $conn->query($update);
            }
            else{
                //Erro senha errada
            }
        }
        
        //Atualização da Senha
        if(empty($newUser)){
            
            $query = 'SELECT * 
                        FROM restaurant_login
                       WHERE restaurant_id = '.$resID;
                    
            $query_result = $conn->query($query);
            $result = $query_result->fetch(PDO::FETCH_OBJ);
            
            if($result->password == $oldPass){
                $update = 'UPDATE restaurant_login 
                              SET password = "'.$newPass.'"
                            WHERE restaurant_id = '.$resID;
                    
                $conn->query($update);
            }
            else{
                //Erro senha errada
            }
        }
        
        $conn->close();
        
    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
    }