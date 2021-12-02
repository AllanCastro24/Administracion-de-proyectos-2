<?php 
    $nombre=$_POST['nombre'];
    $estado='S';
    include('db.php');
    if($nombre != null){
        $consulta="INSERT INTO dialectos (Dialecto,mostrar) VALUES ('$nombre','$estado')";
        //mysqli_query($conexion,$consulta);
        if ($conexion->query($consulta)===true){
            ?>
            <?php
                
                header("location:home.php");
            ?>
            <?php
            
        }else{
            die("Error al insertar el dialecto" . $conexion->error);
        }
    }else{
        echo "<script>alert('Aun faltan datos por llenar');</script>";
        echo "<script>window.history.go(-1)</script>";
    }

    mysqli_close($conexion);
?>