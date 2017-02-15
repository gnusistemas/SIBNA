<?php  
	include '../../../../coneccion/coneccion.php';

	$fabricante = $_POST['fabricante'];
	$modelo= $_POST['modelo'];
	$compatibilidad = $_POST['compatibilidad'];
	$botones = $_POST['botones'];
	$color = $_POST['color'];
	$ano = $_POST['ano'];
	$serial = $_POST['bar'];
	$estado = $_POST['estado'];
	$puerto = $_POST['puerto'];
	$ubicacion = $_POST['ubicacion'];
	$nombre = $_POST['nombre'];
	$serial2 = $_POST['serial'];



	
	$sql = pg_query("INSERT INTO raton(fabricante,modelo,compatibilidad,botones,color,ano,serial,estado,puerto,ubicacion,nombre,serial2)
	 VALUES ('$fabricante','$modelo','$compatibilidad','$botones','$color','$ano','$serial','$estado','$puerto','$ubicacion','$nombre','$serial2')");

	if ($sql) {

		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=1&bar=$serial");//Se guardo
	}else {
		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=0");//No se guardo
	}

?>          