<?php
require('fpdf/fpdf.php');

require 'conexion.php';

class PDF extends FPDF
{
// Cabecera de página
function Header()
{

	$this->image('zoro.png', 20, 22, 45);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    // Movernos a la derecha
    $this->Cell(135);
    // Título
    $this->Cell(30,10,'Recibo de pago',0,0,'D');
    $this->Ln(10);

    $this->SetFont('Arial','B',13);
    $this->Cell(50);
    $this->Cell(60,10,utf8_decode('Servicios de Tecnología, Internet y Entretenimiento'),0,0,'D');
    $this->Ln(8);

    $this->SetFont('Arial','B',10);
    $this->Cell(60);
    $this->Cell(30,10,'Av. Nacional#10',0,0,'C');
    $this->Ln(5);

    $this->SetFont('Arial','B',10);
    $this->Cell(85);
    $this->Cell(30,10,'Santa Catarina Villanueva, Quecholac, Puebla',0,0,'C');
    $this->Ln(9);

    $this->SetFont('Arial','B',8);
    $this->Cell(60);
    $this->Cell(30,10,'Tel: 01(XXX)XXXXXXX',0,0,'C');

    $this->Cell(55);
    date_default_timezone_set('America/Mexico_City');
    $actual = date("d - m - Y");
    $actua = date("h:i:s A");
    $this->Cell(10,10,'Fecha:', 0 , 0 , 'I');
    $this->Cell(10,10, $actual , 0 , 0 , 'I');
    $this->Cell(1);
    $this->SetFont('Arial','B',6);
    $this->Cell(-10,15, $actua , 0 , 0 , 'C');
    // Salto de línea  
    $this->Ln(20);

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',9);
    // Número de página
}
}
$dani=$_POST['dani'];
$aga=$_POST['aaaa'];
$id=$dani;
$consulta = "SELECT * FROM datoss a INNER JOIN datt b on a . id = b . aid where aid = '$id' and periodo = '$aga'";
$resultado = mysqli_query($link, $consulta);

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->SetDrawColor(0,0,0);
$pdf->SetLineWidth(1);
$pdf->Line(10,57,200,57);
 
 while ($extraido=mysqli_fetch_array($resultado)) 
 {

 $extraido['id'];
 $extraido['nombre'];
 $extraido['domicilio'];
 $extraido['numero'];
 $extraido['costo'];
 $extraido['periodo'];
 $Nombre=$extraido['nombre'];
 $paterno=$extraido['paterno'];
$materno=$extraido['materno'];
 $Domicilio=$extraido['domicilio'];
 $Numero=$extraido['numero'];
 $Servicio= "Pre pago";  
 $Costo=$extraido['costo'];
 $Periodo=$extraido['periodo'];	

 $dan = $Costo=$extraido['costo'];

 $fecha1 = $extraido['periodo'];

 $extraid = $extraido['costo'];
 date_default_timezone_set('America/Mexico_City');
 $fech = date("Y-m-d");

 if ($fech >= $fecha1) {
    
    $fecha2 = strtotime ( '+1 month',strtotime ( $fech ) ) ;
    $fecha2 = date ('Y-m-d' , $fecha2);
    $fe=$fech;
 $date1 = date_create($fecha2);
 $date2 = date_create($fech);
 $diff = $date1->diff($date2);

 $fec = strtotime ( '+1 month',strtotime ( $fech ) ) ;
 $fec = date ('Y-m-d' , $fec);
 
 $primero = $extraido['periodo'];
 $segundo = strtotime ( '+1 month',strtotime ( $primero ) ) ;
 $segundo = date ('Y-m-d' , $segundo);
 } else {

    $fecha2 = strtotime ( '+1 month',strtotime ( $fecha1 ) ) ;
    $fecha2 = date ('Y-m-d' , $fecha2);
$fe = $fecha1;
 $date1 = date_create($fecha2);
 $date2 = date_create($fe);
 $diff = $date1->diff($date2);

 $fec = strtotime ( '+1 month',strtotime ( $fech ) ) ;
 $fec = date ('Y-m-d' , $fec);
 
 $primero = $extraido['periodo'];
 $segundo = strtotime ( '+1 month',strtotime ( $primero ) ) ;
 $segundo = date ('Y-m-d' , $segundo);
 } 

 $total = $dani - $extraid;


     $pdf->SetTextColor(255, 255, 255);
    $pdf->SetFillColor(92, 217, 13);
    $pdf->SetFont('Arial','B',13);    
    $pdf->Cell(70);
   $pdf->Cell(50,7,'Detalles del servicio',0,0,'C',True);
        $pdf->SetTextColor(255, 255, 255);
    $pdf->SetFont('Arial','B',13);
    $pdf->Cell(12);
   $pdf->Cell(50,7,'Cobro actual',0,0,'C',True);
$pdf->Ln(8);  

    $pdf->SetFont('Arial','B',12);
     $pdf->SetTextColor(128);
    $pdf->Cell(5);
    $pdf->Cell(30,10,'Nombre',0,0,'I');
   $pdf->SetFont('Arial','B',9);
   $pdf->Cell(45);
   $pdf->Cell(30,10, 'Tipo de servicio', 0 , 0 , 'C' , 0);
   $pdf->Cell(25);
   $pdf->Cell(30,10, 'Periodo de cobro', 0 , 0 , 'D' , 0);

$pdf->Ln(8);

   $pdf->SetFont('Arial','B',10);
     $pdf->SetTextColor(0,0,0);
   $pdf->Cell(5);
   $pdf->Cell(30,10, "$Nombre $paterno $materno", 0 , 0 , 'I' , 0);

   $pdf->SetFont('Arial','B',10);
   $pdf->Cell(40);
$pdf->Cell(40,10, 'Pre pago', 0 , 0 , 'C' , 0);

   $pdf->SetFont('Arial','B',8);
   $pdf->Cell(20);
$pdf->Cell(15,10, $fe, 0 , 0 , 'D' , 0);
$pdf->Cell(3,10, ' - ', 0 , 0 , 'D' , 0);
$pdf->Cell(12,10, $fecha2, 0 , 0 , 'D' , 0);

   $pdf->Ln(9);

     $pdf->SetTextColor(128);
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(5);
   $pdf->Cell(30,10,'Domicilio',0,0,'I');

    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(45);
   $pdf->Cell(30,10,'Costo del Servicio',0,0,'D');

       $pdf->SetFont('Arial','B',9);
    $pdf->Cell(25);
   $pdf->Cell(30,10,'Dias a transcurrir',0,0,'D');

   $pdf->Ln(7);

     $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(5);
$pdf->Cell(30,10, $extraido['domicilio'], 0 , 0 , 'I' , 0);

   $pdf->SetFont('Arial','B',10);
   $pdf->Cell(52);
$pdf->Cell(10,10, "$ $extraid", 0 , 0 , 'C' , 0);

   $pdf->SetFont('Arial','B',10);
    $pdf->Cell(35);
$pdf->Cell(25,10, $diff->format("%a dias"), 0 , 0 , 'C' , 0);

$pdf->Ln(8);

$pdf->Ln(8);

     $pdf->SetTextColor(128);
       $pdf->SetFont('Arial','B',9);
    $pdf->Cell(135);
   $pdf->Cell(30,10,'Total a pagar',0,0,'D');

     $pdf->SetTextColor(0,0,0);
   $pdf->SetFont('Arial','B',10);
    $pdf->Cell(1);
$pdf->Cell(1,10,"$ $dan", 0 , 0 , 'D' , 0);

$pdf->Ln(40);

mysqli_query($link,"UPDATE datoss set nombre='$Nombre', domicilio='$Domicilio', numero='$Numero', costo='$Costo' where id='$id'");
mysqli_query($link,"UPDATE datt set periodo='$fecha2' where aid='$id'");

mysqli_query($link,"INSERT INTO registros (3id, 2idd, ida, periodo) VALUES('$id','$id','$fecha1','$fecha2')");

}

$pdf->SetFont('Arial','',6);
$pdf->SetTextColor(0,0,0);
    $pdf->Cell(20);
$pdf->Cell(110,3,"Dudas y aclaraciones", 0 , 1 , 'I' , 0);
    $pdf->Cell(20);

$pdf->SetFont('Arial','',6);
$pdf->Cell(110,3,utf8_decode("Cel: xxx(XX)XXXXXXXX Al llamar nosotros le devolveremos la llamada para evitar el posible costo que la marcación le generaría."), 0 , 0 , 'D' , 0);

$pdf->Ln(5);

    $pdf->Cell(20);
$pdf->SetFont('Arial','',6);
$pdf->Cell(110,3,utf8_decode("Le recordamos que en nuestra pagina de internet podra conocer detalles de nuestros servicios."), 0 , 1 , 'D' , 0);
    $pdf->Cell(20);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(110,3,utf8_decode("vnova.santacatarinavillanueva.com"), 0 , 0 , 'D' , 0);

$pdf->SetDrawColor(128);
$pdf->SetLineWidth(1);
$pdf->Line(25,145,170,145);
$pdf->Line(24,145,24,170);
$pdf->Line(170,145,170,170);
$pdf->Line(25,170,170,170);

$pdf->Output();


?>
