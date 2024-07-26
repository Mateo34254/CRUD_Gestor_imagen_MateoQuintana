<?php

class usuario{
    function connection (){
        $host = "localhost";
        $usr = "root";
        $pass = "";
        $bd = "gestor_imagen";
        $puerto = 3306;
        $mysqli = new mysqli ($host, $usr, $pass, $bd, $puerto);
        return $mysqli;
    }
function agregarUsuarioModel($usuario, $contraseña)
{
    $connection = $this->connection();
    $sql = "INSERT INTO usuarios(usuario, contraseña) values ('$usuario','$contraseña')";
    $respuesta = $connection->query($sql);
    return $respuesta;

}

}