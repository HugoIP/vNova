<?php
  error_reporting(0);
  ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <script src="jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
<p>
<?php
require 'conexion.php';

    $salida = "";
    
    if (isset($_POST['consulta'])) {
    	$q = $link->real_escape_string($_POST['consulta']);
$query = "SELECT * FROM datoss a INNER JOIN registros b on a . id = b . 2idd WHERE nombre LIKE '%".$q."%' OR paterno LIKE '%".$q."%' OR materno LIKE '%".$q."%' OR domicilio LIKE '%".$q."%' OR numero LIKE '%".$q."%' OR costo LIKE '%".$q."%'";
	}

	if ($q == null || $q='') {

	}else {
	
$a = 'href="Inicio.php"';
    $resultado = $link -> query($query);
 
    if ($resultado->num_rows > 0) { 
    	$salida.="<table border=0 class='tabla_datos'>
    			<thead>
					<tr>
					    <th>ID</th>
    					<th>Nombre</th>
    					<th>Paterno</th>
    					<th>Materno</th>
    					<th>Domicilio</th>
    					<th>Numero</th>
    					<th>Fecha de pago</th>
						<th>Cobrado</th>
    					<th>Pagado</th>
                        <th>Ver recibo</th>

    				</tr>
    			</thead>
    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
		$fila['2idd'];

    		$salida.="<tr>
                        <td>".$fila['2id']."</td>
    					<td>".$fila['nombre']."</td>
    					<td>".$fila['paterno']."</td>
    					<td>".$fila['materno']."</td>
    					<td>".$fila['domicilio']."</td>
    					<td>".$fila['numero']."</td>
    					<td>".$fila['ida']."</td>
    					<td>".$fila['costo']."</td>
    					<td>".$fila['periodo']."</td>
	 <td>".'<form name ="formulario" action="imprimir4.php" method="post" target="_blank"> 
	 <input name="dani" id="dani" type="tex" readonly= "readonly" value= '.$fila["2id"].'> 
	 <input name="are" id="are" type="tex" readonly= "readonly" value= '.$fila["2idd"].'> 
	 <input name="aaaa" id="aaaa" type="tex" readonly= "readonly" value= '.$fila["periodo"].'> 
	 <input type="Submit" name="envia" value="Ver"></form>'."</td>
    				</tr>";
		}
     	$salida.="</tbody></table>";
    }else{
    	$salida.="No se encontro el cliente";
	}
    echo $salida;
    $link->close();
	}
?>

</p>
</body>
</html>