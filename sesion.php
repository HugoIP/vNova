<?php
session_start();
error_reporting(0);
$var = $_SESSION['usuari'];
if ($var == null || $var='') {
echo "Favor de iniciar sesion";
die();
}
?>