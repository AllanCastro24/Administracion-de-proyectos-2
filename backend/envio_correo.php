<?php
    $nombre="Allan Castro";//$_GET['nombre'];
    $correo="acastro12303@outlook.com";//$_GET['email'];
    $mensaje="PRUEBA";//$_GET['mensaje'];

    $email= ""
        .$nombre." con correo ".$correo." te ha enviado un mensaje a través de la página de contacto
        El mensaje del usuario dice lo siguiente: 

        ".$mensaje."


        Diccionario - Traductor 2021
    ";

    $correoAdmin = "alan.castro.1226.ac@gmail.com";

    mail($correoAdmin, "Un usuario te envió mensaje!", $email);
        
?>