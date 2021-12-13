<?php 
    $clave=$_POST['clave'];
    $palabra=$_POST['palabra'];
    $traduccion=$_POST['traduccion'];
    
    include('db.php');
    if($clave != null && $palabra != null && $traduccion != null){
        $consulta="UPDATE `diccionario` SET `Palabra` = '$palabra', `Traduccion` = '$traduccion' WHERE `diccionario`.`Id_diccionario` = $clave;";
        
        if ($conexion->query($consulta)===true){
            ?>
            <?php
                
                header("location:home.php");
            ?>
            <?php
            
        }else{
            die("Error al modificar palabra" . $conexion->error);
        }
    }else{
        echo "<script>alert('Aun faltan datos por llenar');</script>";
        echo "<script>window.history.go(-1)</script>";
    }

    mysqli_close($conexion);
?>