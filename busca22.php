<?php
 error_reporting(0);
  ?>
<!DOCTYPE html>
<html>
<script src="prepago.js" ></script>
<head>
	<title></title>

</head>
<body>
    <script src="jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
function validar() {

var respuesta = confirm("Seguro que desea cobrar este recibo");
if(respuesta === true){
	return true;
}else{
	return false;
}

}
</script>
<p>
<?php
require 'conexion.php';



    $salida = "";

    $query = "SELECT * FROM datoss a INNER JOIN datt b on a . id = b . aid";
 
    if (isset($_POST['consulta'])) {
    	$q = $link->real_escape_string($_POST['consulta']);
     $query = "SELECT * FROM datoss a INNER JOIN datt b on a . id = b . aid WHERE nombre LIKE '%".$q."%' OR paterno LIKE '%".$q."%' OR materno LIKE '%".$q."%' OR domicilio LIKE '%".$q."%' OR numero LIKE '%".$q."%' OR costo LIKE '%".$q."%' OR periodo LIKE '%".$q."%' ORDER By periodo ASC";
   
	}
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
    					<th>Servicio</th>
    					<th>Costo</th>
    					<th>Fecha</th>
                        <th>Cobrar un mes</th>
                        <th>Estado</th>
    				</tr>
    			</thead>
    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
	  $fila ['periodo'];
	  $uno =  $fila ['periodo'];
	  $dos = strtotime ( '+1 month',strtotime ( $uno ) ) ;
	  $dos = date ('Y-m-d' , $dos);
	  date_default_timezone_set('America/Mexico_City');
	  $actual = date("Y-m-d");
	  $Servicio= "Pre pago"; 
	  if ($actual > $uno) {
	 $tres = '<input type="color" value="#ff0000">';
	$contenido = "Nombre del cliente: " .$fila['nombre']." ".$fila['paterno']." ".$fila['materno']. "\n Domicilio: ".$fila['domicilio']."\n Numero: ".$fila['numero']."\n Tipo de Servicio: ".$Servicio."\n Costo: ".$fila['costo']."\n Fecha de pago: ".$fila['periodo'];
	 mail("dannn-pl@hotmail.com", "Recordatorio de servicio vencido",$contenido); 
	  }
	  	  if ($actual === $uno) {
			$tres = '<input type="color" value="#FF9C33">';
	$contenido = "Nombre del cliente: " .$fila['nombre']." ".$fila['paterno']." ".$fila['materno']. "\n Domicilio: ".$fila['domicilio']."\n Numero: ".$fila['numero']."\n Tipo de Servicio: ".$Servicio."\n Costo: ".$fila['costo']."\n Fecha de pago: ".$fila['periodo'];
	 mail("dannn-pl@hotmail.com", "Recordatorio hoy vence su servicio",$contenido); 
			}
			if ($actual < $uno) {
				$tres = '<input type="color" value="#4BFF33">';
			}

			$salida.="<tr>
                        <td>".$fila['aid']."</td>
						<td>".$fila['nombre']."</td>
						<td>".$fila['paterno']."</td>
    					<td>".$fila['materno']."</td>
    					<td>".$fila['domicilio']."</td>
    					<td>".$fila['numero']."</td>
    					<td>".$Servicio."</td>
    					<td>".$fila['costo']."</>
						<td>".$fila['periodo']."</td>
						
	 <td>". 
		'<form name ="formulario" action="imprimir3.php" onsubmit= "return validar()"method="post" target="_blank">
		<input name="dani" id="dani" type="tex" readonly= "readonly" value= '.$fila["aid"].'> 
		<input name="aaaa" id="aaaa" type="tex" readonly= "readonly" value= '.$fila["periodo"].'> 
		<input name="aa" id="aa" type="tex" readonly= "readonly" value= '.$fila["nombre"].'> 
		<input type="Submit" name="envia" value="Cobrar"> </form>'
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