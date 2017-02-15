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
                                        <div class="title">Fuente de Poder</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="app_server/biennacional/registrar/registraphp/regfuente.php" method="post">
                                        
                                        <div class="form-group">
                                            <label for="fabricante">Fabricante</label> <font color="red">*</font>
                                        <select class="form-control" name="fabricante" id="fabricante" required="">
                                                <option value=""></option>
                                                <option value="Evga">EVGA</option>
                                                <option value="Corsair">Corsair</option>
                                                <option value="RaidMAx">RaidMax</option>
                                                <option value="Logisys">LogiSys</option>
                                                <option value="SeaSonic">SeaSonic</option>
                                                <option value="Silverstone">SilverStone</option>
                                                <option value="Super Flower">Super Flower</option>
                                                <option value="EnerMax">EnerMAx</option>
                                                <option value="Ther Maltake">Ther Maltake</option>
                                               
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="modelo">Modelo</label> <font color="red">*</font>
                                            <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo" required="">
                                        </div>
                                        
                                       <div class="form-group">
                                            <label for="fan">Fan Cooler</label> <font color="red">*</font>
                                        <select class="form-control" name="fan" id="fan" required="">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                
                                               
                                        <select/>
                                        </div>
                                        <div class="form-group">
                                           <label for="voltaje">Voltaje</label> <font color="red">*</font>
                                             <select class="form-control" name="voltaje" id="voltaje" required="">
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
                                           <label for="pin">Pin Connectors</label> <font color="red">*</font>
                                             <select class="form-control" name="pin" id="pin" required="">
                                                <option value=""></option>
                                                <option value="2">2</option>
                                                <option value="4">4</option>
                                                <option value="6">6</option> 
                                                <option value="8">8</option> 
                                                <option value="10">10</option> 
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
                                            <input type="text" class="form-control" name="serial" id="serial" placeholder="serial" required=""><br>
                                            <font color="red">* Campos Obligatorios</font>
                                        </div>
                                        <input type="hidden" class="form-control" name="estado"  value="disponible">
                                        <input type="hidden" class="form-control" name="nombre"  value="Fuente de Poder">
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