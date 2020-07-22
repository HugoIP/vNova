<?php
  require 'sesion.php';
  ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<title>Eliminar</title>
</head>
<center>
<body> 
	<link rel="stylesheet" href="estilos.css">
<p>
</dir></dir></dir></dir></dir></dir>
<?php

require 'conexion.php';


$daniel=$_POST['costo'];
$dan=$_POST['dan'];
$id=$dan;

mysqli_query($link,"DELETE from usersss where id= '$id'") or die ("<h2>Error al ingresar los datos </h2>");
echo "</dir></dir></dir></dir></dir></dir><a>El cliente se elimino exitosamente</a>";


echo '<a href="Cobro2.html"> Regresar</a>';
?>
</p>
</body>
</center>
</html>
