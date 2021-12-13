<?php
    include('db.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM `diccionario` WHERE `diccionario`.`Id_diccionario` = $id";
    mysqli_query($conexion, $sql);
    mysqli_close($conexion);
    header("location:home.php");
?>