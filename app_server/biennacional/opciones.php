<?php 
     
    include '../../coneccion/coneccion.php';
    include '../../Errores/mostrar_errores.php';
    
    $sql = pg_query("select nombre, fabricante, modelo, serial, estado, ubicacion from tarjeta where estado='disponible'   
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion from procesador where estado='disponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion from cd where estado='disponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion from cornetas where estado='disponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion from discoduro where estado='disponible'  
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion from fan  where estado='disponible'
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion from fuente where estado='disponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion from impresora where estado='disponible'  
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion from monitor where estado='disponible'  
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion from ram  where estado='disponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion from raton where estado='disponible'  
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion from regulador where estado='disponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion from router where estado='disponible'  
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion from red where estado='disponible'  
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion from video where estado='disponible'  
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion from teclado where estado='disponible'  
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion from ups where estado='disponible'  
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion from cas where estado='disponible' 
                      ;");
$sql2 = pg_query("select unidad, ubicacion,  from solicitud where estado='desincorporar';");

    
?>

            
            <br>
            <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                    <div class="title">Componentes</div>
                                    </div>
                                </div>
                                
                                    
                                    <div class="panel panel-info">
                                        <!-- Default panel contents -->
                                        <div class="panel-heading">
                                        <br>
                                        <strong>Para mas detalles de componentes, dirigirse a la seccion Ver - Componentes Totales</strong>

                                        </div>
                                        
                                <div class="card-body" class="dataTables_wrapper form-inline">
                                        <!-- Table -->
                                       <center> <table class="datatable table table-striped" cellspacing="0" width="100%" id="table_lista_tramites"> </center>
                                            <thead>
                                                <tr>
                                                   
                                                    <th>Componente</th>
                                                    <th>Fabricante</th>
                                                    <th>Modelo</th>
                                                    <th>Codigo</th>
                                                    <th>Ubicación</th>
                                                    <th>Estado</th>
                                                   <center> <th>Accion</th></center>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                     
                                                         while ($info = pg_fetch_assoc($sql)) {
                                                        

                                                     echo '<tr>
                                                             
                                                             <td>'.$info['nombre'].'</td>
                                                             <td>'.$info['fabricante'].'</td>
                                                             <td>'.$info['modelo'].'</td>
                                                             <td>'.$info['serial'].'</td>
                                                             <td>'.$info['ubicacion'].'</td>
                                                             <td>'.$info['estado'].'</td>
                                                             <td>
                                                                 
                                                                 <center> <a href="?page=desincorporar2&serial='.$info['serial'].'" class="mitooltip" title="Desincorporar">
                                                                       <button type="button" class="btn btn btn-info">
                                                                          <i class="fa fa-thumbs-o-down"></i>
                                                                       </button>
                                                                  </a></center>
                                                                  
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