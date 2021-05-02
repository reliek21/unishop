<?php  session_start();

require 'funciones.php';

$conexion = conexion();

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$postPorPagina = 8;

$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0 ;

$productos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM productos LIMIT $inicio, $postPorPagina");
$productos->execute();
if (!$productos) {
    header('Location: index.php');
}

$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];

$numeroPaginas = ceil($totalArticulos / $postPorPagina);


require 'views/productos.view.php';

?>
