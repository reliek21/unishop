<?php

require 'funciones.php';

$conexion = conexion();
if(!$conexion) {
    header('Location: error.php');
}

if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
    $busqueda = limpiarDatos($_GET['busqueda']);

    $declaracion = $conexion->prepare('SELECT * FROM productos WHERE nombre LIKE :busqueda or descripcion LIKE :busqueda');
    $declaracion->execute(array('busqueda' => "%$busqueda%"));
    $resultados = $declaracion->fetchAll();

    if (empty($resultados)) {
        $error = 'No se encontraron coincidencias de: ' . $busqueda;
    } else {
        $error = 'Resultado de la busqueda: ' . ' ' . $busqueda;
    }
} else {
    header('Location: index.php');
}

require 'views/buscar.view.php';

?>