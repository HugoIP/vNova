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
$daniel = $dan=$_POST['dan'];
$registro = "SELECT * FROM users";

  if($daniel === $dan){
    mysqli_query($link,"DELETE from users where id = '$dan'");
      echo "El empleado se elimino exitosamente";
     }else{ 
       echo "El empleado no existe :(";
      
          }

        
echo '	 <ul class="menuuu">
	<li><a href="Registross.php">Regresar</a></li>
</ul>';
?>
</p>
</body>
</html>
