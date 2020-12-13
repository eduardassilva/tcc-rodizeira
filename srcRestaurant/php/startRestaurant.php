<?php
    
    function fillInicio(){
        
        $dsn = 'mysql:host=localhost;dbname=rodizeira_bdd';
        $user = 'root';
        $pass = '';
    
        $conn = new PDO($dsn, $user, $pass);
        
        $resID = $_GET["msg"];
        
        try{
            if(empty($resID)){
                $resID = 0;
            }

            $query = 'SELECT c.nome AS name, COUNT(p.pedido_id) AS n_pedidos
                        FROM pedidos   p
                           , cardapios c
                       WHERE p.item_id = c.item_id
                         AND p.restaurant_id = '.$resID.'
                         AND p.data_pedido > DATE_SUB(CURDATE(), INTERVAL 1 WEEK)
                    GROUP BY p.item_id
                    ORDER BY n_pedidos DESC
                       LIMIT 10';
                    
            $query_result = $conn->query($query);
            $result_list = $query_result->fetchAll(PDO::FETCH_OBJ);
            
            foreach($result_list as $key => $value){
                echo '<script> CreateMaisPedidos("'.$value->name.'", "'.$value->n_pedidos.'", "semana"); </script>';
            }
            
            $query = 'SELECT c.nome AS name, COUNT(p.pedido_id) AS n_pedidos
                        FROM pedidos   p
                           , cardapios c
                       WHERE p.item_id = c.item_id
                         AND p.restaurant_id = '.$resID.'
                         AND p.data_pedido > DATE_SUB(CURDATE(), INTERVAL 1 MONTH)
                    GROUP BY p.item_id
                    ORDER BY n_pedidos DESC
                       LIMIT 10';
                    
            $query_result = $conn->query($query);
            $result_list = $query_result->fetchAll(PDO::FETCH_OBJ);
            
            foreach($result_list as $key => $value){
                echo '<script> CreateMaisPedidos("'.$value->name.'", "'.$value->n_pedidos.'", "mes"); </script>';
            }
            
            $query = 'SELECT c.nome AS name, COUNT(p.pedido_id) AS n_pedidos
                        FROM pedidos   p
                           , cardapios c
                       WHERE p.item_id = c.item_id
                         AND p.restaurant_id = '.$resID.'
                         AND p.data_pedido > DATE_SUB(CURDATE(), INTERVAL 6 MONTH)
                    GROUP BY p.item_id
                    ORDER BY n_pedidos DESC
                       LIMIT 10';
                    
            $query_result = $conn->query($query);
            $result_list = $query_result->fetchAll(PDO::FETCH_OBJ);
            
            foreach($result_list as $key => $value){
                echo '<script> CreateMaisPedidos("'.$value->name.'", "'.$value->n_pedidos.'", "semestre"); </script>';
            }
            
        }catch(PDOException $e){
            echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
        }
    }

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
    
    function fillPedidos(){
        
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
                        FROM pedidos
                       WHERE restaurant_id = '.$resID.'
                         AND aberto = 1';
                    
            $query_result = $conn->query($query);
            $result_list = $query_result->fetchAll(PDO::FETCH_OBJ);
            
            foreach($result_list as $key => $value){
                $query_name = 'SELECT * 
                                 FROM cardapios
                                WHERE item_id = '.$value->item_id;
                               
                $query_result_name = $conn->query($query_name);
                $itemName = $query_result_name->fetch(PDO::FETCH_OBJ);
                
                echo '<script> CreatePedido("'.$itemName->nome.'"); </script>';
            }
        }catch(PDOException $e){
            echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
        }
    }
?>