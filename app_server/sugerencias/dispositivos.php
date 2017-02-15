  <?php 
     
    include '../../coneccion/coneccion.php';
    include '../../Errores/mostrar_errores.php';
    
    $sql = pg_query("select * from crucefinal");
    
?>                  <br>
                    <div class="row">
                        <div class="col-xs-2">
                         </div> 
                        <div class="col-xs-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Componentes Compatibles</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <p>Estos son los componente que son compatibles con otras partes</p>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th style="background-color:#2196F3"><center>Tarjetas Madres</center></font></th>
                                                        <th style="background-color:#2196F3"><center>Procesador</center></th>
                                                        <th style="background-color:#2196F3"><center>Ram</center></th>
                                                        <th style="background-color:#2196F3"><center>Disco Duro</center></th>
                                                        <th style="background-color:#2196F3"><center>Fuente</center></th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                         

                                                         while ($info = pg_fetch_assoc($sql)) {

                                                     echo '<tr>
                                                             <th class="text-nowrap" scope="row" width=150px>'.$info['fabricante'].'  '.$info["modelo"].'</th>
                                                             <td width=200px><center><a href="?page=disp_proc&fab='.$info['fabricante'].'&mod='.$info['modelo'].'">'.$info['count'].'</center></a></td>
                                                             <td width=200px><center><a href="?page=disp_ram&fab='.$info['fabricante'].'&mod='.$info['modelo'].'">'.$info['num_ram'].'</center></a></td>
                                                             <td width=200px><center><a href="?page=disp_dd&fab='.$info['fabricante'].'&mod='.$info['modelo'].'">'.$info['num_disco'].'</center></a></td>
                                                             <td width=200px><center><a href="?page=disp_fuente&fab='.$info['fabricante'].'&mod='.$info['modelo'].'">'.$info['num_fuente'].'</center></a></td>
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
                        <div class="col-xs-2">
                         </div>
                    </div>