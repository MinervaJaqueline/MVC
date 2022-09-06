<?php
/*Recibir parametros*/
$idproducto=$_POST['idrproducto'];
$nombre=$_POST['num_producto'];
$precio=$_POST['precio'];
$categoria=$_POST['categoria'];



/*Agregar archivo de conexion window.location='alimentos.html';</script>";*/
include("conecta.phtml");
$con=conecta();

$consulta ="select Nom_producto from rproducto where idRproducto='$idproducto';";
$resultado= $con->query($consulta);

?>

