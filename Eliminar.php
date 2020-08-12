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


$Nombre=$_POST['Nombre'];
$Domicilio=$_POST['Domicilio'];
$Numero=$_POST['Numero'];
$Servicio=$_POST['Servicio'];
$Costo=$_POST['Costo'];
$Periodo=$_POST['Periodo'];
$aa=$Servicio;  
$a = "Pospago";

$nom=$Nombre;

if ($aa === $a) {

$registro = "SELECT * FROM userss";
$re = mysqli_query($link, $registro);
if (mysqli_num_rows($re)>0) {
while ($extraido=mysqli_fetch_array($re)) 
{
$extraido['Nombre'];
$extraido['Domicilio'];
$Nombr=$extraido['Nombre'];
$daniel = $Nombr;

$unos = "1";

if ($daniel === $nom) {
  $repetido = "1";
     }
    }
   }
    if($repetido === $unos){
     mysqli_query($link,"DELETE from userss where Nombre= '$Nombre'");
     echo "El cliente de Pospago se elimino exitosamente";
    }else{ 
      echo "El cliente no existe :(";
     
         }
        }else{ 

         $registr = "SELECT * FROM prepago";
         $re = mysqli_query($link, $registr);
         if (mysqli_num_rows($re)>0) {
         while ($extraid=mysqli_fetch_array($re)) 
         {
         $extraid['Nombre'];
         $Nombr=$extraid['Nombre'];
         $danieln = $Nombr;
         $unos = "1";

         if ($danieln === $nom) {
           $repetido = "1";
              }
             }
            }
             if($repetido === $unos){
              mysqli_query($link,"DELETE from prepago where Nombre= '$Nombre'");
              echo "El cliente de Pre pago se elimino exitosamente";
             }else{ 
              echo "El cliente no existe :(";
             }
           }

echo '	 <ul class="menuuu">
	<li><a href="Registros.php">Regresar</a></li>
</ul>';
?>
</p>
</body>
</html>
