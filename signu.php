<?php
  require 'sesion.php';
  ?>
  <!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrar</title>
<link rel="stylesheet" href="estilos.css">
  </head>
  <body>
<p>
<center>
    <?php
echo '	 <ul class="menuu">
<li><a href="Inicio.php">Regresar</a></li>
</ul>';

require 'conexion.php';
$Nombre=$_POST['Nombre'];
$Paterno=$_POST['paterno'];
$Materno=$_POST['materno'];
$Domicilio=$_POST['Domicilio'];
$Numero=$_POST['Numero'];
$Servicio=$_POST['Servicio'];
$Costo=$_POST['Costo'];
$Periodo=$_POST['Periodo'];

$aa=$Servicio;  
$a = "Pospago";

$nom=$Nombre;

if ($aa === $a) {
$consu = "SELECT * FROM datos a INNER JOIN dat b on a . id = b . id";
$resu = mysqli_query($link,$consu); 
$num = mysqli_num_rows($resu);
if ($num == 0)
{
mysqli_query($link,"INSERT INTO datos (nombre, paterno,materno,domicilio, numero,costo)VALUES('$Nombre','$Paterno','$Materno','$Domicilio','$Numero','$Costo')");
mysqli_query($link,"INSERT INTO dat (periodo)VALUES('$Periodo')") or die ("<h2>Error de envio </h2>");
  echo "Primer cliente en Pospago ingresado exitosamente :)</br></br>";
} else {

$registro = "SELECT * FROM datos a INNER JOIN dat b on a . id = b . id";

$re = mysqli_query($link, $registro);
if (mysqli_num_rows($re)> 0) {
while ($extraido= mysqli_fetch_array($re)) 
{

$extraido['nombre'];
$extraido['paterno'];
$dani = $extraido['paterno'];
$extraido['domicilio'];
$Nombr=$extraido['nombre'];
$daniel = $Nombr;
$danie = $extraido['domicilio'];
$unos = "1";

if ($daniel === $nom and $danie === $Domicilio and $dani === $Paterno) {
  $repetido = "1";
     }
    }
   }
    if($repetido === $unos){
     echo "El cliente ya existe :(";   
    }else{ 
      
     echo "Los datos registrados del cliente son: </br></br>";
     echo "Nombre: $Nombre </br>";
     echo "Paterno: $Paterno </br>";
     echo "Materno: $Materno </br>";
     echo "Domicilio: $Domicilio </br>";
     echo "Número: $Numero </br>";
     echo "Servicio: $Servicio </br>";
     echo "Costo: $Costo </br>";
     echo "Fecha de cobro: $Periodo </br></br>";
     echo "Datos ingresados exitosamente :)</br></br></br>";
     mysqli_query($link,"INSERT INTO datos (nombre, paterno,materno,domicilio, numero,costo)VALUES('$Nombre','$Paterno','$Materno','$Domicilio','$Numero','$Costo')");
     mysqli_query($link,"INSERT INTO dat (periodo)VALUES('$Periodo')") or die ("<h2>Error de envio </h2>");
     
         }
        }
        }else{ 
          $consu = "SELECT * FROM datoss a INNER JOIN datt b on a . id = b . aid";
          $resu = mysqli_query($link,$consu); 
          $num = mysqli_num_rows($resu);
          if ($num == 0)
          {
 mysqli_query($link,"INSERT INTO datoss (nombre, paterno,materno,domicilio, numero,costo)VALUES('$Nombre','$Paterno','$Materno','$Domicilio','$Numero','$Costo')");
 mysqli_query($link,"INSERT INTO datt (periodo)VALUES('$Periodo')") or die ("<h2>Error de envio </h2>");

            echo "Primer cliente en Pre pago ingresados exitosamente :)</br></br>";
          } else {

     $registr = "SELECT * FROM datoss a INNER JOIN datt b on a . id = b . aid";
      $re = mysqli_query($link, $registr);
        if (mysqli_num_rows($re)> 0 ) {
           while ($extraid=mysqli_fetch_array($re)) 
         {
          $extraid['nombre'];
          $extraid['paterno'];
          $dani = $extraid['paterno'];
          $extraid['domicilio'];
          $Nombr=$extraid['nombre'];
          $daniel = $Nombr;
          $danie = $extraid['domicilio'];
          $unos = "1";
          
          if ($daniel === $nom and $danie === $Domicilio and $dani === $Paterno) {
           $repetido = "1";
              }
             }
            }
             if($repetido === $unos){               
              echo "El cliente ya existe :(";
            
             }else{ 
               
              echo "Los datos registrados del cliente son: </br></br>";
              echo "Nombre: $Nombre </br>";
              echo "Paterno: $Paterno </br>";
              echo "Materno: $Materno </br>";
              echo "Domicilio: $Domicilio </br>";
              echo "Número: $Numero </br>";
              echo "Servicio: $Servicio </br>";
              echo "Costo: $Costo </br>";
              echo "Fecha de cobro: $Periodo </br></br>";
              echo "Datos ingresados exitosamente :)</br></br></br>";

              mysqli_query($link,"INSERT INTO datoss (nombre, paterno,materno,domicilio, numero,costo)VALUES('$Nombre','$Paterno','$Materno','$Domicilio','$Numero','$Costo')");
              mysqli_query($link,"INSERT INTO datt (periodo)VALUES('$Periodo')") or die ("<h2>Error de envio </h2>");        
                  }
                }
              }

echo '</br></br>	 <ul class="menuuu">
	<li><a href="Registros.php">Ver clientes</a></li>
</ul>';
?>
</center>

</p>
  </body>
</html>
