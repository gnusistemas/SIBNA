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
                                        <div class="title">Disco Duro</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="app_server/biennacional/registrar/registraphp/regdd.php" method="post"> 
                                        <div class="form-group">
                                            <label for="fabricante">Fabricante</label> <font color="red">*</font>
                                            <select class="form-control" name="fabricante" id="fabricante" required="">
                                                <option value=""></option>
                                                <option value="Samsung">Samsung</option>
                                                <option value="SeaGate">SeaGate</option>
                                                <option value="Kington">Kington</option>
                                                <option value="Intel">Intel</option>
                                                <option value="Wetern">Western</option>
                                                <option value="Hitachi">Hitachi</option>
                                                <option value="Crucial">Crucial</option>
                                                <option value="Sandisk">Sandisk</option>
                                                <option value="Ocz">Ocz</option>
                                                <option value="Corsair">Corsair</option>                                                
                                             </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="modelo">Modelo</label> <font color="red">*</font>
                                            <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="capacidad">Capacidad</label> <font color="red">*</font>
                                              <select class="form-control" name="capacidad" id="capacidad" required="">
                                                <option value=""></option>
                                                <option value="40GB">40GB</option>
                                                <option value="80GB">80GB</option>
                                                <option value="120GB">120GB</option>
                                                <option value="160GB">160GB</option>
                                                <option value="240GB">240GB</option>
                                                <option value="320GB">320GB</option>
                                                <option value="500GB">500GB</option>
                                                <option value="1tb">1TB</option>
                                              <select/>
                                        </div>
                                            <div>
                                               <label for="tipo">Tipo</label> <font color="red">*</font>
                                                  <select class="form-control" name="tipo" id="tipo" required="">
                                                     <option value=""></option>
                                                     <option value="ID">ID</option>
                                                     <option value="SATA">SATA</option>
                                                   <select/>
                                            </div>
                                        <div class="form-group"> <br>
                                            <label for="cache">Memoria Caché</label> <font color="red">*</font>
                                              <select class="form-control" name="cache" id="cache" required="">
                                                <option value=""></option>
                                                <option value="32MB">32MB</option>
                                                <option value="64MB">64MB</option>
                                                <option value="128MB">128MB</option>
                                                <option value="256MB">256MB</option>
                                              <select/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="revoluciones">Revoluciones por Minuto</label> <font color="red">*</font>
                                            <input type="text" class="form-control" name="revoluciones" id="revoluciones" placeholder="RPM">
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
                                        <input type="hidden" class="form-control" name="estado"  value="disponible">
                                        <input type="hidden" class="form-control" name="nombre"  value="Disco Duro">
                                        <input type="hidden" class="form-control" name="bar"  value="123456<?php echo generarCodigo(4); ?>">
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