 <?php 
     include '../../coneccion/coneccion.php';
?>  
                      <div class="col-xs-3">
                         </div>
                        <div class="col-xs-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Consultar</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    
                                           <div class="form-group"> 
                                           <label for="dependencia">Dependencia</label>
                                           <br>
                                            <select class="form-control" name="dependencia" >
                                          
                                                 <?php 
                                                     $sql = pg_query("Select * From Dependencia Order By nombre");
                                                     while($row = pg_fetch_assoc($sql)){
                                                        echo '<option value=""></option>';
                                                        echo '<option>'.$row["nombre"].' '.$row["ubicacion"];
                                                     }
                                                ?>
                                             </div>
                                            </select>
                                            <br>
                                            <br>
                                            <br>

                                              <span class="pull-right"> <button type="button" type="button" class="btn btn btn-info" > Consultar </button> </span>
                                              &nbsp;&nbsp;
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> <button type="button" type="button" class="btn btn btn-danger"> Cancelar </button> </span>
                                             
                                          
                                            </div>  

                                    
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-xs-3">
                        </div>
                 </div>