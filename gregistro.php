<?php
/*Recibir parametros*/
$nombre=$_POST['Nombre'];
$apellido_paterno=$_POST['Apellido_pat'];
$apellido_materno=$_POST['Apellido_mat'];
$correo=$_POST['Correo_elec'];
$contrasena=$_POST['Contra'];

/*Agregar archivo de conexion*/
include("conecta.phtml");
$con=conecta();

$insert = "insert into usuario values (default, '$nombre', '$apellido_paterno', '$apellido_materno', '$correo', '$contrasena')";
mysqli_query($con,$insert);
print "<script> alert (\"Usuario Registrado\");window.location='iniciar_sesion.html';</script>";

?>
