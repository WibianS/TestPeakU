<?php
    require '../conexion.php';

    class Login
    {
        public function insert( $mail,  $password)
        {
            $mail=$_POST['mail'];
            $password=$_POST['password'];
            if($password!=null && $mail!=null){//verifica que se hayan enviado los datos y no esten vacios
                //consulta en la DB los datos del usuario
                $search="SELECT * FROM users where mail='".$mail."' and password='".$password."'";
                $rse=$connector->query($name);
                $fse=$rse->fetch_assoc();
                if($fse==false){
                    //si no se encontraron resultados devuelve el mensaje
                    $message='Correo o contraseña incorrectos';
                }else{
                    //si hay resultados devuelve toda la información del usuario
                    while($fse=$rse->fetch_assoc()){
                        $message=$fse['mail'];
                    }
                }        
            }
            return $message;
        }
    }

?>