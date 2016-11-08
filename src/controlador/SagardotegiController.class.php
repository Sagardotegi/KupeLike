<?php

    include_once $_SERVER['DOCUMENT_ROOT']."/src/modelo/Sagardotegi.class.php";

    /**
     * Controlador de la entidad Sagardotegi
     */
    
    class SagardotegiController {
        
        /**
         * Muestra la lista de todas las sagardotegis
         */ 
        public function index()
        {
            $sagardotegi = new Sagardotegi();
            return $sagardotegi->listSagardotegiak();
        }
        
    }