<?php 
     
    include '../../../coneccion/coneccion.php';
    
   
    $sql = pg_query("select * from procesador where estado= 'disponible';");
    
?>
    <br>
                    <div class="row">
                        <div class="col-xs-1">
                         </div> 
                        <div class="col-xs-10">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Procesador(es) Disponible(s)</div>
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
                                                        <th><center>WithData</center></th>
                                                        <th><center>Nucleos<center></th>
                                                        <th><center>Graficos<center></th>
                                                        <th><center>Frecuencia</center></th>
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
                                                             <td width=200px><center>'.$info['widthdata'].'</a></td>
                                                             <td width=200px><center>'.$info['nucleo'].'</center></th>
                                                             <td width=200px><center>'.$info['graficointegrado'].'</center></a></td>
                                                             <td width=200px><center>'.$info['frecuencia'].'</a></td>
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
