<?php

    function fillRestaurantInfo(){
        
        $dsn = 'mysql:host=localhost;dbname=rodizeira_bdd';
        $user = 'root';
        $pass = '';
    
        $conn = new PDO($dsn, $user, $pass);
        
        $resID = $_GET["msg"];
        
        try{
            if(empty($resID)){
                $resID = 0;
            }

            $query = 'SELECT * 
                        FROM restaurant_info
                       WHERE restaurant_id = '.$resID;
                    
            $query_result = $conn->query($query);
            $result_list = $query_result->fetchAll(PDO::FETCH_OBJ);
            
            foreach($result_list as $key => $value){
                echo '<script> SetRestaurantInfo("'.$value->nome.'", "'.$value->logo.'", "'.$value->telefone.'", "'.$value->email.'", "'.$value->cep.'", "'.$value->estado.'", "'.$value->cidade.'", "'.$value->endereco.'"); </script>';
            }
            
        }catch(PDOException $e){
            echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
        }
    }

    function fillCardapio(){
        
        $dsn = 'mysql:host=localhost;dbname=rodizeira_bdd';
        $user = 'root';
        $pass = '';
    
        $conn = new PDO($dsn, $user, $pass);
        
        $resID = $_GET["msg"];
        
        try{
            if(empty($resID)){
                $resID = 0;
            }

            $query = 'SELECT * 
                        FROM cardapios
                       WHERE restaurant_id = '.$resID;
                    
            $query_result = $conn->query($query);
            $result_list = $query_result->fetchAll(PDO::FETCH_OBJ);
            
            foreach($result_list as $key => $value){
                echo '<script> CreateDivItemCardapio("'.$value->nome.'", "'.$value->descricao.'", "'.$value->etiquetas.'"); </script>';
            }
            
        }catch(PDOException $e){
            echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
        }
    }
    
    function fillRodizio(){
        
        $dsn = 'mysql:host=localhost;dbname=rodizeira_bdd';
        $user = 'root';
        $pass = '';
    
        $conn = new PDO($dsn, $user, $pass);
        
        $resID = $_GET["msg"];
        
        try{
            if(empty($resID)){
                $resID = 0;
            }

            $query = 'SELECT * 
                        FROM rodizios
                       WHERE restaurant_id = '.$resID;
                    
            $query_result = $conn->query($query);
            $result_list = $query_result->fetchAll(PDO::FETCH_OBJ);
            
            foreach($result_list as $key => $value){
                echo '<script> CreateDivRodizio("'.$value->nome_rodizio.'", "'.$value->preco_rodizio.'", "'.$value->descricao_rodizio.'", "'.$value->etiquetas_rodizio.'"); </script>';
            }
            
        }catch(PDOException $e){
            echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
        }
    }
    
    function fillEtiquetas(){
        
        $dsn = 'mysql:host=localhost;dbname=rodizeira_bdd';
        $user = 'root';
        $pass = '';
    
        $conn = new PDO($dsn, $user, $pass);
        
        $resID = $_GET["msg"];
        
        try{
            if(empty($resID)){
                $resID = 0;
            }

            $query = 'SELECT * 
                        FROM etiquetas
                       WHERE restaurant_id = '.$resID;
                    
            $query_result = $conn->query($query);
            $result_list = $query_result->fetchAll(PDO::FETCH_OBJ);
            
            foreach($result_list as $key => $value){
                echo '<script> CreateTag("'.$value->nome_etiqueta.'"); </script>';
            }
            
        }catch(PDOException $e){
            echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
        }
    }
?>