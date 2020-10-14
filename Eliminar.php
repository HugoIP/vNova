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

$dan=$_POST['dan'];
$Servicio=$_POST['Servicio'];
$aa=$Servicio;  
$a = "Pospago";

$nom=$dan;

if ($aa === $a) {
  mysqli_query($link,"DELETE from datos where id= '$dan'");
  mysqli_query($link,"DELETE from dat where id= '$dan'");
  mysqli_query($link,"DELETE from registro where 2idd= '$dan'");
  mysqli_query($link,"DELETE from tablapos where iddd= '$dan'");

     echo "El cliente de Pospago se elimino exitosamente";

        }else{ 
          mysqli_query($link,"DELETE from datoss where id= '$dan'");
          mysqli_query($link,"DELETE from datt where aid= '$dan'");
          mysqli_query($link,"DELETE from registros where 2idd= '$dan'");
          
              echo "El cliente de Pre pago se elimino exitosamente";
             
           }

echo '	 <ul class="menuuu">
	<li><a href="Registros.php">Regresar</a></li>
</ul>';
?>
</p>
</body>
</html>
