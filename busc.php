<?php
  require 'sesion2.php';
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

    $query = "SELECT * FROM usersss ORDER By id";
 
    if (isset($_POST['consulta'])) {
    	$q = $link->real_escape_string($_POST['consulta']);
    	$query = "SELECT id, Nombre, Domicilio, Servicio, Costo, Periodo FROM usersss WHERE Nombre LIKE '%".$q."%' OR Domicilio LIKE '%".$q."%' OR Servicio LIKE '%".$q."%' OR Costo LIKE '%".$q."%' OR Periodo LIKE '%".$q."%'";
    }
$a = 'href="Inicioo.php"';
    $resultado = $link -> query($query);
 
    if ($resultado->num_rows > 0) { 
    	$salida.="<table border=0 class='tabla_datos'>
    			<thead>
    				<tr>
                        <th>ID</th>
    					<th>Nombre</th>
    					<th>Domicilio</th>
    					<th>Servicio</th>
    					<th>Costo</th>
    					<th>Fecha de pago</th>
                        <th>Cobrar</th>

    				</tr>
    			</thead>
    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {

    		$salida.="<tr>
                        <td>".$fila['id']."</td>
    					<td>".$fila['Nombre']."</td>
    					<td>".$fila['Domicilio']."</td>
    					<td>".$fila['Servicio']."</td>
    					<td>".$fila['Costo']."</td>
						<td>".$fila['Periodo']."</td>
						
	 <td>".'<form name ="formulario" action="Cobro1.php" method="post"> 
	 <input name="dani" id="dani" type="tex" readonly= "readonly" value= '.$fila["id"].'> 
	 <input type="Submit" name="enviar" value="Cobrar"></form>'."</td>

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