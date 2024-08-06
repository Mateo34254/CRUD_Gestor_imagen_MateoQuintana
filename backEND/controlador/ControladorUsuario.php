<?php

require_once '../Modelo/UsuarioDAO.php';

$funcion = $_GET['funcion'];

switch ($funcion){
    case "registrar":
        registrarUsuario();
        break;
}
  
function registrarUsuario(){
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $resultado = (new usuario())->registrarUsuarioModel($usuario, $contraseña);
    echo json_encode($resultado);
}