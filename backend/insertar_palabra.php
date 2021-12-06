<?php 
    $id=$_POST['combo'];
    $palabra=$_POST['palabra'];
    $traduccion=$_POST['traduccion'];
    include('db.php');
    if($id != null && $palabra != null && $traduccion != null){
        $consulta="INSERT INTO diccionario (Id_dialecto,Palabra,Traduccion) VALUES ('$id','$palabra','$traduccion')";
        //mysqli_query($conexion,$consulta);
        if ($conexion->query($consulta)===true){
            ?>
            <?php
                
                header("location:home.php");
            ?>
            <?php
            
        }else{
            die("Error al insertar al usuario" . $conexion->error);
        }
    }else{
        echo "<script>alert('Aun faltan datos por llenar');</script>";
        echo "<script>window.history.go(-1)</script>";
    }

    mysqli_close($conexion);
?>