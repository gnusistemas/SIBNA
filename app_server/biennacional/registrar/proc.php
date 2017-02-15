<?php

function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}

?> <br>
                 <div class="row">
                         <div class="col-xs-3">
                         </div>
                        <div class="col-xs-6">
                            <div class="card card-info">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Procesador</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="app_server/biennacional/registrar/registraphp/regproc.php" method="post">
                                        
                                        <div class="form-group">
                                            <label for="fabricante">Fabricante</label> <font color="red">*</font>
                                        <select class="form-control" name="fabricante" id="fabricante" required="">
                                                <option value=""></option>
                                                <option value="Amd">AMD</option>
                                                <option value="Cirrus /logic">Cirrus Logic</option>
                                                <option value="Ibm">IBM</option>
                                                <option value="Zilog">Zilog</option>
                                                <option value="Cyrix">Cyrix</option>
                                                <option value="Intel">Intel</option>
                                                <option value="Qualcomm">Qualcomm</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="modelo">Modelo</label> <font color="red">*</font>
                                            <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="data">Data Width</label> <font color="red">*</font>
                                        <select class="form-control" name="data" id="data" required="">
                                                <option value=""></option>
                                                <option value="32-bits">32-bit</option>
                                                <option value="64-bits">64-bit</option>
                                        <select/>
                                        </div>
                                     
                                        <div class="form-group">
                                            <label for="frecuencia">Frecuencia (Giga hertz)</label> <font color="red">*</font>
                                            <input type="text" class="form-control" name="frecuencia" id="frecuencia" placeholder="GHz">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="nucleo">Núcleos</label> <font color="red">*</font>
                                            <input type="text" class="form-control" name="nucleo" id="nucleo" placeholder="Nucleos">
                                        </div>
                                        <div class="form-group">
                                            <label for="graficos">Gráfico Integrado</label> <font color="red">*</font>
                                        <select class="form-control" name="graficos" id="graficos" required="graficos">
                                                <option value=""></option>
                                                <option value="si">Si</option>
                                                <option value="no">No</option>
                                        <select/>
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
                                            <input type="text" class="form-control" name="serial" id="serial" placeholder="Serial"><br>
                                            <font color="red">* Campos Obligatorios</font>
                                        </div>
                                       
                                        <input type="hidden" class="form-control" name="estado"  value="disponible">
                                        <input type="hidden" class="form-control" name="nombre"  value="Procesador">
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