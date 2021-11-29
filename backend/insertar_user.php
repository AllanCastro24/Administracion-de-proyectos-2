<?php 
    $usuario=$_POST['user'];
    $contraseña=$_POST['pass'];
    $email=$_POST['mail'];
    $estado='S';
    include('db.php');

    $consulta="INSERT INTO usuarios (Usuario,Contraseña,email,usuario_activo) VALUES ('$usuario','$contraseña','$email','$estado')";
    mysqli_query($conexion,$consulta);
    if ($conexion->query($consulta)===true){
        ?>
        <?php
            include("home.php");
            
        ?>
        <?php
        
    }else{
        die("Error al insertar al usuario" . $conexion->error);
    }
?>