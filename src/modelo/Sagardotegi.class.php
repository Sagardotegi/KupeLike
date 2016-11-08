<?php


    class Sagardotegi {
        
        private $db;
        private $conexion;
        
        public function __construct()
        {
            require_once $_SERVER['DOCUMENT_ROOT']."/config/DBConnection.class.php";
            $this->db = new DBConnection();
            $this->conexion = $this->db->dbConnect();
        }
        
        public function listSagardotegiak()
        {
            $sql = "SELECT * FROM sagardotegi";
            $res = mysqli_query($this->conexion, $sql);
            
            while($row = $res->fetch_assoc()){
                $sagardotegis[] = $row;
            }
            
            /**
             * Devolvemos los datos de la consulta en formato JSON
             */ 
            $archivo_json = $_SERVER['DOCUMENT_ROOT']."/src/vista/sagardotegi/json/sagardotegiak.json";
            $json = json_encode($sagardotegis, JSON_PRETTY_PRINT);
            file_put_contents($archivo_json, $json);
            exit(0);
        }
        
    }