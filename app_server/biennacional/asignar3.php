<?php 
     
    include '../../coneccion/coneccion.php';
    

    
    
    $sql = pg_query("select * from tarjeta where estado='disponible'");
    
    $row = pg_num_rows($sql);

    
?>
            <form>
            <br>
            <div class="row">
                <?php echo $un ;?>
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                    <div class="title">Tarjetas Madres Disponibles en el Almacen</div>
                                    </div>
                                </div>
                                
                                    
                                    <div class="panel panel-success">
                                        <!-- Default panel contents -->
                                        <div class="panel-heading">
                                        <strong>"Elija una de las tarjetas disponibles en el almacen para armar su computadora y seleccionala"</strong>
                                        </div>
                                        
                                <div class="card-body">
                                        <!-- Table -->
                                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Acciones</th>
                                                    <th>Fabricante</th>
                                                    <th>Modelo</th>
                                                    <th>Procesador</th>
                                                    <th>Memoria Ram</th>
                                                    <th>Fuente (Watts)</th>
                                                    <th>DD</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                     if ($row) {
                                                         while ($info = pg_fetch_assoc($sql)) {
                                                               
                                                     echo '<tr>
                                                             <td>
                                                                 <a href="?page=asignar4&serial='.$info['serial'].'&un='.$_GET['unidad'].'&isolit='.$_GET['idsol'].'&descripcion='.$_GET['descrip'].'"><button type="button" type="button" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-check"></span></i>
                                                                     </button>
                                                                 </a>         
                                                             </td>
                                                             <td>'.$info['fabricante'].'</td>
                                                             <td>'.$info['modelo'].'</td>
                                                             <td>'.$info['procesador'].'</td>
                                                             <td>'.$info['tipomemoriaram'].'</td>
                                                             <td>'.$info['voltajefuente'].'</td>
                                                             <td>'.$info['socketdd'].'</td>
                                                             
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