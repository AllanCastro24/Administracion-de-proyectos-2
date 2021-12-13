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
    }
?>