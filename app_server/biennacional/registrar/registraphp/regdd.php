<?php  
	include '../../../../coneccion/coneccion.php';
	include '../../../../Errores/mostrar_errores.php';


	$fabricante = $_POST['fabricante'];
	$modelo= $_POST['modelo'];
	$capacidad = $_POST['capacidad'];
	$tipo = $_POST['tipo'];
	$cache = $_POST['cache'];
	$rpm = $_POST['revoluciones'];
	$ano = $_POST['ano'];
	$serial = $_POST['bar'];
	$estado = $_POST['estado'];
	$ubicacion = $_POST['ubicacion'];
	$nombre = $_POST['nombre'];
	$serial2 = $_POST['serial'];


	
	$sql = pg_query("INSERT INTO discoduro(fabricante,modelo,capacidad,tipo,cache,rpm,ano,serial,estado,ubicacion,nombre,serial2) 
		VALUES ('$fabricante','$modelo','$capacidad','$tipo','$cache','$rpm','$ano','$serial','$estado','$ubicacion','$nombre','$serial2')");


	if ($sql) {

		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=1&bar=$serial");//Se guardo
	}else {
		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=0");//No se guardo
	}

?>          