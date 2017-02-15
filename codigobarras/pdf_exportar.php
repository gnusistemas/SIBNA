<?php ob_start();

$id=$_GET['id'];
?>

<html>
<body>
	<div align="center">
		<p><span style="font-size:7px">SIBNA Universidad de Oriente</span></p>
	
	<?php
       include('bar128.php');
        echo '<div style="border:3px double #ababab; padding:5px;margin:5px auto;width:165px;">';
        echo bar128(stripslashes($_GET['id']));
       echo '</div>';
      ?>  
      </div>  
</body>
</html>

<?php
include "../Errores/mostrar_errores.php";
require_once("../dompdf/dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$paper_size = array(0,0,250,170);
$dompdf->set_paper($paper_size);
$dompdf->render();
$pdf=$dompdf->output();
$filename='nombre.pdf';

$dompdf->stream($filename, array("Attachment" => 0));
?>
