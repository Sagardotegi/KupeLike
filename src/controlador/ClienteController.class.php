<?php

    require $_SERVER['DOCUMENT_ROOT']."/config/DBConnection.class.php";

    /**
     * Controlador de la entidad Kupela
     */
    
    class ClienteController {
        
        /**
         * Muestra la lista
         */ 
        public function index()
        {
            $db = new DBConnection();
            $sql = "SELECT * FROM cliente";
            
            $resultados = $db->query($sql);
            
            /**
             * Almacenamos los resultados en un array
             */
            while($row = $resultados->fetch_assoc()){
                $clientes[] = $row;
            }
            
            /**
             * Devolvemos los datos de la consulta en formato JSON
             */ 
            print json_encode($clientes);
        }
        
    }