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

    <div class="main">
        <div class="caja-servicios">
            <h2>Nuestros Precios</h2>
            <hr class="borde">
            <div class="caja">
                <div class="caja-precios">
                    <p class="titulo">Gratis</p>
                    <p class="precio">$ 0</p>
                    <p>3 Compras Maximas</p>
                    <p>Garantia</p>
                    <p>Sin transporte</p>
                    <p>Sin Ofertas</p>
                    <a href="#">OBTENER</a>
                </div>

                <div class="caja-precios naranja">
                    <p class="titulo">Premium</p>
                    <p class="precio">$ 30.000</p>
                    <p>10 Compras Maximas</p>
                    <p>Garantia</p>
                    <p>Transporte</p>
                    <p>Ofertas</p>
                    <a href="#" id="btn-abrir-popup">OBTENER</a>
                </div>

                <div class="caja-precios amarillo">
                    <p class="titulo">VIP</p>
                    <p class="precio">$ 140.000</p>
                    <p>Compras Ilimitadas</p>
                    <p>Garantia</p>
                    <p>Transporte</p>
                    <p>Ofertas exclusivas</p>
                    <a href="#">OBTENER</a>
                </div>
            </div>
        </div>
        <?php require 'proceso-pago.php'; ?>

        <div class="preguntas">
            <h2 class="titulo-principal">Preguntas Frecuentes</h2>
            <hr class="borde">
            <h2 class="titulo">Por que comprar en Unishop</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas esse fuga nesciunt in alias sapiente architecto asperiores totam recusandae, reiciendis amet quibusdam reprehenderit magnam cumque soluta expedita blanditiis deleniti neque quod quia consectetur aperiam. Incidunt alias ipsum, totam repudiandae a aut velit obcaecati sit dolor ullam hic culpa. Deserunt adipisci ratione ullam, vel blanditiis dicta facere nemo ad eum animi. Iusto culpa quo, fugiat optio aspernatur, esse facere adipisci sit, accusantium sapiente sint similique aliquid minus debitis vel atque quam iste illum minima enim error? Ab maxime architecto laboriosam harum ipsum enim quia atque recusandae vel porro perferendis, velit placeat earum tempore corporis reprehenderit natus aliquam cupiditate amet unde assumenda aperiam commodi id exercitationem. Nam quisquam quasi rem deleniti a exercitationem laudantium eligendi iste fuga unde provident alias aliquid, fugit ea magnam corporis. Sapiente veritatis hic quaerat eius enim commodi veniam illum, voluptas, doloribus molestias rem amet atque? Quas neque aut aliquid, iusto sint voluptas a dolore ea rerum odit, vero asperiores? Saepe nulla tempora ut nam mollitia accusamus aliquam commodi porro praesentium doloribus omnis, ullam libero totam tempore hic amet! Quia eos suscipit molestiae. Beatae provident cum nesciunt vitae nihil magni vel totam. Quia voluptates eius repellat ipsa amet!
            </p>

            <h2 class="titulo">Quienes Somos</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas esse fuga nesciunt in alias sapiente architecto asperiores totam recusandae, reiciendis amet quibusdam reprehenderit magnam cumque soluta expedita blanditiis deleniti neque quod quia consectetur aperiam. Incidunt alias ipsum, totam repudiandae a aut velit obcaecati sit dolor ullam hic culpa. Deserunt adipisci ratione ullam, vel blanditiis dicta facere nemo ad eum animi. Iusto culpa quo, fugiat optio aspernatur, esse facere adipisci sit, accusantium sapiente sint similique aliquid minus debitis vel atque quam iste illum minima enim error? Ab maxime architecto laboriosam harum ipsum enim quia atque recusandae vel porro perferendis, velit placeat earum tempore corporis reprehenderit natus aliquam cupiditate amet unde assumenda aperiam commodi id exercitationem. Nam quisquam quasi rem deleniti a exercitationem laudantium eligendi iste fuga unde provident alias aliquid, fugit ea magnam corporis. Sapiente veritatis hic quaerat eius enim commodi veniam illum, voluptas, doloribus molestias rem amet atque? Quas neque aut aliquid, iusto sint voluptas a dolore ea rerum odit, vero asperiores? Saepe nulla tempora ut nam mollitia accusamus aliquam commodi porro praesentium doloribus omnis, ullam libero totam tempore hic amet! Quia eos suscipit molestiae. Beatae provident cum nesciunt vitae nihil magni vel totam. Quia voluptates eius repellat ipsa amet!
            </p>
        </div>
    </div>
    <?php require 'footer.php'; ?>

</body>
</html>