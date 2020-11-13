<?php
    include('conexion.php');

    $obj = new Conexion;
    
    $nombre=$_POST['nombre_contacto'];
    $correo=$_POST['correo_contacto'];
    $asunto=$_POST['asunto_contacto'];
    $mensaje=$_POST['mensaje_contacto'];

    $res = $obj->guardarComentario($nombre, $correo, $asunto, $mensaje); 

    if($res == 1){
        $datos = array('dato' => 'ok');
    }else{
        $datos = array('dato' => 'no');
    }
    
    echo json_encode($datos, JSON_FORCE_OBJECT);
?>