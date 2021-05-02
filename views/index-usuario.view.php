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
    <title>UniShop</title>
</head>

<body>
    <header class="contenedor">

        <div class="caja-usuario">
            <ul>
                <li><a name="usuario"><?php echo $_SESSION['usuario']; ?> <i class="fas fa-sort-down"></i></a>
                    <ul>
                        <li><a href="cerrar.php">Cerrar</a></li>
                    </ul>
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

    <div class="main-testimonios">
        <h2 class="titulo">Lo que nuestros clientes dicen</h2>
        <hr class="borde">
        <div class="caja-testimonios izquierda">
            <div class="caja-imagen">
                <img src="img/testimonios/persona (1).jpg" alt="">
            </div>
            <div class="caja-texto2">
                <p class="texto">"La mejor pagina web al momento de comprar productos, La entrega del producto super
                    rapida y el producto en buenas condiciones son los mejores, GRACIAS"</p>
                <p class="nombre">- Pablo Diaz</p>
            </div>
        </div>

        <div class="caja-testimonios derecha">
            <div class="caja-imagen">
                <img src="img/testimonios/persona (2).jpg" alt="">
            </div>
            <div class="caja-texto2">
                <p class="texto">"Me gusta UniShop, es amigable con el cliente, los productos se pueden encontrar a un
                    buen precio, ademas la atencion al cliente es muy buena"</p>
                <p class="nombre">- Daniela Guerrero</p>
            </div>
        </div>

        <div class="caja-testimonios izquierda">
            <div class="caja-imagen">
                <img src="img/testimonios/persona (3).jpg" alt="">
            </div>
            <div class="caja-texto2">
                <p class="texto">"La neta la recomiendo mucho, Me gusta mucho por lo rapido de sus envios, vivo en
                    Ciudad de Mexico y el producto llego en 3 dias"</p>
                <p class="nombre">- Luisa Fernandez</p>
            </div>
        </div>
    </div>

    <div class="redes-sociales">
        <h3>siguenos en</h3>
        <hr class="borde">
        <div class="sociales">
            <a href="https://es-la.facebook.com/" class="facebook"><i class="fab fa-facebook-square"></i></a>
            <a href="https://www.instagram.com/?hl=es-la" class="instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/?lang=es" class="twitter"><i class="fab fa-twitter-square"></i></a>
            <a href="https://www.youtube.com/?gl=CO&tab=r1" class="youtube"><i class="fab fa-youtube"></i></a>
        </div>
    </div>

    <div class="contenedor-footer">
        <div class="botones">
            <a href="index-usuario.php">Inicio</a>
            <a href="productos.php">Productos</a>
            <a href="servicios.php">Servicios</a>
            <a href="contacto.php">Contacto</a>
        </div>

        <div class="texto">
            <p>© Copyright 2019 Todos los derechos reservados. Esta es una pagina de uso no comercial, proyecto
                universitario, cualquier venta de ella o distribución sera sancionado.</p>
        </div>
    </div>
</body>

</html>