 <?php
     $serial = $_GET['serial']; 

?>
<div class="col-xs-3">
                         </div>
                        <div class="col-xs-6">
                            <div class="card card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Mensaje</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    
                                      <div class="card-body">
                                                       <h4> Esta seguro que desea desincorporar el componente con el serial <font color="red"> <?php echo $serial;?> </font>?</h4>
                                                   <br>
                                                       <form method="post"  action="app_server/desincorporar/desincorporar.php" >
                                                        
                                                            <input type="hidden"  name="serial"  value="<?php echo $serial ;?>">
                                                           
                                                            <button type="submit" class="btn btn-danger">Aceptar</button>
                                                           
                                                           
                                                            <a href="?page=desi"><button type="button" class="btn">Cancelar</button></a>
                                                      </form>
                                       </div>   

                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                        </div>
                 </div>

