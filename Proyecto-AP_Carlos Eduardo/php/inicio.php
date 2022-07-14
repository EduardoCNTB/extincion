<?php
require 'conexion.php';
$usuario= utf8_decode($_POST['usuario1']);
$apellido= utf8_decode($_POST['apellido1']);
$Email= utf8_decode($_POST['correo1']);
$Password= utf8_decode($_POST['contra1']);
$q = "SELECT COUNT(*) as animales from sesion where usuario = '$usuario' and apellido = '$apellido' and correo = '$Email' and contra = '$Password'";

$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);

if ($array['animales']>0){
    header("location: ../index.html");

}else{
    echo "datos incorrectos";
}
?>