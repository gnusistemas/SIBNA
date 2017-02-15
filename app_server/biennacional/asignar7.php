 <?php
     $id = $_GET['id']; 

     $result = pg_query("SELECT * FROM solicitud WHERE id='$id'");
     $row = pg_fetch_assoc($result);

?>
<div class="col-xs-3">
                         </div>
                        <div class="col-xs-6">
                            <div class="card card-info">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Mensaje</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="post"  action="app_server/biennacional/asignar8.php">
                                      <div class="card-body">
                                                       <h4> Esta seguro que desea rechazar la solicitud de la Unidad de <font color="blue"> <?php echo $row['unidad'];?></font>,
                                                       realizada por el encargado <font color="blue"> <?php echo $row['encargado'];?> ??? </font></h4>
                                                   <br>
                                                       <form method="post"  action="app_server/biennacional/asignar8.php" >
                                                        
                                                            <input type="hidden"  name="id"  value="<?php echo $id ;?>">
                                                           
                                                            <button type="submit" class="btn btn-info">Aceptar</button>
                                                           
                                                           
                                                            <a href="?page=asignar"><button type="button" class="btn">Cancelar</button></a>
                                                      </form>
                                       </div>   

                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                        </div>
                 </div>

