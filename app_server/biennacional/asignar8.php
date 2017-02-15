<?php  
	include '../../coneccion/coneccion.php';
	include '../../Errores/mostrar_errores.php';

	$id = $_POST['id'];
	
   
    $sql = pg_query(" UPDATE solicitud set estado='rechazado' where id= '$id' ");



	if ($sql) {

		header('Location: ../../inicio.php?page=asignar');//Se guardo
	}else {
		header('Location: ../../inicio.php?page=asignar');//No se guardo
	}

?>          