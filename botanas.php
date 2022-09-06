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
            <a class="navbar-brand" href="./index.html"><img src="./src/img/Logo1.png" width="200px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto" style="padding: 0 2rem;">
                    <li class="nav-item" style="padding: 0 4rem;">
                        <a class="nav-link" href="./alimentos.php">ALIMENTOS</a>
                    </li>
                    <li class="nav-item" style="padding: 0 4rem;">
                        <a class="nav-link" href="./bebidas.php">BEBIDAS</a>
                    </li>
                    <li class="nav-item active" style="padding: 0 4rem;">
                        <a class="nav-link" href="./botanas.php">BOTANA <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" aria-label="Buscar" style="border-radius: 20px;">
                    <button class="btn my-2 my-sm-0" type="submit"><img src="./src/img/search.png" style="width: 1rem; margin-left: -6rem;"></button>
                </form>
                <div style="padding: 0 2rem;">
                   
                    <a href="./carrito.html"><img src="./src/img/shopping-cart.png" width="30px"></a>
                </div>
            </div>
        </nav>

        <?php

include ("conecta.phtml");
$con = conecta();
    if($con->connect_error)
    {
        die('Error de conexión ('.$con->connect_errno.')'. $con->connect_error);
    }
    else{
        $num = mysqli_num_rows(mysqli_query($con, "select Nom_producto, Precio from rproducto;"));
        $con->close();
    }
?>

<table align="center">
<?php 

$con = conecta();
    $consulta ="select Nom_producto, Precio from rproducto where categoria='dulceria' ;";
    $resultado= $con->query($consulta);
    $filas = $resultado->num_rows;
   
    
    for($x=0; $x<$filas; $x++)
    {
        $dato = $resultado->fetch_object();
        ?>
       
             <td>
                    <div>
                        <div class="card-deck" style="margin: 1rem;">
                            <div class="card shadow-lg" style="border-radius: 15px; border: none; height: 22rem;">
                            
                               <?php
                               $id = $x+1;
                               
                               
                               echo "<img class='card-img' src='./src/img/D".$id.".jpg' style='border-radius: 15px; height: 150px; width:260px;'>";

                               ?>
                                <div class="card-body">
                                    <div style="margin-top: -0.5rem;">
                                        <h5 class="card-title" style="font-family: 'Bangers'; font-size: 50px;"> 
                                        <?php
                                            echo $dato->Nom_producto;
                                        ?>
                                        </h5>
                                    </div>
                                    <div style="height: 120px; margin-bottom: 1rem;">
                                        <div class="row" style="margin-top: 0.5rem;">
                                            <div class="col-6">
                                                <p style="font-family: 'Bangers'; font-size: 30px; text-align: left;">$<?php echo $dato->Precio;?>
                                                
                                            </p>
                                            </div>
                                            <div class="col-6" style="padding-top: 5px;">
                                                <div class="row" style="display: inline-block; font-family: 'Roboto'; font-size: 22px; font-weight: bold; ">
                                                    <button class="btn btn-light" id='disminuir<?php echo $x+1;?>' onclick="disminuir<?php echo $x+1;?>()">-</button>
                                                    <input style="width:30px; text-align:center; border: none;" type='text' id="cantidad<?php echo $x+1;?>" value="0">
                                                    <button class="btn btn-light" id='aumentar<?php echo $x+1;?>' onclick="aumentar<?php echo $x+1;?>()">+</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-left: 5.5rem;">
                                            <button class="btn my-2 my-sm-0 shadow-lg" type="submit" style="background: #EA920F; border-radius: 10px; font-weight: bold; color: #FFFFFF; font-size: 12px;">Agregar al carrito</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
        </td>
            <?php
            if($x==4)
            {
                echo "<tr></tr>";
            }
        }
    ?>
        </div>
        </div>
</table>

</table>
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
        <script>
            var inicio1 = 0;
            var inicio2 = 0;
            var inicio3 = 0;
            var inicio4 = 0;
            var inicio5 = 0;
            var inicio6 = 0;
            var inicio7 = 0;
            var inicio8 = 0;
            var inicio9 = 0;
            var inicio10 = 0;

            function aumentar1(){
                var cantidad = document.getElementById('cantidad1').value = ++inicio1;
            }
            function aumentar2(){
                var cantidad = document.getElementById('cantidad2').value = ++inicio2;
            }
            function aumentar3(){
                var cantidad = document.getElementById('cantidad3').value = ++inicio3;
            }
            function aumentar4(){
                var cantidad = document.getElementById('cantidad4').value = ++inicio4;
            }
            function aumentar5(){
                var cantidad = document.getElementById('cantidad5').value = ++inicio5;
            }
            function aumentar6(){
                var cantidad = document.getElementById('cantidad6').value = ++inicio6;
            }
            function aumentar7(){
                var cantidad = document.getElementById('cantidad7').value = ++inicio7;
            }
            function aumentar8(){
                var cantidad = document.getElementById('cantidad8').value = ++inicio8;
            }
            function aumentar9(){
                var cantidad = document.getElementById('cantidad9').value = ++inicio9;
            }
            function aumentar10(){
                var cantidad = document.getElementById('cantidad10').value = ++inicio10;
            }

            function disminuir1(){
                if(inicio1 > 0){
                    var cantidad = document.getElementById('cantidad1').value = --inicio1;
                } else {
                    var cantidad = document.getElementById('cantidad1').value = 0;
                }
            }
            function disminuir2(){
                if(inicio2 > 0){
                    var cantidad = document.getElementById('cantidad2').value = --inicio2;
                } else {
                    var cantidad = document.getElementById('cantidad2').value = 0;
                }
            }
            function disminuir3(){
                if(inicio3 > 0){
                    var cantidad = document.getElementById('cantidad3').value = --inicio3;
                } else {
                    var cantidad = document.getElementById('cantidad3').value = 0;
                }
            }
            function disminuir4(){
                if(inicio4 > 0){
                    var cantidad = document.getElementById('cantidad4').value = --inicio4;
                } else {
                    var cantidad = document.getElementById('cantidad4').value = 0;
                }
            }
            function disminuir5(){
                if(inicio5 > 0){
                    var cantidad = document.getElementById('cantidad5').value = --inicio5;
                } else {
                    var cantidad = document.getElementById('cantidad5').value = 0;
                }
            }
            function disminuir6(){
                if(inicio6 > 0){
                    var cantidad = document.getElementById('cantidad6').value = --inicio6;
                } else {
                    var cantidad = document.getElementById('cantidad6').value = 0;
                }
            }
            function disminuir7(){
                if(inicio7 > 0){
                    var cantidad = document.getElementById('cantidad7').value = --inicio7;
                } else {
                    var cantidad = document.getElementById('cantidad7').value = 0;
                }
            }
            function disminuir8(){
                if(inicio8 > 0){
                    var cantidad = document.getElementById('cantidad8').value = --inicio8;
                } else {
                    var cantidad = document.getElementById('cantidad8').value = 0;
                }
            }
            function disminuir9(){
                if(inicio9 > 0){
                    var cantidad = document.getElementById('cantidad9').value = --inicio9;
                } else {
                    var cantidad = document.getElementById('cantidad9').value = 0;
                }
            }
            function disminuir10(){
                if(inicio10 > 0){
                    var cantidad = document.getElementById('cantidad10').value = --inicio10;
                } else {
                    var cantidad = document.getElementById('cantidad10').value = 0;
                }
            }
        </script>
    </body>
</html>