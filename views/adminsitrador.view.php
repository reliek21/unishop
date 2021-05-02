<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="scss/estilos.css">
    <title>Panel de Adminitrador</title>
</head>

<body>
    <div class="contenedor-administrador">
        <h2>Panel de administrador</h2>
        <hr class="borde">
        <a href="agregar.php" class="azul">Agregar</a>
        <div class="contenedor-panel">
            <?php foreach($productos as $producto): ?>
            <div class="caja-ad">
                <div class="texto">
                    <?php echo $producto['nombre']; ?>
                </div>
                <div class="cajas">
                    <a href="single.php?id=<?php echo $producto['id']; ?>" class="azul">Ver</a>
                    <a href="modificar.php?id=<?php echo $producto['id']; ?>" class="verde">Modificar</a>
                    <a href="eliminar.php?id=<?php echo $producto['id']; ?>" class="rojo">Eliminar</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="paginacion">
            <ul>

                <?php if ($pagina == 1) : ?>
                    <li class="disabled">&laquo;</li>
                <?php else : ?>
                    <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $numeroPaginas; $i++) {
                    if ($pagina == $i) {
                        echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                    } else {
                        echo "<li><a href='?pagina=$i'>$i</a></li>";
                    }
                }
                ?>

                <?php if ($pagina == $numeroPaginas) : ?>
                    <li class="disabled">&raquo;</li>
                <?php else : ?>
                    <li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
                <?php endif; ?>

            </ul>
        </div>
</body>

</html>