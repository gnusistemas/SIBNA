<?php
     
     session_start();
     include '../../coneccion/coneccion.php';

     if(isset($_POST['enviar'])){

          $usuario = $_SESSION['encargado'];
          $mensaje = $_POST['mensaje'];
          $color = $_SESSION['color'];
          date_default_timezone_set('America/Asuncion');
          $fecha = date("Y-m-d H:i:s");
          $sql = pg_query("INSERT INTO chat (usuario,mensaje,fecha,color) VALUES ('$usuario','$mensaje','$fecha','$color')");
		  header('Location: ../../inicio.php?page=chat');
     }else{
     	echo "error";
     }
?>
