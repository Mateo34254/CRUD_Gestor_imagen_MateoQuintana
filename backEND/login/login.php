<?php
function login(){
$Usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

if ($Usuario == 'pepe' && $contraseña == 'pepe123'){
    session_start();
    $_SESSION['usuario'] = 'usuario' && $_SESSION['contraseña'] = 'contraseña';
}else{
    echo "error de inicio de sesion";
}

}