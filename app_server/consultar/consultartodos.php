<?php 
     
    include '../../coneccion/coneccion.php';
    
    $sql = pg_query("select * from todos_componentes");
    
    $row = pg_num_rows($sql);
    
?>
    
            <br>
            <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                    <div class="title">Buscar Componentes</div>
                                    </div>
                                </div>
                                
                                    
                                    <div class="panel panel-success">

                                        <!-- Default panel contents -->
                                        <div class="panel-heading">
                                          <br>
                                        <strong>Todos los Componentes</strong>

                                        </div>
                                        
                                <div class="card-body">
                                        <!-- Table -->
                                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Componente</th>
                                                    <th>Fabricante</th>
                                                    <th>Modelo</th>
                                                    <th>Serial</th>
                                                    <th>Estado</th>
                                                    <th>Ubicacion</th>
                                                    
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
                                                             <td>'.$info['serial'].'</td>
                                                             <td>'.$info['estado'].'</td> 
                                                             <td>'.$info['ubicacion'].'</td>
                                                             

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