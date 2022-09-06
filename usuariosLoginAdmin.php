<?php
    session_start();
    include ("conecta.phtml");
    $con=conecta();


    if(isset($_POST)) {
        $usuario = $_POST['Correo_electronico'];
        $contra = $_POST['Contrasena'];

        $sql = "SELECT * from usuario where Correo_electronico='$usuario' AND Contrasena='$contra'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);


        if($count == 1) {
            $_SESSION['Correo_electronico'] = $usuario;
        } else {
            print("<script>alert(\"Accesso Invalido.\");window.location='iniciar_sesionAdmin.php';</script>");
        }
    }

    if(isset($_SESSION['Correo_electronico'])){
        print("<script>window.location='registrar_producto.html';</script>");
    }
?>