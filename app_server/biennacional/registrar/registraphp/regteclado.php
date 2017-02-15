<?php  
	include '../../../../coneccion/coneccion.php';

	$fabricante = $_POST['fabricante'];
	$modelo= $_POST['modelo'];
	$color = $_POST['color'];
	$ano = $_POST['ano'];
	$serial = $_POST['bar'];
	$puerto = $_POST['puerto'];
	$estado = $_POST['estado'];
	$ubicacion = $_POST['ubicacion'];
	$idioma = $_POST['idioma'];
	$nombre = $_POST['nombre'];
	$serial2 = $_POST['serial'];
	

	
	$sql = pg_query("INSERT INTO teclado(fabricante,modelo,color,ano,serial,puerto,estado,ubicacion,idioma,nombre,serial2) VALUES
	 ('$fabricante','$modelo','$color','$ano','$serial','$puerto','$estado','$ubicacion','$idioma','$nombre','$serial2')");

	if ($sql) {

		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=1&bar=$serial");//Se guardo
	}else {
		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=0");//No se guardo
	}

?>          