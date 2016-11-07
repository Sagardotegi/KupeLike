<?php

    /**
     * Controlador de la entidad Sagardotegi
     */
    
    class SagardotegiController {
        
        /**
         * Muestra la lista de todas las sagardotegis
         */ 
        public function index()
        {
            $db = new DBConnection();
            $sql = "SELECT * FROM sagardotegi";
            
            $resultados = $db->query($sql);
            
            /**
             * Almacenamos los resultados en un array
             */
            while($row = $resultados->fetch_assoc()){
                $sagardotegis[] = $row;
            }
            
            /**
             * Devolvemos los datos de la consulta en formato JSON
             */ 
            $archivo_json = $_SERVER['DOCUMENT_ROOT']."/src/vista/sagardotegi/json/sagardotegiak.json";
            $json = json_encode($sagardotegis, JSON_PRETTY_PRINT);
            file_put_contents($archivo_json, $json);
        }
        
    }