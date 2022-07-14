<?php
require 'conexion.php';

$nombre = utf8_decode($_POST['nombre']);
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$banco = $_POST['banco'];
$cuenta = $_POST['cuenta'];
$verificacion = $_POST['verificacion'];
$cantidad = $_POST['cantidad'];

?>