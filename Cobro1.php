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
$dan=$_POST['dan'];
$da=$_POST['da'];
$iddd = $dani;

$query = "SELECT * FROM datos a INNER JOIN tablapos b on a . id = b . iddd";

$consulta = mysqli_query($link,"SELECT * FROM datos a INNER JOIN tablapos b on a . id = b . iddd WHERE periodo = '$dan' AND nombre = '$da'") or die ("<h2>Error de ver datos </h2>");

while ($extraido = mysqli_fetch_array($consulta)) {
 "<tr>";
	"<td>".$extraido['idd'].'</td>';
	"<td>".$extraido['nombre'].'</td>';
	"<td>".$extraido['domicilio'].'</td>';
	"<td>".$extraido['costo'].'</td>';
	"<td>".$extraido['periodo'].'</td>';
     $daniel = $extraido['costo'];
$daa = $extraido['idd'];
}

?>
</p>
<center><h1>Segur@ de cobrar este recibo</h1>
</dir></dir></dir></dir>
<form name ="formulario" action="imprimir.php" onsubmit= "return validar()"method="post">

</dir></dir></dir>
<input name="dan" id="dan" type="tex" readonly= "readonly" maxlength="100" placeholder=" ID" value="<?php echo $dan; ?>">
<input name="daa" id="daa" type="tex" readonly= "readonly" maxlength="100" placeholder=" ID" value=" <?php echo $daa; ?>">
	<label>Costo mensual</label>

<input name=" costo" type="text" readonly= "readonly" maxlength="5" pattern="[0-9]+" placeholder="Costo" value="<?php echo $daniel;?>"> 
<input name="informa" type="tex" maxlength="200" placeholder="Ingrese información de ser necesario">	
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
 