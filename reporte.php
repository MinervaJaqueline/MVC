<?php
require('fpdf/fpdf.php');


include ("conecta.phtml");
$con = conecta();
    if($con->connect_error)
    {
        die('Error de conexión ('.$con->connect_errno.')'. $con->connect_error);
    }
    else{
        $num = mysqli_num_rows(mysqli_query($con, "select * from rproducto;"));
        $con->close();
    }


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
  
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    $this->Cell(70, 10, 'Reporte de Productos', 1, 0 ,('C'));
    
    // Salto de línea
    $this->Ln(20);
    $this->Cell(10,10,utf8_decode('No.'), 1,0,('C'),0);
    $this->Cell(60,10,'Nombre', 1,0,('C'),0);
    $this->Cell(20,10,'Precio', 1,0,('C'),0);
    $this->Cell(30,10,'Inventario', 1,1,('C'),0);


}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10, utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
}

}

$con = conecta();
    $consulta ="select idRproducto, Nom_producto, Precio, inventario from rproducto;";
    $resultado= $con->query($consulta);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

while($mostrar=mysqli_fetch_assoc($resultado))
{
    $pdf->Cell(10,10,utf8_decode($mostrar['idRproducto']), 1,0,('C'),0);
    $pdf->Cell(60,10,utf8_decode($mostrar['Nom_producto']), 1,0,('C'),0);
    $pdf->Cell(20,10,utf8_decode($mostrar['Precio']), 1,0,('C'),0);
    $pdf->Cell(30,10,utf8_decode($mostrar['inventario']), 1,1,('C'),0);

}

$pdf->Output();
?>