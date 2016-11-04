<?php

    require "../../../config/DBConnection.class.php";
    require "../../entidad/Sagardotegi.class.php";

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
            print json_encode($sagardotegis);
        }
        
    }