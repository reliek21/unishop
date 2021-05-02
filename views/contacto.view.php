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
    </header>
    <div class="caja-contacto">
        <div class="caja-contacto-sub">
            <h2 class="titulo">Escribe algo para nosotros</h2>
            <form action="" name="" method="post" class="formulario-contacto">
                <div class="caja-uno">
                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type="text" name="correo" placeholder="Email">
                </div>
                <div class="caja-dos">
                    <textarea name="mensaje" placeholder="Deja tu mensaje aqui..."></textarea>
                    <input type="submit" value="Enviar mensaje" class="btn">
                </div>
            </form>
            <hr class="borde">
            <div class="caja-ubicacion">
                <h3 class="titulo">Informacion de contacto</h3>
                <div class="caja-informacion">
                    <div class="caja-informacion-basica">
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> Cl. 19 & Cra. 7 San Pelayo</li>
                            <li><i class="far fa-envelope"></i> unishop@thebeststore.com</li>
                            <li><i class="fas fa-mobile-alt"></i> +57 313 567 6035</li>
                        </ul>
                    </div>
                    <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d985.5891102514657!2d-75.79606468331238!3d8.888063857598537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5a2a233f081873%3A0x1efbd4781ac011c5!2sInstituci%C3%B3n%20Educativa%20Dolores%20Garrido!5e0!3m2!1ses-419!2sco!4v1573976018401!5m2!1ses-419!2sco"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'footer.php'; ?>

</body>

</html>