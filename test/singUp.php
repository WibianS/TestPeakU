<?php

    //registro de usuarios 

    require 'conexion.php';

    $mail=$_POST['mail'];
    $name=$_POST['name'];
    $password=$_POST['password'];
    if($password!=null && $mail!=null){//verifica que se hayan enviado los datos y no esten vacios

        $search="SELECT mail FROM users where mail='".$mail."'";//consulta si ya esta registrado el correo
        $rse=$connector->query($name);
        $fse=$rse->fetch_assoc();
        //comprueba si devuelve falso o verdadero la consulta
        if($fse==false){
            //crea el usuario si no se encontró el correo
            $insert='INSERT INTO users set nombre="'.$name.'",mail="'.$mail.'",password="'.$password.'"';
            $response=$connector->query($insert);
            $message['message']='El usuario ha sido creado';
        }else{
            //envia mensaje si el correo ya está registrado
            $message['menssage']='El correo ya ha sido ingresado';
        }        
    }
    echo json_encode($message);

?>