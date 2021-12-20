<?php 
    class Controller {
        public function getIdiomas(){
            try{
                $list = array();
                $conexion = new Conexion();
                $db = $conexion->getConexion();
                $sql = "SELECT * from dialectos WHERE mostrar = 'S'";
                $query = $db->prepare($sql);
                $query->execute();

                while($row = $query->fetch()){
                    $list[] = array(
                        "id" => $row['Id_dialecto'],
                        "dialecto"=> $row['Dialecto'],
                        "mostrar"=> $row['mostrar']);
                }

                return $list;
            }catch(PDOExeption $e){
                echo "Error: " . $e->getMessage() . "<br/>";
            }
        }

        public function getDiccionario(){
            try{
                $list = array();
                $conexion = new Conexion();
                $db = $conexion->getConexion();
                $sql = "SELECT * FROM `diccionario` LEFT JOIN dialectos ON diccionario.Id_dialecto = dialectos.Id_dialecto WHERE dialectos.mostrar = 'S';";
                $query = $db->prepare($sql);
                $query->execute();

                while($row = $query->fetch()){
                    $list[] = array(
                        "id" => $row['Id_diccionario'],
                        "traduccion"=> $row['Traduccion'],
                        "palabra"=> $row['Palabra'],
                        "id_dialecto"=> $row['Id_dialecto'],
                        "dialecto"=> $row['Dialecto']);
                }

                return $list;
            }catch(PDOExeption $e){
                echo "Error: " . $e->getMessage() . "<br/>";
            }
        }

        public function getTraduccion($searchKey){
            try{
                $list = array();
                $conexion = new Conexion();
                $db = $conexion->getConexion();
                $sql = "SELECT * FROM `diccionario` LEFT JOIN dialectos ON diccionario.Id_dialecto = dialectos.Id_dialecto WHERE dialectos.mostrar = 'S' AND Palabra LIKE '%$searchKey%';";
                $query = $db->prepare($sql);
                $query->execute();

                while($row = $query->fetch()){
                    $list[] = array(
                        "traduccion"=> $row['Traduccion'],
                        "palabra"=> $row['Palabra'],
                        "dialecto"=> $row['Dialecto']);
                }

                return $list;
            }catch(PDOExeption $e){
                echo "Error: " . $e->getMessage() . "<br/>";
            }
        }
    }
?>