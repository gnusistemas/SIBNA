<?php 
     
    include '../../coneccion/coneccion.php';
    include '../../Errores/mostrar_errores.php';
    
    $sql = pg_query("select * from solicitud where estado='pendiente' and accion='solicitar'");

                                                                  /* <a href="?page=asignar7&id='.$info['id'].'">
                                                                    <button type="button" class="btn btn-sm btn-danger">
                                                                         <span class="glyphicon glyphicon-remove"></span>   
                                                                     </button>
                                                                  </a>*/
    
    
?>
 
            
            <br>
            <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                    <div class="title">Solicitudes Pendientes</div>
                                    </div>
                                </div>
                                
                                    
                                    <div class="panel panel-info">
                                        <!-- Default panel contents -->
                                        <div class="panel-heading">
                                        <br>
                                        <strong>Solicitudes</strong>

                                        </div>
                                        
                                <div class="card-body" class="dataTables_wrapper form-inline">
                                        <!-- Table -->
                                       <center> <table class="datatable table table-striped" cellspacing="0" width="100%" id="table_lista_tramites"> </center>
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Unidad</th>
                                                    <th>Encargado</th>
                                                    <th>Utilidad</th>
                                                    <th>Componentes</th>
                                                    <th>Descripción</th>
                                                    <th>Fecha&nbsp;de&nbsp;la&nbsp;Solicitud</th>
                                                    <th>Acciones</th>
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
                                                              <td>'.$info['fecha'].'</td>

                                                             <td>
                                                                 <a href="?page=asignar3&unidad='.$info['unidad'].'&idsol='.$info['id'].'&descrip='.$info['descripcion'].'" class="mitooltip" title="Computadora" data-placement="top"><button type="button"  class="btn btn-sm btn-info">
                                                                      <i class="fa fa-desktop"></i>
                                                                     </button>
                                                                 </a>
                                                                  <a href="?page=asignar2&unidad='.$info['unidad'].'&idsol='.$info['id'].'&descrip='.$info['descripcion'].'">
                                                                       <button type="button"  class="btn btn-sm btn-success">
                                                                          <i class="fa fa-cogs"></i>
                                                                       </button>
                                                                  </a>
                                                                  <a href="?page=asignar7&id='.$info['id'].'" class="mitooltip" title="Eliminar" data-placement="top">
                                                                       <button type="button"  class="btn btn-sm btn-danger">
                                                                          <i class="glyphicon glyphicon-remove"></i>
                                                                       </button>
                                                                  </a>

                                                                   
                                                                 </td>
                                                               </tr>';
                                                          }
                                                     
                                                 ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

<script type="text/javascript">
  $(function(){
    $("#table_lista_tramites").dataTable();
    $(".dataTables_wrapper select").select2({
      minimumResultsForSearch: -1
    });
  });
</script>