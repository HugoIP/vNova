<?php
  require 'sesion.php';
  ?>
<?php
require 'conexion.php';


try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $Error) {
  die('Connection Failed: ' . $e->getMessage());
}
$Nombre =$_POST['Nombre'];
$Domicilio=$_POST['Domicilio'];
$Servicio=$_POST['Servicio'];
$Costo=$_POST['Costo'];
$Periodo=$_POST['Periodo'];
$perio = $_POST['Periodo'];

$sql = "INSERT INTO userss  VALUES('$Nombre','$Domicilio','$Servicio','$Costo','$Periodo')";

$period = strtotime ( '-1 DAY',strtotime ( $perio ) ) ;

$sql = "INSERT INTO user  VALUES('$Nombre','$Periodo','$period')";

$ejecutar=mysql_query($sql);

if (!$ejecutar) {
	echo "Error en los datos";
} else {
	echo "Datos guardados con exito";
}

?>