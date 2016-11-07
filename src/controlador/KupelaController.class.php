<?php

    require $_SERVER['DOCUMENT_ROOT']."/config/DBConnection.class.php";

    /**
     * Controlador de la entidad Kupela
     */
    
    class KupelaController {
        
        /**
         * Muestra la lista
         */ 
        public function index()
        {
            $db = new DBConnection();
            $sql = "SELECT * FROM kupela";
            
            $resultados = $db->query($sql);
            
            /**
             * Almacenamos los resultados en un array
             */
            while($row = $resultados->fetch_assoc()){
                $kupelas[] = $row;
            }
            
            /**
             * Devolvemos los datos de la consulta en formato JSON
             */
            $file = "json/kupelak.json";
            $json = json_encode($kupelas, JSON_PRETTY_PRINT);
            file_put_contents($file, $json);
        }
        
        /**
         * Muestra la página estática del elemento pasado por 'id'
         */
        public function show($id)
        {
            $db = new DBConnection();
            $sql = "SELECT * FROM kupela WHERE kupela_id = $id";
            
            $resultado = $db->query($sql);
            
            while($row = $resultado->fetch_assoc()){
                $kupela[] = $row;
            }
            
            header('application/json');
            echo json_encode($kupela);
        }
        
    }