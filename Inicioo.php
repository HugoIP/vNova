<?php
  require 'sesion2.php';
  ?>
<?php

require 'conexion.php';

$registro = "SELECT * FROM userss";
$re = mysqli_query($link, $registro);
if (mysqli_num_rows($re)>0) {
while ($extraido=mysqli_fetch_array($re)) 
{
$extraido['id'];
$extraido['Nombre'];
$extraido['Domicilio'];
$extraido['Numero'];
$extraido['Servicio'];
$extraido['Costo'];
$extraido['Periodo'];
$Nombre=$extraido['Nombre'];
$Domicilio=$extraido['Domicilio'];
$Numero=$extraido['Numero'];
$Servicio=$extraido['Servicio'];  
$Costo=$extraido['Costo'];
$Periodo=$extraido['Periodo'];

$fecha1 = $extraido['Periodo'];
$fecha2 = strtotime ( '+1 month',strtotime ( $fecha1 ) ) ;
$fecha2 = date ('Y-m-d' , $fecha2);

date_default_timezone_set('America/Mexico_City');
$actual = date("Y-m-d");
if ($actual >= $fecha1) {
$contenido = "Nombre del cliente: " .$Nombre . "\n Domicilio: ".$Domicilio."\n Numero: ".$Numero."\n Tipo de Servicio: ".$Servicio."\n Costo: ".$Costo."\n Fecha de pago: ".$Periodo;
mail("dannn-pl@hotmail.com", "Recordatorio se genero recibo",$contenido);  
mysqli_query($link,"UPDATE userss set Periodo='$fecha2' where Nombre='$Nombre'  ");
mysqli_query($link,"INSERT INTO usersss (Nombre, Domicilio, Numero, Servicio, Costo, Periodo) VALUES('$Nombre','$Domicilio','$Numero','$Servicio','$Costo','$Periodo')");
	 }
	}
  }
mysqli_close($link);

//mysqli_query($link,"INSERT INTO usersss (Nombre, Domicilio, Servicio, Costo, Periodo) VALUES('$Nombre','$Domicilio','$Servicio','$Costo','$Periodo')");

?>
<!doctype html>
<html>

<head>
<title>vNova</title>
<meta charset="utf-8">
<h2>vNova Internet</h2>
<script src="http://code.jquery.com/jquery-latest.js"></script>

<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<link rel="stylesheet" href="estilos.css">
<script type="text/javascript">
	function cargarContenido(pagina)
	{
$("#principal").load(pagina);
	}
</script>
</head>
<header>
	 <ul class="menuu">
	<li><a href="logout.php">Finalizar sesion</a></li>
</ul>
<br>
</header>
<body> 
	<header>

<ul class="menu">
<li><a href="Cobro21.html">Cobrar Servicio</a></li>

	<li><a href="Cobro2221.html">Prepago</a></li>
</ul>


</header>


</body>
</html>