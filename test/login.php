<?php

    //Inicio de sesión
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, Content-Type");

    require 'conexion.php';
    $post = json_decode(file_get_contents("php://input"));
    $message=[];
    $mail=$post->mail;
    $password=$post->password;
    if($password!=null && $mail!=null){//verifica que se hayan enviado los datos y no esten vacios
        //consulta en la DB los datos del usuario
        $search="SELECT * FROM users where mail='".$mail."' and password='".$password."'";
        $rse=$connector->query($search);
        while($fse=$rse->fetch_assoc()){
        if($fse['id']==''){
            //si no se encontraron resultados devuelve el mensaje
            $message['message']='Correo o contraseña incorrectos';
        }else{
            //si hay resultados devuelve toda la información del usuario
                $message[]=$fse;
            }
        }        
    }
    echo json_encode($message);

?>