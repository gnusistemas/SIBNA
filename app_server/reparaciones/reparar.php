<?php
 include '../../coneccion/coneccion.php';

  $serial = $_GET['serial'];
  
  $sql = pg_query("select nombre, fabricante, modelo, serial, estado, ubicacion, observacion from tarjeta where estado <>'disponible' and estado <> 'nodisponible' and serial='$serial' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion from procesador where estado <>'disponible' and estado <> 'nodisponible' and serial='$serial' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion from cd where estado <>'disponible' and estado <> 'nodisponible' and serial='$serial' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion from cornetas where estado <>'disponible' and estado <> 'nodisponible' and serial='$serial' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion from discoduro where estado <>'disponible' and estado <> 'nodisponible' and serial='$serial' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion from fan where estado <>'disponible' and estado <> 'nodisponible' and serial='$serial' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion from fuente where estado <>'disponible' and estado <> 'nodisponible' and serial='$serial' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion from impresora where estado <>'disponible' and estado <> 'nodisponible' and serial='$serial' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion from monitor where estado <>'disponible' and estado <> 'nodisponible' and serial='$serial' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion from ram where estado <>'disponible' and estado <> 'nodisponible' and serial='$serial' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion from raton where estado <>'disponible' and estado <> 'nodisponible' and serial='$serial' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion from regulador where estado <>'disponible' and estado <> 'nodisponible' and serial='$serial' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion from router where estado <>'disponible' and estado <> 'nodisponible' and serial='$serial' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion from red where estado <>'disponible' and estado <> 'nodisponible' and serial='$serial' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion from video where estado <>'disponible' and estado <> 'nodisponible' and serial='$serial' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion from teclado where estado <>'disponible' and estado <> 'nodisponible' and serial='$serial' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion from ups where estado <>'disponible' and estado <> 'nodisponible' and serial='$serial' 
                     union all
                     select nombre, fabricante, modelo, serial, estado, ubicacion, observacion from cas where estado <>'disponible' and estado <> 'nodisponible' and serial='$serial' 

                     ;

                     ");
$row = pg_fetch_assoc($sql);

?>
<div class="col-xs-0">
                         </div>
                        <div class="col-xs-12">
                            <div class="card card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Reparar Componente</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="post"  action="app_server/reparaciones/phpreparar.php">
                                      <div class="card-body">
                                                       <h4> Componente: <font color="blue"><?php echo $row['nombre'];?></font><br>
                                                            <br>
                                                            Fabricante: <font color="blue"><?php echo $row['fabricante'];?></font><br>
                                                            <br>
                                                            Modelo: <font color="blue"><?php echo $row['modelo'];?></font><br>
                                                            <br>
                                                            Codigo de barras: <font color="blue"><?php echo $row['serial'];?></font><br> 
                                                            <br>
                                                            Observacion: <font color="blue"><?php echo $row['observacion'];?></font></h4><br> 
                                                            <br>

                                                       <div class="form-group">
                                            <label for="estado">Indique el Estado del Componente</label> <font color="red">*</font>
                                            <select class="form-control" name="estado" id="estado" required="">
                                                <option value=""></option>
                                                <option value="en reparacion">En Reparacion</option>
                                                <option value="disponible">Reparado</option>
                                                <option value="nodisponible">No Reparado</option>
                                                                                                
                                             </select>
                                        </div>
                                        <div class="form-group"> 
                                            <label for="observacion">Observacion</label> <font color="red">*</font>
                                            <textarea class="form-control" name="observacion" id="observacion" rows="4" required=""></textarea>
                                        </div>
                                                <font color="red">* Campo Requerido</font>   <br>
                                                <br>

                                        <input type="hidden"  name="serial"  value="<?php echo $serial ;?>">

                                                           
                                         <button type="submit" class="btn btn-warning">Aceptar</button>
                                                           
                                                           
                                         <a href="?page=ver_status"><button type="button" type="button" class="btn">
                                                             Cancelar
                                         </button>
                                         </a>
                                    </form>
                                       </div>   

                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-0">
                        </div>
                 </div>

