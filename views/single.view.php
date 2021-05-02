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
            <form action="buscar.php" method="get" name="buscar" class="form-busqueda">
                <input type="text" name="busqueda" placeholder="Buscar articulo">
                <button type="submit" class="fas fa-search"></button>
            </form>
        </div>
    </header>

    <div class="main">
        <div class="caja-descripcion">
            <a href="productos.php"><i class="fas fa-chevron-left"></i> Atras</a>
            <div class="centrar-compra">
                <div class="imagen">
                    <img src="bd productos/<?php echo $producto['imagen']; ?>" alt="">
                </div>
    
                <div class="descripcion">
                    <h2 class="titulo">Descripcion</h2>
                    <hr class="borde">
                    <p class="texto"><?php echo utf8_decode(nl2br($producto['descripcion'])); ?></p>

                    <div class="caja-precio">
                    <p class="precio">$ <?php echo $producto['precio']; ?></p>
                    <a href="#" id="btn-abrir-popup">Comprar Ahora</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php require 'proceso-pago.php'; ?>


    <?php require 'footer.php'; ?>

</body>
</html>