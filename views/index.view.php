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
    <title>UniShop</title>
</head>
<body>
    <header class="contenedor">
        <div class="caja-usuario">
            <ul>
                <li><a href="iniciar.php">Iniciar Sesion</a>
                </li>
            </ul>
        </div>

        <div class="caja-menu caja-menu-efectos">
            <ul>
                <li class="uno"><a href="index.php">Inicio</a></li>
                <li class="dos"><a href="productos.php">Productos</a></li>
                <li class="tres"><a href="servicios.php">Servicios</a></li>
                <li class="cuatro"><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>

        <div class="caja-texto">
            <h1 class="caja-titulo">
                <span class="caja-titulo-main">UniShop</span>
                <span class="caja-titulo-sub">Tu tienda a un solo click</span>
            </h1>
            <a href="#productos" class="btn btn-blanco btn-animacion">Ver Productos</a>
        </div>
    </header>

    <div class="main-index">
        <a class="titulo" name="productos">Productos destacados</a>
        <hr class="borde">
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
        <div class="boton-ver-mas">
            <a href="productos.php">Ver mas productos <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>

    
    <?php require 'views/testimonios.php'; ?>
    <?php require 'views/redes-sociales.php'; ?>
    <?php require 'views/footer.php'; ?>


    
</body>
</html>