<?php
/*Recibir parametros*/
$nombre=$_POST['Nom_producto'];
$precio=$_POST['Precio'];
$categoria=$_POST['Categoria'];
$clave=$_POST['clave'];
$inventario=$_POST['inventario'];
/*Agregar archivo de conexion*/
include("conecta.phtml");
$con=conecta();

$insert = "insert into rproducto values (default, '$nombre', $precio, '$categoria','$clave',$inventario);";
//echo $insert;  
mysqli_query($con,$insert);
print "<script> alert (\"Producto Registrado\");window.location='registrar_producto.html';</script>";
?>