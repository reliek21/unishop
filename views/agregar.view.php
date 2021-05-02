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
    <title>Agregar producto</title>
</head>

<body>
    <div class="contenedor-agregar">
        <h2 class="titulo">Agregar producto</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" class="formulario-contacto">
            <div class="caja-uno">
                <input type="text" name="nombre" placeholder="Nombre del producto">
                <input type="text" name="precio" placeholder="Precio del producto">
            </div>
            <div class="caja-dos">
                <textarea name="descripcion" placeholder="Descripcion del producto"></textarea>
                <input type="file" name="imagen">
                <input type="submit" value="Agregar producto" class="btn">
            </div>
        </form>
    </div>
</body>

</html>