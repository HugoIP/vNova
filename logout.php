<?php
  require 'conexion.php';
  session_start();
  error_reporting(0);
  $daaa = $_SESSION['usuari'];
  $var = $daaa;
  $da = $_SESSION['usu'];
  
  $registro = "SELECT * FROM uno";
  $re = mysqli_query($link, $registro);
  if (mysqli_num_rows($re)>0) {
  while ($extraido=mysqli_fetch_array($re)) 
  {
  $extraido['id'];
  $extraido['nombre'];
  $extraido['entrada'];
  $id=$extraido['id'];
  $nombre=$extraido['nombre'];
  $entrada=$extraido['entrada'];
  date_default_timezone_set('America/Mexico_City');
  $dann = date("Y-m-d H:i:s");
  if ($entrada === $da) {

mysqli_query($link,"INSERT INTO dos (idd, salida) VALUES('$id','$dann')");

    }
    }

    }
    session_unset();
    
    session_destroy();
  
    header("Location: index.php");
?>