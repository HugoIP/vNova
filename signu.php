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
$consu = "SELECT * FROM userss";
$resu = mysqli_query($link,$consu); 
$num = mysqli_num_rows($resu);
if ($num == 0)
{
  mysqli_query($link,"INSERT INTO userss (Nombre, Domicilio, Numero, Servicio, Costo, Periodo)VALUES('$Nombre','$Domicilio','$Numero','$Servicio','$Costo','$Periodo')") or die ("<h2>Error de envio </h2>");
  echo "Primer cliente en Pospago ingresados exitosamente :)</br></br>";
} else {
  

$registro = "SELECT * FROM userss";
$re = mysqli_query($link, $registro);
if (mysqli_num_rows($re)> 0) {
while ($extraido= mysqli_fetch_array($re)) 
{

$extraido['Nombre'];
$Nombr=$extraido['Nombre'];
$daniel = $Nombr;

$unos = "1";

if ($daniel === $nom) {
  $repetido = "1";
     }
    }
   }
    if($repetido === $unos){
     echo "El cliente ya existe :(";   
    }else{ 
      
     echo "Los datos registrados del cliente son: </br></br>";
     echo "Nombre: $Nombre </br>";
     echo "Domicilio: $Domicilio </br>";
     echo "Nombre: $Numero </br>";
     echo "Servicio: $Servicio </br>";
     echo "Costo: $Costo </br>";
     echo "Periodo: $Periodo </br></br>";
     echo "Datos ingresados exitosamente :)</br></br></br>";
     mysqli_query($link,"INSERT INTO userss (Nombre, Domicilio, Numero, Servicio, Costo, Periodo)VALUES('$Nombre','$Domicilio','$Numero','$Servicio','$Costo','$Periodo')") or die ("<h2>Error de envio </h2>");
     
         }
        }
        }else{ 
          $consu = "SELECT * FROM prepago";
          $resu = mysqli_query($link,$consu); 
          $num = mysqli_num_rows($resu);
          if ($num == 0)
          {
            mysqli_query($link,"INSERT INTO prepago (Nombre, Domicilio, Numero, Servicio, Costo, Periodo)VALUES('$Nombre','$Domicilio','$Numero','$Servicio','$Costo','$Periodo')") or die ("<h2>Error de envio </h2>");
            echo "Primer cliente en Pre pago ingresados exitosamente :)</br></br>";
          } else {

         $registr = "SELECT * FROM prepago";
         $re = mysqli_query($link, $registr);
         if (mysqli_num_rows($re)> 0 ) {
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
              echo "El cliente ya existe :(";
            
             }else{ 
               
              echo "Los datos registrados del cliente son: </br></br>";
              echo "Nombre: $Nombre </br>";
              echo "Domicilio: $Domicilio </br>";
              echo "Nombre: $Numero </br>";
              echo "Servicio: $Servicio </br>";
              echo "Costo: $Costo </br>";
              echo "Periodo: $Periodo </br></br>";

              echo "Datos ingresados exitosamente :)</br></br></br>";
              

                mysqli_query($link,"INSERT INTO prepago (Nombre, Domicilio, Numero, Servicio, Costo, Periodo)VALUES('$Nombre','$Domicilio','$Numero','$Servicio','$Costo','$Periodo')") or die ("<h2>Error de envio </h2>");
                    
         
         
                  }
                }
              }

echo '	 <ul class="menuuu">
	<li><a href="Inicio.php">Regresar</a></li>
</ul>';
?>
</p>
  </body>
</html>
