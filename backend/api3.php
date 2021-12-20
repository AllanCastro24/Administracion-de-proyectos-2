<?php
    require_once('conexion_api.php');
    require_once('cors.php');
    require_once('controller.php');

    $methodHTTP = $_SERVER['REQUEST_METHOD'];
    $palabra = $_GET['word']; //La palabra llega con la URL a la api
    if($palabra == null){
        return;
    }
    switch ($methodHTTP){
        case 'GET':
            $ctl = new Controller();
            $data = $ctl->getTraduccion($palabra);
            echo json_encode(["Traduccion"=>$data]);
            break;

        default:
            break;
    }
?>