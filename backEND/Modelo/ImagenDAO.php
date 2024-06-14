<?php

class Imagen{
    function connection (){
        $host = "localhost";
        $usr = "root";
        $pass = "";
        $bd = "Gestor_imagen";
        $puerto = 3306;
        $mysqli = new mysqli ($host, $usr, $pass, $bd, $puerto);
        return $mysqli;
    }
    

    public function agregarImagen($nombre,$imagen){
    $rutaTemporal=$imagen['tmp_name'];
    $nombreImagen = $imagen['name'];
    $extension = pathinfo($nombreImagen, PATHINFO_EXTENSION);
    $sql ="INSERT INTO imagen (nombre,extension) VALUES ('$nombre','$extension')";
    $conexion = $this->connection();     
    $conexion->query($sql);
    $id = $conexion->insert_id;
    move_uploaded_file($rutaTemporal,"../imagenes/$id.$extension");
}
public function obtenerImagenes(){
$sql= "SELECT * FROM Imagen";
$conexion = $this->connection();
$resultado = $conexion->query($sql);
return$resultado->fetch_all(MYSQLI_ASSOC);
}

}

    

?>