<?php
    include('db.php');
    $id = $_GET['id'];
    
    $sql = "UPDATE usuarios SET usuario_activo='N' WHERE Id_usuario = '$id';";

    
    mysqli_query($conexion, $sql);
    mysqli_close($conexion);
    header("location:home.php");
?>