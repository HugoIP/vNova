<?php
  require 'sesion.php';
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

    $query = "SELECT * FROM userssss ORDER By id";
 
    if (isset($_POST['consulta'])) {
    	$q = $link->real_escape_string($_POST['consulta']);
    	$query = "SELECT id, nombre, domicilio, servicio, cost, costo, periodo FROM userssss WHERE Nombre LIKE '%".$q."%' OR Domicilio LIKE '%".$q."%' OR Servicio LIKE '%".$q."%' OR cost LIKE '%".$q."%' OR Costo LIKE '%".$q."%' OR Periodo LIKE '%".$q."%'";
    }
$a = 'href="Inicio.php"';
    $resultado = $link -> query($query);
 
    if ($resultado->num_rows > 0) { 
    	$salida.="<table border=0 class='tabla_datos'>
    			<thead>
    				<tr>
                        <th>Fecha de cobro</th>
    					<th>Nombre</th>
    					<th>Domicilio</th>
    					<th>Servicio</th>
    					<th>Costo de servicio</th>
    					<th>Cobrado</th>
    					<th>Fecha de pago</th>
                        <th>Ver recibo de pago</th>

    				</tr>
    			</thead>
    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {

    		$salida.="<tr>
                        <td>".$fila['id']."</td>
    					<td>".$fila['nombre']."</td>
    					<td>".$fila['domicilio']."</td>
    					<td>".$fila['servicio']."</td>
    					<td>".$fila['cost']."</td>
    					<td>".$fila['costo']."</td>
    					<td>".$fila['periodo']."</td>
	 <td>".'<form name ="formulario" action="imprimir2.php" method="post"> <input name="dani" id="dani" type="tex" readonly= "readonly" value= '.$fila["id"].'> <input name="aaaa" id="aaaa" type="tex" readonly= "readonly" value= '.$fila["periodo"].'> <input type="Submit" name="enviar" value="Ver"></form>'."</td>

    				</tr>";

    	}
     	$salida.="</tbody></table>";
    }else{
    	$salida.="No se encontro el cliente";
    }
    echo $salida;
    $link->close();

?>

</p>
</body>
</html>