                       <div class="row">
                          <div class="col-sm-4">
                          </div>
                        <div class="col-sm-4">
		                        <div class="card">
		                  
                           <div class="card-header">
                                    <div class="card-title">
                                        <div class="title" ><p class="text-center">Consultar una Tarjeta Madre</p></div>
                                    </div>
                            </div>
                           <div class="card-body">
                            
                                <h5><strong>Introduzca el Codigo de Barra</strong></h5>
                                  <form  method="post" action="?page=b1" class="form-inline"> 
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


             $result = pg_query("SELECT * FROM tarjeta WHERE serial = '$serial' ");

             while ($row=pg_fetch_assoc($result)) {
                $n++;
                $fabricante=$row['fabricante'];
				$modelo=$row['modelo'];
				$ubicacion=$row['ubicacion'];
        $observacion=$row['observacion'];
        $est=$row['estado'];
        $procesador=$row['procesador'];
        $procesadorm=$row['procesadorm'];
        $slotmemoria=$row['slotmemoria'];
        $tipomemoriaram=$row['tipomemoriaram'];
        $socketdd=$row['socketdd'];
        $voltajefuente=$row['voltajefuente'];
        $ano=$row['ano'];
        $serial2=$row['serial2'];
            echo 
                "
                 <div class='container'> 
                   <div class='row'>
                     <div class='col-xs-4'>
                       
                         <h3><strong>Tarjeta Madre: $serial</strong><h4></h3><br>
                            <ul class='list-unstyled'>
                                <li><h4><strong>Fabricante: </strong><span class='text-primary'><strong> $fabricante </strong></span><h4></li>
                                <li><h4><strong>Modelo: </strong><span class='text-primary'><strong>$modelo</strong></span><h4></li> 
                                <li><h4><strong>Ubicacion: </strong><span class='text-primary'><strong>$ubicacion</strong></span><h4></li> 
                                <li><h4><strong>Observacion: </strong><span class='text-primary'><strong>$observacion</strong></span><h4></li>
                                <li><h4><strong>Fabricante(Procesador): </strong><span class='text-primary'><strong>$procesador</strong></span><h4></li> 
                                <li><h4><strong>Modelo(Procesador): </strong><span class='text-primary'><strong>$procesadorm</strong></span><h4></li> 
                                <li><h4><strong>Slot de Memoria Ram: </strong><span class='text-primary'><strong>$slotmemoria</strong></span><h4></li> 
                                <li><h4><strong>Tipo de Ram: </strong><span class='text-primary'><strong>$tipomemoriaram</strong></span><h4></li> 
                                <li><h4><strong>Socket Disco Duro: </strong><span class='text-primary'><strong>$socketdd</strong></span><h4></li> 
                                <li><h4><strong>Voltaje Fuente: </strong><span class='text-primary'><strong>$voltajefuente</strong></span><h4></li> 
                                <li><h4><strong>Año: </strong><span class='text-primary'><strong>$ano</strong></span><h4></li> 
                                <li><h4><strong>Serial: </strong><span class='text-primary'><strong>$serial2</strong></span><h4></li>  
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