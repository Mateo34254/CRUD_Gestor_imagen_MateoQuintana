<?php

class usuario{
    
    function connection()
{
    try {
        $host = "localhost";
        $usr = "root";
        $pass = "";
        $bd = "gestor_imagen";
        $puerto = "3306";
        $mysqli = new mysqli($host, $usr, $pass, $bd, $puerto);
        return $mysqli;
    } catch (Exception $e) {

        echo $e->getMessage();
    }
}



public function registrarUsuarioModel($usuario, $contraseña)
{
    $sql = "INSERT INTO usuarios (usuario, contraseña) VALUES ('$usuario', '$contraseña')";
    $connection = $this->connection();
    $respuesta = $connection->query($sql);
    return $respuesta;
}

}
?>