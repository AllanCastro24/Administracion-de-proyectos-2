<?php
    include('db.php');
    $id = $_GET['id'];
    $palabra = $_POST['palabra'];
    $traduccion = $_POST['traduccion'];
    if($id != null && $palabra != null && $traduccion != null){
        $sql = "INSERT INTO diccionario (Id_dialecto,Palabra,Traduccion) VALUES ('$id','$palabra','$traduccion')";
        mysqli_query($conexion, $sql);
        mysqli_close($conexion);
        header("location:home.php");
    }else{
        echo "<script>alert('Aun faltan datos por llenar');</script>";
        echo "<script>window.history.go(-1)</script>";
    }
?>