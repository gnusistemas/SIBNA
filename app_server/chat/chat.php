<?php  
    session_start();
    include '../../coneccion/coneccion.php';

    
?>
              <br>

                         <div class="col-xs-3">
                         </div>
                        <div class="col-xs-6">
                            <div class="card card-info">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Sistema Interno de Bienes Nacionales</div>
                                    </div>
                                </div>
                                       
                                        <table width="800" height="500" >
                                            <form action="app_server/chat/promen.php" method="post">
                                             <tr>
                                                 <td valign="center">
                                                   
                                                        
                                                        <iframe onload="setInterval('location.reload()',20000)" class="col-xs-9" src="app_server/chat/mensajes.php" name="iframe" width="600" height="300" frameborder="0">
                                                        </iframe>
                                                
                                                 </td>
                                             </tr>
                                            

                                             <tr>
                                                 <td>
                                                    <div class="col-xs-9" >
                                                         <label for="mensaje">Mensaje</label>
                                                         <input type="text" class="form-control" name="mensaje" placeholder="Mensaje" required=""><br>

                                                         <button name="enviar" type="submit" class="btn btn-info">Enviar</button>

                                                     </div>
                                                 </td>
                                             </tr>
                                             </form>

                                           </table>
                                            
                            </div>
                        </div>
                        <div class="col-xs-3">
                        </div>
                 </div>
                