<?php


    class Kupela {
        
        private $db;
        private $conexion;
        
        public function __construct()
        {
            require_once $_SERVER['DOCUMENT_ROOT']."/config/DBConnection.class.php";
            $this->db = new DBConnection();
            $this->conexion = $this->db->dbConnect();
        }
        
        public function listKupelak($sagarId)
        {
            $sql = "SELECT * FROM kupela, sagardotegi WHERE kupela_id LIKE $sagarId";
            $res = mysqli_query($this->conexion, $sql);
            
            while($row = $res->fetch_assoc()){
                $sagardotegis[] = $row;
            }
            
            /**
             * Devolvemos los datos de la consulta en formato JSON
             */ 
            $archivo_json = $_SERVER['DOCUMENT_ROOT']."/src/vista/kupela/json/kupelak.json";
            $json = json_encode($sagardotegis, JSON_PRETTY_PRINT);
            file_put_contents($archivo_json, $json);
            exit(0);
        }
        
    }