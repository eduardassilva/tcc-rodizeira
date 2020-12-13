<?php

    $dsn = 'mysql:host=localhost;dbname=rodizeira_bdd';
    $user = 'root';
    $pass = '';
    $success = 0;

    try{
        $conn = new PDO($dsn, $user, $pass);
        
        $loginInput = $_POST["login"];
        $passInput = $_POST["password"];
        
        if(empty($loginInput) or empty($passInput)){
            header('Location:/TCC-Rodizeira/srcRestaurant/pageLogin.html?msg=errorBlank');
        }
        else{
            $query = 'SELECT * 
                        FROM restaurant_login
                       WHERE login = "' .$loginInput. '"';
                    
            $query_result = $conn->query($query);
            $result = $query_result->fetch(PDO::FETCH_OBJ);
            
            if(empty($result)){
                header('Location:/TCC-Rodizeira/srcRestaurant/pageLogin.html?msg=errorLogin');
            }
            else{
                if($result->password == $passInput){
                    header('Location:/TCC-Rodizeira/srcRestaurant/pageRestaurant.php?msg='.$result->restaurant_id);
                    $success = 1;
                }
            }
            if($success == 0){
                header('Location:/TCC-Rodizeira/srcRestaurant/pageLogin.html?msg=errorLogin');
            }
        } 
        
        $conn->close();
        
    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
    }