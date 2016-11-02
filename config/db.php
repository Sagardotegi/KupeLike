<?php

    /**
     * Clase de la conexión con la base de datos
     */
    class DBConnection {
        
        public function __construct()
        {
            $datos = $this->obtenerDatosJson();
            
            /**
             * Almacenamos los datos devueltos
             */
            $username = $datos["username"];
            $password = $datos["password"];
            $servername = $datos["servername"];
            $dbname = $datos["dbname"];
            
            /**
             * Conectamos a la base de datos
             */
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully"; 
            } catch(PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();
            }
        }
        
        private function obtenerDatosJson()
        {
            /**
             * Obtenemos los datos de acceso del archivo JSON
             */
            $archivo = "./config/config.json";
            $datos = file_get_contents($archivo);
            $objetos = json_decode($datos, true); // el parámetro 'true' hace que se almacene como array y no como objeto
            $datos_array = $objetos["db-connection"];
            
            return $datos_array;
        }
        
    }