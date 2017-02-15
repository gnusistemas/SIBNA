<?php  
	include '../../coneccion/coneccion.php';

	$unidad = $_POST['unidad'];
	$id = $_POST['id'];
	$enc= $_POST['encargado'];
	$utilidad = $_POST['utilidad'];
	$accion = $_POST['accion'];
	$descripcion = $_POST['descripcion'];
	$computador = $_POST['computador'];
	$tarjeta = $_POST['tarjeta'];
	$procesador = $_POST['procesador'];
	$fancooler = $_POST['fancooler'];
	$ram = $_POST['ram'];
	$dd = $_POST['dd'];
	$raton = $_POST['raton'];
	$case = $_POST['case'];
	$cd = $_POST['cd'];
	$red = $_POST['red'];
	$teclado = $_POST['teclado'];
	$monitor = $_POST['monitor'];
	$fuente = $_POST['fuente'];
	$impresora = $_POST['impresora'];
	$regulador = $_POST['regulador'];
	$router = $_POST['router'];
	$video = $_POST['video'];
	$cornetas = $_POST['cornetas'];
	$ups = $_POST['ups'];
	$estado = $_POST['estado'];
	$observacion = $_POST['observacion'];
	
	
	$sql = pg_query(" UPDATE solicitud set unidad='$unidad',encargado='$enc',utilidad='$utilidad',accion='$accion',descripcion='$descripcion',computador='$computador',tarjeta='$tarjeta',procesador='$procesador',fancooler='$fancooler',ram='$ram',dd='$dd',raton='$raton',case='$case',cd='$cd',red='$red',teclado='$teclado',monitor='$monitor',fuente='$fuente',impresora='$impresora',regulador='$regulador',router='$router',video='$video',cornetas='$cornetas',ups='$ups',estado='$estado',observacion='$observacion' where id='$id' ");

	if ($sql) {

		header('Location: ../../inicio.php?page=ver_solicitudes');//Se guardo
	}else {
		header('Location: ../../inicio.php?page=ver_solicitudes');//No se guardo
	}

?>          

 