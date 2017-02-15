<?php

function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}

?>
 <div class="col-xs-3">
                         </div>
                        <div class="col-xs-6">
                            <div class="card card-info">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Router/Modem</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="app_server/biennacional/registrar/registraphp/regrouter.php" method="post">
                                        
                                        <div class="form-group">
                                            <label for="fabricante">Fabricante</label> <font color="red">*</font>
                                        <select class="form-control" name="fabricante" id="fabricante" required="">
                                                <option value=""></option>
                                                <option value="Cisco">Cisco</option>
                                                <option value="Juniper">Juniper</option>
                                                <option value="Alcatel">Alcatel</option>
                                                <option value="Huawei">Huawei</option>
                                                <option value="Nexxt">Nexxt</option>
                                                <option value="Tp-link">TP-link</option>
                                                
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="modelo">Modelo</label> <font color="red">*</font>
                                            <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo" required="">
                                        </div>
                                     
                                        <div class="form-group"> 
                                           <label for="conexion">Conexión</label> <font color="red">*</font>
                                             <select class="form-control" name="conexion" id="conexion" required="">
                                                <option value=""></option>
                                                <option value="USB">USB</option>
                                                <option value="LAN">LAN</option>
                                             <select/>

                                        </div>
                                       <div class="form-group">
                                            <label for="puerto">Puertos RJ45</label> <font color="red">*</font>
                                        <select class="form-control" name="puerto" id="puerto" required="">
                                                <option value=""></option>
                                                <option value="2">2</option>
                                                <option value="4">4</option>
                                                <option value="6">6</option>
                                                <option value="8">8</option>
                                                <option value="10">10</option>
                                               
                                        </select>
                                        </div>
                                         <div class="form-group">
                                            <label for="mbps">Mbps</label> <font color="red">*</font>
                                        <select class="form-control" name="mbps" id="mbps" required="">
                                                <option value=""></option>
                                                <option value="150mbps">150mbps</option>
                                                <option value="300mbps">300mbps</option>
                                                <option value="600mbps">600mbps</option>
                                                <option value="1300mbps">1300mbps</option>
                                        </select>
                                        </div>
                                          <div class="form-group">
                                            <label for="wifi">Wifi integrado</label> <font color="red">*</font>
                                        <select class="form-control" name="wifi" id="wifi" required="">
                                                <option value=""></option>
                                                <option value="si">SI</option>
                                                <option value="no">NO</option>
                                               
                                        </select>
                                        </div>
                                       <div class="form-group">
                                            <label for="ano">Año de Fabricación</label> <font color="red">*</font>
                                        <select class="form-control" name="ano" id="ano" required="">
                                               <option value=""></option>
                                               <option value="2016">2016</option> 
                                               <option value="2015">2015</option>
                                               <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                               <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                 <option value="2006">2006</option>
                                                 <option value="2005">2005</option>
                                                 <option value="2004">2004</option>
                                                 <option value="2003">2003</option>
                                                 <option value="2002">2002</option>
                                                 <option value="2001">2001</option>
                                                 <option value="2000">2000</option>
                                               
                                        </select>
                                        </div>
                                        <div class="form-group">
                                           <label for="serial">Serial</label> <font color="red">*</font>
                                            <input type="text" class="form-control" name="serial" id="serial" placeholder="serial" required=""><br>
                                            <font color="red">* Campos Obligatorios</font>
                                        </div>
                                        <input type="hidden" class="form-control" name="estado"  value="disponible">
                                        <input type="hidden" class="form-control" name="nombre"  value="Router/Modem">
                                        <input type="hidden" class="form-control" name="bar"  value="<?php echo generarCodigo(9); ?>">
                                        <input type="hidden" class="form-control" name="ubicacion"  value="Unidad de Bienes Nacionales">
                                        <button  class="btn btn-info">Guardar</button>
                                         &nbsp;&nbsp;<a href="?page=registrar"><button type="button" class="btn">Cancelar</button></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                        </div>
                 </div>