<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers">
        <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="./bootstrap/js/bootstrap.js"></script>
        <title> Unifast </title>
    </head>
    <body style="font-family: 'Roboto';">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #EA920F; font-weight: bold; color: #FFFFFF;">
            <a class="navbar-brand" href="./indexAdmin.html"><img src="./src/img/Logo1.png" width="200px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto" style="padding: 0 2rem;">
                    <li class="nav-item" style="padding: 0 4rem;">
                        <a class="nav-link" href="./alimentosAdmin.php">ALIMENTOS <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" style="padding: 0 4rem;">
                        <a class="nav-link" href="./bebidasAdmin.php">BEBIDAS</a>
                    </li>
                    <li class="nav-item" style="padding: 0 4rem;">
                        <a class="nav-link" href="./botanasAdmin.php">BOTANA</a>
                    </li>
                    <li class="nav-item" style="padding: 0 4rem;">
                        <a class="nav-link" href="./listaproducto.php">LISTA DE PRODUCTOS</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" aria-label="Buscar" style="border-radius: 20px;">
                    <button class="btn my-2 my-sm-0" type="submit"><img src="./src/img/search.png" style="width: 1rem; margin-left: -6rem;"></button>
                </form>
                <div style="padding: 0 2rem;">
                    <a href="./iniciar_sesionAdmin.php" style="padding: 0 8px;"><img src="./src/img/user.png" width="30px"></a>
                    <a href="./carrito.html"><img src="./src/img/shopping-cart.png" width="30px"></a>
                </div>
            </div>
        </nav>

<?php

	$id=$_GET['idRproducto'];
	include("conecta.phtml");
    
?>
<form action="editp.php" method="POST">
    <table align= "center" border="1">
        <tr>
            <th>No.</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Inventario</th>
            <th colspan="2">Acci&oacute;n</th>
        </tr>
    <?php 
        $con = conecta();
        
        $consulta ="select idRproducto, Nom_producto, Precio, inventario from rproducto where idRproducto=$id";
        $resultado= $con->query($consulta);
        $resultado= $con->query($consulta);
        $filas = $resultado->num_rows;
        for($x=0; $x<$filas; $x++)
        {
            $dato = $resultado->fetch_object();
            echo "<tr>";
            echo "<td><input type='text' name='idRproducto' readonly value=' ".$dato->idRproducto."'></td>";
			echo "<td> <input type='text' name='Nom_producto' value='".$dato->Nom_producto."'></td>";
			echo "<td> <input type='text' name='Precio' value='".$dato->Precio."'></td>";
			echo "<td> <input type='text' name='inventario' value='".$dato->inventario."'></td>";
			echo "<td> <input type='submit' value='Actualizar'";
			echo "</tr>";

            
        }
    ?>
</table>
</form>

