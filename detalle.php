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

<!--<p>El numero es <?php echo $_GET['id'] ?></p> -->

<?php
$id=$_GET['id'];
$query = $db->query("SELECT * FROM mis_productos WHERE id=$id");
$row=$query->fetch_assoc();
?>
<section style="display: flex; align-items: center;justify-content: center; margin-right: 50px;">
    <div style='margin-right: 50px; margin-left:100px;margin-bottom:50px;'>
        <?php echo "<img style='max-width: 650px;' src=" . $row['url'] . '>' ?>
    </div>
    <div  style="text-align:center; display: flex; align-items: center;justify-content: center;">
    <div>
        <h1><?php echo $row['names'] ?></h1>
        <h4 style="color:black;" ><?php echo $row['description'] ?> </h4>
        <h2 style="color:black;" >$ <?php echo $row['price'] ?> USD</h2>
        <?php
        $query = $db->query("SELECT * FROM mis_productos ORDER BY id ASC LIMIT 10");
        if($query->num_rows > 0){ ?>
        <div >
                            <a style='text-align:center; display: flex; align-items: center;justify-content: center;'  class="btn btn-success" href="AccionCarta.php?action=addToCart&id=<?php echo $row["id"]; ?>">Agregar al Carrito</a>
        </div>
        <?php } else{ ?>
        <p>Producto(s) no existe.....</p>
        <?php } ?>
    </div>
    </div>
    </section>

    

    <footer class="footer">
        <p>Copyright &copy; 2020 ToysUp | Todos los derechos reservados</p>
    </footer>


</body>




</html>