<?php
require_once '../Modelo/ImagenDAO.php';
$funcion = $_GET['funcion'];
switch ($funcion){
    case "agregar":
        agregarImagen();
    break;
    case "obtener":
        obtenerImagenes();
    break;

    function obtenerImagenes(){
        $resultado = (new Imagen())->obtenerImagenes();
        echo json_encode($resultado);
    }
    function agregarImagen(){    
        $nombre = $_POST['nombre'];
        $imagen = $_FILES['imagen'];
        $resultado = (new Imagen())->agregarImagen($nombre, $imagen);
        echo json_encode($resultado);
        
        
    }

}