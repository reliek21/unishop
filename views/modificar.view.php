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
    <title>Modificar producto</title>
</head>

<body>
    <div class="contenedor-agregar">
        <h2 class="titulo">Modificar producto</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" class="formulario-contacto">
            <div class="caja-uno">
                <input type="hidden" value="<?php echo $producto['id']; ?>" name="id">
                <input type="text" name="nombre" value="<?php echo $producto['nombre']; ?>">
                <input type="text" name="precio" value="<?php echo $producto['precio']; ?>">
            </div>
            <div class="caja-dos">
                <textarea name="descripcion"><?php echo $producto['descripcion']; ?></textarea>
                <input type="file" name="imagen">
                <input type="hidden" name="imagen_guardada" value="<?php echo $producto['imagen']; ?>">

                <input type="submit" value="Modificar producto" class="btn">
            </div>
        </form>
    </div>
</body>

</html>