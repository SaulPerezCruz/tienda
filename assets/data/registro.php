<?php
    include('carritocon.php');

    $obj = new Conexion1;
    
    $usuario=$_POST['inputUser'];
    $contrasena=$_POST['inputPassword'];
    $nombre=$_POST['inputNombre'];
    $correo=$_POST['inputCorreo'];

    $res = $obj->guardarUsuario($usuario, $contrasena, $nombre, $correo); 

    if($res == 1){
        $datos = array('dato' => 'ok');
    }else{
        $datos = array('dato' => 'no');
    }
    
    echo json_encode($datos, JSON_FORCE_OBJECT);
?>