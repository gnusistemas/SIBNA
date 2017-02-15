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
                                        <div class="title">Monitor</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="app_server/biennacional/registrar/registraphp/regmonitor.php" method="post">
                                        
                                        <div class="form-group">
                                            <label for="fabricante">Fabricante</label> <font color="red">*</font>
                                        <select class="form-control" name="fabricante" id="fabricante" required="">
                                                <option value=""></option>
                                                <option value="Samsung">Samsung</option>
                                                <option value="Dell">DELL</option>
                                                <option value="Asus">Asus</option>
                                                <option value="Lenovo">Lenovo</option>
                                                <option value="Panasonic">Panasonic</option>
                                                <option value="Acer">Acer</option>
                                                <option value="BenQ">BenQ</option>
                                                <option value="Toshiba">Toshiba</option>
                                                <option value="Sony">Sony</option>
                                               
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="modelo">Modelo</label> <font color="red">*</font>
                                            <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo" required="">
                                        </div>
                                        
                                       <div class="form-group">
                                            <label for="dimensiones">Dimensiones</label> <font color="red">*</font>
                                        <select class="form-control" name="dimensiones" id="dimensiones" required="">
                                                <option value=""></option>
                                                <option value="15 pulgadas">15 pulgadas</option>
                                                <option value="16 pulgadas">16 pulgadas</option>
                                                <option value="17 pulgadas">17 pulgadas</option>
                                                <option value="19 pulgadas">19 pulgadas</option>
                                                <option value="20 pulgadas">20 pulgadas</option>
                                                <option value="22 pulgadas">22 pulgadas</option>
                                               
                                        <select/>
                                        </div>
                                         <div class="form-group">
                                            <label for="tipo">Tipo</label> <font color="red">*</font>
                                        <select class="form-control" name="tipo" id="tipo" required="">
                                                <option value=""></option>
                                                <option value="Trc">TRC</option>
                                                <option value="Led">LED</option>
                                                <option value="Plasma">PLASMA</option>
                                            
                                        </select>
                                        </div>

                                        <div class="form-group">
                                           <label for="voltaje">Voltaje</label> <font color="red">*</font>
                                             <select class="form-control" name="voltaje" id="voltaje" required="">
                                                <option value=""></option>
                                                <option value="5v-24A">5v-24A</option>
                                                <option value="12v-62.4A">12v-62.4A</option>
                                                <option value="12v-0.5A">12V-0.5A</option>
                                               
                                                
                                               <select/>

                                        <div class="form-group"> <br>
                                           <label for="color">Color</label> <font color="red">*</font>
                                            <input type="text" class="form-control" name="color" id="color" placeholder="color" required="">
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
                                         <input type="hidden" class="form-control" name="nombre"  value="Monitor">
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