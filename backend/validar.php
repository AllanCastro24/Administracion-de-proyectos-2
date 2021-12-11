<?php 
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contrasenya'];

    session_start();
    $_SESSION['usuario']=$usuario;

    include('db.php');

    $consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña' and usuario_activo='S'";
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){
        header("location:home.php?user=$usuario");
    }
    else{
        ?>
        <?php
            include("index.php");
        ?>
        <h1 class="error"> Error en la autenticación</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
