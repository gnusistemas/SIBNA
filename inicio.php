<?php 
    session_start();

    $id=$_GET['id'];
        
    include "login/seguridad.php";
    //include "Errores/mostrar_errores.php";
    include "coneccion/coneccion.php"; 

    $sql = pg_query("select * from usuarios where id='$id'");
    $row = pg_num_rows($sql);
    if ($row) {
        $info = pg_fetch_assoc($sql);
        $_SESSION['usuario'] = $info['usuario'];
        $_SESSION['rol'] = $info['rol'];
        $_SESSION['id']=$info['id'];
        $_SESSION['encargado']=$info['encargado'];
        $_SESSION['color']=$info['color'];
         
    }
    
    $file = "";//Vista a cargar
    $m_menu = "";
    
    //Control peticiones por rol
    if ($_SESSION['rol'] == 'admin' || $_SESSION['rol'] == 'bne' || $_SESSION['rol'] == 'un' || $_SESSION['rol'] == 'esp') { //lo que hace aqui es preguntar :
          // si el usuario es tu, da o su entonces si lo que se devolvio por parametros get fue page = xxxxxx entonces llevalo alla 
        if (isset($_GET['page'])) {
            if ($_GET['page'] == 'registrar') {
                $file = 'biennacional/registrar.php';                
            }elseif ($_GET['page'] == 'opciones') {
                $file = 'biennacional/opciones.php';   
            }elseif ($_GET['page'] == 'page') {
                $file = 'app_server/page.php';   
            }elseif ($_GET['page'] == 'asignar') {
                $file = 'biennacional/asignar.php';   
            }elseif ($_GET['page'] == 'rmother') {
                $file = 'biennacional/registrar/rmother.php';   
            }elseif ($_GET['page'] == 'fancooler') {
                $file = 'biennacional/registrar/fancooler.php';  
            }elseif ($_GET['page'] == 'pro') {
                $file = 'biennacional/registrar/proc.php';  
            }elseif ($_GET['page'] == 'ram') {
                $file = 'biennacional/registrar/ram.php';  
            }elseif ($_GET['page'] == 'discoduro') {
                $file = 'biennacional/registrar/dd.php';  
            }elseif ($_GET['page'] == 'tdr') {
                $file = 'biennacional/registrar/tdr.php';  
            }elseif ($_GET['page'] == 'case') {
                $file = 'biennacional/registrar/case.php';  
            }elseif ($_GET['page'] == 'cornetas') {
                $file = 'biennacional/registrar/cornetas.php';  
            }elseif ($_GET['page'] == 'raton') {
                $file = 'biennacional/registrar/raton.php';  
            }elseif ($_GET['page'] == 'teclado') {
                $file = 'biennacional/registrar/teclado.php';  
            }elseif ($_GET['page'] == 'monitor') {
                $file = 'biennacional/registrar/monitor.php';
            }elseif ($_GET['page'] == 'router') {      
                $file = 'biennacional/registrar/router.php';
            }elseif ($_GET['page'] == 'fuente') {
                $file = 'biennacional/registrar/fuente.php';
            }elseif ($_GET['page'] == 'impresora') {
                $file = 'biennacional/registrar/impresora.php';
            }elseif ($_GET['page'] == 'regulador') {
                $file = 'biennacional/registrar/regulador.php';
            }elseif ($_GET['page'] == 'router') {
                $file = 'biennacional/registrar/router.php';
            }elseif ($_GET['page'] == 'tdv') {
                $file = 'biennacional/registrar/tdv.php';
            }elseif ($_GET['page'] == 'cd') {
                $file = 'biennacional/registrar/cdrom.php';
            }elseif ($_GET['page'] == 'ups') {
                $file = 'biennacional/registrar/ups.php';
            }elseif ($_GET['page'] == 'solicitar') {
                $file = 'Solicitudes/solicitar.php';   
            }elseif ($_GET['page'] == 'asignando') {
                $file = 'biennacional/registrar/asignando.php';   
            }elseif ($_GET['page'] == 'Solicitudes') {
                $file = 'Solicitudes/solicitar.php';   
            }elseif ($_GET['page'] == 'asignar2') {
                $file = 'biennacional/asignar2.php';   
            }elseif ($_GET['page'] == 'ver_solicitudes') {
                $file = 'Solicitudes/ver_solicitudes.php';   
            }elseif ($_GET['page'] == 'asignar3') {
                $file = 'biennacional/asignar3.php';   
            }elseif ($_GET['page'] == 'asignar4') {
                $file = 'biennacional/asignar4.php';   
            }elseif ($_GET['page'] == 'reparar') {
                $file = 'Reparaciones/reparar_componentes.php';   
            }elseif ($_GET['page'] == 'madre') {
                $file = 'Reparaciones/reparando.php';   
            }elseif ($_GET['page'] == 'asignar7') {
                $file = 'biennacional/asignar7.php';   
            }elseif ($_GET['page'] == 'asignar8') {
                $file = 'biennacional/asignar8.php';     
            }elseif ($_GET['page'] == 'consultar') {
                $file = 'consultar/consultar.php';   
            }elseif ($_GET['page'] == 'b1') {
                $file = 'consultar/consultarmother.php';   
            }elseif ($_GET['page'] == 'b2') {
                $file = 'consultar/consultarproc.php';   
            }elseif ($_GET['page'] == 'b3') {
                $file = 'consultar/consultarfan.php';   
            }elseif ($_GET['page'] == 'b4') {
                $file = 'consultar/consultardd.php';   
            }elseif ($_GET['page'] == 'b5') {
                $file = 'consultar/consultarram.php';   
            }elseif ($_GET['page'] == 'b6') {
                $file = 'consultar/consultarred.php';   
            }elseif ($_GET['page'] == 'b7') {
                $file = 'consultar/consultarcase.php';   
            }elseif ($_GET['page'] == 'b8') {
                $file = 'consultar/consultarteclado.php';   
            }elseif ($_GET['page'] == 'b9') {
                $file = 'consultar/consultarraton.php';   
            }elseif ($_GET['page'] == 'b10') {
                $file = 'consultar/consultarmonitor.php';   
            }elseif ($_GET['page'] == 'b11') {
                $file = 'consultar/consultarfuente.php';   
            }elseif ($_GET['page'] == 'b12') {
                $file = 'consultar/consultarregulador.php';   
            }elseif ($_GET['page'] == 'b13') {
                $file = 'consultar/consultarrouter.php';   
            }elseif ($_GET['page'] == 'b14') {
                $file = 'consultar/consultarimpresora.php';   
            }elseif ($_GET['page'] == 'b15') {
                $file = 'consultar/consultartdv.php';   
            }elseif ($_GET['page'] == 'b16') {
                $file = 'consultar/consultarups.php';   
            }elseif ($_GET['page'] == 'b17') {
                $file = 'consultar/consultarcd.php';   
            }elseif ($_GET['page'] == 'b18') {
                $file = 'consultar/consultarcornetas.php';   
            }elseif ($_GET['page'] == 'ver_status') {
                $file = 'Reparaciones/ver_status.php';   
            }elseif ($_GET['page'] == 'consultar') {
                $file = 'consultar/consultar.php';   
            }elseif ($_GET['page'] == 'greparaciones') {
                $file = 'reparaciones/php/guardar_reparaciones.php';      
            }elseif ($_GET['page'] == 'armar') {
                $file = 'sugerencias/dispositivos.php';   
            }elseif ($_GET['page'] == 'disp_proc') {
                $file = 'sugerencias/disp_proc.php';   
            }elseif ($_GET['page'] == 'disp_fuente') {
                $file = 'sugerencias/disp_fuente.php';   
            }elseif ($_GET['page'] == 'disp_dd') {
                $file = 'sugerencias/disp_dd.php';   
            }elseif ($_GET['page'] == 'disp_ram') {
                $file = 'sugerencias/disp_ram.php';   
            }elseif ($_GET['page'] == 'compest') {
                $file = 'estadisticas/componentes.php';   
            }elseif ($_GET['page'] == 'repest') {
                $file = 'estadisticas/chart.php';   
            }elseif ($_GET['page'] == 'estado') {
                $file = 'estadisticas/estado.php';   
            }elseif ($_GET['page'] == 'regusuario') {
                $file = 'usuarios/registrar.php';   
            }elseif ($_GET['page'] == 'edi_usuario') {
                $file = 'usuarios/editar.php';   
            }elseif ($_GET['page'] == 'chat') {
                $file = 'chat/chat.php';   
            }elseif ($_GET['page'] == 'codigo') {
                $file = 'codigobarras/prosesbarcode.php';   
            }elseif ($_GET['page'] == 'vertarjeta') {
                $file = 'estadisticas/componentes/tarjeta.php';   
            }elseif ($_GET['page'] == 'verpro') {
                $file = 'estadisticas/componentes/procesador.php';   
            }elseif ($_GET['page'] == 'verdd') {
                $file = 'estadisticas/componentes/disco.php';   
            }elseif ($_GET['page'] == 'verram') {
                $file = 'estadisticas/componentes/ram.php';   
            }elseif ($_GET['page'] == 'verfuen') {
                $file = 'estadisticas/componentes/fuente.php';   
            }elseif ($_GET['page'] == 'vercase') {
                $file = 'estadisticas/componentes/case.php';   
            }elseif ($_GET['page'] == 'vertecla') {
                $file = 'estadisticas/componentes/teclado.php';   
            }elseif ($_GET['page'] == 'verrat') {
                $file = 'estadisticas/componentes/raton.php';   
            }elseif ($_GET['page'] == 'vermon') {
                $file = 'estadisticas/componentes/monitor.php';   
            }elseif ($_GET['page'] == 'verfan') {
                $file = 'estadisticas/componentes/fan.php';   
            }elseif ($_GET['page'] == 'vercd') {
                $file = 'estadisticas/componentes/cd.php';   
            }elseif ($_GET['page'] == 'verred') {
                $file = 'estadisticas/componentes/red.php';   
            }elseif ($_GET['page'] == 'vervi') {
                $file = 'estadisticas/componentes/video.php';   
            }elseif ($_GET['page'] == 'verimp') {
                $file = 'estadisticas/componentes/impresora.php';   
            }elseif ($_GET['page'] == 'verro') {
                $file = 'estadisticas/componentes/router.php';   
            }elseif ($_GET['page'] == 'verreg') {
                $file = 'estadisticas/componentes/regulador.php';   
            }elseif ($_GET['page'] == 'vercor') {
                $file = 'estadisticas/componentes/cornetas.php';   
            }elseif ($_GET['page'] == 'verups') {
                $file = 'estadisticas/componentes/ups.php';   
            }elseif ($_GET['page'] == 'desincorporar') {
                $file = 'desincorporar/desincorporar.php';   
            }elseif ($_GET['page'] == 'desincorporar2') {
                $file = 'desincorporar/desincorporar2.php';   
            }elseif ($_GET['page'] == 'reparar2') {
                $file = 'reparaciones/reparar.php';   
            }elseif ($_GET['page'] == 'editarsol') {
                $file = 'Solicitudes/editar.php';   
            }elseif ($_GET['page'] == 'totales') {
                $file = 'estadisticas/totales.php';   
            }elseif ($_GET['page'] == 'vertarjeta2') {
                $file = 'estadisticas/componentestotales/tarjeta.php';   
            }elseif ($_GET['page'] == 'verpro2') {
                $file = 'estadisticas/componentestotales/procesador.php';   
            }elseif ($_GET['page'] == 'verdd2') {
                $file = 'estadisticas/componentestotales/disco.php';   
            }elseif ($_GET['page'] == 'verram2') {
                $file = 'estadisticas/componentestotales/ram.php';   
            }elseif ($_GET['page'] == 'verfuen2') {
                $file = 'estadisticas/componentestotales/fuente.php';   
            }elseif ($_GET['page'] == 'vercase2') {
                $file = 'estadisticas/componentestotales/case.php';   
            }elseif ($_GET['page'] == 'vertecla2') {
                $file = 'estadisticas/componentestotales/teclado.php';   
            }elseif ($_GET['page'] == 'verrat2') {
                $file = 'estadisticas/componentestotales/raton.php';   
            }elseif ($_GET['page'] == 'vermon2') {
                $file = 'estadisticas/componentestotales/monitor.php';   
            }elseif ($_GET['page'] == 'verfan2') {
                $file = 'estadisticas/componentestotales/fan.php';   
            }elseif ($_GET['page'] == 'vercd2') {
                $file = 'estadisticas/componentestotales/cd.php';   
            }elseif ($_GET['page'] == 'verred2') {
                $file = 'estadisticas/componentestotales/red.php';   
            }elseif ($_GET['page'] == 'vervi2') {
                $file = 'estadisticas/componentestotales/video.php';   
            }elseif ($_GET['page'] == 'verimp2') {
                $file = 'estadisticas/componentestotales/impresora.php';   
            }elseif ($_GET['page'] == 'verro2') {
                $file = 'estadisticas/componentestotales/router.php';   
            }elseif ($_GET['page'] == 'verreg2') {
                $file = 'estadisticas/componentestotales/regulador.php';   
            }elseif ($_GET['page'] == 'vercor2') {
                $file = 'estadisticas/componentestotales/cornetas.php';   
            }elseif ($_GET['page'] == 'verups2') {
                $file = 'estadisticas/componentes/ups.php';   
            }elseif ($_GET['page'] == 'consultarcomp') {
                $file = 'consultar/consultartodos.php';   
            }elseif ($_GET['page'] == 'desi') {
                $file = 'desincorporar/ver_desincorporar.php';   
            }
        }else{
            $file = 'inicio.php';
            
        }
    }
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>SIBNA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/bootstrap3/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="lib/css/select2.min.css">


    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/themes/flat-blue.css">
    <!-- icono del sistema -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"> 


</head>

<body class="flat-blue">
     <div class="app-container">
        <div class="row content-container">

            <nav class="navbar navbar-inverse navbar-fixed-top navbar-top">
                <div class="container-fluid">

                    <!-- icono -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-expand-toggle">
                            <i class="fa fa-bars icon"></i>
                        </button>
                        <ol class="breadcrumb navbar-breadcrumb">
                            <li class="active">Sistema Interno de Bienes Nacionales</li>
                        </ol>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-th icon"></i>
                        </button>
                    </div>

                      <!--- menu derecho -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                        <a href="#" class="mitooltip" title="Usuario Logeado" data-placement="top"><?php echo $_SESSION['encargado'];?></a>
                        </li>
                        <?php
                            $solpend = pg_query("select count(id) as total1 from solicitud where estado='pendiente'");
                            $sp = pg_fetch_assoc($solpend);
                            $comrep = pg_query("select count(serial) as total2 from comp_enreparacion");
                            $cr = pg_fetch_assoc($comrep);
                        ?>
                         <?php  
                                  if ($_SESSION['rol'] == 'admin' || $_SESSION['rol'] == 'bne') {
                                     echo '
                        <li>
                        <a href="?page=registrar" class="mitooltip" title="Registrar" data-placement="top"><i class="fa fa-plus"></i></a>
                        </li>';}
                        ?>

                        <?php  
                                  if ($_SESSION['rol'] == 'admin' || $_SESSION['rol'] == 'bne' || $_SESSION['rol'] == 'esp') {
                                     echo '
                        <li>
                        <a href="?page=consultar" class="mitooltip" title="Buscar" data-placement="top"><i class="fa fa-search"></i></a>
                        </li>';
                             }
                             ?>


                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" class="mitooltip" title="Notificaciones" data-placement="top"><i class="fa fa-exclamation-circle"></i>&nbsp<?php echo $sp['total1']+$cr['total2']; ?></a>
                            <ul class="dropdown-menu  animated fadeInDown">
                                <li class="title">
                                    Notificaciones <span class="badge pull-right"></span>
                                </li>
                                <li>
                                    <ul class="list-group notifications">
                                        <a href="?page=asignar">
                                            <li class="list-group-item">
                                                <span class="badge info"><?php echo $sp['total1']; ?></span> <font color="red"><i class="fa fa-exclamation-circle icon"></i></font> Solicitudes Pendientes
                                            </li>
                                        </a>
                                        <a href="?page=ver_status">
                                            <li class="list-group-item">
                                                <span class="badge warning"><?php echo $cr['total2'];?></span><font color="green"> <i class="fa fa-check icon"></i> </font>Reparaciones Pendientes
                                            </li>
                                        </a>
                                       
                                        
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>

                </div>
            </nav>

            <!-- menu-->

            <div class="side-menu sidebar-inverse">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <div class="icon glyphicon glyphicon-equalizer"></div>
                                <div class="title">SIBNA</div>
                            </a>
                            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                        </div>
                        <ul class="nav navbar-nav">
                            <!--<li class="active">
                                <a href="index.html">
                                    <span class="icon fa fa-tachometer"></span><span class="title">Dashboard</span>
                                </a>
                            </li>-->
                                 <?php  
                                  if ($_SESSION['rol'] == 'admin') {
                                     echo '<li class="panel panel-default dropdown ">
                                         <a data-toggle="collapse" href="#dropdown-element">
                                             <span class="icon glyphicon glyphicon-barcode"></span><span class="title">Bien Nacional</span>
                                         </a>
                                         <!-- Dropdown level 1 -->
                                         <div id="dropdown-element" class="panel-collapse collapse">
                                         <div class="panel-body">
                                             <ul class="nav navbar-nav">
                                                 <li><a href="?page=registrar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;Registrar</a>
                                                 </li>
                                                 <li><a href="?page=asignar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check-circle"></i>&nbsp;&nbsp;&nbsp;Asignar</a>
                                                 </li>
                                                 <li><a href="?page=desi">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-minus-circle"></i>&nbsp;&nbsp;&nbsp;Desincorporar</a>
                                                 </li>        
                                          </div>
                                         </div>
                                     </li>';
                                         }
                                 ?>
                                  <?php  
                                  if ($_SESSION['rol'] == 'bne') {
                                     echo '<li class="panel panel-default dropdown ">
                                         <a data-toggle="collapse" href="#dropdown-element">
                                             <span class="icon glyphicon glyphicon-barcode"></span><span class="title">Bien Nacional</span>
                                         </a>
                                         <!-- Dropdown level 1 -->
                                         <div id="dropdown-element" class="panel-collapse collapse">
                                         <div class="panel-body">
                                             <ul class="nav navbar-nav">
                                                 <li class="hide"><a href="?page=registrar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;Registrar</a>
                                                 </li>
                                                 <li><a href="?page=asignar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check-circle"></i>&nbsp;&nbsp;&nbsp;Asignar</a>
                                                 </li>
                                                 <li><a href="?page=desi">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-minus-circle"></i>&nbsp;&nbsp;&nbsp;Desincorporar</a>
                                                 </li>        
                                          </div>
                                         </div>
                                     </li>';
                                         }
                                 ?>
                                 <?php  
                                  if ($_SESSION['rol'] == 'esp') {
                                     echo '<li class="panel panel-default dropdown ">
                                         <a data-toggle="collapse" href="#dropdown-element">
                                             <span class="icon glyphicon glyphicon-barcode"></span><span class="title">Bien Nacional</span>
                                         </a>
                                         <!-- Dropdown level 1 -->
                                         <div id="dropdown-element" class="panel-collapse collapse">
                                         <div class="panel-body">
                                             <ul class="nav navbar-nav">
                                                 <li><a href="?page=registrar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;Registrar</a>
                                                 </li>
                                                 <li class="hide"><a href="?page=asignar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check-circle"></i>&nbsp;&nbsp;&nbsp;Asignar</a>
                                                 </li>
                                                 <li class="hide"><a href="?page=desi">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-minus-circle"></i>&nbsp;&nbsp;&nbsp;Desincorporar</a>
                                                 </li>        
                                          </div>
                                         </div>
                                     </li>';
                                         }
                                 ?>
                            <?php  
                                  if ($_SESSION['rol'] == 'admin' || $_SESSION['rol'] == 'bne' || $_SESSION['rol'] == 'un' || $_SESSION['rol'] == 'esp') {
                                     echo '
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-table">
                                    <span class="icon fa fa-table"></span><span class="title">Solicitudes</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-table" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="?page=solicitar&id='.$_SESSION['id'].'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;Solicitar</a> 
                                            </li>
                                            
                                            <li><a href="?page=ver_solicitudes&id='.$_SESSION['id'].'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-eye"></i>&nbsp;&nbsp;&nbsp;Ver Todas las Solicitudes</a>
                                            </li>
                                            <li><a href="?page=chat&id='.$_SESSION['id'].'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-comments-o"></i>&nbsp;&nbsp;&nbsp;Chat</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>'
                            ;
                            }
                            ?>

                            
                            <?php  
                                  if ($_SESSION['rol'] == 'admin' || $_SESSION['rol'] == 'esp') {
                                     echo '
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-gears">
                                    <span class="icon fa fa-gears"></span><span class="title">Reparaciones</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-gears" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            
                                            <li><a href="?page=ver_status">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-wrench"></i>&nbsp;&nbsp;&nbsp;Reparaciones Pendientes</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </li>';
                            }
                            ?>
                            <?php  
                                  if ($_SESSION['rol'] == 'admin' || $_SESSION['rol'] == 'bne') {
                                     echo '
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-form">
                                    <span class="icon fa fa-file-text-o"></span><span class="title">Sugerencias</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-form" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="?page=armar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-puzzle-piece"></i>&nbsp;&nbsp;&nbsp;Armar</a> 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>';
                                 }

                            ?>
                            <!-- Dropdown-->
                            <?php  
                                  if ($_SESSION['rol'] == 'admin' || $_SESSION['rol'] == 'bne') {
                                     echo '
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-e">
                                    <span class="icon glyphicon glyphicon-eye-open"></span><span class="title">Ver</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-e" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="?page=compest">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-thumbs-o-up"></i>&nbsp;&nbsp;&nbsp;Componentes disponibles</a> 
                                            </li>
                                            <li><a href="?page=totales">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-suitcase"></i>&nbsp;&nbsp;&nbsp;Componentes Totales</a>
                                            </li> 
                                            <li><a href="?page=repest">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;Reparaciones por Mes</a>
                                            </li> 
                                            <li><a href="?page=repest">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;Reparaciones por Fecha</a>
                                            </li>
                                            <li><a href="?page=estado">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-pie-chart"></i>&nbsp;&nbsp;&nbsp;Estado</a>
                                            </li>
                                            
                                    </div>
                                </div>
                            </li>';
                                }
                            ?>

                             <?php  
                                  if ($_SESSION['rol'] == 'admin' || $_SESSION['rol'] == 'bne' || $_SESSION['rol'] == 'esp') {
                                     echo '
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-xyz">
                                    <span class="icon glyphicon glyphicon-search"></span><span class="title">Buscar</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-xyz" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="?page=consultar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-tasks"></i>&nbsp;&nbsp;&nbsp;Componentes por categoria</a>
                                            </li>
                                            <li><a href="?page=consultarcomp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-hdd-o"></i>&nbsp;&nbsp;&nbsp;Todos los Componentes</a>
                                            </li>
                                            
                                            
                                    </div>
                                </div>
                            </li>';
                                }
                            ?>
                            <!-- Dropdown-->
                            <?php  
                                  if ($_SESSION['rol'] == 'admin' || $_SESSION['rol'] == 'bne') {
                                     echo '
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-example">
                                    <span class="icon glyphicon glyphicon-user"></span><span class="title">Usuarios</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-example" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="?page=regusuario">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user-plus"></i>&nbsp;&nbsp;&nbsp;Registrar</a> 
                                            </li>
                                            <li><a href="?page=edi_usuario">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;&nbsp;Editar</a> 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            ';
                        }
                            ?>

                             <?php  
                                  if ($_SESSION['rol'] == 'esp' || $_SESSION['rol'] == 'un') {
                                     echo '
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-example">
                                    <span class="icon glyphicon glyphicon-user"></span><span class="title">Usuarios</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-example" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li class="hide"><a href="?page=regusuario">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user-plus"></i>&nbsp;&nbsp;&nbsp;Registrar</a>
                                            </li>
                                            <li><a href="?page=edi_usuario">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;&nbsp;Editar</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            ';
                        }
                            ?>
                             
                            <!-- Dropdown-->
                            <li class="panel panel-default dropdown">
                                <a href="login/logout.php">
                                    <span class="icon glyphicon glyphicon-off"></span><span class="title">Salir</span>
                                </a>
                                
                            </li>
                                
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>


            <!-- contenido de la pagina-->
             <div class="side-body">

                <?php  
                  include 'app_server/'.$file;
                 ?>
                

               <footer class="app-footer">
                  <div class="wrapper">
                      <span> </span> © SIBNA 2016 Copyright.
                  </div>
              </footer>
             </div>
        </div>

     <div>
            <!-- Javascript Libs -->
            
            <script type="text/javascript" src="lib/js/jquery.min.js"></script>
            <script type="text/javascript" src="lib/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="lib/js/Chart.min.js"></script>
            <script type="text/javascript" src="lib/js/bootstrap-switch.min.js"></script>
            <script type="text/javascript" src="lib/js/jquery.matchHeight-min.js"></script>
            <script type="text/javascript" src="lib/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="lib/js/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript" src="lib/js/select2.full.min.js"></script>
            <script type="text/javascript" src="lib/js/ace/ace.js"></script>
            <script type="text/javascript" src="lib/js/ace/mode-html.js"></script>
            <script type="text/javascript" src="lib/js/ace/theme-github.js"></script>
            <script src="high/js/highcharts.js"></script>
            <script src="high/js/modules/data.js"></script>
            <script src="high/js/modules/exporting.js"></script>
            <script src="high/js/highcharts-3d.js"></script>

            <!-- Javascript -->
            
            <script type="text/javascript" src="js/app.js"></script>
            <script type="text/javascript" src="js/chartjs.js"></script>
           
            <script type="text/javascript" src="js/index.js"></script>
         
</body>

</html>
