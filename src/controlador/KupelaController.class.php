<?php

    include_once $_SERVER['DOCUMENT_ROOT']."/src/modelo/Kupela.class.php";

    /**
     * Controlador de la entidad Kupela
     */
    
    class KupelaController {
        
        /**
         * Muestra la lista
         */ 
        public function index($sagarId)
        {
            $url = $_SERVER['REQUEST_URI'];
            var_dump($url);
            $kupela = new Kupela();
            $kupela->listKupelak($sagarId);
        }
        
    }