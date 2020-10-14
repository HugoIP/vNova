<?php
 require 'sesion.php';
  ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<title>Clientes</title>
</head>
<body> 
	<link rel="stylesheet" href="estilos.css">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script type="text/javascript">
	function cargarContenido(pagina)
	{
$("#principal").load(pagina);
	}
</script>
<br/>
<ul class="menuuu">
	<li><a href="Inicio.php">Regresar</a></li>
</ul>
<div class="contenedor">	
</div>
<center>
<p>
<section id="container">
<?php

require 'conexion.php';

//$consulta = mysqli_query($link,"SELECT * from userss") or die ("<h2>Error de ver datos </h2>");
echo '<table border="2"style="width:90%">';
echo '<tr>';
echo '<th id="id">Clientes de Pospago</th>';
echo '</tr>';

echo '<table id="tablax" border="5" style="width:90%">';
echo '<tr>';

echo '<th id="id">ID</th>';
echo '<th id="Nombre">Nombre</th>';
echo '<th id="Paterno">Paterno</th>';
echo '<th id="Materno">Materno</th>';
echo '<th id="Domicilio">Domicilio</th>';
echo '<th id="Numero">Número</th>';
echo '<th id="Servicio">Servicio</th>';
echo '<th id="Costo">Costo</th>';
echo '<th id="Periodo">Cortes</th>';
echo '<th id="Modificar">Modificar</th>';
echo '<th id="Eliminar">Eliminar</th>';

echo '</tr>';

$sql_registe = mysqli_query($link,"SELECT COUNT(*) AS total_registro FROM datos a INNER JOIN dat b on a . id = b . id");

$result_register = mysqli_fetch_array($sql_registe);
$total_registro = $result_register['total_registro'];

$por_pagina = 5;
if(empty($_GET['pagina']))
{
	$pagina = 1;
}else{
	$pagina = $_GET['pagina'];
}

$desde = ($pagina-1) * $por_pagina;
$total_paginas = ceil($total_registro / $por_pagina);

$query = mysqli_query($link,"SELECT * FROM datos a INNER JOIN dat b on a . id = b . id LIMIT $desde,$por_pagina");

$result = mysqli_num_rows($query);

if($result > 0){
while ($extraido = mysqli_fetch_array($query))
{
	$perio = "Pospago";
	echo '<tr>';
	echo "<td>".$extraido['id'].'</td>';
	echo "<td>".$extraido['nombre'].'</td>';
	echo "<td>".$extraido['paterno'].'</td>';
	echo "<td>".$extraido['materno'].'</td>';
	echo "<td>".$extraido['domicilio'].'</td>';
	echo "<td>".$extraido['numero'].'</td>';
	echo "<td>".$perio.'</td>';
	echo "<td>".$extraido['costo'].'</td>';
	echo "<td>".$extraido['periodo'].'</td>';
	echo "<td>".'<form name ="formulario" action="modifica.php" method="post"> 
	<input name="dani" id = "dani" type="tex" value= '.$extraido["id"].'> 
	<input name="danie" id="danie" type="tex"  value= '.$perio.'> 
	<input type="Submit" name="enviar" value="Modificar"></form>'."</td>";
	echo "<td>".'<form name ="formulario" action="Eliminarr.php" method="post"> 
	<input name="dani" id = "dani" type="tex" value= '.$extraido["id"].'> 
	<input name="danie" id="danie" type="tex"  value= '.$perio.'> 
	<input name="dan" id="dan" type="tex"  value= '.$extraido["nombre"].'> 
	<input type="Submit" name="envi" value="Eliminarr"></form>'."</td>";
	echo '</tr>';
}
}
echo '</table>';
?>
<div class="paginador">

<ul>
<?php 
	if($pagina != 1)
	{
 ?>
	<li><a href="?pagina=<?php echo 1; ?>">|<</a></li><li><a href="?pagina=<?php echo $pagina-1; ?>"><<</a></li>
<?php 
	}
	for ($i=1; $i <= $total_paginas; $i++) { 
		if($i == $pagina)
		{
			echo '<li class="pageSelected">'.$i.'</li>';
		}else{
			echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
		}
	}

	if($pagina != $total_paginas)
	{
 ?>
	<li><a href="?pagina=<?php echo $pagina + 1; ?>">>></a></li>
	<li><a href="?pagina=<?php echo $total_paginas; ?> ">>|</a></li>
<?php } ?>
</ul>
</div>
<?php
//$consulta = mysqli_query($link,"SELECT * from prepago") or die ("<h2>Error de ver datos </h2>");

echo '<table border="2">';
echo '<tr>';
echo '<th id="id">Clientes de Pre pago</th>';
echo '</tr>';

echo '<table border="5">';
echo '<tr>';
echo '<th id="id">ID</th>';
echo '<th id="Nombre">Nombre</th>';
echo '<th id="Nombre">Paterno</th>';
echo '<th id="Nombre">Materno</th>';
echo '<th id="Domicilio">Domicilio</th>';
echo '<th id="Numero">Número</th>';
echo '<th id="Servicio">Servicio</th>';
echo '<th id="Costo">Costo</th>';
echo '<th id="Periodo">Corte</th>';
echo '<th id="Modificar">Modificar</th>';
echo '<th id="Eliminar">Eliminar</th>';
echo '</tr>';

$sql_regist = mysqli_query($link,"SELECT COUNT(*) AS total_registr FROM datoss a INNER JOIN datt b on a . id = b . aid");
$result_registe = mysqli_fetch_array($sql_regist);
$total_registr = $result_registe['total_registr'];

$por_pagin = 5;
if(empty($_GET['pagina']))
{
	$pagin = 1;
}else{
	$pagin = $_GET['pagina'];
}

$desd = ($pagin-1) * $por_pagin;
$total_pagin = ceil($total_registr / $por_pagin);

$query = mysqli_query($link,"SELECT * FROM datoss a INNER JOIN datt b on a . id = b . aid LIMIT $desd,$por_pagin");

$resul = mysqli_num_rows($query);

if($resul > 0){
while ($extraid = mysqli_fetch_array($query))
{
	$peri = "Pre pago";
	echo '<tr>';
	echo "<td>".$extraid['id'].'</td>';
	echo "<td>".$extraid['nombre'].'</td>';
	echo "<td>".$extraid['paterno'].'</td>';
	echo "<td>".$extraid['materno'].'</td>';
	echo "<td>".$extraid['domicilio'].'</td>';
	echo "<td>".$extraid['numero'].'</td>';
	echo "<td>".$peri.'</td>';
	echo "<td>".$extraid['costo'].'</td>';
	echo "<td>".$extraid['periodo'].'</td>';
	echo "<td>".'<form name ="formulario" action="modifica.php" method="post"> 
	<input name="dani" id = "dani" type="tex" value= '.$extraid["id"].'> 
	<input name="danie" id="danie" type="tex"  value= '.$peri.'> 
	<input type="Submit" name="enviar" value="Modificar"></form>'."</td>";
	echo "<td>".'<form name ="formulario" action="Eliminarr.php" method="post"> 
	<input name="dani" id = "dani" type="tex" value= '.$extraid["id"].'> 
	<input name="danie" id="danie" type="tex"  value= '.$peri.'> 
	<input name="dan" id="dan" type="tex"  value= '.$extraid["nombre"].'> 
	<input type="Submit" name="envi" value="Eliminarr"></form>'."</td>";
	echo '</tr>';
}
}
echo '</table>';
?>
<div class="paginador">

<ul>
<?php 
	if($pagin != 1)
	{
 ?>
	<li><a href="?pagina=<?php echo 1; ?>">|<</a></li><li><a href="?pagina=<?php echo $pagin-1; ?>"><<</a></li>
<?php 
	}
	for ($i=1; $i <= $total_pagin; $i++) { 
		if($i == $pagin)
		{
			echo '<li class="pageSelected">'.$i.'</li>';
		}else{
			echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
		}
	}

	if($pagin != $total_pagin)
	{
 ?>
	<li><a href="?pagina=<?php echo $pagin + 1; ?>">>></a></li>
	<li><a href="?pagina=<?php echo $total_pagin; ?> ">>|</a></li>
<?php } ?>
</ul>
</div>
</section>
</p>
</header>
</center>
	
		<br/><br/><br/><br/>
</body>
</html>