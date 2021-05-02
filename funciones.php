<?php

function conexion() {
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=unishop', 'root', '');
        return $conexion;
    } catch(PDOException $e) {
        return false;
    }
}

function limpiarDatos($datos) {
    $datos = trim($datos);
    $datos = htmlspecialchars($datos);
    $datos = stripslashes($datos);
    return $datos;
}

function paginaActual() {
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}


function obtenerProductos($productos_por_pagina, $conexion) {
    $inicio = (paginaActual() > 1) ? paginaActual() * $productos_por_pagina - $productos_por_pagina : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM productos LIMIT $inicio, $productos_por_pagina");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function numero_paginas($productos_por_pagina, $conexion) {
    $total_productos = $conexion->prepare('SELECT FOUND_ROWS() as total');
    $total_productos->execute();
    $total_productos = $total_productos->fetch()['total'];

    $numero_productos = ceil($total_productos / $total_productos);
    return $numero_productos;
}

function id_producto($id) {
    return (int)limpiarDatos($id);
}

function obtener_producto_por_id($conexion, $id){
    $resultado = $conexion->query("SELECT * FROM productos WHERE id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}
