                       <div class="row">
                          <div class="col-sm-4">
                          </div>
                        <div class="col-sm-4">
                            <div class="card">
                      
                           <div class="card-header">
                                    <div class="card-title">
                                        <div class="title" ><p class="text-center">Consultar un Procesador</p></div>
                                    </div>
                            </div>
                           <div class="card-body">
                            
                                <h5><strong>Introduzca el Codigo de Barra</strong></h5>
                                  <form  method="post" action="?page=b2" class="form-inline"> 
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


             $result = pg_query("SELECT * FROM procesador WHERE serial = '$serial'  ");

             while ($row=pg_fetch_assoc($result)) {
                $n++;
                $fabricante=$row['fabricante'];
        $modelo=$row['modelo'];
        $widthdata=$row['widthdata'];
        $frecuencia=$row['frecuencia'];
        $nucleo=$row['nucleo'];
        $graficointegrado=$row['graficointegrado'];
        $ano=$row['ano'];
        $serial2=$row['serial2'];
        $ubicacion=$row['ubicacion'];
        $est=$row['estado'];
            echo 
                "
                 <div class='container'> 
                   <div class='row'>
                     <div class='col-xs-6'>
                       
                         <h3><strong> Procesador: $serial</strong><h4></h3><br>
                            <ul class='list-unstyled'>
                                <li><h4><strong>Fabricante: </strong><span class='text-primary'><strong> $fabricante </strong></span><h4></li>
                                <li><h4><strong>Modelo: </strong><span class='text-primary'><strong>$modelo</strong></span><h4></li> 
                                <li><h4><strong>WidthData: </strong><span class='text-primary'><strong>$modelo</strong></span><h4></li> 
                                <li><h4><strong>Frecuencia: </strong><span class='text-primary'><strong>$widthdata</strong></span><h4></li> 
                                <li><h4><strong>Nucleos: </strong><span class='text-primary'><strong>$nucleo</strong></span><h4></li> 
                                <li><h4><strong>Graficos Integrados: </strong><span class='text-primary'><strong>$graficointegrado</strong></span><h4></li> 
                                <li><h4><strong>año: </strong><span class='text-primary'><strong>$ano</strong></span><h4></li> 
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