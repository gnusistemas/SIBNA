<?php  
	include '../../coneccion/coneccion.php';
	include '../../Errores/mostrar_errores.php';

	$idtarjeta = $_POST['sertarj'];
	$idprocesador = $_POST['procesador'];
	$idram = $_POST['ram'];
	$iddd = $_POST['dd'];
	$idfuente = $_POST['fuente'];
	$idteclado= $_POST['teclado'];
	$case = $_POST['case'];
	$idraton = $_POST['raton'];
	$idmonitor = $_POST['monitor'];
	$idfancooler = $_POST['fancooler'];
	$idregulador = $_POST['regulador'];
	$idcornetas = $_POST['cornetas'];
	$idcd = $_POST['cd'];
	$ubicacion = $_POST['ubicacion'];
	$idsol = $_POST['idsolit'];
	


    
         $sql1234567 = pg_query("UPDATE solicitud set estado='aprobado' where id= '$idsol'");
	     $sql = pg_query("UPDATE tarjeta set ubicacion='$ubicacion',estado='nodisponible' where serial= '$idtarjeta'");
     
     
     for ($i=0; $i <count($idprocesador); $i++) { 
         $pro4=$idprocesador[$i];
	     $sql123 = pg_query(" UPDATE procesador set ubicacion='$ubicacion',estado='nodisponible' where serial= '$pro4'");
	 }   

	 for ($i=0; $i <count($idram); $i++) { 
         $ram4=$idram[$i];
	     $sql1 = pg_query(" UPDATE ram set ubicacion='$ubicacion',estado='nodisponible' where serial= '$ram4'");
	 }

     for ($i=0; $i <count($iddd); $i++) { 
         $dd4=$iddd[$i];
	     $sql2 = pg_query(" UPDATE discoduro set ubicacion='$ubicacion',estado='nodisponible' where serial= '$dd4'");
     }
     
     for ($i=0; $i <count($idfuente); $i++) { 
         $fuente4=$idfuente[$i];
	     $sql3 = pg_query(" UPDATE fuente set ubicacion='$ubicacion',estado='nodisponible' where serial= '$fuente4'");
     }

	 for ($i=0; $i <count($idteclado); $i++) { 
         $tec4=$idteclado[$i];   
	     $sql4 = pg_query(" UPDATE teclado set ubicacion='$ubicacion',estado='nodisponible' where serial= '$tec4' ");
     }

	 for ($i=0; $i <count($idraton); $i++) { 
         $raton4=$idraton[$i];   
	     $sql5 = pg_query(" UPDATE raton set ubicacion='$ubicacion',estado='nodisponible' where serial= '$raton4' ");
     } 

	 for ($i=0; $i <count($idmonitor); $i++) { 
         $mon4=$idmonitor[$i];    
	     $sql6 = pg_query(" UPDATE monitor set ubicacion='$ubicacion',estado='nodisponible' where serial= '$mon4' ");
     }

	 for ($i=0; $i <count($idfancooler); $i++) { 
         $fan4=$idfancooler[$i];     
	     $sql7 = pg_query(" UPDATE fan set ubicacion='$ubicacion',estado='nodisponible' where serial= '$fan4' ");
     }

	 for ($i=0; $i <count($idregulador); $i++) { 
         $reg4=$idregulador[$i];     
	     $sql8 = pg_query(" UPDATE regulador set ubicacion='$ubicacion',estado='nodisponible' where serial= '$reg4' ");
     }

	for ($i=0; $i <count($idcornetas); $i++) { 
         $corn4=$idcornetas[$i];
	     $sql9 = pg_query(" UPDATE cornetas set ubicacion='$ubicacion',estado='nodisponible' where serial= '$corn4' ");
     }

	 for ($i=0; $i <count($idcd); $i++) { 
         $cd4=$idcd[$i];     
	     $sql11 = pg_query(" UPDATE cd set ubicacion='$ubicacion',estado='nodisponible' where serial= '$cd4' ");
     }

     for ($i=0; $i <count($case); $i++) { 
         $case4=$case[$i];
	     $sql12 = pg_query(" UPDATE cas set ubicacion='$ubicacion',estado='nodisponible' where serial= '$case4' ");
     }


	if ($sql) {

		header('Location: ../../inicio.php?page=asignar');//Se guardo
	}else {
		header('Location: ../../inicio.php?page=asignar');//No se guardo
	}

?>          