<?php  
    include '../../coneccion/coneccion.php';

?>                       
                      
<!DOCTYPE HTML>
<html>
<br>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
${demo.css}
        </style>
        <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: false,
            plotShadow: false
        },
        title: {
            text: 'Estado de las Solicitudes'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Solicitudes',
            data: [
                <?php 
                 $sql = pg_query("select * from total_solicitudes");
                 while ($info = pg_fetch_array($sql)) {
                ?>


                ['<?php echo $info['estado'];?>', <?php echo $info['count'];?>],
               <?php
                }
               ?>
            ]
        }]
    });
});


        </script>
    </head>

    <body>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

    </body>
</html>
