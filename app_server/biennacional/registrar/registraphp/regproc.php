 <?php  
	include '../../../../coneccion/coneccion.php';

	$fabricante = $_POST['fabricante'];
	$modelo= $_POST['modelo'];
	$data = $_POST['data'];
	$frecuencia = $_POST['frecuencia'];
	$nucleo = $_POST['nucleo'];
	$graficos = $_POST['graficos'];
	$serial = $_POST['bar'];
	$ano = $_POST['ano'];
	$estado = $_POST['estado'];
	$ubicacion = $_POST['ubicacion'];
	$nombre = $_POST['nombre'];
	$serial2 = $_POST['serial'];


	
	$sql = pg_query("INSERT INTO procesador(fabricante,modelo,widthdata,nucleo,graficointegrado,ano,serial,estado,frecuencia,ubicacion,nombre,serial2) 
		VALUES ('$fabricante','$modelo','$data','$nucleo','$graficos','$ano','$serial','$estado','$frecuencia','$ubicacion','$nombre','$serial2')");

if ($sql) {

		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=1&bar=$serial");//Se guardo
	}else {
		header("Location: ../../../../codigobarras/prosesbarcode.php?mensaje=0");//No se guardo
	}

?>          