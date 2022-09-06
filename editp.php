<?php
/*Recibir parametros*/
$idpro=$_POST['idRproducto'];
$nom=$_POST['Nom_producto'];
$pre=$_POST['Precio'];
$inv=$_POST['inventario'];



    /*Agregar archivo de conexión*/
    include("conecta.phtml");
    $con=conecta();
    $actualiza="update rproducto set idRproducto=$idpro, Nom_producto='$nom', Precio='$pre', inventario='$inv' where idRproducto=$idpro";
    mysqli_query($con,$actualiza);
    echo "Producto guardado";

?>
<br>
<a href="listaproducto.php">Consulta producto</a>