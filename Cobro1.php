<?php
  require 'sesion2.php';
  ?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
<title>Cobrar</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<br><br>
<ul class="menuu">
	<li><a href="Cobro21.html">Regresar</a></li>
</ul> 
<p>
<?php
require 'conexion.php';

$dani=$_POST['dani'];
$id = $dani;
$consulta = mysqli_query($link,"SELECT * from usersss where id = '$id'") or die ("<h2>Error de ver datos </h2>");


while ($extraido = mysqli_fetch_array($consulta))
{
 "<tr>";
	"<td>".$extraido['id'].'</td>';
	"<td>".$extraido['Nombre'].'</td>';
	"<td>".$extraido['Domicilio'].'</td>';
	"<td>".$extraido['Servicio'].'</td>';
	"<td>".$extraido['Costo'].'</td>';
	"<td>".$extraido['Periodo'].'</td>';

$daniel = $extraido['Costo'];

}
 
?>
</p>
<center><h1>Aplique descuento de ser necesario</h1>
</dir></dir></dir></dir>
<form name ="formulario" action="imprimir.php" onsubmit= "return validar()"method="post">

</dir></dir></dir>
<input name="dan" id="dan" type="tex" readonly= "readonly" maxlength="100" placeholder=" ID" value=" <?php echo $dani; ?>">
	<label>Costo mensual</label>

<input name=" costo" type="text" readonly= "readonly" maxlength="5" pattern="[0-9]+" placeholder="Costo" value=" <?php echo $daniel;?>"> 
	<label>   </label>
	<label>   </label>
	<label>   </label>
	<label>   </label>
	<label>   </label>

<input type="Submit" name="entrar" value="Cobrar">

</form>
</center>
</body>
<br/><br/>
</html>
 