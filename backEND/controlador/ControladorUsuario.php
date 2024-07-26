<?php

require_once '../Modelo/UsuarioDAO.php';

$funcion = $_GET['funcion'];

switch ($funcion){
    case "agregar":
        agregarUsuario();
    break;
}
function agregarUsuario(){
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $resultado = (new usuario())->agregarUsuarioModel($usuario, $contraseña);
    echo json_encode($resultado);
}