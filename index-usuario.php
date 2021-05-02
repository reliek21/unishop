<?php session_start();

require 'funciones.php';

if (isset($_SESSION['usuario'])) {
    // header('Location: index-usuario.php');
} else {
    header('Location: iniciar.php');
}

$conexion = conexion();

if (!$conexion) {
    header('Location: error.php');
} 

$productos_por_pagina = 8;
$productos = obtenerProductos($productos_por_pagina, $conexion);

if (!$productos) {
    header('Location: error.php');
}

require 'views/index-usuario.view.php';

?>