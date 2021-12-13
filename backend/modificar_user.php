<?php 
    $clave=$_POST['clave'];
    $usuario=$_POST['user'];
    $contraseña=$_POST['pass'];
    $email=$_POST['mail'];
    include('db.php');
    if($usuario != null && $contraseña != null && $email != null && $clave != null){
        $consulta="UPDATE usuarios SET Usuario = '$usuario', Contraseña = '$contraseña' , email = '$email' WHERE Id_usuario = $clave;";
        //mysqli_query($conexion,$consulta);
        if ($conexion->query($consulta)===true){
            ?>
            <?php
                
                header("location:abrir_usuarios.php?id=$clave&nombre=$usuario&pass=$contraseña&mail=$email");
            ?>
            <?php
            
        }else{
            die("Error al modificar al usuario" . $conexion->error);
        }
    }else{
        echo "<script>alert('Aun faltan datos por llenar');</script>";
        echo "<script>window.history.go(-1)</script>";
    }

    mysqli_close($conexion);
?>