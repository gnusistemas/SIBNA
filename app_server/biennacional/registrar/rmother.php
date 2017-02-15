<?php

function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}

?>
                 <br>
                 <div class="row">
                         <div class="col-xs-3">
                         </div>
                        <div class="col-xs-6">
                            <div class="card card-info">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Tarjeta Madre</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="app_server/biennacional/registrar/registraphp/regrmother.php" method="post">
                                         
                                        <div class="form-group">
                                            <label for="fabricante">Fabricante</label> <font color="red">*</font> 

                                        <select class="form-control" name="fabricante" id="fabricante" required="">
                                                <option value=""></option>
                                                <option value="Msi"><a href="ram.php">MSI</a></option>
                                                <option value="Intel">INTEL</option>
                                                <option value="Dfi">DFI</option>
                                                <option value="Evga">EVGA</option>
                                                <option value="Gigabyte">GIGABYTE</option>
                                                <option value="Biostar">BIOSTAR</option>
                                                <option value="Asus">ASUS</option>
                                                <option value="Asrock">ASROCK</option>
                                                <option value="Pcchips">PC CHIPS</option>
                                                <option value="Soyo">SOYO</option>
                                        </select> 
                                        </div>
                                        <div class="form-group">
                                            <label for="modelo">Modelo</label> <font color="red">*</font>
                                            <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo de Tarjeta" required="">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="socket">CPU Socket</label> <font color="red">*</font>
                                            <select class="form-control" name="socket" id="socket" required="">
                                                <option value=""></option>
                                                <option value="pga">PGA</option>
                                                <option value="bga">BGA</option>
                                                <option value="lga">LGA</option>
                                               
                                             </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="procesadorf">Fabricante del Procesador</label> <font color="red">*</font>
                                            <input type="text" class="form-control" name="procesadorf" id="procesador" placeholder="Fabricante del procesador" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="procesadorm">Modelo del Procesador</label> <font color="red">*</font>
                                            <input type="text" class="form-control" name="procesadorm" id="procesador" placeholder="Modelo del procesador" required="">
                                        </div>
                                       <div class="form-group">
                                            <label for="slot">Slot de Memoria RAM</label> <font color="red">*</font>
                                        <select class="form-control" name="slot" id="slot" required="">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                        <select/>
                                        </div>
                                        <div class="form-group">
                                            <label for="ram">Tipo de Memoria RAM</label> <font color="red">*</font>
                                        <select class="form-control" name="ram" id="ram" required="">
                                                <option value=""></option>
                                                <option value="ddr333">DDR333</option>
                                                <option value="ddr400">DDR400</option>
                                                <option value="ddr2">DDR2</option>
                                                <option value="ddr3">DDR3</option>
                                                <option value="ddr4">DDR4</option>

                                        <select/>
                                        </div>
                                        <div class="form-group">
                                            <label for="lvideo">Slot de Vídeo</label> <font color="red">*</font>
                                        <select class="form-control" name="lvideo" id="lvideo" required="Slot de Video">
                                                <option value=""></option>
                                                <option value="si">Si</option>
                                                <option value="no">No</option>
                                        <select/>
                                        </div>
                                         <div class="form-group">
                                            <label for="ethernet">Slot de Ethernet</label> <font color="red">*</font>
                                        <select class="form-control" name="ethernet" id="ethernet" required="">
                                                <option value=""></option>
                                                <option value="si">Si</option>
                                                <option value="no">No</option>
                                        <select/>
                                        </div>
                                         <div class="form-group">
                                            <label for="socdd">Socket de Disco Duro</label> <font color="red">*</font>
                                        <select class="form-control" name="socdd" id="socdd" required="">
                                                <option value=""></option>
                                                <option value="SATA">SATA</option>
                                                <option value="ID">ID</option>
                                               
                                        <select/>
                                        </div>
                                         <div class="form-group">
                                            <label for="watts">Voltaje de la Fuente</label> <font color="red">*</font>
                                              <select class="form-control" name="watts" id="watts" required="">
                                                <option value=""></option>
                                                <option value="300w">300w</option>
                                                <option value="350w">350w</option>
                                                <option value="400w">400w</option>
                                                <option value="450w">450w</option>
                                                <option value="500w">500w</option>
                                                <option value="550w">550w</option>
                                                <option value="600w">600w</option>
                                                <option value="650w">650w</option>
                                                <option value="700w">700w</option>
                                                <option value="750w">750w</option>
                                                <option value="800w">800w</option>
                                                <option value="900w">900w</option>
                                                <option value="950w">950w</option>
                                                <option value="1000w">1000w</option>
                                               <select/>
                                        </div>
                                        <div class="form-group">
                                            <label for="usb">Puertos USB</label> <font color="red">*</font>
                                        <select class="form-control" name="usb" id="usb" required="">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                
                                        </select>
                                        </div>
                                         <div class="form-group">
                                            <label for="pusa">Puertos SATA</label> <font color="red">*</font>
                                        <select class="form-control" name="pusa" id="pusa" required="">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                
                                        </select>
                                        </div>
                                           <div class="form-group">
                                            <label for="pci">Slot PCI</label> <font color="red">*</font>
                                        <select class="form-control" name="pci" id="pci" required="">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                
                                        </select>
                                        </div>
                                           <div class="form-group">
                                            <label for="minipci">Slot Mini PCI</label> <font color="red">*</font>
                                        <select class="form-control" name="minipci" id="minipci" required="">
                                                <option value=""></option>
                                                <option value="si">Si</option>
                                                <option value="no">No</option>
                                                
                                        </select>
                                        </div>
                                          <div class="form-group">
                                            <label for="pcixpress">Slot PCI Xpress</label> <font color="red">*</font>
                                        <select class="form-control" name="pcixpress" id="pcixpress" required="">
                                                <option value=""></option>
                                                <option value="si">Si</option>
                                                <option value="no">No</option>
                                                
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
                                            <input type="text" class="form-control" name="serial" id="serial" placeholder="Serial"><br>
                                            <font color="red">* Campos Obligatorios</font>
                                            
                                        </div>
                                        <input type="hidden" class="form-control" name="estado"  value="disponible">
                                        <input type="hidden" class="form-control" name="nombre"  value="Tarjeta Madre">
                                        <input type="hidden" class="form-control" name="ubicacion"  value="Unidad de Bienes Nacionales">
                                        <input type="hidden" class="form-control" name="bar"  value="<?php echo generarCodigo(9); ?>">
                                        
                                        <button  class="btn btn-info">Guardar</button>
                                         &nbsp;&nbsp;<a href="?page=registrar"><button type="button" class="btn">Cancelar</button></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                        </div>
                 </div>