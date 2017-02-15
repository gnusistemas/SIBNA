<?php 
     include '../../coneccion/coneccion.php';
    // echo var_dump($_GET);
     $serialtarjeta = $_GET['serial']; 
     $unidad=$_GET['un'];
     $idsol=$_GET['isolit'];
     $descripcion=$_GET['descripcion'];

     
?>
<br>
   <strong> <?php echo $descripcion; ?></strong>
    <br>
    <br>
                 <div class="row">
                    <form action="app_server/biennacional/asignar5.php" method="post">
                         <div class="col-xs-4">
                             <div class="card card-success">
                                <div class="card-header ">
                                    <div class="card-title">
                                        <div class="title">Principales</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    
                                       <div class="form-group">
                                            <label for="procesador">Procesador</label>
                                        <select multiple class="form-control" name="procesador[]" size="4" required="">
                                            <option value=""></option>
                                                <?php 
                                                     $sql = pg_query("SELECT serial,fabricante,modelo,nucleo FROM procesador WHERE estado ='disponible' and fabricante = (SELECT procesador FROM tarjeta WHERE serial ='$serialtarjeta')"); 
                                                      while($row = pg_fetch_assoc($sql)){
                                                    
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"].' '.$row["nucleo"];
                                                     }
                                                ?>
                                        <select/>
                                        </div>
                                        <div class="form-group">
                                            <label for="dd">Disco Duro</label>
                                        <select multiple class="form-control" name="dd[]" size="4" required="">
                                                <option value=""></option>
                                                <?php 
                                                     $sql = pg_query("SELECT serial,fabricante,modelo,capacidad,tipo FROM discoduro WHERE estado = 'disponible' and tipo = (SELECT socketdd FROM tarjeta WHERE serial = '$serialtarjeta')");
                                                     while($row = pg_fetch_assoc($sql)){
                                                    
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"].' '.$row["capacidad"];
                                                     }
                                                     
                                                ?>
                                        <select/>
                                        </div>
                                        <div class="form-group">
                                            <label for="ram">Memoria Ram </label>
                                            
                                        <select multiple class="form-control" name="ram[]" size="4" required="">
                                            <option value=""></option>
                                               <?php 
                                                     $sql = pg_query("SELECT serial,tipo,fabricante,modelo,tamano FROM ram WHERE estado = 'disponible' and tipo = (SELECT tipomemoriaram FROM tarjeta WHERE serial = '$serialtarjeta')");
                                                     while($row = pg_fetch_assoc($sql)){
                                                        
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"].' '.$row["tamano"];
                                                     }
                                                     
                                                ?>
                                        <select/>
                                        </div>
                                         <div class="form-group">
                                            <label for="fuente">Fuente de Poder</label>
                                        <select multiple class="form-control" name="fuente[]" size="4" required="">
                                            <option value=""></option>
                                                <?php 
                                                     $sql = pg_query("SELECT serial,fabricante,modelo,voltaje FROM fuente WHERE estado = 'disponible' and voltaje = (SELECT voltajefuente FROM tarjeta WHERE serial = '$serialtarjeta') ");
                                                     while($row = pg_fetch_assoc($sql)){
                                                      
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"].' '.$row["voltaje"];
                                                     }
                                                    
                                                ?>
                                               
                                        <select/>
                                        </div>        
                                    
                                </div>
                            </div>
                         </div>
                             <!--  /////////////////////////////////////////////////////////////////////////////////////////////////////// -->                
                         
                         <div class="col-xs-4">
                             <div class="card card-success">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Perifericos</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                   
                                         
                                        <div class="form-group">
                                            <label for="teclado">Teclado</label>
                                        <select multiple class="form-control" name="teclado[]" size="4" required="">
                                            <option value=""></option>
                                               <?php 
                                                     $sql = pg_query("Select * From teclado where estado='disponible' Order By fabricante");
                                                     while($row = pg_fetch_assoc($sql)){
                                                        
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                     }
                                                    
                                                ?>
                                                
                                        </select>
                                        </div>
                                        
                                       <div class="form-group">
                                            <label for="raton">Raton</label>
                                        <select multiple class="form-control" name="raton[]" size="4" required="">
                                            <option value=""></option>
                                                 <?php 
                                                     $sql = pg_query("Select * From raton where estado='disponible' Order By fabricante");
                                                     while($row = pg_fetch_assoc($sql)){
                                                        
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                     }
                                                     
                                                ?>
                                        <select/>
                                        </div>
                                        <div class="form-group">
                                            <label for="monitor">Monitor</label>
                                        <select multiple class="form-control" name="monitor[]" size="4" required="">
                                            <option value=""></option>
                                                 <?php 
                                                     $sql = pg_query("Select * From monitor where estado='disponible' Order By fabricante");
                                                     while($row = pg_fetch_assoc($sql)){
                                                        
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                     }
                                                     
                                                ?>
                                        <select/>
                                        </div>
                                        <div class="form-group">
                                            <label for="fancooler">Fan Cooler</label>
                                        <select multiple class="form-control" name="fancooler[]" size="4" required="" >
                                            <option value=""></option>
                                                 <?php 
                                                     $sql = pg_query("Select * From fan where estado='disponible' Order By fabricante");
                                                     while($row = pg_fetch_assoc($sql)){
                                                        
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                     }
                                                     
                                                ?>
                                        <select/>
                                        </div>
                                         
                                    
                                </div>
                            </div>
                         </div>
                         
                                     <!--  /////////////////////////////////////////////////////////////////////////////////////////////////////// --> 
                         <div class="col-xs-4">
                             <div class="card card-success">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Extras</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                   
                                         
                                        <div class="form-group">
                                            <label for="regulador">Regulador</label>
                                        <select multiple class="form-control" name="regulador[]" size="4" required="">
                                            <option value=""></option>
                                                <?php 
                                                     $sql = pg_query("Select * From regulador where estado='disponible' Order By fabricante");
                                                     while($row = pg_fetch_assoc($sql)){
                                                        
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                     }
                                                    
                                                ?>
                                        <select/>
                                        </div>
                                         <div class="form-group">
                                            <label for="cornetas">Cornetas</label>
                                        <select multiple class="form-control" name="cornetas[]" size="4" required="">
                                            <option value=""></option>
                                                <?php 
                                                     $sql = pg_query("Select * From cornetas where estado='disponible' Order By fabricante");
                                                     while($row = pg_fetch_assoc($sql)){
                                                        
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                     }
                                                     
                                                ?>
                                               
                                        <select/>
                                        </div>

                                        <div class="form-group">
                                            <label for="case">Case</label>
                                        <select multiple class="form-control" name="case[]" size="4" required="">
                                            <option value=""></option>
                                                <?php 
                                                     $sql = pg_query("Select * From cas where estado='disponible' Order By fabricante");
                                                     while($row = pg_fetch_assoc($sql)){
                                                        
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                     }
                                                     
                                                ?>
                                        <select/>
                                        </div>
                                        <div class="form-group">
                                            <label for="cd">Unidad de CD/DVD</label>
                                        <select multiple class="form-control" name="cd[]" size="4" required="">
                                                   <option value=""></option>
                                                 <?php 
                                                     $sql = pg_query("Select * From cd where estado='disponible' Order By fabricante");
                                                     
                                                          while($row = pg_fetch_assoc($sql)){
                                                        
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                     }
                                                     
                                                ?>
                                               
                                        <select/>
                                        </div>
                                 
                                        
                                  
                                <input type="hidden" class="form-control" name="ubicacion"  value="<?php echo $unidad ;?>">
                                 <input type="hidden" class="form-control" name="sertarj"  value="<?php echo $serialtarjeta ;?>">   
                                 <input type="hidden" class="form-control" name="idsolit"  value="<?php echo $idsol ;?>">


                                        
                                        
                                    
                                </div>
                            </div>
                         </div>
                          
                            <span class="pull-left">&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-info">Guardar</button></span>
                             &nbsp;&nbsp;<a href="?page=asignar"><button type="button" class="btn">Cancelar</button></a>
                    </form>
                 </div>