<?php
// include database configuration file
include 'Configuracion.php';

// initializ shopping cart class
include 'La-carta.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: principal.php");}

// set customer ID in session
$_SESSION['sessCustomerID'] = 1;

// get customer details by session customer ID
$query = $db->query("SELECT * FROM clientes WHERE id = ".$_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pagos - PHP Carrito de compras Tutorial</title>
    <meta charset="utf-8">
    <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/fondo.css">
    <link rel="stylesheet" href="assets/css/principal.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="stylespro.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{padding: 20px;}
    .table{width: 65%;float: left;}
    .shipAddr{width: 30%;float: left;margin-left: 30px;}
    .footBtn{width: 95%;float: left;}
    .orderBtn {float: right;}
    </style>
</head>
<body class="fondo">
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
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading"> 

<ul class="nav nav-pills">
  <li role="presentation"><a href="principal.php">Inicio</a></li>
  <li role="presentation"><a href="VerCarta.php">Ver Carta</a></li>
  <li role="presentation" class="active"><a href="Pagos.php">Pagos</a></li>
</ul>
</div>

<div class="panel-body">
    <h1>Vista previa de la Orden</h1>
    <table class="table" style="text-align:center;  align-items: center;">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Pricio</th>
            <th>Cantidad</th>
            <th>Sub total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' USD'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No hay articulos en tu carta......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' USD'; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    <div class="footBtn">
        <a href="producto.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Seguir Comprando</a>
    </div>
  

 
 </div><!--Panek cierra-->
</div>

<form action="/process_payment" method="post" id="paymentForm" style=" text-align:center; display: flex; align-items: center;justify-content: center;">
<div>
   <h3>Detalles del comprador</h3>
     <div>
       <div>
         <label for="email">E-mail</label>
         <input id="email" name="email" type="text" value="test@test.com"/>
       </div>
       <div>
         <label for="docNumber">Número de documento</label>
         <input id="docNumber" name="docNumber" data-checkout="docNumber" type="text"/>
       </div>
     </div>
   <h3>Detalles de la tarjeta</h3>
     <div>
       <div>
         <label for="cardholderName">Titular de la tarjeta</label>
         <input id="cardholderName" data-checkout="cardholderName" type="text">
       </div>
       <div>
         <label for="">Fecha de vencimiento</label>
         <div>
           <input type="text" placeholder="MM" id="cardExpirationMonth" data-checkout="cardExpirationMonth"
             onselectstart="return false" onpaste="return false"
             oncopy="return false" oncut="return false"
             ondrag="return false" ondrop="return false" autocomplete=off>
           <span class="date-separator">/</span>
           <input type="text" placeholder="YY" id="cardExpirationYear" data-checkout="cardExpirationYear"
             onselectstart="return false" onpaste="return false"
             oncopy="return false" oncut="return false"
             ondrag="return false" ondrop="return false" autocomplete=off>
         </div>
       </div>
       <div>
         <label for="cardNumber">Número de la tarjeta</label>
         <input type="text" id="cardNumber" data-checkout="cardNumber"
           onselectstart="return false" onpaste="return false"
           oncopy="return false" oncut="return false"
           ondrag="return false" ondrop="return false" autocomplete=off>
       </div>
       <div>
         <label for="securityCode">Código de seguridad</label>
         <input id="securityCode" data-checkout="securityCode" type="text"
           onselectstart="return false" onpaste="return false"
           oncopy="return false" oncut="return false"
           ondrag="return false" ondrop="return false" autocomplete=off>
       </div>
       <div id="issuerInput">
         <label for="issuer">Banco emisor</label>
         <select id="issuer" name="issuer" data-checkout="issuer"></select>
       </div>
       <div>
         <label for="installments">Cuotas</label>
         <select type="text" id="installments" name="installments"></select>
       </div>
       <div>
         <input type="hidden" name="transactionAmount" id="transactionAmount" value="100" />
         <input type="hidden" name="paymentMethodId" id="paymentMethodId" />
         <input type="hidden" name="description" id="description" />
         <br>
         <button class="btn btn-warning" type="submit">Pagar</button>
         <br>
       </div>
   </div>
   </div>
 </form>

<footer  class="footer">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                <p style="margin-top:20px;">Copyright &copy; 2020 ToysUp | Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/mp.js"></script>

</body>
</html>