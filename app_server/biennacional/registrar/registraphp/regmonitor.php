<?php  
	include '../../../../coneccion/coneccion.php';

	$fabricante = $_POST['fabricante'];
	$modelo= $_POST['modelo'];
	$voltaje = $_POST['voltaje'];
	$dimensiones = $_POST['dimensiones'];
	$ano = $_POST['ano'];
	$serial = $_POST['bar'];
	$estado = $_POST['estado'];
	$color = $_POST['color'];
	$ubicacion = $_POST['ubicacion'];
	$tipo = $_POST['tipo'];
	$nombre = $_POST['nombre'];
	$serial2 = $_POST['serial'];


	
	$sql = pg_query("INSERT INTO monitor(fabricante,modelo,voltaje,dimension,ano,serial,estado,color,ubicacion,tipo,nombre,serial2) 
		VALUES ('$fabricante','$modelo','$voltaje','$dimensiones','$ano','$serial','$estado','$color','$ubicacion','$tipo','$nombre','$serial2')");

	if ($sql) {

		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=1&bar=$serial");//Se guardo
	}else {
		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=0");//No se guardo
	}

?>          