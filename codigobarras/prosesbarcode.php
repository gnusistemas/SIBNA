
<html>

<head>

    <title>
        SIBNA

    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="../design/css/diseño_geek_ikut.css">
    <link rel="stylesheet" type="text/css" href="../design/css/enlaces.css">
    <link rel="stylesheet" type="text/css" href="../design/css/tablas.css">
    <link rel="stylesheet" type="text/css" href="../design/css/botones.css">
     <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico"> 

</head>

<body > 
         <div class="container">
         <div class="sidebar_ikut" >

              <div class="sidebar2logo_ikut"> 
                      <img src="../img/favicon.ico" width="45" height="45" align="middle">
                  </div>
              <div class="sidebar2_ikut" align="center" >
                     SIBNA
              </div>
              
             
              <div class="sidebar3_ikut"  align="right"> 
                 <ul id="navi">
                     <li><a href="ikut2.html" id="enlace"></a></li>
                     <li><a href="" id="enlace"></a></li>
                     <li><a href="download2.html" id="enlace"></a></li>
                     <li><a href="contacts.html" id="enlace"></a></li>
                      <li><a href="ikut2.html" id="enlace"></a></li>
                     <li><a href="" id="enlace"></a></li>
                     <li><a href="download2.html" id="enlace"></a></li>
                     
                     
                     <li><a href="pdf_exportar.php?id=<?php echo $id=$_GET['bar'];?>" id="enlace">Imprimir Etiqueta</a></li>
                     <li><a href="../inicio.php?page=registrar" id="enlace">Volver</a></li>
                 </ul>   
              </div>
               
         </div>
           <div class="sidebar4_ikut" >
            
                

               <div class="text_imagen" align="center">
                   <?php  
                      if (isset($_GET['mensaje'])) {
                        if ($_GET['mensaje'] == 1) {
                          echo '<strong>Componente Guardado con Exito</strong>';
                        }elseif ($_GET['mensaje'] == 0) {
                          echo '<strong>Error al guardar el componente</strong>';
                        }
                      }
                    ?>
                    <div><br></div>
          

                    <?php
                      include('bar128.php');
                       echo '<div style="border:3px double #ababab; padding:5px;margin:5px auto;width:165px;">';
                       echo bar128(stripslashes($_GET['bar']));
                      echo '</div>';
                     ?>                 
               </div>   
                      
                         
          
         </div>
      
           

        

        
         <div  align="center" style="position:absolute;left:0;top:610px;right:0;color:#000000;font-size:9pt;font-family:calibri"> 
             <p >
              © SIBNA 2016 Copyright.
            </p>
         </div>

         </div>
                    
<body>

</html>  