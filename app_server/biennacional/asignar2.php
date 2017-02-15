<?php 
     include '../../coneccion/coneccion.php';
     $unidad=$_GET['unidad'];
     $idsol=$_GET['idsol'];
     $descripcion=$_GET['descrip'];

    $sqlt=pg_query("select * from solicitud where id='$idsol'");
    $rowt=pg_fetch_assoc($sqlt);
    $rt=$rowt['tarjeta'];
  
    if ($rt <> "tarjeta") {
        $estado='disabled';
    }

      $sqlt2=pg_query("select * from solicitud where id='$idsol'");
    $rowt2=pg_fetch_assoc($sqlt2);
    $rt2=$rowt2['procesador'];
  
    if ($rt2 <> "procesador") {
        $estado2='disabled';
    }

      $sqlt3=pg_query("select * from solicitud where id='$idsol'");
    $rowt3=pg_fetch_assoc($sqlt3);
    $rt3=$rowt3['dd'];
  
    if ($rt3 <> "disco duro") {
        $estado3='disabled';
    }

    $sqlt4=pg_query("select * from solicitud where id='$idsol'");
    $rowt4=pg_fetch_assoc($sqlt4);
    $rt4=$rowt4['memoriaram'];
  
    if ($rt4 <> "ram") {
        $estado4='disabled';
    }

      $sqlt5=pg_query("select * from solicitud where id='$idsol'");
    $rowt5=pg_fetch_assoc($sqlt5);
    $rt5=$rowt5['fuente'];
  
    if ($rt5 <> "fuente") {
        $estado5='disabled';
    }

      $sqlt6=pg_query("select * from solicitud where id='$idsol'");
    $rowt6=pg_fetch_assoc($sqlt6);
    $rt6=$rowt6['casen'];
  
    if ($rt6 <> "case") {
        $estado6='disabled';
    }

      $sqlt8=pg_query("select * from solicitud where id='$idsol'");
    $rowt8=pg_fetch_assoc($sqlt8);
    $rt8=$rowt8['teclado'];
  
    if ($rt8 <> "teclado") {
        $estado8='disabled';
    }

      $sqlt9=pg_query("select * from solicitud where id='$idsol'");
    $rowt9=pg_fetch_assoc($sqlt9);
    $rt9=$rowt9['raton'];
  
    if ($rt9 <> "raton") {
        $estado9='disabled';
    }

      $sqlt10=pg_query("select * from solicitud where id='$idsol'");
    $rowt10=pg_fetch_assoc($sqlt10);
    $rt10=$rowt10['monitor'];
  
    if ($rt10 <> "monitor") {
        $estado10='disabled';
    }

      $sqlt11=pg_query("select * from solicitud where id='$idsol'");
    $rowt11=pg_fetch_assoc($sqlt11);
    $rt11=$rowt11['fancooler'];
  
    if ($rt11 <> "fancooler") {
        $estado11='disabled';
    }

      $sqlt12=pg_query("select * from solicitud where id='$idsol'");
    $rowt12=pg_fetch_assoc($sqlt12);
    $rt12=$rowt12['cd'];
  
    if ($rt12 <> "cd") {
        $estado12='disabled';
    }

      $sqlt13=pg_query("select * from solicitud where id='$idsol'");
    $rowt13=pg_fetch_assoc($sqlt13);
    $rt13=$rowt13['red'];
  
    if ($rt13 <> "red") {
        $estado13='disabled';
    }

      $sqlt14=pg_query("select * from solicitud where id='$idsol'");
    $rowt14=pg_fetch_assoc($sqlt14);
    $rt14=$rowt14['video'];
  
    if ($rt14 <> "video") {
        $estado14='disabled';
    }

      $sqlt15=pg_query("select * from solicitud where id='$idsol'");
    $rowt15=pg_fetch_assoc($sqlt15);
    $rt15=$rowt15['impresora'];
  
    if ($rt15 <> "impresora") {
        $estado15='disabled';
    }

      $sqlt16=pg_query("select * from solicitud where id='$idsol'");
    $rowt16=pg_fetch_assoc($sqlt16);
    $rt16=$rowt16['router'];
  
    if ($rt16 <> "router") {
        $estado16='disabled';
    }

      $sqlt17=pg_query("select * from solicitud where id='$idsol'");
    $rowt17=pg_fetch_assoc($sqlt17);
    $rt17=$rowt17['regulador'];
  
    if ($rt17 <> "regulador") {
        $estado17='disabled';
    }

      $sqlt18=pg_query("select * from solicitud where id='$idsol'");
    $rowt18=pg_fetch_assoc($sqlt18);
    $rt18=$rowt18['cornetas'];
  
    if ($rt18 <> "cornetas") {
        $estado18='disabled';
    }

    $sqlt7=pg_query("select * from solicitud where id='$idsol'");
    $rowt7=pg_fetch_assoc($sqlt7);
    $rt7=$rowt7['ups'];
  
    if ($rt7 <> "ups") {
        $estado7='disabled';
    }

      
?>
                 
<br>

                 <div class="row">   
                 <div class="col-xs-12">
                    
                        <strong><?php echo $descripcion; ?></strong>
                   
                 </div> 
                    <form action="app_server/biennacional/asignar6.php" method="post">
                         <div class="col-xs-4">
                             <div class="card card-info">

                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Principales</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    
                                         
                                        <div class="form-group ">
                                            <label for="tarjeta">Tarjeta Madre </label>
                                        <select multiple class="form-control" name="tarjeta[]" size="4"<?php echo $estado ;?> required="">
                                                    <option value=""></option>
                                                 <?php 
                                                     $sql = pg_query("Select * From tarjeta where estado='disponible' Order By fabricante");
                                                     while($row = pg_fetch_assoc($sql)){
                                                    
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                         }
                                                ?>
                                        </select>
                                        </div>
                                        
                                       <div class="form-group">
                                            <label for="procesador">Procesador</label>
                                        <select multiple class="form-control" name="procesador[]" size="4" <?php echo $estado2 ;?> required="">
                                            <option value=""></option>
                                                <?php 
                                                     $sql = pg_query("Select * From procesador where estado='disponible' Order By fabricante");
                                                     while($row = pg_fetch_assoc($sql)){
                                                        
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                     }
                                                ?>
                                        <select/>
                                        </div>
                                        <div class="form-group">
                                            <label for="dd">Disco Duro</label>
                                        <select multiple name="dd[]" class="form-control" size="4" <?php echo $estado3 ;?> required="">
                                                 <option value=""></option>
                                                <?php 
                                                     $sql = pg_query("Select * From discoduro where estado='disponible' Order By fabricante");
                                                     while($row = pg_fetch_assoc($sql)){
                                                    
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                     }
                                                ?>
                                        <select/>
                                        </div>
                                        <div class="form-group">
                                            <label for="ram">Memoria Ram</label>
                                        <select multiple class="form-control" name="ram[]" size="4" <?php echo $estado4 ;?> required="">
                                            <option value=""></option>
                                               <?php 
                                                     $sql = pg_query("Select * From ram where estado='disponible' Order By fabricante");
                                                     while($row = pg_fetch_assoc($sql)){
                                                        
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                     }
                                                ?>
                                        <select/>
                                        </div>
                                         <div class="form-group">
                                            <label for="fuente">Fuente de Poder</label>
                                        <select multiple class="form-control" name="fuente[]" size="4"<?php echo $estado5 ;?> required="">
                                            <option value=""></option>
                                                <?php 
                                                     $sql = pg_query("Select * From fuente where estado='disponible' Order By fabricante");
                                                     while($row = pg_fetch_assoc($sql)){
                                                        
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                     }
                                                ?>
                                               
                                        <select/>
                                        </div>

                                         <div class="form-group">
                                            <label for="case">Case</label>
                                        <select multiple class="form-control" name="case[]" size="4"<?php echo $estado6 ;?> required="">
                                            <option value=""></option>
                                                <?php 
                                                     $sql = pg_query("Select * From cas where estado='disponible' Order By fabricante");
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
                                        <div class="title">Perifericos</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                   
                                         
                                        <div class="form-group">
                                            <label for="teclado">Teclado</label>
                                        <select multiple class="form-control" name="teclado[]" size="4"<?php echo $estado8 ;?> required="">
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
                                        <select multiple class="form-control" name="raton[]" size="4"<?php echo $estado9 ;?> required="">
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
                                        <select multiple class="form-control" name="monitor[]" size="4"<?php echo $estado10 ;?> required="">
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
                                        <select multiple class="form-control" name="fancooler[]" size="4"<?php echo $estado11 ;?> required="">
                                            <option value=""></option>
                                                 <?php 
                                                     $sql = pg_query("Select * From fan where estado='disponible' Order By fabricante");
                                                     while($row = pg_fetch_assoc($sql)){
                                                        
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                     }
                                                ?>
                                        <select/>
                                        </div>
                                         <div class="form-group">
                                            <label for="cd">Unidad de CD</label>
                                        <select multiple class="form-control" name="cd[]" size="4"<?php echo $estado12 ;?> required="">
                                            <option value=""></option>
                                                 <?php 
                                                     $sql = pg_query("Select * From cd where estado='disponible' Order By fabricante");
                                                     while($row = pg_fetch_assoc($sql)){
                                                        
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                     }
                                                ?>
                                               
                                        <select/>
                                        </div>
                                 
                                         <div class="form-group">
                                            <label for="red">Tarjeta de Red</label>

                                        <select multiple class="form-control" name="red[]" size="4"<?php echo $estado13 ;?> required="">
                                            <option value=""></option>
                                                 <?php 
                                                     $sql = pg_query("Select * From red where estado='disponible' Order By fabricante");
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
                             <div class="card card-info ">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Extras</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                   
                                         
                                        <div class="form-group">
                                            <label for="tdv">Tarjeta de Video</label>
                                        <select multiple class="form-control" name="tdv[]" size="4"<?php echo $estado14 ;?> required="">
                                            <option value=""></option>
                                                 <?php 
                                                     $sql = pg_query("Select * From video where estado='disponible' Order By fabricante");
                                                     while($row = pg_fetch_assoc($sql)){
                                                        
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                     }
                                                ?>
                                                
                                        </select>
                                        </div>
                                        
                                       <div class="form-group">
                                            <label for="impresora">Impresora</label>
                                        <select multiple class="form-control" name="impresora[]" size="4"<?php echo $estado15 ;?> required="">
                                            <option value=""></option>
                                                 <?php 
                                                     $sql = pg_query("Select * From impresora where estado='disponible' Order By fabricante");
                                                     while($row = pg_fetch_assoc($sql)){
                                                        
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                     }
                                                ?>
                                        <select/>
                                        </div>
                                        <div class="form-group">
                                            <label for="router">Router/Modem</label>
                                        <select multiple class="form-control" name="router[]" size="4"<?php echo $estado16 ;?> required="">
                                            <option value=""></option>
                                               <?php 
                                                     $sql = pg_query("Select * From router where estado='disponible' Order By fabricante");
                                                     while($row = pg_fetch_assoc($sql)){
                                                    
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                     }
                                                ?>
                                        <select/>
                                        </div>
                                        <div class="form-group">
                                            <label for="regulador">Regulador</label>
                                        <select multiple class="form-control" name="regulador[]" size="4"<?php echo $estado17 ;?> required="">
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
                                        <select multiple class="form-control" name="cornetas[]" size="4"<?php echo $estado18 ;?> required="">
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
                                            <label for="ups">UPS</label>
                                        <select multiple class="form-control" name="ups[]" size="4"<?php echo $estado7 ;?> required="">
                                            <option value=""></option>
                                                 <?php 
                                                     $sql = pg_query("Select * From ups where estado='disponible' Order By fabricante");
                                                     while($row = pg_fetch_assoc($sql)){
                                                        
                                                        echo '<option value="'.$row["serial"].'">'.$row["fabricante"].' '.$row["modelo"];
                                                     }
                                                ?>
                                        <select/>
                                        </div>
                                  
                                      
                                       
                            
                                        <input type="hidden" class="form-control" name="ubicacion"  value="<?php echo $unidad ;?>">
                                        <input type="hidden" class="form-control" name="isol"  value="<?php echo $idsol ;?>">
                        




                                       
                                </div>
                            </div>
                         </div> 
                         <br>
                          <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-info">Guardar</button></span>
                          &nbsp;&nbsp;<a href="?page=asignar"><button type="button" class="btn">Cancelar</button></a>
                     </form>
                 </div>