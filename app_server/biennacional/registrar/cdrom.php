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
                                        <div class="title">Unidad De CD-ROM</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="app_server/biennacional/registrar/registraphp/regcdrom.php" method="post">
                                        
                                        <div class="form-group">
                                            <label for="fabricante">Fabricante</label> <font color="red">*</font>
                                        <select class="form-control" name="fabricante" id="fabricante" required="">
                                                <option value=""></option>
                                                <option value="Samsung">Samsung</option>
                                                <option value="Lg">LG</option>
                                                <option value="Liteon">Liteon</option>
                                                <option value="Creative">Creative</option>
                                                <option value="Sony">Sony</option>
                                                <option value="Pionner">Pionner</option>
                                                <option value="Iomega">Iomega</option>
                                                <option value="Plextor">Plextor</option>
                                                
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="modelo">Modelo</label> <font color="red">*</font>
                                            <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo" required="">
                                        </div>
                                        
                                       
                                         <div class="form-group">
                                            <label for="puerto">Puerto</label> <font color="red">*</font>
                                        <select class="form-control" name="puerto" id="puerto" required="">
                                                <option value=""></option>
                                                <option value="sata">SATA</option>
                                                <option value="id">ID</option>
    
                                        <select/>      
                                        </div>
                                       
                                        <div class="form-group"> 
                                           <label for="lector">Lector</label> <font color="red">*</font>
                                             <select class="form-control" name="lector" id="lector" required="">
                                                <option value=""></option>
                                                <option value="cd-rom">CD-ROM</option>
                                                <option value="dvd">DVD</option>
                                                <option value="bluray">BLU RAY</option>
                                             <select/>

                                        </div>
                                          <div class="form-group"> 
                                           <label for="velocidad">Velocidad</label> <font color="red">*</font>
                                             <select class="form-control" name="velocidad" id="velocidad" required="">
                                                <option value=""></option>
                                                <option value="1x">1x</option>
                                                <option value="4x">4x</option>
                                                <option value="20x">20x</option>
                                                <option value="40x">40x</option>
                                                <option value="52x">52x</option>
                                                <option value="80x">80x</option>
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
                                         <input type="hidden" class="form-control" name="nombre"  value="CD-ROM">
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