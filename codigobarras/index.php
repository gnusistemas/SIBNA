<?php

function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}
 
//Ejemplo de uso
 
//echo generarCodigo(9); // genera un código de 6 caracteres de longitud.
?>


<html> 
<head> 
   	<title>funcion 1</title> 
</head> 

<body> 

<fieldset>
 <legend>Form Input Kode Barcode</legend>
  <form action="prosesbarcode.php" method="post">
   <b>Masukkan Kode</b><input type="hidden" name="bar" value="<?php echo generarCodigo(9); ?>" /> <input type="submit" value="Buat Barcode" />
  </form>
</fieldset>
</body> 
</html>