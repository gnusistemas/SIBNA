<?php  
    include '../../coneccion/coneccion.php';

?>                       
                      
<!DOCTYPE HTML>
<html>
<br>
    <head>
    	<script type="text/javascript">
    	 $(function() {
  var ctx, data, myLineChart, options;
  Chart.defaults.global.responsive = true;
  ctx = $('#pie-chart').get(0).getContext('2d');
  options = {
    showScale: false,
    scaleShowGridLines: false,
    scaleGridLineColor: "rgba(0,0,0,.05)",
    scaleGridLineWidth: 0,
    scaleShowHorizontalLines: false,
    scaleShowVerticalLines: false,
    bezierCurve: false,
    bezierCurveTension: 0.4,
    pointDot: false,
    pointDotRadius: 0,
    pointDotStrokeWidth: 2,
    pointHitDetectionRadius: 20,
    datasetStroke: true,
    datasetStrokeWidth: 4,
    datasetFill: true,
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
  };
  data = [
    {
      value: [
                <?php 
                 $sql = pg_query("select * from total_solicitudes");
                 while ($info = pg_fetch_array($sql)) {
                ?>


                ['<?php echo $info['estado'];?>', <?php echo $info['count'];?>],
               <?php
                }
               ?>,
      color: "#FA2A00",
      highlight: "#FA2A00",
      label: "Red"
    }, {
      value: 100,
      color: "#1ABC9C",
      highlight: "#1ABC9C",
      label: "Green"
    }, {
      value: 50,
      color: "#FABE28",
      highlight: "#FABE28",
      label: "Yellow"
    }
  ];
  myLineChart = new Chart(ctx).Pie(data, options);
});

        </script>
    </head>
     <body>
     	<div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Pie & Doughnut Chart</div>
                                    </div>
                                </div>
                                <div class="card-body no-padding">
                                    <canvas id="pie-chart" class="chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
\

    </body>
</html>
