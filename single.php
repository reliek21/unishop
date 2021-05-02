<?php   session_start();

require 'funciones.php';

if (isset($_SESSION['usuario'])) {

} else {
    header('Location: iniciar.php');
}

$conexion = conexion();

$id_producto = id_producto($_GET['id']);

if(!$conexion) {
    header('Location: error.php');
}

if(empty($id_producto)) {
    header('Location: index.php');
}

$producto = obtener_producto_por_id($conexion, $id_producto);

if (!$producto) {
    header('Location: index.php');
}

$producto = $producto[0];


require 'views/single.view.php';

?>