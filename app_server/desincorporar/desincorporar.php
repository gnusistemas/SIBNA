<?php  
  include '../../coneccion/coneccion.php';

  $componente = $_POST['serial'];
  
 

  $sql20 = pg_query("UPDATE solicitud set estado='desincorporado' where codicomp='$componente'");

  $sql = pg_query("UPDATE tarjeta set estado='en revision',ubicacion='Bienes Nacionales' where serial='$componente'");
  $sql2 = pg_query("UPDATE procesador set estado='en revision',ubicacion='Bienes Nacionales' where serial='$componente'");
  $sql3 = pg_query("UPDATE fan set estado='en revision',ubicacion='Bienes Nacionales' where serial='$componente'");
  $sql4 = pg_query("UPDATE ram set estado='en revision',ubicacion='Bienes Nacionales' where serial='$componente'");
  $sql5 = pg_query("UPDATE discoduro set estado='en revision',ubicacion='Bienes Nacionales' where serial='$componente'");
  $sql6 = pg_query("UPDATE red set estado='en revision',ubicacion='Bienes Nacionales' where serial='$componente'");
  $sql7 = pg_query("UPDATE cas set estado='en revision',ubicacion='Bienes Nacionales' where serial='$componente'");
  $sql8 = pg_query("UPDATE cornetas set estado='en revision',ubicacion='Bienes Nacionales' where serial='$componente'");
  $sql9 = pg_query("UPDATE raton set estado='en revision',ubicacion='Bienes Nacionales' where serial='$componente'");
  $sql10 = pg_query("UPDATE teclado set estado='en revision',ubicacion='Bienes Nacionales' where serial='$componente'");
  $sql11 = pg_query("UPDATE monitor set estado='en revision',ubicacion='Bienes Nacionales' where serial='$componente'");
  $sql12 = pg_query("UPDATE fuente set estado='en revision',ubicacion='Bienes Nacionales' where serial='$componente'");
  $sql13 = pg_query("UPDATE impresora set estado='en revision',ubicacion='Bienes Nacionales' where serial='$componente'");
  $sql14 = pg_query("UPDATE regulador set estado='en revision',ubicacion='Bienes Nacionales' where serial='$componente'");
  $sql15 = pg_query("UPDATE router set estado='en revision',ubicacion='Bienes Nacionales' where serial='$componente'");
  $sql16 = pg_query("UPDATE video set estado='en revision',ubicacion='Bienes Nacionales' where serial='$componente'");
  $sql17 = pg_query("UPDATE cd set estado='en revision',ubicacion='Bienes Nacionales' where serial='$componente'");
  $sql18 = pg_query("UPDATE ups set estado='en revision',ubicacion='Bienes Nacionales' where serial='$componente'");
 

  if ($sql){
    header("Location: ../../inicio.php?page=desi");//Se guardo
  }else{ 
    header("Location: ../../inicio.php?page=desi");//No se guardo
  }
?>  
