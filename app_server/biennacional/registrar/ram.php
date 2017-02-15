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
                                        <div class="title">Memoria Ram</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="app_server/biennacional/registrar/registraphp/regram.php" method="post">
                                        
                                        <div class="form-group">
                                            <label for="fabricante">Fabricante</label> <font color="red">*</font>
                                        <select class="form-control" name="fabricante" id="fabricante" required="">
                                                <option value=""></option>
                                                <option value="kington">Kington</option>
                                                <option value="Carsair">Carsair</option>
                                                <option value="Gskill">Gskill</option>
                                                <option value="Crucial">Crucial</option>
                                                <option value="Tep">Tep</option>
                                                <option value="Mushkin ECO2">Mushkin ECO2</option>
                                                <option value="GeIl">GeIL</option>
                                                <option value="Sandisk">Sandisk</option>
                                                <option value="Infineon">Infineon</option>
                                                
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="modelo">Modelo</label> <font color="red">*</font>
                                            <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo" required="">
                                        </div>
                                        <div class="form-group">
                                        <label for="tipo">Tipo</label> <font color="blue">*</font>
                                           <select class="form-control" name="tipo" id="tipo" required="">
                                                <option value=""></option>
                                                <option value="ddr333">DDR333</option>
                                                <option value="ddr400">DDR400</option>
                                                <option value="ddr2">DDR2</option>
                                                <option value="ddr3">DDR3</option>
                                                <option value="ddr4">DDR4</option>
                                               
                                        <select/>
                                        </div>
                                        <div class="form-group">
                                            
                                            <label for="tamano">Capacidad</label> <font color="red">*</font>
                                        <select class="form-control" name="tamano" id="tamano" required="">
                                                <option value=""></option>
                                                <option value="128MB">128MB</option>
                                                <option value="256MB">256MB</option>
                                                <option value="512MB">512MB</option>
                                                <option value="1GB">1GB</option>
                                                <option value="2GB">2GB</option>
                                                <option value="4GB">4GB</option>
                                                <option value="6GB">6GB</option>
                                                <option value="8GB">8GB</option>
                                                <option value="16GB">16GB</option>
                                        <select/>
                                        </div>
                                        <div class="form-group">
                                        <label for="voltaje">Voltaje</label> <font color="red">*</font>
                                           <select class="form-control" name="voltaje" id="voltaje" required="">
                                                <option value=""></option>
                                                <option value="2.5v">2.5V</option>
                                                <option value="1.8-2.5v">1.8V - 2.5V</option>
                                                <option value="1.35-1.5v">1.35V - 1.5V</option>
                                               
                                               
                                        <select/>
                                        </div>
                                         <div>
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
                                        <div class="form-group"><br>
                                            <label for="serial">Serial</label> <font color="red">*</font>
                                            <input type="text" class="form-control" name="serial" id="serial" placeholder="Serial" required=""><br>
                                            <font color="red">* Campos Obligatorios</font>
                                        </div>
                                        <input type="hidden" class="form-control" name="estado"  value="disponible">
                                        <input type="hidden" class="form-control" name="nombre"  value="Memoria Ram">
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