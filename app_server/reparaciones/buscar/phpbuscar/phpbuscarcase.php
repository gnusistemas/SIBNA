<?php  
	include '../../../../coneccion/coneccion.php';
	

	$ser = $_POST['serial'];
	$estado = $_POST['estado'];
	date_default_timezone_set('America/Caracas');
    $fecha = date('Y-m-d');
    $componente= "case";


	
	$sql = pg_query(" UPDATE cas set estado='$estado' where serial= '$ser' ");

	 if ($estado==disponible) {
	 	$sql2 = pg_query("INSERT INTO reparar(serial,componente,fecha,mes) VALUES 
	 		('$ser','$componente','$fecha','$mes')");
	 }   

	if ($sql) {

		header('Location: ../../../../inicio.php?page=b777&mensaje=1');//Se guardo
	}else {
		header('Location: ../../../../inicio.php?page=b777&mensaje=0');//No se guardo
	}

?>