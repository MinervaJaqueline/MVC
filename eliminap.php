<?php
/*Recibir parametros*/
$idpro=$_POST['idRproducto'];
$nom=$_POST['Nom_producto'];
$pre=$_POST['Precio'];
$inv=$_POST['inventario'];


    /*Agregar archivo de conexión*/
    include("conecta.phtml");
    $con=conecta();
    $eliminar="delete from rproducto where idRproducto=$idpro";
    mysqli_query($con,$eliminar);
    echo "Producto eliminado";

?>
<br>
<a href="listaproducto.php">Consulta productos</a>