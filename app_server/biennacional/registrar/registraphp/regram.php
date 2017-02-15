<?php  
	include '../../../../coneccion/coneccion.php';

	$fabricante = $_POST['fabricante'];
	$modelo= $_POST['modelo'];
	$tamano = $_POST['tamano'];
	$voltaje = $_POST['voltaje'];
	$ano = $_POST['ano'];
	$serial = $_POST['bar'];
	$tipo = $_POST['tipo'];
	$estado = $_POST['estado'];
	$ubicacion = $_POST['ubicacion'];
	$nombre = $_POST['nombre'];
	$serial2 = $_POST['serial'];

	
	$sql = pg_query("INSERT INTO ram(fabricante,modelo,tamano,voltaje,ano,serial,tipo,estado,ubicacion,nombre,serial2) 
		VALUES ('$fabricante','$modelo','$tamano','$voltaje','$ano','$serial','$tipo','$estado','$ubicacion','$nombre','$serial2')");

if ($sql) {

		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=1&bar=$serial");//Se guardo
	}else {
		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=0");//No se guardo
	}

?>          