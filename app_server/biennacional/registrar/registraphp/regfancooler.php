<?php  
	include '../../../../coneccion/coneccion.php';

	$fabricante = $_POST['fabricante'];
	$modelo= $_POST['modelo'];
	$sockets = $_POST['sockets'];
	$revoluciones = $_POST['revoluciones'];
	$serial = $_POST['bar'];
	$ano = $_POST['ano'];
	$estado = $_POST['estado'];
	$ubicacion = $_POST['ubicacion'];
	$nombre = $_POST['nombre'];
	$serial2 = $_POST['serial'];
	date_default_timezone_set('America/Asuncion');
  $fecha = date ("Y-m-d H:i:s");

	
	$sql = pg_query("INSERT INTO fan(fabricante,modelo,socketsoportado,rpm,ano,serial,estado,ubicacion,nombre,serial2,fecha) 
		VALUES ('$fabricante','$modelo','$sockets','$revoluciones','$ano','$serial','$estado','$ubicacion','$nombre','$serial2','$fecha')");

if ($sql) {

		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=1&bar=$serial");//Se guardo
	}else {
		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=0");//No se guardo
	}

?>          