<?php
 require 'sesion.php';
  ?>
<?php

require 'conexion.php';

$registro = "SELECT * FROM datos";
$re = mysqli_query($link, $registro);
if (mysqli_num_rows($re)>0) {
while ($extraido=mysqli_fetch_array($re))
{

$extraido['id'];
$id=$extraido['id'];

$quer = mysqli_query($link,"SELECT * FROM dat where id = '$id'");
$extraid = mysqli_fetch_array($quer);

$extraido['nombre'];
$extraido['paterno'];
$extraido['materno'];
$extraido['domicilio'];
$extraido['numero'];
$extraido['costo'];
$extraid['periodo'];
$Nombre=$extraido['nombre'];
$Paterno=$extraido['paterno'];
$Materno=$extraido['materno'];
$Domicilio=$extraido['domicilio'];
$Numero=$extraido['numero'];
$Servicio= "Pospago";  
$Costo=$extraido['costo'];
$Periodo=$extraid['periodo'];

$fecha1 = $extraid['periodo'];
$fecha2 = strtotime ( '+1 month',strtotime ( $fecha1 ) ) ;
$fecha2 = date ('Y-m-d' , $fecha2);

date_default_timezone_set('America/Mexico_City');
$actual = date("Y-m-d");
if ($actual >= $fecha1) {
$contenido = "Nombre del cliente: " .$Nombre." ".$Paterno." ".$Materno . "\n Domicilio: ".$Domicilio."\n Numero: ".$Numero."\n Tipo de Servicio: ".$Servicio."\n Costo: ".$Costo."\n Fecha de pago: ".$Periodo;
mail("dannn-pl@hotmail.com", "Recordatorio se genero recibo",$contenido);  
mysqli_query($link,"UPDATE dat set periodo='$fecha2' where id ='$id'");

mysqli_query($link,"INSERT INTO tablapos (iddd, periodo) VALUES('$id','$Periodo')");

}
	}
  }
mysqli_close($link);
//mysqli_query($link,"UPDATE dat set periodo='$fecha2' where id ='$id'");
//mysqli_query($link,"INSERT INTO tablapos (iddd, periodo) VALUES('$id','$Periodo')");
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
	 <ul class="menuuu">
	<li><a href="Cobro2.html">Cobrar Pospago</a></li>
	<li><a href="Cobro222.html">Cobrar Prepago</a></li>
</ul>
<br>
<div class="contenedor">
<center>
<ul class="menu">
 	<li><a onClick="cargarContenido('Cliente.html')" href="#"> Registrar Cliente</a></li>
	<li><a onClick="cargarContenido('signup2.php')" href="#">Registrar Usuario</a></li>
	<li><a href="#">Registros</a>

	<ul class= "des">
<li><a href="Registros.php">Clientes</a></li>
<li><a href="Registross.php">Usuarios</a></li>
</ul>
	</li>
	
	<li><a href="#">Historial</a>

	<ul class= "des">
<li><a href="Cobro22.html">Pospago</a></li>
<li><a href="Cobro221.html">Pre pago</a></li>
</ul>

</li>
	<li><a href="Registrosss.php">Bitácora</a></li>

	</a></li>
</ul>
</center>

</div>
	<div id= "principal" class="contenedor">

</header>

</body>
</html>