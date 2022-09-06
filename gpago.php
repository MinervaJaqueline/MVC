<?php
/*Recibir parametros*/
$correo=$_POST['correo_electronico'];
$num_tarjeta=$_POST['num_tarjeta'];
$fecha=$_POST['fecha_vencimineto'];
$cvc=$_POST['cvc'];
$usuario=$_POST['usuario'];





/*Agregar archivo de conexion window.location='alimentos.html';</script>";*/
include("conecta.phtml");
$con=conecta();

$insert = "insert into pago values (default, '$correo', $num_tarjeta, '$fecha', $cvc, $usuario)";
mysqli_query($con,$insert);
print "<script> alert (\"Pago Registrado\")";


?>
