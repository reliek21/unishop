<?php session_start();

if (!empty($_SESSION['usuario'])) {
    header('Location: index-usuario.php');
} else {
    header('index.php');
}

require 'funciones.php';

$conexion = conexion();

if (!$conexion) {
    header('Location: error.php');
} 

$productos_por_pagina = 8;
$productos = obtenerProductos($productos_por_pagina, $conexion);

if (!$productos) {
    header('Location: error.php');
}

require 'views/index.view.php';

?>