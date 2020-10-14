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

$registro = "SELECT * FROM datos a INNER JOIN dat b on a . id = b . id ";
$re = mysqli_query($link, $registro);
if (mysqli_num_rows($re)>0) {
while ($extraido=mysqli_fetch_array($re)) 
{
$extraido['id'];
$Nombr=$extraido['id'];
$daniel = $Nombr;
$extraido['nombre'];
$extraido['paterno'];
$extraido['materno'];
$extraido['domicilio'];
$extraido['numero'];

$extraido['costo'];
$extraido['periodo'];
$Nombre=$extraido['nombre'];
$Paterno=$extraido['paterno'];
$Materno=$extraido['materno'];
$Domicilio=$extraido['domicilio'];
$Numero=$extraido['numero'];
$Servicio=$a;  
$Costo=$extraido['costo'];
$Periodo=$extraido['periodo'];	
$peri = date("d/m/Y", strtotime($Periodo));
if ($daniel === $nom) {
	?>
			<p>
				<H1>Modificar datos del cliente</H1> </dir></dir> 
				<center>
<form name ="formulario" action="modificar.php" onsubmit= "return validar()"method="post">
<label>Nombre</label>
<input name="dan" id="dan" type="tex" readonly= "readonly" maxlength="100" placeholder=" ID" value=" <?php echo $dani; ?>">
<input REQUIRED name="nombre" type="text" maxlength="200" placeholder="Nombre" minlength="1"idd="Pere" value="<?php echo$Nombre;?>">
<label>Paterno</label>                
<input REQUIRED name="paterno" type="text" maxlength="200" placeholder="Nombre" minlength="1"idd="Pere" value="<?php echo$Paterno;?>">
<label>Materno</label>
<input REQUIRED name="materno" type="text" maxlength="200" placeholder="Nombre" minlength="1"idd="Pere" value="<?php echo$Materno;?>">                
<label>Domicilio</label>			
<input REQUIRED name="domicilio" type="text" maxlength="200" placeholder="Domicilio"idd="Pere" value="<?php echo$Domicilio;?>">
<label>Número</label>
<input REQUIRED name="numero" type="text" maxlength="11" placeholder="Numero"  idd="Pere" value="<?php echo $Numero;?>">
<label>Tipo de servicio</label>
<input id="servicio" name="servicio" type="text" readonly= "readonly" placeholder="Pospago" idd="Pere" value="<?php echo $Servicio;?>">
<label>Costo mensual</label>
<input REQUIRED type="text" name="costo" maxlength="10" placeholder="$ Costo" min="50" pattern="[0-9]+"idd="Pere" value="<?php echo $Costo;?>">
<label>Fecha de cobro</label>
<?php echo $peri;?>
<input REQUIRED name="periodo" type="date" placeholder="Fecha de cortes" min="2020-01-01" idd="Pere">
			<input type="Submit" value="Modificar">
			</form>
			</center>
			</p>
		 <?php
     }
    }
   }
        }else{ 
			$registro = "SELECT * FROM datoss a INNER JOIN datt b on a . id = b . aid ";
			$re = mysqli_query($link, $registro);
			if (mysqli_num_rows($re)>0) {
			while ($extraido=mysqli_fetch_array($re)) 
			{
			$extraido['id'];
			$Nombr=$extraido['id'];
			$daniel = $Nombr;
			$extraido['nombre'];
			$extraido['paterno'];
			$extraido['materno'];
			$extraido['domicilio'];
			$extraido['numero'];
			
			$extraido['costo'];
			$extraido['periodo'];
			$Nombre=$extraido['nombre'];
			$Paterno=$extraido['paterno'];
			$Materno=$extraido['materno'];
			$Domicilio=$extraido['domicilio'];
			$Numero=$extraido['numero'];
			$Servicio="Pre pago";  
			$Costo=$extraido['costo'];
			$Periodo=$extraido['periodo'];	
			$peri = date("d/m/Y", strtotime($Periodo));
			if ($daniel === $nom) {
				?>
						<p>
							<H1>Modificar datos del cliente</H1> </dir></dir> 
							<center>
			<form name ="formulario" action="modificar.php" onsubmit= "return validar()"method="post">
			<label>Nombre</label>
			<input name="dan" id="dan" type="tex" readonly= "readonly" maxlength="100" placeholder=" ID" value=" <?php echo $dani; ?>">
			<input REQUIRED name="nombre" type="text" maxlength="200" placeholder="Nombre" minlength="1"idd="Pere" value="<?php echo$Nombre;?>">
			<label>Paterno</label>                
			<input REQUIRED name="paterno" type="text" maxlength="200" placeholder="Nombre" minlength="1"idd="Pere" value="<?php echo$Paterno;?>">
			<label>Materno</label>
			<input REQUIRED name="materno" type="text" maxlength="200" placeholder="Nombre" minlength="1"idd="Pere" value="<?php echo$Materno;?>">                
			<label>Domicilio</label>			
			<input REQUIRED name="domicilio" type="text" maxlength="200" placeholder="Domicilio"idd="Pere" value="<?php echo$Domicilio;?>">
			<label>Número</label>
			<input REQUIRED name="numero" type="text" maxlength="11" placeholder="Numero"  idd="Pere" value="<?php echo $Numero;?>">
			<label>Tipo de servicio</label>
			<input id="servicio" name="servicio" type="text" readonly= "readonly" placeholder="Pospago" idd="Pere" value="<?php echo $Servicio;?>">
			<label>Costo mensual</label>
			<input REQUIRED type="text" name="costo" maxlength="10" placeholder="$ Costo" min="50" pattern="[0-9]+"idd="Pere" value="<?php echo $Costo;?>">
			<label>Fecha de cobro</label>
			<?php echo $peri;?>
			<input REQUIRED name="periodo" type="date" placeholder="Fecha de cortes" min="2020-01-01" idd="Pere">
						<input type="Submit" value="Modificar">
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