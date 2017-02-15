<?php  
	include '../../../../coneccion/coneccion.php';

	$fabricante = $_POST['fabricante'];
	$modelo= $_POST['modelo'];
	$puerto = $_POST['puerto'];
	$lector = $_POST['lector'];
	$velocidad = $_POST['velocidad'];
	$ano = $_POST['ano'];
	$serial = $_POST['bar'];
	$estado = $_POST['estado'];
	$ubicacion = $_POST['ubicacion'];
	$nombre = $_POST['nombre'];
	$serial2 = $_POST['serial'];



	
	$sql = pg_query("INSERT INTO cd(fabricante,modelo,lector,velocidad,ano,serial,estado,puerto,ubicacion,nombre,serial2) 
		VALUES ('$fabricante','$modelo','$lector','$velocidad','$ano','$serial','$estado','$puerto','$ubicacion','$nombre','$serial2')");

	if ($sql) {

		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=1&bar=$serial");//Se guardo
	}else {
		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=0");//No se guardo
	}

?>          