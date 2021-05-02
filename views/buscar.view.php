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
    <title>Iniciar Sesion</title>
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
            <form action="buscar.php?busqueda=<?php echo $resultados; ?>" method="get" name="buscar" class="form-busqueda">
                <input type="text" name="busqueda" placeholder="Buscar producto">
                <button type="submit" class="fas fa-search"></button>
            </form>
        </div>
    </header>

    <div class="main">
        <h2 class="titulo-busqueda"><?php echo $error; ?></h2>
        <!-- <hr class="borde"> -->
        <div class="caja-main">
        <div class="caja-main">
        <?php foreach($resultados as $producto): ?>
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

    </div>

</body>

</html>