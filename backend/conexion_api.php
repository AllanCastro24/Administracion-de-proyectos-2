<?php 
    class Conexion {
        public function getConexion(){
            try {
                $host="localhost";
                $db="diccionario";
                $user="root";
                $password="";
                $db= new PDO("mysql:host=$host;dbname=$db",$user, $password);
                return $db;

            }catch(PDOExeption $e){

                echo "Error: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }
?>