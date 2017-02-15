<?php 
     
    include '../../coneccion/coneccion.php';
    

     
    $sql = pg_query("SELECT * FROM solicitud where accion='desincorporar' and estado='pendiente'");
    
    
?>
            <form>
            <br>
            <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                    <div class="title">Solicitudes</div>
                                    </div>
                                </div>
                                
                                    
                                    <div class="panel panel-danger">

                                        <!-- Default panel contents -->
                                        <div class="panel-heading">
                                          <br>
                                        <strong>Solicitudes para Desincorporar</strong>

                                        </div>
                                        
                                <div class="card-body">
                                        <!-- Table -->
                                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Unidad</th>
                                                    <th>Encargado</th>
                                                    <th>Utilidad</th>
                                                    <th>Componentes</th>
                                                    <th>Descripcion</th>
                                                    <th>Observacion</th>
                                                    <th>Codigo</th>
                                                    <th>Fecha&nbsp;de&nbsp;la&nbsp;Solicitud</th>
                                                    <th>Accion</th>

                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                     
                                                         while ($info = pg_fetch_assoc($sql)) {
                                                     echo '<tr>
                                                             <td>'.$info['id'].'</td>
                                                             <td>'.$info['unidad'].'</td>
                                                             <td>'.$info['encargado'].'</td>
                                                             <td>'.$info['utilidad'].'</td>
                                                             <td>'.$info["computador"].' '.$info["tarjeta"].' '.$info["procesador"].' '.$info["fancooler"].' '.$info["memoriaram"].' '.$info["dd"].' '.
                                                             $info["red"].' '.$info["casen"].' '.$info["cornetas"].' '.$info["raton"].' '.$info["teclado"].' '.$info["monitor"].' '.$info["fuente"]
                                                             .' '.$info["impresora"].' '.$info["regulador"].' '.$info["ups"].' '.$info["router"].' '.$info["video"].' '.$info["cd"].'</td>
                                                             <td>'.$info['descripcion'].'</td>
                                                             <td>'.$info['observacion'].'</td>
                                                             <td>'.$info['codicomp'].'</td>
                                                             <td>'.$info['fecha'].'</td>
                                                             <td>
                                                                 
                                                                  <center> <a href="?page=desincorporar2&serial='.$info['codicomp'].'" class="mitooltip" title="Desincorporar">
                                                                       <button type="button" class="btn btn btn-danger">
                                                                          <i class="fa fa-thumbs-o-down"></i>
                                                                       </button>
                                                                  </a></center>
                                                                  
                                                                 </td>
                                                             
                                                          </tr>';
                                                         }
                                                    
                                                 ?>
                                                  <div>
                                      
                                       
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>