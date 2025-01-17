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
                        <a class="nav-link" href="./alimentos.html">ALIMENTOS <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" style="padding: 0 4rem;">
                        <a class="nav-link" href="./bebidas.html">BEBIDAS</a>
                    </li>
                    <li class="nav-item" style="padding: 0 4rem;">
                        <a class="nav-link" href="./botanas.html">BOTANA</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" aria-label="Buscar" style="border-radius: 20px;">
                    <button class="btn my-2 my-sm-0" type="submit"><img src="./src/img/search.png" style="width: 1rem; margin-left: -6rem;"></button>
                </form>
                <div style="padding: 0 2rem;">
                    <a href="./iniciar_sesion.html" style="padding: 0 8px;"><img src="./src/img/user.png" width="30px"></a>
                    <a href="./carrito.html"><img src="./src/img/shopping-cart.png" width="30px"></a>
                </div>
            </div>
        </nav>
        <form method="post" action="gpago.php">
        <div style="height: 33rem;">
            <div class="card-deck" style="margin: 6rem 10rem 2rem 31rem; width: 30rem; height: 28rem;">
                <div class="card shadow-lg" style="border-radius: 15px; border: none;">
                    <div class="card-body">
                        <h5 class="card-title" style="margin-top: 1rem; text-align: center; font-family: 'Bangers'; font-size: 60px;">PAGAR </h5>
                        <div style="margin-top: 0.5rem;">
                            <span style="font-family: 'Roboto'; font-weight: bolder; margin-left: 2rem;">E-MAIL:</span>
                            <input type="mail" name="correo_electronico" style="margin-top: 0.5rem; width: 22rem; margin-left: 2rem; border: 0; border-radius: 10px; background: #c7c7c7;">
                        </div>
                        <div style="margin-top: 0.5rem;">
                            <span style="font-family: 'Roboto'; font-weight: bolder; margin-left: 2rem;">NÚMERO DE TARJETA:</span>
                            <input type="text" name="num_tarjeta" style="margin-top: 0.5rem; width: 22rem; margin-left: 2rem; border: 0; border-radius: 10px; background: #c7c7c7;">
                        </div>
                        <div class="row" style="margin-left: 3rem;">
                            <div class="col-8"  style="padding: 0;">
                                <div style="margin-top: 0.5rem;">
                                    <span style="font-family: 'Roboto'; font-weight: bolder; margin-left: -1rem;">FECHA DE VENCIMIENTO:</span>
                                    <input type="date" name="fecha_vencimineto" style="margin-top: 0.5rem; margin-left: -1rem; padding-left: 1rem; width: 15rem; border: 0; border-radius: 10px; background: #c7c7c7;">
                                </div>
                            </div>
                            <div class="col-4"  style="padding: 0;">
                                <div style="margin-top: 0.5rem;">
                                    <div>
                                        <span style="font-family: 'Roboto'; font-weight: bolder; margin-left: -1rem;">CVC:</span>
                                    </div>
                                    <div>
                                        <input type="text" name="cvc" style="margin-top: 0.5rem; margin-left: -1rem; padding-left: 1rem; width: 6rem; border: 0; border-radius: 10px; background: #c7c7c7;">
                                    </div>
                                </div>
                            </div>
                        
                            
                            <input type= "tetx" value = "hola" hidden > 
                        

                           
                        </div>
                        <div style="margin-top: 3.5rem; text-align: center;">
                            <div style="margin-top: 1.5rem;">
                                <button class="btn my-2 my-sm-0 shadow-lg" type="submit" style="width: 8rem; height: 2.5rem; background: #EA920F; border-radius: 20px; font-weight: bold; color: #ffffff; font-size: 12px; text-decoration: none;">
                                    PAGAR
                                </button>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
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