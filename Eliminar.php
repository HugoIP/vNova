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
<body> 
	<link rel="stylesheet" href="estilos.css">
<p>
<?php
require 'conexion.php';

$nombre=$_POST['nombre'];
$Nombree=$nombre;

mysqli_query($link,"DELETE from userss where nombre= '$nombre'") or die ("<h2>Error de eliminacion </h2>");
mysqli_query($link,"DELETE from user where Nombree= '$Nombree'");

echo "El cliente se elimino exitosamente";
echo '	 <ul class="menuuu">
	<li><a href="Inicio.php">Regresar</a></li>
</ul>';
?>
</p>
</body>
</html>
