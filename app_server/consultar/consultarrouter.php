                       <div class="row">
                          <div class="col-sm-4">
                          </div>
                        <div class="col-sm-4">
		                        <div class="card">
		                  
                           <div class="card-header">
                                    <div class="card-title">
                                        <div class="title" ><p class="text-center">Consultar un Router/Modem</p></div>
                                    </div>
                            </div>
                           <div class="card-body">
                            
                                <h5><strong>Introduzca el Codigo de Barra</strong></h5>
                                  <form  method="post" action="?page=b13" class="form-inline"> 
                                     <div class="form-group">
                                       <input type="text" class="form-control" name="serial" autofocus placeholder="Codigo de barras">
                                     </div>
                                 
                                     <button class="btn btn-primary" type="submit">
                                       <span class="glyphicon glyphicon-search"></span>
                                     </button>
                                 
                           
                                    </form>  
                            </div>
           
               
                  
       <?php 
             //include ("../errores/mostrar_errores.php");
             include '../../../coneccion/coneccion.php';

             $n=0;
             $serial=$_POST['serial'];
             $primer=substr($serial,0,1);


             if ($serial == "" or $primer==" ") {
                 echo 
                    "";
                  }
             else {


             $result = pg_query("SELECT * FROM router WHERE serial = '$serial' ");

             while ($row=pg_fetch_assoc($result)) {
                $n++;
                $fabricante=$row['fabricante'];
				$modelo=$row['modelo'];
        $wifi=$row['wifi'];
        $conexion=$row['conexion'];
        $puerto=$row['puerto'];
        $mbps=$row['mbps'];
        $ano=$row['ano'];
        $serial2=$row['serial2'];
				$ubicacion=$row['ubicacion'];
        $est=$row['estado'];
            echo 
                "
                 <div class='container'> 
                   <div class='row'>
                     <div class='col-xs-6'>
                       
                         <h3><strong>Router/Modem: $serial</strong><h4></h3><br>
                            <ul class='list-unstyled'>
                                <li><h4><strong>Fabricante: </strong><span class='text-primary'><strong> $fabricante </strong></span><h4></li>
                                <li><h4><strong>Modelo: </strong><span class='text-primary'><strong>$modelo</strong></span><h4></li> 
                                <li><h4><strong>Señal Inalambrica: </strong><span class='text-primary'><strong>$wifi</strong></span><h4></li> 
                                <li><h4><strong>Conexion: </strong><span class='text-primary'><strong>$Conexion</strong></span><h4></li> 
                                <li><h4><strong>Puertos: </strong><span class='text-primary'><strong>$puerto</strong></span><h4></li> 
                                <li><h4><strong>MBPS: </strong><span class='text-primary'><strong>$mbps</strong></span><h4></li> 
                                <li><h4><strong>Año: </strong><span class='text-primary'><strong>$ano</strong></span><h4></li> 
                                <li><h4><strong>Serial: </strong><span class='text-primary'><strong>$serial2</strong></span><h4></li> 
                                <li><h4><strong>Ubicacion: </strong><span class='text-primary'><strong>$ubicacion</strong></span><h4></li> 
                                <li><h4><strong>Estado: </strong><span class='text-primary'><strong>$est</strong></span><h4></li> 
                              
                            </ul> 
                       
                     </div>
                    </div>                
                 </div>
                 
                 
                 
     </div>
   </div>" ;
     
     

              
           }
     if ($n==0) { 
        echo 
              "<div class='container'>
                     <div class='row'>
                         <div class='col-md-4'>
                           <div class='alert alert-danger'>
                              <strong>No se ha encontrado ningun resultado para el serial '$serial' </strong>
                           </div>
                         </div>
                     </div> 
               </div>";
        }
          pg_free_result($result);
     }
     ?>   
     </div>    
    </div>
   </div>
  </div>
  <div class="col-sm-4"> </div>
 </div>