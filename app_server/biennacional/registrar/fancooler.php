<?php

  function generarCodigo($longitud) {
  $key = '';
  $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
  $max = strlen($pattern)-1;
  for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
  return $key;
}

?><br>
                 <div class="row">
                         <div class="col-xs-3">
                         </div>
                        <div class="col-xs-6">
                            <div class="card card-info">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Fan Cooler</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="app_server/biennacional/registrar/registraphp/regfancooler.php" method="post">
                                       
                                        <div class="form-group">
                                            <label for="fabricante">Fabricante</label> <font color="red">*</font>
                                        <select class="form-control" name="fabricante" id="fabricante" placeholder="Fabricante" required="">
                                                <option value="" ></option>
                                                <option value="Cooler master">Cooler Master</option>
                                                <option value="Corsair">Corsair</option>
                                                <option value="Next">Next</option>
                                                <option value="Cryoring">Cryoring</option>
                                                <option value="Noctua">Noctua</option>
                                                <option value="DeepCool">DeepCool</option>
                                                <option value="Xigmatek">Xigmatek</option>
                                                <option value="Lepa">Lepa</option>
                                                <option value="Intel">Intel</option>
                                                
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="modelo">Modelo</label> <font color="red">*</font>
                                            <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="sockets">Sockets Soportados</label> <font color="red">*</font>
                                        <select class="form-control" name="sockets" id="sockets" required="">
                                                <option value=""></option>
                                                <option value="AM2">AM2</option>
                                                <option value="AM2+">AM2+</option>
                                                <option value="AM3">AM3</option>
                                                <option value="FM1">FM1</option>
                                                <option value="FM2">FM2</option>
                                                <option value="FM2+">FM2+</option>
                                                <option value="LG1150">LGA1150</option>
                                                <option value="LG1151">LGA1151</option>
                                                <option value="LG1155">LGA1155</option>
                                                <option value="LG1156">LGA1156</option>
                                                <option value="LG1366">LGA1366</option>
                                                <option value="LG2011">LGA2011</option>
                                                <option value="LGA2011-3">LGA2011-3</option>
                             
                                        </select>
                                        </div>
                                     
                                        <div class="form-group">
                                            <label for="revoluciones">Revoluciones(RPM)</label> <font color="red">*</font>
                                            <input type="text" class="form-control" name="revoluciones" id="revoluciones" placeholder="revoluciones">
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
                                            <input type="text" class="form-control" name="serial" id="serial" placeholder="serial"><br>
                                            <font color="red">* Campos Obligatorios</font>
                                        </div>
                                        </div>
                                        <input type="hidden" class="form-control" name="estado"  value="disponible">
                                        <input type="hidden" class="form-control" name="nombre"  value="FanCooler">
                                        <input type="hidden" class="form-control" name="ubicacion"  value="Unidad de Bienes Nacionales">
                                        <input type="hidden" class="form-control" name="bar"  value="123456<?php echo generarCodigo(4);?>">

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button  class="btn btn-info">Guardar</button>
                                         &nbsp;&nbsp;<a href="?page=registrar"><button type="button" class="btn">Cancelar</button></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                        </div>
                 </div>