<?php  
	include '../../../../coneccion/coneccion.php';

	$fabricante = $_POST['fabricante'];
	$modelo= $_POST['modelo'];
	$entrada = $_POST['entrada'];
	$salida = $_POST['salida'];
	$ano = $_POST['ano'];
	$serial = $_POST['bar'];
	$estado = $_POST['estado'];
    $ubicacion = $_POST['ubicacion'];
    $nombre = $_POST['nombre'];
    $serial2 = $_POST['serial'];
	
	$sql = pg_query("INSERT INTO ups(fabricante,modelo,entrada,salida,ano,serial,estado,ubicacion,nombre,serial2) 
		VALUES ('$fabricante','$modelo','$entrada','$salida','$ano','$serial','$estado','$ubicacion','$nombre','$serial2')");

if ($sql) {

		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=1&bar=$serial");//Se guardo
	}else {
		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=0");//No se guardo
	}

?>          