<?php
session_start();
if(isset($_SESSION['usuario'])){
    echo "bienvenidos";
} else {
    echo "denegado";
}