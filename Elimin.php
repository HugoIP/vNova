<?php
  require 'sesion.php';
  ?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
<title>Cobrar</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<br>
<ul class="menuu">
	<li><a href="Registross.php">Regresar</a></li>
</ul> 
<p>
<?php
require 'conexion.php';

$dani=$_POST['dani'];
$danie=$_POST['danie'];
$aa=$danie;  

$nom=$dani;

$registro = "SELECT * FROM users";
$re = mysqli_query($link, $registro);
if (mysqli_num_rows($re)>0) {
while ($extraido=mysqli_fetch_array($re)) 
{
$extraido['id'];
$id=$extraido['id'];
$daniel = $Nombr;
$extraido['email'];
$email = $extraido['email'];
if ($id === $nom) {
	?>
			<p>
				<H1>Eliminar Empleado</H1> </dir></dir> 
				<center>
			<form name ="formulario" action="Elimi.php" onsubmit= "return validar()"method="post">
			<input name="dan" id="dan" type="tex" readonly= "readonly" maxlength="100" placeholder=" ID" value="<?php echo $dani; ?>">
			<label>Usuario</label>
			<input id="Servicio" name="Servicio" type="text" readonly= "readonly" value="<?php echo $email;?>">
			<label>Confirme Eliminación</label>
			<input type="Submit" value="Eliminar">
			</form>
			</center>
			</p>
		 <?php
	 }
	 
    }
   }
        
?>

</body>
</html>