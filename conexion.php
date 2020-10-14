<?php

$link = mysqli_connect("localhost","root","daniel") or die("<h2>Nose encuentra el servidor</h2>");
$db = mysqli_select_db($link,"database") or die ("<h2>Error de conexion</h2>");

?>
