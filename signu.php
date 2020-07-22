<?php
  require 'sesion.php';
  ?>
  <!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrar</title>
<link rel="stylesheet" href="estilos.css">
  </head>
  <body>
<p>
    <?php

require 'conexion.php';

$Nombre=$_POST['Nombre'];
$Domicilio=$_POST['Domicilio'];
$Servicio=$_POST['Servicio'];  
$Costo=$_POST['Costo'];
$Periodo=$_POST['Periodo'];
echo "Los datos registrados del cliente son: </br></br>";
echo "Nombre: $Nombre </br>";
echo "Domicilio: $Domicilio </br>";
echo "Servicio: $Servicio </br>";
echo "Costo: $Costo </br>";
echo "Periodo: $Periodo </br></br>";

mysqli_query($link,"INSERT INTO userss (Nombre, Domicilio, Servicio, Costo, Periodo)VALUES('$Nombre','$Domicilio','$Servicio','$Costo','$Periodo')") or die ("<h2>Error de envio </h2>");

echo "Datos ingresados exitosamente</br></br></br>";
echo '	 <ul class="menuuu">
	<li><a href="Inicio.php">Regresar</a></li>
</ul>';
?>
</p>
  </body>
</html>
