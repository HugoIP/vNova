<?php
require 'sesion.php';
  ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

</head>
<body> 
	<link rel="stylesheet" href="estilos.css">
<p>
  
<?php

require 'conexion.php';

$dan=$_POST['dan'];
$Nombre=$_POST['nombre'];
$Paterno=$_POST['paterno'];
$Materno=$_POST['materno'];
$Servicio=$_POST['servicio'];
$Domicilio=$_POST['domicilio'];
$Numero=$_POST['numero'];
$Costo=$_POST['costo'];
$Periodo=$_POST['periodo'];

$aa=$Servicio;  
$a = "Pospago";

$nom=$Nombre;

if ($aa === $a) {
   mysqli_query($link,"UPDATE dat set periodo='$Periodo' where id='$dan'") or die ("<h2>Error de envio </h2>");
   mysqli_query($link,"UPDATE datos set nombre='$Nombre', paterno='$Paterno', materno='$Materno', domicilio='$Domicilio', numero='$Numero', costo='$Costo' where id='$dan'") or die ("<h2>Error de envio </h2>");
     echo "Los datos del cliente de Pospago se modificado exitosamente";
        }else{ 
 mysqli_query($link,"UPDATE datt set periodo='$Periodo' where aid='$dan'") or die ("<h2>Error de envio </h2>");
 mysqli_query($link,"UPDATE datoss set nombre='$Nombre', paterno='$Paterno', materno='$Materno', domicilio='$Domicilio', numero='$Numero', costo='$Costo' where id='$dan'") or die ("<h2>Error de envio </h2>");
          echo "Los datos del cliente de Pre pago se modificado exitosamente";
           }
           echo '	 <ul class="menuuu">
           <li><a href="Registros.php">Regresar</a></li>
         </ul>';
?>
</p>
</body>
</html>
