<?php 
     
    include '../../../coneccion/coneccion.php';
    
   
    $sql = pg_query("select * from raton;");
    
?>
    <br>
                    <div class="row">
                        <div class="col-xs-1">
                         </div> 
                        <div class="col-xs-10">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Raton(es)</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                       
                                        <div class="table-responsive">
                                           <center> <table class="datatable table table-striped" cellspacing="0" width="100%" id="table_lista_tramites"> </center>
                                            <thead>
                                                <tr style="background-color:#D50000">
                                                        <th><center>Codigo<center></th>
                                                        <th><center>Nombre</center></th>
                                                        <th><center>Fabricante</center></th>
                                                        <th><center>Modelo</center></th>
                                                        <th><center>Compatiblidad(hasta)</center></th>
                                                        <th><center>Botones<center></th>
                                                        <th><center>Color<center></th>
                                                        <th><center>Estado</center></th>
                                                        <th><cente>Serial</center></th>
                                                        <th><center>año</center></th>
                                                    
                                                       
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
                                                             <td width=200px><center>'.$info['compatibilidad'].'</a></td>
                                                             <td width=200px><center>'.$info['botones'].'</center></th>
                                                             <td width=200px><center>'.$info['color'].'</center></a></td>
                                                             <td width=200px><center>'.$info['estado'].'</a></td>
                                                             <td width=200px><center>'.$info['serial2'].'</a></td>
                                                             <td width=200px><center>'.$info['ano'].'</a></td>
                                                            
                                                             
                                                             
                                                             
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
