<?php

    //listado de los post
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, Content-Type");
    require 'conexion.php';
    $data=[];

        //crea el post en la db
        $insert='SELECT p.*, u.id, u.nombre from post p join users u where u.id=p.userid order by title desc';
        $response=$connector->query($insert);
        while($filas=$response->fetch_assoc()){
            $data[]=$filas;
        }
    echo json_encode($data);

?>