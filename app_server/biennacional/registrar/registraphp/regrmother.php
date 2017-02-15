<?php  
	include '../../../../coneccion/coneccion.php';
	//include '../../../../Errores/mostrar_errores.php';

	$fabricante = $_POST['fabricante'];
	$modelo= $_POST['modelo'];
	$socket = $_POST['socket'];
	$procesadorf = $_POST['procesadorf'];
	$procesadorm = $_POST['procesadorm'];
	$slot = $_POST['slot'];
	$usb = $_POST['usb'];
	$sata = $_POST['pusa'];
	$pci = $_POST['pci'];
	$ram = $_POST['ram'];
	$socdd = $_POST['socdd'];
	$lvideo = $_POST['lvideo'];
	$ethernet = $_POST['ethernet'];
	$Watts = $_POST['watts'];
	$serial = $_POST['bar'];
	$ano = $_POST['ano'];
	$estado = $_POST['estado'];
	$ubicacion = $_POST['ubicacion'];
	$minipci = $_POST['minipci'];
	$pcixpress = $_POST['pcixpress'];
	$nombre = $_POST['nombre'];
	$serial2 = $_POST['serial'];

	
	$sql = pg_query("INSERT INTO tarjeta(fabricante,modelo,cpusocket,procesador,slotmemoria,tipomemoriaram,slotvideo,socketdd,slotethernet,serial,ano,voltajefuente,puertousb,puertosata,puertopsi,estado,ubicacion,procesadorm,minipci,pcixpress,nombre,serial2) 
		VALUES ('$fabricante','$modelo','$socket','$procesadorf','$slot','$ram','$lvideo','$socdd','$ethernet','$serial','$ano','$Watts','$usb','$sata','$pci','$estado','$ubicacion','$procesadorm','$minipci','$pcixpress','$nombre','$serial2')");

	if ($sql) {

		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=1&bar=$serial");//Se guardo
	}else {
		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=0");//No se guardo
	}

?>          