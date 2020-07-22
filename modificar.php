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

$Nombre=$_POST['Nombre'];
$Domicilio=$_POST['Domicilio'];
$Servicio=$_POST['Servicio'];
$Costo=$_POST['Costo'];
$Periodo=$_POST['Periodo'];

mysqli_query($link,"UPDATE userss set Domicilio='$Domicilio', Servicio='$Servicio', Costo='$Costo', Periodo='$Periodo' where Nombre='$Nombre'") or die ("<h2>Error de envio </h2>");

echo "Los datos sean Modificado exitosamente";
echo '
<a href="Registros.php"> Regresar</a>
';
?>
</p>
</body>
</html>