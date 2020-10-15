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
	<li><a href="Registros.php">Regresar</a></li>
</ul> 
<p>
<?php
require 'conexion.php';

$dani=$_POST['dani'];
$danie=$_POST['danie'];
$aa=$danie;  
$a = "Pospago";

$nom=$dani;

if ($aa === $a) {

$registro = "SELECT * FROM datos a INNER JOIN dat b on a . id = b . id";
$re = mysqli_query($link, $registro);
if (mysqli_num_rows($re)>0) {
while ($extraido=mysqli_fetch_array($re)) 
{
$extraido['id'];
$Nombr=$extraido['id'];
$daniel = $Nombr;
$extraido['nombre'];
$extraido['domicilio'];
$extraido['numero'];
$extraido['costo'];
$extraido['periodo'];
$Nombre=$extraido['nombre'];
$Domicilio=$extraido['domicilio'];
$Numero=$extraido['numero'];  
$Costo=$extraido['costo'];
$Periodo=$extraido['periodo'];	
$peri = date("d/m/Y", strtotime($Periodo));
if ($daniel === $nom) {
	?>
			<p>
				<H1>Eliminar cliente</H1> </dir></dir> 
				<center>
			<form name ="formulario" action="Eliminar.php" onsubmit= "return validar()"method="post">
			<input name="dan" id="dan" type="tex" readonly= "readonly" maxlength="100" placeholder=" ID" value="<?php echo $dani; ?>">
				<label>Nombre</label>
<input REQUIRED name="nombre" type="text" maxlength="200" readonly= "readonly"  minlength="1" value="<?php echo$Nombre;?>">

			<label>Tipo de servicio</label>
			<input id="Servicio" name="Servicio" type="text" readonly= "readonly" minlength="1" value="<?php echo $a;?>">
			<label>Confirme Eliminación</label>
			<input type="Submit" value="Eliminar">
			</form>
			</center>
			</p>
		 <?php
     }
    }
   }
        }else{ 

		 $registr = "SELECT * FROM datoss a INNER JOIN datt b on a . id = b . aid";
		 $res = mysqli_query($link, $registr);
         if (mysqli_num_rows($res)>0) {
         while ($extraid=mysqli_fetch_array($res)) 
         {
			$extraid['id'];
			$Nombr=$extraid['id'];
			$danieln = $Nombr;
			$extraid['nombre'];
			$extraid['domicilio'];
			$extraid['numero'];
			$extraid['costo'];
			$extraid['periodo'];
			$Nombre=$extraid['nombre'];
			$Domicilio=$extraid['domicilio'];
			$Numero=$extraid['numero'];
			$b = "Pre pago";
			$Costo=$extraid['costo'];
			$Periodo=$extraid['periodo'];	
			$peri = date("d/m/Y", strtotime($Periodo));
         if ($danieln === $nom) {
			?>
			<p>
				<H1>Eliminar cliente</H1> </dir></dir> 
				<center>
			<form name ="formulario" action="Eliminar.php" onsubmit= "return validar()"method="post">
			<input name="dan" id="dan" type="tex" readonly= "readonly" maxlength="100" placeholder=" ID" value="<?php echo $dani; ?>">
				<label>Nombre</label>
<input REQUIRED name="nombre" type="text" maxlength="200" readonly= "readonly"  minlength="1" value="<?php echo$Nombre;?>">

			<label>Tipo de servicio</label>
			<input id="Servicio" name="Servicio" type="text" readonly= "readonly" minlength="1" value="<?php echo $b;?>">
			<label>Confirme Eliminación</label>
			<input type="Submit" value="Eliminar">
			</form>
			</center>
			</p>
				 <?php
              }
             }
            }
           }


?>

</body>
</html>