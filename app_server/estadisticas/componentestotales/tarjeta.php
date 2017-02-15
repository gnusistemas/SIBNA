<?php 
     
    include '../../../coneccion/coneccion.php';
    
   
    $sql = pg_query("select * from tarjeta;");
    
?>
    <br>
                    <div class="row">
                        <div class="col-xs-1">
                         </div> 
                        <div class="col-xs-10">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Tarjeta(s) Madre(s)</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                       
                                        <div class="table-responsive">
                                           <center> <table class="datatable table table-striped" cellspacing="0" width="100%" id="table_lista_tramites"> </center>
                                            <thead>
                                                <tr style="background-color:#2196F3">
                                                        <th><center>Codigo<center></th>
                                                        <th><center>Nombre</center></th>
                                                        <th><center>Fabricante</center></th>
                                                        <th><center>Modelo</center></th>
                                                        <th><center>Fabricante(Procesador)<center></th>
                                                        <th><center>Modelo(Procesador)<center></th>
                                                        <th><cente>Ram</center></th>
                                                        <th><center>DiscoDuro</center></th>
                                                        <th><center>Voltaje(Fuente)</center></th>
                                                        <th><center>Estado</center></th>
                                                        <th><center>Año</center></th>
                                                        <th><center>Serial</center></th>
                                                        
                                                        
                                                        
                                                    </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                         

                                                         while ($info = pg_fetch_assoc($sql)) {

                                                     echo '<tr>
                                                             <td width=200px><center>'.$info['serial'].'</center></th>
                                                             <td width=200px><center>'.$info['nombre'].'</center></a></td>
                                                             <td width=200px><center>'.$info['fabricante'].'</a></td>
                                                             <td width=200px><center>'.$info['modelo'].'</a></td>
                                                             <td width=200px><center>'.$info['procesador'].'</center></th>
                                                             <td width=200px><center>'.$info['procesadorm'].'</center></a></td>
                                                             <td width=200px><center>'.$info['tipomemoriaram'].'</a></td>
                                                             <td width=200px><center>'.$info['socketdd'].'</center></a></td>
                                                             <td width=200px><center>'.$info['voltajefuente'].'</center></a>
                                                             <td width=200px><center>'.$info['estado'].'</center></a>
                                                             <td width=200px><center>'.$info['ano'].'</a></td>
                                                             <td width=200px><center>'.$info['serial2'].'</a></td>
                                                             
                                                             
                                                             
                                                             
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
                        <div class="col-xs-1">
                         </div>
                    </div>
