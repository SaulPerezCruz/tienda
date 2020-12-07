<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'id15575709_root';
$dbPassword = 'YULIOSyulios1#';
$dbName = 'id15575709_carta';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("No hay Conexion con la base de datos: " . $db->connect_error);
} 
?>