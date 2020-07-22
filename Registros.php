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
<center>
<p>
<?php

require 'conexion.php';

$consulta = mysqli_query($link,"SELECT * from userss") or die ("<h2>Error de ver datos </h2>");

echo '<table border="5">';
echo '<tr>';
echo '<th id="id">ID</th>';
echo '<th id="Nombre">Nombre completo</th>';
echo '<th id="Domicilio">Domicilio</th>';
echo '<th id="Servicio">Tipo de Servicio</th>';
echo '<th id="Costo">Costo</th>';
echo '<th id="Periodo">Fecha de corte</th>';
echo '</tr>';

while ($extraido = mysqli_fetch_array($consulta))
{
	echo "<tr>";
	echo "<td>".$extraido['id'].'</td>';
	echo "<td>".$extraido['Nombre'].'</td>';
	echo "<td>".$extraido['Domicilio'].'</td>';
	echo "<td>".$extraido['Servicio'].'</td>';
	echo "<td>".$extraido['Costo'].'</td>';
	echo "<td>".$extraido['Periodo'].'</td>';
	echo "</tr>";
}
echo '</table>';

?>
</p>
</center>

<div class="contenedor">	
	
    <ul class="menu">
	<li><a onClick="cargarContenido('modificar.html')" href="#">Modificar Cliente</a></li>
	<li><a onClick="cargarContenido('Eliminarr.html')" href="#">  Eliminar Cliente</a></li>
</ul>
</div>

</header>
	<div id= "principal" class="contenedor">
		<br/><br/><br/><br/><br/><br/>
</body>
</html>