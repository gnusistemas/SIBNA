
  <div class="row">
	<div class="col-xs-12">
		                        <div class="card">
                           <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Desincorporar un Componente</div>
                                    </div>
                            </div>
                           <div class="card-body">
                           <h5><strong>#Codigo de Barra</strong></h5>
                           <form  method="post" action="?page=desincorporar" class="form-inline"> 
                             <div class="form-group">
                               <input type="text" class="form-control" name="serial" autofocus placeholder="Buscar">
                              </div>
                                 
                                     <button class="btn btn-primary" type="submit">
                                       <span class="glyphicon glyphicon-search"></span>
                                     </button>
                                 
                             
                           </form>  
                      
                            </div>
                            </div>
               
                  
       <?php 
             //include ("../errores/mostrar_errores.php");
             include '../../coneccion/coneccion.php';

             $n=0;
             $serial=$_POST['serial'];
             $primer=substr($serial,0,1);


             if ($serial == "" or $primer==" ") {
                 echo 
                    "";
                  }
             else {


             $result = pg_query("SELECT * FROM tramite WHERE n_expediente = '$exp' ");

             while ($row=pg_fetch_assoc($result)) {
                $n++;
                $nexp=$row['n_expediente'];
				        $propietario=$row['nombre_solicitante'];
				        $proyecto=$row['tramite'];
            echo 
                "
                 <div class='container'> 
                   <div class='row'>
                     <div class='col-xs-6'>
                       <div class='well'>
                         <h3><strong>$nexp</strong><h4></h3><br>
                            <ul class='list-unstyled'>
                                <li><h4><strong>Solicitante: </strong><span class='text-primary'><strong> $propietario </strong></span><h4></li>
                                <li><h4><strong>Trámite: </strong><span class='text-primary'><strong>$proyecto</strong></span><h4></li> 
                             <br>
                                <a href='?page=editexp&numexp=$nexp' class='btn btn-primary' >Editar</a>     
                            </ul> 
                       </div>
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
                              <strong>No se ha encontrado ningun resultado para el expediente '$cedula' </strong>
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