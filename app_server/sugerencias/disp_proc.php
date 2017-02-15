 <?php 
     
    include '../../coneccion/coneccion.php';
    include '../../Errores/mostrar_errores.php';
    
    $fab=$_GET['fab'];
    $mod=$_GET['mod'];

    $sql = pg_query("select serial,fabricante,modelo,nucleo,widthdata,estado from procesador where fabricante=(select procesador 
                  	from tarjeta where fabricante='intel' and modelo='tronsk') and 
                    modelo=(select procesadorm from tarjeta where fabricante='$fab' and modelo='$mod')");
    
    
?>                  <br>
                    <div class="row">
                        <div class="col-xs-2">
                         </div> 
                        <div class="col-xs-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Procesadores Compatibles con la tarjeta <span style="color:#2196F3"><?php echo "$fab";?></span> modelo <span style="color:#2196F3"><?php echo "$mod";?></span> </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <p>Estos son los componente que son compatibles con otras partes</p>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr style="background-color:#2196F3">
                                                        <th><center>Serial<center></th>
                                                        <th><center>Fabricante</center></th>
                                                        <th><center>Modelo</center></th>
                                                        <th><center>Widthdata</center></th>
                                                        <th><center>Nucleo</center></th>
                                                        <th><center>Estado</center></th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                         

                                                         while ($info = pg_fetch_assoc($sql)) {

                                                     echo '<tr>
                                                             <th width=200px><center>'.$info['serial'].'</center></th>
                                                             <td width=200px><center>'.$info['fabricante'].'</center></a></td>
                                                             <td width=200px><center>'.$info['modelo'].'</a></td>
                                                             <td width=200px><center>'.$info['widthdata'].'</a></td>
                                                             <td width=200px><center>'.$info['nucleo'].'</a></td>
                                                             <td width=200px><center>'.$info['estado'].'</a></td>
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