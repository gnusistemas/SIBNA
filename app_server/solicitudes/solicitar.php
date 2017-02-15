<?php
include '../../coneccion/coneccion.php';

$id = $_GET['id'];

$sql = pg_query(" SELECT * FROM usuarios where id='$id'"); 

$row = pg_fetch_assoc($sql);

?>


 <br>
 <div class="col-xs-3">
                         </div>
                        <div class="col-xs-6">
                            <div class="card card-info">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Realizar Solicitud</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="app_server/solicitudes/guardarsolicitud.php" method="post">
                                        <div class="form-group">
                                            <label for="unidad">Unidad</label> <font color="red">*</font>
                                            <input type="text" class="form-control" readonly name="unidad" id="Unidad" placeholder="<?php echo $row['unidad'];?>" value="<?php echo $row['unidad'];?>" required="">
                                        </div>
                                        
        
                                        
                                        <div class="form-group">
                                            <label for="encargado">Encargado</label> <font color="red">*</font>
                                            <input type="text" class="form-control" readonly name="encargado" id="Encargado" placeholder="<?php echo $row['encargado'];?>" value="<?php echo $row['encargado'];?>" required="">
                                        </div>
                                        <div class="form-group"> 
                                           <label for="utilidad">Utilidad</label> <font color="red">*</font>
                                             <select class="form-control" name="utilidad" id="utilidad" required="">
                                                <option value=""></option>
                                                <option value="administrativo">Administrativa</option>
                                                <option value="academico">Académica</option>
                                                <option value="desarrollo">Desarrollo</option>
                                             <select/>

                                        </div>
                                        <div class="form-group"> 
                                           <label for="accion">Acción</label> <font color="red">*</font>
                                             <select class="form-control" name="accion" id="accion" required="">
                                                <option value=""></option>
                                                <option value="solicitar">Solicitar</option>
                                                <option value="desincorporar">Desincorporar</option>
                                                
                                             <select/>

                                        </div>
                                         <div>
                                          <div class="form-group">
                                              <label  class="control-label" for="componentes">Componentes</label> <font color="red">*</font>
                                          </div>

                                          <div class="checkbox3 checkbox-info checkbox-inline checkbox-check  checkbox-circle checkbox-light">
                                            <input type="checkbox" id="checkbox1" value="computador" name="computador" >
                                            <label for="checkbox1">
                                              Computador
                                            </label>
                                          </div>


                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="checkbox3 checkbox-info checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                            <input type="checkbox" id="checkbox2" value="tarjeta" name="tarjeta" >
                                            <label for="checkbox2">
                                              Tarjeta Madre
                                            </label>
                                          </div>


                                          &nbsp;<div class="checkbox3 checkbox-info checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                            <input type="checkbox" id="checkbox3" name="procesador" value="procesador">
                                            <label for="checkbox3">
                                              Procesador
                                            </label>
                                          </div>

                                          <div class="checkbox3 checkbox-info checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                            <input type="checkbox" id="checkbox4" name="fancooler" value="fancooler">
                                            <label for="checkbox4">
                                              FanCooler
                                            </label>
                                          </div>


                                           <div class="checkbox3 checkbox-info checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                            <input type="checkbox" id="checkbox5" name="ram" value="ram">
                                            <label for="checkbox5">
                                              Memoria Ram
                                            </label>
                                          </div>

                                         &nbsp;&nbsp;&nbsp; <div class="checkbox3 checkbox-info checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                            <input type="checkbox" id="checkbox6" name="dd" value="disco duro">
                                            <label for="checkbox6">
                                              Disco Duro
                                            </label>
                                          </div>
                                          
                                           &nbsp;&nbsp;&nbsp;&nbsp;<div class="checkbox3 checkbox-info checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                            <input type="checkbox" id="checkbox7" name="raton" value="raton">
                                            <label for="checkbox7">
                                              Ratón
                                            </label>
                                          </div>


                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="checkbox3 checkbox-info checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                            <input type="checkbox" id="checkbox8" name="case" value="case">
                                            <label for="checkbox8">
                                              Case
                                            </label>
                                          </div>
                                           
                                            <div class="checkbox3 checkbox-info checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                            <input type="checkbox" id="checkbox9" name="cd" value="cd">
                                            <label for="checkbox9">
                                              Unidad de Disco
                                            </label>
                                          </div>
                                          
                                          
                                          <div class="checkbox3 checkbox-info checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                            <input type="checkbox" id="checkbox10" name="red" value="red">
                                            <label for="checkbox10">
                                              Tarjeta de Red
                                            </label>
                                          </div>

                                           <div class="checkbox3 checkbox-info checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                            <input type="checkbox" id="checkbox11" name="teclado" value="teclado">
                                            <label for="checkbox11">
                                              Teclado
                                            </label>
                                          </div>

                                         &nbsp;&nbsp;&nbsp;&nbsp; <div class="checkbox3 checkbinfo checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                            <input type="checkbox" id="checkbox12" name="monitor" value="monitor">
                                            <label for="checkbox12">
                                              Monitor
                                            </label>
                                          </div>
                                          
                                          <div class="checkbox3 checkbinfo checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                            <input type="checkbox" id="checkbox13" name="fuente" value="fuente">
                                            <label for="checkbox13">
                                              Fuente de Poder
                                            </label>
                                          </div>

                                           <div class="checkbox3 checkbinfo checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                            <input type="checkbox" id="checkbox14" name="impresora" value="impresora">
                                            <label for="checkbox14">
                                              Impresora
                                            </label>
                                          </div>

                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="checkbox3 checkbinfo checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                            <input type="checkbox" id="checkbox15" name="regulador" value="regulador">
                                            <label for="checkbox15">
                                              Regulador
                                            </label>
                                          </div>
                                          
                                          &nbsp;&nbsp;<div class="checkbox3 checkbinfo checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                            <input type="checkbox" id="checkbox16" name="router" value="router">
                                            <label for="checkbox16"> 
                                              Router
                                            </label>
                                          </div>

                                           <div class="checkbox3 checkbox-info checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                            <input type="checkbox" id="checkbox17" name="video" value="video">
                                            <label for="checkbox17">
                                              Tarjeta de Vídeo
                                            </label>
                                          </div>

                                          &nbsp;<div class="checkbox3 checkbox-info checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                            <input type="checkbox" id="checkbox18" name="cornetas" value="cornetas">
                                            <label for="checkbox18">
                                              Cornetas
                                            </label>
                                          </div>
                                          
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="checkbox3 checkbox-info checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                            <input type="checkbox" id="checkbox19" name="ups" value="ups">
                                            <label for="checkbox19">
                                              UPS
                                            </label>
                                          </div>
                                      </div>  
                                         </div> 
                                       
                                         <div class="form-group"> 
                                            <label for="descripcion">Descripción (Detalle de los Componentes)</label> <font color="red">*</font>
                                            <textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Detalles de los componentes a solicitar" required=""></textarea>
                                        </div>
                                        <div class="form-group"> 
                                            <label for="codicomp">Codigo del serial a Desincorporar</label> <font color="blue">* Solo en el Caso que desee desincorporar</font>
                                            <textarea class="form-control" name="codicomp" id="codicomp" rows="3" placeholder="Codigo de Barras"></textarea>
                                        </div>
                                         <div class="form-group"> 
                                            <label for="observacion">Observacion</label> <font color="red">*</font>
                                            <textarea class="form-control" name="observacion" id="observacion" placeholder="Observaciones de la Solicitud" rows="4" required=""></textarea>
                                        </div>
                                        
                                        <font color="red">* Campos Obligatorios</font><br>
                                        <br>
                                        <input type="hidden" class="form-control" name="estado"  value="pendiente">
                                       
                                        <button  class="btn btn-info">Guardar</button>
                                        &nbsp;&nbsp;<a href="?page=solicitar"><button type="button" class="btn">Cancelar</button></a>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                        </div>
                 </div>