<?php

    //creación de post
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, Content-Type");
    require 'conexion.php';
    // $post = json_decode(file_get_contents("php://input"));

    $usuario=$_POST['iduser'];
    $title=$_POST['title'];
    $post=$_POST['post'];
    $message=[];

        //crea el post en la db
        $insert='INSERT INTO post set title="'.$title.'",content="'.$post.'",userid="'.$usuario.'"';
        $response=$connector->query($insert);
        $message['message']='El usuario ha sido creado';
    echo json_encode($message);

?>