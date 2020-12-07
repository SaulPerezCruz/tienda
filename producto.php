<?php
    include 'Configuracion.php';
    /*
    include('assets/data/conexion.php');
    $obj = new Conexion;
    $res = $obj->buscarProducto();
    $temp = array();
    $temp = $res;
    */

    include('assets/data/carritocon.php');
    $obj1 = new Conexion1;
    $res1 = $obj1->buscarProducto();
    $temp1 = array();
    $temp1 = $res1;

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
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="stylespro.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                        <a style="margin-top:15px;"  href="VerCarta.php" class="nav-link link-menu" title="Ver Carta" ><img  src="assets/img/cart.png" width="50" alt="logo"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="seccion contenedor">
        <h1 class="fw-300 centrar-texto">Funko</h1>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <?php echo "<img src=" . $temp1[0]['url'] . ' width="250">' ?>
                <div class="contenido-anuncio">
                    <h3><?php echo $temp1[0]['name'] ?></h3>
                    <p style="color:black;">$<?php echo $temp1[0]['price'] ?> USD</p>
                    <a href="detalle.php?id=<?php echo $temp1[0]['id']?>" class="boton boton-amarillo d-block" style="margin-top:0px;">Ver detalles</a>

                </div>
            </div>
            <div class="anuncio">
                <?php echo "<img src=" . $temp1[1]['url'] . ' width="250">' ?>
                <div class="contenido-anuncio">
                    <h3><?php echo $temp1[1]['name'] ?></h3>
                    <p style="color:black;">$<?php echo $temp1[1]['price'] ?> USD</p>
                    <a href="detalle.php?id=<?php echo $temp1[1]['id']?>" class="boton boton-amarillo d-block" style="margin-top:0px;">Ver detalles</a>

                </div>
            </div>
            <div class="anuncio">
                    <?php echo "<img src=" . $temp1[2]['url'] . ' width="250">' ?>
                    <div class="contenido-anuncio">
                    <h3><?php echo $temp1[2]['name'] ?></h3>
                    <p style="color:black;">$<?php echo $temp1[2]['price'] ?> USD</p>
                    <a href="detalle.php?id=<?php echo $temp1[2]['id']?>" class="boton boton-amarillo d-block" style="margin-top:0px;">Ver detalles</a>
                  </div>
            </div>
        </div>
    </section>


    <section class="seccion contenedor">
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <?php echo "<img src=" . $temp1[3]['url'] . ' width="250">' ?>
                <div class="contenido-anuncio">
                    <h3><?php echo $temp1[3]['name'] ?></h3>
                    <p style="color:black;">$<?php echo $temp1[3]['price'] ?> USD</p>
                    <a href="detalle.php?id=<?php echo $temp1[3]['id']?>" class="boton boton-amarillo d-block" style="margin-top:0px;">Ver detalles</a>

                </div>
            </div>
            <div class="anuncio">
                <?php echo "<img src=" . $temp1[4]['url'] . ' width="250">' ?>
                <div class="contenido-anuncio">
                    <h3><?php echo $temp1[4]['name'] ?></h3>
                    <p style="color:black;">$<?php echo $temp1[4]['price'] ?> USD</p>
                    <a href="detalle.php?id=<?php echo $temp1[4]['id']?>" class="boton boton-amarillo d-block" style="margin-top:0px;">Ver detalles</a>

                </div>
            </div>
            <div class="anuncio">
                    <?php echo "<img src=" . $temp1[5]['url'] . ' width="250">' ?>
                    <div class="contenido-anuncio">
                    <h3><?php echo $temp1[5]['name'] ?></h3>
                    <p style="color:black;">$<?php echo $temp1[5]['price'] ?> USD</p>
                    <a href="detalle.php?id=<?php echo $temp1[5]['id']?>" class="boton boton-amarillo d-block" style="margin-top:0px;">Ver detalles</a>
                  </div>
            </div>
        </div>
    </section>

    
    <section class="seccion contenedor">
        <h1 class="fw-300 centrar-texto">HotToys</h1>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <?php echo "<img src=" . $temp1[6]['url'] . ' width="250">' ?>
                <div class="contenido-anuncio">
                    <h3><?php echo $temp1[6]['name'] ?></h3>
                    <p style="color:black;">$<?php echo $temp1[6]['price'] ?> USD</p>
                    <a href="detalle.php?id=<?php echo $temp1[6]['id']?>" class="boton boton-amarillo d-block" style="margin-top:0px;">Ver detalles</a>

                </div>
            </div>
            <div class="anuncio">
                <?php echo "<img src=" . $temp1[7]['url'] . ' height="403">' ?>
                <div class="contenido-anuncio">
                    <h3><?php echo $temp1[7]['name'] ?></h3>
                    <p style="color:black;">$<?php echo $temp1[7]['price'] ?> USD</p>
                    <a href="detalle.php?id=<?php echo $temp1[7]['id']?>" class="boton boton-amarillo d-block" style="margin-top:0px;">Ver detalles</a>

                </div>
            </div>
            <div class="anuncio">
                    <?php echo "<img src=" . $temp1[8]['url'] . ' width="320">' ?>
                    <div class="contenido-anuncio">
                    <h3><?php echo $temp1[8]['name'] ?></h3>
                    <p style="color:black;">$<?php echo $temp1[8]['price'] ?> USD</p>
                    <a href="detalle.php?id=<?php echo $temp1[8]['id']?>" class="boton boton-amarillo d-block" style="margin-top:0px;">Ver detalles</a>
                  </div>
            </div>
        </div>
    </section>
    
    <section class="seccion contenedor">
        <h1 class="fw-300 centrar-texto">LEGO</h1>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <?php echo "<img src=" . $temp1[9]['url'] . ' width="250">' ?>
                <div class="contenido-anuncio">
                    <h3><?php echo $temp1[9]['name'] ?></h3>
                    <p style="color:black;">$<?php echo $temp1[9]['price'] ?> USD</p>
                    <a href="detalle.php?id=<?php echo $temp1[9]['id']?>" class="boton boton-amarillo d-block" style="margin-top:0px;">Ver detalles</a>

                </div>
            </div>
            <div class="anuncio">
                <?php echo "<img src=" . $temp1[10]['url'] . '>' ?>
                <div class="contenido-anuncio">
                    <h3><?php echo $temp1[10]['name'] ?></h3>
                    <p style="color:black;">$<?php echo $temp1[10]['price'] ?> USD</p>
                    <a href="detalle.php?id=<?php echo $temp1[10]['id']?>" class="boton boton-amarillo d-block" style="margin-top:0px;">Ver detalles</a>

                </div>
            </div>
            <div class="anuncio">
                    <?php echo "<img src=" . $temp1[11]['url'] . '  height="290">' ?>
                    <div class="contenido-anuncio">
                    <h3><?php echo $temp1[11]['name'] ?></h3>
                    <p style="color:black;">$<?php echo $temp1[11]['price'] ?> USD</p>
                    <a href="detalle.php?id=<?php echo $temp1[11]['id']?>" class="boton boton-amarillo d-block" style="margin-top:0px;">Ver detalles</a>
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