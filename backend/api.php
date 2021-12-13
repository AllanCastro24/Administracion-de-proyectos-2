<?php
    require_once('conexion_api.php');
    require_once('cors.php');
    require_once('controller.php');

    $methodHTTP = $_SERVER['REQUEST_METHOD'];

    switch ($methodHTTP){
        case 'GET':
            $ctl = new Controller();
            $data = $ctl->getIdiomas();
            echo json_encode(["idiomas"=>$data]);
            break;

        default:
            break;
    }
?>