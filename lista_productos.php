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
        include ("conecta.phtml");
        $con = conecta();
        $consulta ="select Nom_producto, Precio, inventario from rproducto;";
        $resultado= $con->query($consulta);
        $filas = $resultado->num_rows;
        ?>

        <div style="margin: 2rem;">
            <div class="row">
                <div class="col-8">
                    <h5 class="card-title" style="margin-top: 1rem; font-family: 'Bangers'; font-size: 60px;">LISTA DE PRODUCTOS</h5>
                </div>
                <div class="col-4" style="margin-top: -4.5rem; margin-left: 75rem;">
                    <button class="btn my-2 my-sm-0 shadow-lg" type="submit" style="width: 11rem; height: 2.5rem; background: #ffffff; border-radius: 20px;">
                        <a href="./registrar_producto.html" style="font-weight: bold; color: #525252; font-size: 12px; text-decoration: none;">REGISTRAR PRODUCTO</a>
                    </button>
                </div>
            </div>
            <table align="center">
                <tr style="font-family: 'Roboto'; border: 1px solid #707070; background-color: #EA920F; color: #FFFFFF;">
                   
                    <th style="width: 10rem; text-align: center; border: 1px solid #707070;">Producto</th>
                    <th style="width: 10rem; text-align: center; border: 1px solid #707070;">Precio</th>
                    <th style="width: 10rem; text-align: center; border: 1px solid #707070;">Inventario</th>
                   
                </tr>
                <?php
                //style="padding-left: 1rem;" style="text-align: center;">
                                for($x=0; $x<$filas; $x++)
                                {
                                    $dato = $resultado->fetch_object();
                                       
                                    
                                
                                        echo "<td>".$dato->Nom_producto."</td>";
                                        echo "<td>".$dato->Precio."</td>";
                                        echo "<td>".$dato->inventario."</td>";
                                        echo "<tr>";                
                    
                                    }
                                    ?>
                
            </table>
        </div>
        <footer class="text-center text-white" style="background-color: #EA920F;">
            <div class="container pt-4">
                <section class="mb-4">
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="www.facebook.com" role="button" data-mdb-ripple-color="dark">
                        <i class="fab fa-facebook-f"><img src="./src/img/facebook.png" style="width: 30px; margin-top: -20px;"></i>
                    </a>
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="www.twitter.com" role="button" data-mdb-ripple-color="dark">
                        <i class="fab fa-twitter"><img src="./src/img/twitter-sign.png" style="width: 30px; margin-top: -20px;"></i>
                    </a>
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="www.instagram.com" role="button" data-mdb-ripple-color="dark">
                        <i class="fab fa-instagram"><img src="./src/img/instagram.png" style="width: 30px; margin-top: -20px;"></i>
                    </a>
                </section>
            </div>
        </footer>
    </body>
</html>