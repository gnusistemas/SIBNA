<?php  
	include '../../../../coneccion/coneccion.php';

	$fabricante = $_POST['fabricante'];
	$modelo= $_POST['modelo'];
	$mbps = $_POST['mbps'];
	$conexion = $_POST['conexion'];
	$ano = $_POST['ano'];
	$serial = $_POST['bar'];
	$estado = $_POST['estado'];
	$wifi = $_POST['wifi'];
	$puerto = $_POST['puerto'];
	$ubicacion = $_POST['ubicacion'];
	$nombre = $_POST['nombre'];
	$serial2 = $_POST['serial'];

	
	$sql = pg_query("INSERT INTO router(fabricante,modelo,mbps,conexion,ano,serial,estado,wifi,puerto,ubicacion,nombre,serial2) VALUES 
		('$fabricante','$modelo','$mbps','$conexion','$ano','$serial','$estado','$wifi','$puerto','$ubicacion','$nombre','$serial2')");

if ($sql) {

		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=1&bar=$serial");//Se guardo
	}else {
		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=0");//No se guardo
	}

?>          