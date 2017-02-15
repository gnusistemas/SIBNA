<?php 
     
    include '../../coneccion/coneccion.php';
    
    $sql = pg_query("select nombre, fabricante, modelo, serial, estado, ubicacion, observacion,fecharep from tarjeta where estado <>'disponible' and estado <> 'nodisponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion,fecharep from procesador where estado <>'disponible' and estado <> 'nodisponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion,fecharep from cd where estado <>'disponible' and estado <> 'nodisponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion,fecharep from cornetas where estado <>'disponible' and estado <> 'nodisponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion,fecharep from discoduro where estado <>'disponible' and estado <> 'nodisponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion,fecharep from fan where estado <>'disponible' and estado <> 'nodisponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion,fecharep from fuente where estado <>'disponible' and estado <> 'nodisponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion,fecharep from impresora where estado <>'disponible' and estado <> 'nodisponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion,fecharep from monitor where estado <>'disponible' and estado <> 'nodisponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion,fecharep from ram where estado <>'disponible' and estado <> 'nodisponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion,fecharep from raton where estado <>'disponible' and estado <> 'nodisponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion,fecharep from regulador where estado <>'disponible' and estado <> 'nodisponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion,fecharep from router where estado <>'disponible' and estado <> 'nodisponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion,fecharep from red where estado <>'disponible' and estado <> 'nodisponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion,fecharep from video where estado <>'disponible' and estado <> 'nodisponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion,fecharep from teclado where estado <>'disponible' and estado <> 'nodisponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion,fecharep from ups where estado <>'disponible' and estado <> 'nodisponible' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion,fecharep from cas where estado <>'disponible' and estado <> 'nodisponible' 

                     ;

                     ");
    
    $row = pg_num_rows($sql);
    
?>
    
            <br>
            <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                    <div class="title">Reparaciones</div>
                                    </div>
                                </div>
                                
                                    
                                    <div class="panel panel-warning">

                                        <!-- Default panel contents -->
                                        <div class="panel-heading">
                                          <br>
                                        <strong>Historial de Reparaciones</strong>

                                        </div>
                                        
                                <div class="card-body">
                                        <!-- Table -->
                                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Componente</th>
                                                    <th>Fabricante</th>
                                                    <th>Modelo</th>
                                                    <center><th>Observacion</th></center>
                                                    <th>Serial</th>
                                                    <th>Fecha de Reparacion</th>
                                                    <th>Estado</th>
                                                    <th>Accion</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                     if ($row) {
                                                         while ($info = pg_fetch_assoc($sql)) {
                                                     echo '<tr>
                                                             
                                                             <td>'.$info['nombre'].'</td>
                                                             <td>'.$info['fabricante'].'</td>
                                                             <td>'.$info['modelo'].'</td>
                                                             <td>'.$info['observacion'].'</td>
                                                             <td>'.$info['serial'].'</td>
                                                             <td>'.$info['fecharep'].'</td>
                                                             <td>'.$info['estado'].'</td> 
                                                             <td>
                                                                 
                                                                  
                                                                  <center><a href="?page=reparar2&serial='.$info['serial'].'" class="mitooltip" title="Reparar">
                                                                       <button type="button"  class="btn btn btn-warning">
                                                                          <i class="fa fa-wrench"></i>
                                                                       </button>
                                                                  </a></center>
                                                                   
                                                                   
                                                                 </td>

                                                          </tr>';
                                                         }
                                                     }else{

                                                       }
                                                 ?>
                                                 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>