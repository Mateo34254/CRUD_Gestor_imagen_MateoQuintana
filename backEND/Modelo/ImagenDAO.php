<?php

class Imagen{
    function connection (){
        $host = "localhost";
        $usr = "root";
        $pass = "";
        $bd = "gestordeimagen";
        $puerto = 3306;
        $mysqli = new mysqli ($host, $usr, $pass, $bd, $puerto);
        return $mysqli;
    }
    
    function IngresarImagenModel($nombre, $imagen)
    {
        $connection = $this->connection();
        $nombreImagen = $imagen['name'];
        $extension = pathinfo($nombreImagen, PATHINFO_EXTENSION);
        $sql = "INSERT INTO imagen(nombre, extension) values('$nombre', '$extension')";  
        $respuesta = $connection->query($sql);
        $id = $connection->insert_id;
        $RutaTemp = $imagen['tmp_name'];
        move_uploaded_file($RutaTemp, "Imagenes/".$id.".". $extension);
        return $respuesta;
    }
public function obtenerImagenes(){
$sql= "SELECT * FROM imagen";
$conexion = $this->connection();
$resultado = $conexion->query($sql);
return$resultado->fetch_all(MYSQLI_ASSOC);
}

}

    

?>