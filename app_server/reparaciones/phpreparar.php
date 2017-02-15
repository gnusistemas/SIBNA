<?php  
	include '../../coneccion/coneccion.php';
	include '../../Errores/mostrar_errores.php';

	$serial = $_POST['serial'];
	$estado = $_POST['estado'];
	$observacion = $_POST['observacion'];
  date_default_timezone_set('America/Asuncion');
  $fecha = date("Y-m-d H:i:s");
	
   
  $sql = pg_query(" UPDATE tarjeta set estado='$estado',observacion='$observacion',fecharep='$fecha' where serial= '$serial' ");
  $sql2 = pg_query(" UPDATE procesador set estado='$estado',observacion='$observacion',fecharep='$fecha' where serial= '$serial' ");
  $sql3 = pg_query(" UPDATE fan set estado='$estado',observacion='$observacion',fecharep='$fecha' where serial= '$serial' ");
  $sql4 = pg_query(" UPDATE ram set estado='$estado',observacion='$observacion',fecharep='$fecha' where serial= '$serial' ");
  $sql5 = pg_query(" UPDATE discoduro set estado='$estado',observacion='$observacion',fecharep='$fecha' where serial= '$serial ' ");
  $sql6 = pg_query(" UPDATE red set estado='$estado',observacion='$observacion',fecharep='$fecha' where serial= '$serial' ");
  $sql7 = pg_query(" UPDATE cas set estado='$estado',observacion='$observacion',fecharep='$fecha' where serial= '$serial' ");
  $sql8 = pg_query(" UPDATE cornetas set estado='$estado',observacion='$observacion',fecharep='$fecha' where serial= '$serial' ");
  $sql9 = pg_query(" UPDATE raton set estado='$estado',observacion='$observacion',fecharep='$fecha' where serial= '$serial' ");
  $sql10 = pg_query(" UPDATE teclado set estado='$estado',observacion='$observacion',fecharep='$fecha' where serial= '$serial' ");
  $sql11 = pg_query(" UPDATE monitor set estado='$estado',observacion='$observacion',fecharep='$fecha' where serial= '$serial' ");
  $sql12 = pg_query(" UPDATE fuente set estado='$estado',observacion='$observacion',fecharep='$fecha' where serial= '$serial' ");
  $sql13 = pg_query(" UPDATE impresora set estado='$estado',observacion='$observacion',fecharep='$fecha' where serial= '$serial' ");
  $sql14 = pg_query(" UPDATE regulador set estado='$estado',observacion='$observacion',fecharep='$fecha' where serial= '$serial' ");
  $sql15 = pg_query(" UPDATE router set estado='$estado',observacion='$observacion',fecharep='$fecha' where serial= '$serial' ");
  $sql16 = pg_query(" UPDATE video set estado='$estado',observacion='$observacion',fecharep='$fecha' where serial= '$serial' ");
  $sql17 = pg_query(" UPDATE cd set estado='$estado',observacion='$observacion',fecharep='$fecha' where serial= '$serial' ");
  $sql18 = pg_query(" UPDATE ups set estado='$estado',observacion='$observacion',fecharep='$fecha' where serial= '$serial' ");



	if ($sql) {

		header('Location: ../../inicio.php?page=ver_status');//Se guardo
	}else {
		header('Location: ../../inicio.php?page=ver_status');//No se guardo
	}

?>     