<?php

    //creación de post
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, Content-Type");
    require 'conexion.php';
    $post = json_decode(file_get_contents("php://input"));

    $usuario=$post->iduser;
    $title=$post->title;
    $post=$post->content;
    $message=[];$res=[];

        //crea el post en la db
        $insert='INSERT INTO post set title="'.$title.'",content="'.$post.'",userid="'.$usuario.'"';
        $response=$connector->query($insert);
        $res['message']='El post ha sido creado';
        $message[]=$res;
    echo json_encode($message);

?>
