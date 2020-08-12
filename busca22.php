<!DOCTYPE html>
<html>
<script src="prepago.js" ></script>
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

    $query = "SELECT * FROM prepago ORDER By id";
 
    if (isset($_POST['consulta'])) {
    	$q = $link->real_escape_string($_POST['consulta']);
    	$query = "SELECT id, Nombre, Domicilio, Numero, Servicio, Costo, Periodo FROM prepago WHERE Nombre LIKE '%".$q."%' OR Domicilio LIKE '%".$q."%' OR Numero LIKE '%".$q."%' OR Servicio LIKE '%".$q."%' OR Costo LIKE '%".$q."%' OR Periodo LIKE '%".$q."%'";
    }
          $a = 'href="Inicio.php"';
    $resultado = $link -> query($query);
 
    if ($resultado->num_rows > 0) { 
    	$salida.="<table border=0 class='tabla_datos'>
    			<thead>
    				<tr>
                        <th>ID</th>
    					<th>Nombre</th>
    					<th>Domicilio</th>
    					<th>Numero</th>
    					<th>Servicio</th>
    					<th>Costo de servicio</th>
    					<th>Fecha de pago</th>
                        <th>Cobrar un mes</th>
                        <th>Estado</th>
    				</tr>
    			</thead>
    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
	  $fila ['Periodo'];
	  $uno =  $fila ['Periodo'];
	  $dos = strtotime ( '+1 month',strtotime ( $uno ) ) ;
	  $dos = date ('Y-m-d' , $dos);
	  date_default_timezone_set('America/Mexico_City');
	  $actual = date("Y-m-d");

	  if ($actual > $uno) {
	 $tres = '<input type="color" value="#ff0000">';
	 $contenido = "Nombre del cliente: " .$Nombre . "\n Domicilio: ".$Domicilio."\n Numero: ".$Numero."\n Tipo de Servicio: ".$Servicio."\n Costo: ".$Costo."\n Fecha de pago: ".$Periodo;
	 mail("dannn-pl@hotmail.com", "Recordatorio se genero recibo",$contenido); 
	  }
	  	  if ($actual === $uno) {
			$tres = '<input type="color" value="#FF9C33">';
			}
			if ($actual < $uno) {
				$tres = '<input type="color" value="#4BFF33">';
			}

			$salida.="<tr>
                        <td>".$fila['id']."</td>
    					<td>".$fila['Nombre']."</td>
    					<td>".$fila['Domicilio']."</td>
    					<td>".$fila['Numero']."</td>
    					<td>".$fila['Servicio']."</td>
    					<td>".$fila['Costo']."</td>
						<td>".$fila['Periodo']."</td>
						
	 <td>". 
		'<form name ="formulario" action="imprimir3.php" method="post">
		<input name="dani" id="dani" type="tex" readonly= "readonly" value= '.$fila["id"].'> 
		<input name="aaaa" id="aaaa" type="tex" readonly= "readonly" value= '.$fila["Periodo"].'> 
		<input type="Submit" name="enviar" value="Cobrar"> </form>'
		."</td>
		<td>".$tres."</td>

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