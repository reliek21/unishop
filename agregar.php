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
    $imagen = $_FILES['imagen']['tmp_name'];

    $archivo_subido = 'bd productos/' . $_FILES['imagen']['name'];

    move_uploaded_file($imagen, $archivo_subido);

    $statement = $conexion->prepare('INSERT INTO productos (id, nombre, precio, descripcion, imagen) VALUES (null, :nombre, :precio, :descripcion, :imagen)');

    $statement->execute(array(':nombre' => $nombre, ':precio' => $precio, ':descripcion' => $descripcion, ':imagen' => $_FILES['imagen']['name']));
}

require 'views/agregar.view.php'; 

?>