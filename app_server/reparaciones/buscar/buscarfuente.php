                       <div class="row">
                          <div class="col-sm-4">
                          </div>
                        <div class="col-sm-4">
		                        <div class="card">
		                  
                           <div class="card-header">
                                    <div class="card-title">
                                        <div class="title" ><p class="text-center">Reparar una Fuente de Poder</p></div>
                                    </div>
                            </div>
                           <div class="card-body">
                            
                                <h5><strong>Introduzca el Codigo de Barra</strong></h5>
                                  <form  method="post" action="?page=b112" class="form-inline"> 
                                     <div class="form-group">
                                       <input type="text" class="form-control" name="serial" autofocus placeholder="Codigo de barras">
                                     </div>
                                 
                                     <button class="btn btn-primary" type="submit">
                                       <span class="glyphicon glyphicon-search"></span>
                                     </button>
                                 
                           
                                    </form>  
                            </div>
            <?php  
				if (isset($_GET['mensaje'])) {
					if ($_GET['mensaje'] == 1) {
						echo '<div class="row">
								<div class="col-md-12">
									<div class="alert alert-info">
										<strong>"Su componente ha sido reparado con exito"</strong>
									</div>
								</div>
							</div>';
					}
				}
			?>
               
                  
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


             $result = pg_query("SELECT * FROM fuente WHERE serial = '$serial' and estado<>'disponible'  and estado<>'no disponible'");

             while ($row=pg_fetch_assoc($result)) {
                $n++;
                $fabricante=$row['fabricante'];
				$modelo=$row['modelo'];
				$ubicacion=$row['ubicacion'];
        $estado=$row['estado'];
            echo 
                "
                 <div class='container'> 
                   <div class='row'>
                     <div class='col-xs-4'>
                       
                         <h3><strong>Fuente $serial</strong><h4></h3><br>
                            <ul class='list-unstyled'>
                                <li><h4><strong>Fabricante: </strong><span class='text-primary'><strong> $fabricante </strong></span><h4></li>
                                <li><h4><strong>Modelo: </strong><span class='text-primary'><strong>$modelo</strong></span><h4></li> 
                                <li><h4><strong>Ubicacion: </strong><span class='text-primary'><strong>$ubicacion</strong></span><h4></li> 
                                <li><h4><strong>Estado: </strong><span class='text-primary'><strong>$estado</strong></span><h4></li> 
                             <br>
                                <form method='post' action='app_server/reparaciones/buscar/phpbuscar/phpbuscarfuente.php'>
                                <input type='hidden' name='serial'  value='$serial'>
                                <div class='form-group'>
                                <label for='estado'>Indique el estado del componente</label>
                                            <select class='form-control' name='estado' >
                                                <option value=''></option>
                                                <option value='en reparacion'>En Reparacion</option>
                                                <option value='disponible'>Reparado</option>
                                                <option value='no disponible'>No Reparado</option>
                                                                                               
                                             </select>
                                  </div>           
                                <button type='submit' class='btn btn-success' >Guardar</button> 
                                </form>     
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