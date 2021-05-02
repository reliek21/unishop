<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="scss/estilos.css">
    <title>Productos</title>
</head>

<body>
    <header class="Inicio-contenedor">
        <div class="caja-menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
        <div class="caja-usuario">
            <form action="buscar.php" method="get" name="busqueda" class="form-busqueda">
                <input type="text" name="busqueda" placeholder="Buscar producto">
                <button type="submit" class="fas fa-search"></button>
            </form>
        </div>
    </header>

    <div class="main">
        <div class="caja-main">
        <div class="caja-main">
        <?php foreach($productos as $producto): ?>
            <div class="caja-producto">
                <div class="caja-imagen">
                    <img src="bd productos/<?php echo $producto['imagen']; ?>" alt="">
                </div>
                <h2 class="nombre-producto"><?php echo $producto['nombre']; ?></h2>
                <p class="precio">$ <?php echo $producto['precio']; ?></p>
                <a href="single.php?id=<?php echo $producto['id']; ?>">Ver Producto</a>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="paginacion">
            <ul>

                <?php if($pagina == 1): ?>
                    <li class="disabled">&laquo;</li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $numeroPaginas; $i++){
                    if ($pagina == $i) {
                        echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                    } else {
                        echo "<li><a href='?pagina=$i'>$i</a></li>";
                    }
                }
                ?>

                <?php if ($pagina == $numeroPaginas): ?>
                    <li class="disabled">&raquo;</li>
                <?php else: ?>
                <li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
                <?php endif; ?>
                
            </ul>
        </div>
    </div>
    <?php require 'footer.php'; ?>

</body>
</html>