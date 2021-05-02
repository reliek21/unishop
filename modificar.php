<?php

require 'funciones.php';

$conexion = conexion();

if(!$conexion) {
    header('Location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = limpiarDatos($_POST['nombre']);
    $precio = limpiarDatos($_POST['precio']);
    $descripcion = $_POST['descripcion'];
    $id = limpiarDatos($_POST['id']);
    $imagen_guardada = $_POST['imagen_guardada'];
    $imagen = $_FILES['imagen'];

    if (empty($imagen['name'])) {
        $imagen = $imagen_guardada;
    } else {
        $archivo_subido = 'bd productos/' . $_FILES['imagen']['name'];
        move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo_subido);
        $imagen = $_FILES['imagen']['name'];
    }

    $statement = $conexion->prepare('UPDATE productos SET nombre = :nombre, precio = :precio, descripcion = :descripcion, imagen = :imagen WHERE id = :id');

    $statement->execute(array(':nombre' => $nombre, ':precio' => $precio, ':descripcion' => $descripcion, ':imagen' => $imagen, ':id' => $id));

    header('Location: administrador.php');
} else {
    $id_producto = id_producto($_GET['id']);

    if(empty($id_producto)) {
        header('Location: administrador.php');
    }

    $producto = obtener_producto_por_id($conexion, $id_producto);

    if (!$producto) {
        header('Location: error.php');
    }

    $producto = $producto[0];
    require 'views/modificar.view.php';
}

?>