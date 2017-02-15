<?php  
	include '../../coneccion/coneccion.php';

   
    

	$unidad = $_POST['unidad'];
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
	$codicomp = $_POST['codicomp'];
	date_default_timezone_set('America/Asuncion');
    $fecha = date("Y-m-d H:i:s");
	
	
	$sql = pg_query("INSERT INTO solicitud(unidad,encargado,utilidad,descripcion,accion,computador,tarjeta,procesador,fancooler,
		memoriaram,dd,red,casen,cornetas,raton,teclado,monitor,fuente,impresora,regulador,ups,router,video,cd,estado,observacion,codicomp,fecha)
	 VALUES ('$unidad','$enc','$utilidad','$descripcion','$accion','$computador','$tarjeta','$procesador','$fancooler','$ram',
	 	'$dd','$red','$case','$cornetas','$raton','$teclado','$monitor','$fuente','$impresora','$regulador','$ups','$router','$video',
	 	'$cd','$estado','$observacion','$codicomp','$fecha')");

	if ($sql) {

		header('Location: ../../inicio.php?page=solicitar');//Se guardo
	}else {
		header('Location: ../../inicio.php?page=solicitar');//No se guardo
	}

?>          

 