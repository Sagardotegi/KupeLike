<?php

    /**
     * Clase de la conexión con la base de datos
     */
    class DBConnection {
        
        public function dbConnect()
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
            $conexion = mysqli_connect($servername, $username, $password, $dbname);
            
            /**
             * Si no se conecta a la base de datos lanza un error
             */
            if(!$conexion){
                echo "Error al conectar con la base de datos" . PHP_EOL;
            }
            
            return $conexion;
        }
        
        public function query($sql)
        {
            /**
             * Hace una query a la base de datos
             */
            $conexion = $this->dbConnect();
            return mysqli_query($conexion, $sql);
        }
        
        private function obtenerDatosJson()
        {
            /**
             * Obtenemos los datos de acceso del archivo JSON
             */
            $archivo = __DIR__."/config.json";
            $datos = file_get_contents($archivo);
            $objetos = json_decode($datos, true); // el parámetro 'true' hace que se almacene como array y no como objeto
            $datos_array = $objetos["db-connection"];
            
            return $datos_array;
        }
        
    }