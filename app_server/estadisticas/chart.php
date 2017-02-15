<?php  
    include '../../coneccion/coneccion.php';
    $enero = pg_query("select count(fecha) from reparar WHERE fecha BETWEEN '2016/01/01' AND '2016/01/30'");
    $enero2 = pg_fetch_assoc($enero);

    $febrero = pg_query("select count(fecha) from reparar WHERE fecha BETWEEN '2016/02/01' AND '2016/02/28'");
    $febrero2 = pg_fetch_assoc($febrero);

    $marzo = pg_query("select count(fecha) from reparar WHERE fecha BETWEEN '2016/03/01' AND '2016/03/30'");
    $marzo2 = pg_fetch_assoc($marzo);

    $abril = pg_query("select count(fecha) from reparar WHERE fecha BETWEEN '2016/04/01' AND '2016/04/30'");
    $abril2 = pg_fetch_assoc($abril);

    $mayo = pg_query("select count(fecha) from reparar WHERE fecha BETWEEN '2016/05/01' AND '2016/05/30'");
    $mayo2 = pg_fetch_assoc($mayo);

    $junio = pg_query("select count(fecha) from reparar WHERE fecha BETWEEN '2016/06/01' AND '2016/06/30'");
    $junio2 = pg_fetch_assoc($junio);

    $julio = pg_query("select count(fecha) from reparar WHERE fecha BETWEEN '2016/07/01' AND '2016/07/30'");
    $julio2 = pg_fetch_assoc($julio);

    $agosto = pg_query("select count(fecha) from reparar WHERE fecha BETWEEN '2016/08/01' AND '2016/08/30'");
    $agosto2 = pg_fetch_assoc($agosto);

    $septiembre = pg_query("select count(fecha) from reparar WHERE fecha BETWEEN '2016/09/01' AND '2016/09/30'");
    $septiembre2 = pg_fetch_assoc($septiembre);

    $octubre = pg_query("select count(fecha) from reparar WHERE fecha BETWEEN '2016/10/01' AND '2016/10/30'");
    $octubre2 = pg_fetch_assoc($octubre);

    $noviembre = pg_query("select count(fecha) from reparar WHERE fecha BETWEEN '2016/11/01' AND '2016/11/30'");
    $noviembre2 = pg_fetch_assoc($noviembre);

    $diciembre = pg_query("select count(fecha) from reparar WHERE fecha BETWEEN '2016/12/01' AND '2016/12/31'");
    $diciembre2 = pg_fetch_assoc($diciembre);

?>  


<!DOCTYPE HTML>
<html>
<br>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
#container {
    height: 400px; 
    min-width: 310px; 
    max-width: 800px;
    margin: 0 auto;
}
        </style>
        <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
                enabled: true,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Componentes reparados por mes'
        },
        
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: Highcharts.getOptions().lang.shortMonths
        },
        yAxis: {
            title: {
                text: null
            }
        },
        series: [{
            name: 'Reparados',
            data: [


              [<?php echo $enero2['count'];?>],
              [<?php echo $febrero2['count'];?>],
              [<?php echo $marzo2['count'];?>],
              [<?php echo $abril2['count'];?>],
              [<?php echo $mayo2['count'];?>],
              [<?php echo $junio2['count'];?>],
              [<?php echo $julio2['count'];?>],
              [<?php echo $agosto2['count'];?>],
              [<?php echo $septiembre2['count'];?>],
              [<?php echo $octubre2['count'];?>],
              [<?php echo $noviembre2['count'];?>],
              [<?php echo $diciembre2['count'];?>],


            ]
        }]
    });
});
        </script>
    </head>
    <body>

<script src="../../js/highcharts.js"></script>
<script src="../../js/highcharts-3d.js"></script>
<script src="../../js/modules/exporting.js"></script>

<div id="container" style="height: 400px"></div>
    </body>
</html>
