<?php

require 'funciones.php';

$conexion = conexion();

if(!$conexion) {
    header('Location: error.php');
}

$id = limpiarDatos($_GET['id']);

if (!$id) {
    header('Location: error.php');
}

$statement = $conexion->prepare('DELETE FROM productos WHERE id = :id');
$statement->execute(array('id' => $id));

header('Location: administrador.php');

?>