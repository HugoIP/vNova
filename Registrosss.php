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
echo '<th id="id">Bitacora</th>';
echo '</tr>';

echo '<table id="tablax" border="5" style="width:90%">';
echo '<tr>';

echo '<th id="id">ID</th>';
echo '<th id="Usuario">Usuario</th>';
echo '<th id="Entrada">Fecha y hora de entrada</th>';
echo '<th id="Salida">Fecha y hora de salida</th>';

echo '</tr>';
$sql_registe = mysqli_query($link,"SELECT COUNT(*) AS total_registro FROM uno");
$result_register = mysqli_fetch_array($sql_registe);
$total_registro = $result_register['total_registro'];

$por_pagina = 10;
if(empty($_GET['pagina']))
{
	$pagina = 1;
}else{
	$pagina = $_GET['pagina'];
}

$desde = ($pagina-1) * $por_pagina;
$total_paginas = ceil($total_registro / $por_pagina);

$query = mysqli_query($link,"SELECT * FROM uno ORDER BY id DESC LIMIT $desde,$por_pagina");

$result = mysqli_num_rows($query);

if($result > 0){
while ($extraido = mysqli_fetch_array($query))
{
	$dandan = $extraido['id'];

	$quer = mysqli_query($link,"SELECT * FROM dos WHERE idd = '$dandan'");
	
	$extraid = mysqli_fetch_array($quer);
	
	echo '<tr>';
	echo "<td>".$extraido['id'].'</td>';
	echo "<td>".$extraido['nombre'].'</td>';
	echo "<td>".$extraido['entrada'].'</td>';
	echo "<td>".$extraid['salida'].'</td>';
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
</section>
</p>
</header>
</center>
	
		<br/><br/><br/><br/>
</body>
</html>