<?php 
    $usuario=$_POST['user'];
    $contraseña=$_POST['pass'];
    $email=$_POST['mail'];
    $estado='S';
    include('db.php');
    if($usuario != null && $contraseña != null && $email != null){
        $consulta="INSERT INTO usuarios (Usuario,Contraseña,email,usuario_activo) VALUES ('$usuario','$contraseña','$email','$estado')";
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