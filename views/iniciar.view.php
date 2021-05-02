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
        <div class="caja-usuario">
            <ul>
                <li><a href="registro.php">Registro</a>
                </li>
            </ul>
        </div>

        <div class="caja-menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
    </header>

    <div class="contenedor-formulario">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="login" class="formulario">
            <div class="inicio">
                <h3>Iniciar Sesion</h3>
                <div class="facebook">
                    <a href="https://es-la.facebook.com/">Facebook</a>
                </div>
                o Iniciar con
            </div>

            <div class="mail">
                <input type="text" name="usuario" placeholder="Usuario">
                <input type="password" name="contraseña" placeholder="Contraseña">
                <input type="submit" value="Iniciar Sesion">
            </div>

            <?php if(!empty($errores)):?>
                <div class="error abajo">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif;?>

            <div class="texto">
                <p>¿No tienes cuenta? Crear <a href="registro.php">aqui</a></p>
            </div>
        </form>
    </div>
</body>

</html>