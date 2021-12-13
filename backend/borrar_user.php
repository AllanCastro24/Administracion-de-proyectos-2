<?php
    include('db.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM `usuarios` WHERE `usuarios`.`Id_usuario` = $id;";
    mysqli_query($conexion, $sql);
    mysqli_close($conexion);
    header("location:home.php");
?>