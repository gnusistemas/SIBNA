<html>

<head>

    <meta charset="utf-8">
    <title>SIBNA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="../../lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../lib/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="../../lib/css/bootstrap3/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="../../lib/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="../../lib/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../../lib/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../lib/css/select2.min.css">


    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/themes/flat-blue.css">
    <!-- icono del sistema -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"> 


</head>
<body>
<?php
     session_start();
     include '../../coneccion/coneccion.php';

     if(isset($_SESSION['usuario'])){
        $sql=pg_query("SELECT * FROM chat ORDER BY id DESC");
        $row = pg_num_rows($sql);

            if($row>0){
                  while ($row = pg_fetch_assoc($sql)){
                 ?>
            	         <?php
                          echo ' <div class="col-xs-12">
                                 <div class="alert '.$row['color'].'">
                                 <strong><span style="font-size:15px">'.$row['usuario'].'</span></strong>
                                 <span style="font-size:10px">'.$row['fecha'].'</span><br>
                                 '.$row['mensaje'].'
                                </div>
                                </div>'
                         ?>
                       <br>

            	         <?php
                   }
            }else{
                 ?>
             &nbsp;
             <?php
            }                    
     }
     
?>
</body>
</html>
