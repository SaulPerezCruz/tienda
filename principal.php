<?php
    include('assets/data/conexion.php');


    include('assets/data/carritocon.php');
    $obj1 = new Conexion1;
    $res1 = $obj1->buscarProducto();
    $temp1 = array();
    $temp1 = $res1;
    
    /*
    print("Id Producto: " . $temp[2]['id_producto'] . '<br>');
    print("Nombre: " . $temp[2]['nombre_producto'] . '<br>');
    print("Precio Venta: " . $temp[2]['precio_venta'] . '<br>');
    print("<img src=" . $temp[2]['url_img'] . ' width="150">');
    print("Descripción de producto: " . $temp[2]['descripcion_producto']);
    */
    

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toys Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/principal.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="stylespro.css">

</head>

<body class="background" style="background-image: url(assets/img/fondos/background.jpg);">
<header id="header" >
        <nav style="background-color: black;border-color:transparent;" class="navbar navbar-default navbar-expand-lg">
            <div class="container">
                
                <a href="principal.php">
                    <img src="assets/img/logo.jpg" width="150" alt="logo">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  				</button>

                <div class=" navbar-collapse"  >
                    <ul class="nav navbar-nav ml-auto" >
                        <li class="nav-item">
                            <a style="color:white;font-size: 25px;margin-right:15px;" class="nav-link link-menu" href="principal.php">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a style="color:white;font-size: 25px;margin-right:15px;" class="nav-link link-menu" href="producto.php">Producto</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:white;font-size: 25px;margin-right:15px;" class="nav-link link-menu" href="contacto.html">Contacto</a>
                        </li>
                        <li class="nav-item">
                        <a href="VerCarta.php" class="nav-link link-menu" title="Ver Carta" ><img src="assets/img/cart.png" width="50" alt="logo"></a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <section id="productos">
        <div class="container">
            <div class="row justify-content-md-center ">
                <div class="col-md-7">
                <h1>ToysUp</h1>
                <p style="color: black; font-size: larger;">Encuentra tus juguetes y figuras favoritas, tenemos las mejores marcas y con precios muy atractivos!</p>
                <p style="color: black; font-size: larger;">Los más vendidos:</p>
                </div>
            </div>
            <div class="row justify-content-md-center " >
                <div class="col-md-3" style="margin-top: 100px;">
                    <?php echo "<img src=" . $temp1[0]['url'] . ' width="250">' ?>
                    <div class="txt">
                        <h4><?php echo $temp1[0]['names'] ?></h3>
                        <p style="margin-bottom:0px;">$<?php echo $temp1[0]['price'] ?> USD</p>
                        <a href="detalle.php?id=<?php echo $temp1[0]['id']?>" class="boton boton-amarillo d-block" style="margin-top:0px;">Ver detalles</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <?php echo "<img src=" . $temp1[6]['url'] . ' width="250">' ?>
                    <div class="txt">
                        <h4><?php echo $temp1[6]['names'] ?></h3>
                        <p style="margin-bottom:0px;">$<?php echo $temp1[6]['price'] ?> USD</p>
                        <a  href="detalle.php?id=<?php echo $temp1[6]['id']?>" class="boton boton-amarillo d-block" style="margin-top:0px;">Ver detalles</a>
                    </div>
                </div>
                <div class="col-md-3" style="margin-top: 70px;">
                    <?php echo "<img src=" . $temp1[9]['url'] . ' width="250">' ?>
                    <div class="txt">
                        <h4><?php echo $temp1[9]['names'] ?></h3>
                        <p style="margin-bottom:0px;">$<?php echo $temp1[9]['price'] ?> USD</p>
                        <a href="detalle.php?id=<?php echo $temp1[9]['id']?>" class="boton boton-amarillo d-block" style="margin-top:0px;">Ver detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer  class="footer">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                <p style="margin-top:20px;">Copyright &copy; 2020 ToysUp | Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </footer>
</body>




</html>