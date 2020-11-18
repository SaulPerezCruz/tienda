<?php
    include('assets/data/conexion.php');

    $obj = new Conexion;

    $res = $obj->buscarProducto();

    $temp = array();

    $temp = $res;
    
    /*
    print("Id Producto: " . $temp[2]['id_producto'] . '<br>');
    print("Nombre: " . $temp[2]['nombre_producto'] . '<br>');
    print("Precio Venta: " . $temp[2]['precio_venta'] . '<br>');
    print("<img src=" . $temp[2]['url_img'] . ' width="150">');
    */

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toys Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/principal.css">
</head>

<body class="background">



    <header class="head">
        <div class="navegacion">
            <div>
                <a href="/">
                    <img class="logo" src="assets/img/logo.jpg" alt="logo" style="width: 20;">
                </a>
            </div>

            <nav class="nav">
                <a href="inicio.html">Inicio</a>
                <a href="acerca.html">Acerca</a>
                <a href="caracterisiticas.html">Características</a>
                <a href="producto.html">Producto</a>
                <a href="testimonios.html">Testimonios</a>
                <a href="faq.html">FAQ</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>
    </header>


    <main class="producto">
        <h1>Toys Up</h1>
        <p style="color: black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur rem nihil in praesentium quos. Ab quibusdam eius esse perspiciatis. Cumque quaerat voluptas at, accusamus inventore a cum ipsam quos veritatis!</p>
    </main>

    <section class="anuncios">
        <div class="alin">
            <!-- <img src="assets/img/toy1.png" style="width: 250px;"> -->
            <?php echo "<img src=" . $temp[0]['url_img'] . ' width="250">' ?>
            <div class="txt">
                <h4><?php echo $temp[0]['nombre_producto'] ?></h3>
                    <p>$<?php echo $temp[0]['precio_venta'] ?> USD</p>
                    <a href="/" class="boton boton-ar">Comprar</a>
            </div>
        </div>
        <div class="alin">
            <!-- <img src="assets/img/toy2.png" style="width: 250px;"> -->
            <?php echo "<img src=" . $temp[1]['url_img'] . ' width="250">' ?>
            <div class="txt">
                <h4><?php echo $temp[1]['nombre_producto'] ?></h3>
                    <p>$<?php echo $temp[1]['precio_venta'] ?> USD</p>
                    <a href="/" class="boton boton-ar">Comprar</a>
            </div>
        </div>
        <div class="alin">
            <!-- <img src="assets/img/toy3.png" style="width: 250px;"> -->
            <?php echo "<img src=" . $temp[2]['url_img'] . ' width="250">' ?>
            <div class="txt">
                <h4><?php echo $temp[2]['nombre_producto'] ?></h3>
                    <p>$<?php echo $temp[2]['precio_venta'] ?> USD</p>
                    <a href="/" class="boton boton-ar">Comprar</a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>Copyright &copy; 2019 SMARTWATCH | Todos los derechos reservados</p>
    </footer>
</body>




</html>