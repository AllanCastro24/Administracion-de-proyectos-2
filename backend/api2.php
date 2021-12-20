<?php
    require_once('conexion_api.php');
    require_once('cors.php');
    require_once('controller.php');

    $methodHTTP = $_SERVER['REQUEST_METHOD'];

    switch ($methodHTTP){
        case 'GET':
            $ctl = new Controller();
            $data = $ctl->getDiccionario();
            echo json_encode(["Traduccion"=>$data]);
            break;

        default:
            break;
    }
?>