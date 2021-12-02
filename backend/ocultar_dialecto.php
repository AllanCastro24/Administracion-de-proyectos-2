<?php
    include('db.php');
    $id = $_GET['id'];
    $sql = "UPDATE dialectos SET mostrar='N' WHERE Id_dialecto = '$id';";
    mysqli_query($conexion, $sql);
    mysqli_close($conexion);
    header("location:home.php");
?>