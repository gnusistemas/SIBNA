<?php 
     
    include '../../coneccion/coneccion.php';
    $id = $_GET['id']; 

     
    $sql = pg_query("SELECT * FROM usuarios where id='$id'");
    $row1 = pg_fetch_assoc($sql);
    $unidadlogeada=$row1['unidad'];

    if ($unidadlogeada=="Admin" || $unidadlogeada=="Bienes") {
        $sql2 = pg_query("select * from solicitud");
    }else{
        $sql2 = pg_query("select * from solicitud where unidad='$unidadlogeada'");
    }    
    
    $row = pg_num_rows($sql2);
    
?>
            <form>
            <br>
            <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                    <div class="title">Solicitudes</div>
                                    </div>
                                </div>
                                
                                    
                                    <div class="panel panel-success">

                                        <!-- Default panel contents -->
                                        <div class="panel-heading">
                                          <br>
                                        <strong>Historial de Solicitudes</strong>

                                        </div>
                                        
                                <div class="card-body">
                                        <!-- Table -->
                                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Unidad</th>
                                                    <th>Encargado</th>
                                                    <th>Utilidad</th>
                                                    <th>Componentes</th>
                                                    <th>Descripcion</th>
                                                    <th>Accion</th>
                                                    <th>Fecha&nbsp;de&nbsp;la&nbsp;Solicitud</th>
                                                    <th>Estado</th>
                                                    <th>Accion</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                     if ($row) {
                                                         while ($info = pg_fetch_assoc($sql2)) {
                                                     echo '<tr>
                                                             <td>'.$info['id'].'</td>
                                                             <td>'.$info['unidad'].'</td>
                                                             <td>'.$info['encargado'].'</td>
                                                             <td>'.$info['utilidad'].'</td>
                                                             <td>'.$info["computador"].' '.$info["tarjeta"].' '.$info["procesador"].' '.$info["fancooler"].' '.$info["memoriaram"].' '.$info["dd"].' '.
                                                             $info["red"].' '.$info["casen"].' '.$info["cornetas"].' '.$info["raton"].' '.$info["teclado"].' '.$info["monitor"].' '.$info["fuente"]
                                                             .' '.$info["impresora"].' '.$info["regulador"].' '.$info["ups"].' '.$info["router"].' '.$info["video"].' '.$info["cd"].'</td>
                                                             <td>'.$info['descripcion'].'</td>
                                                             <td>'.$info['accion'].'</td>
                                                             <td>'.$info['fecha'].'</td>
                                                             <td>'.$info['estado'].'</td>
                                                             <td>
                                                                 
                                                                 <center> <a href="?page=editarsol&id='.$info['id'].'" class="mitooltip" title="Editar">
                                                                       <button type="button" class="btn btn btn-success">
                                                                          <i class="fa fa-pencil"></i>
                                                                       </button>
                                                                  </a></center>
                                                                  
                                                                 </td>
                                                             
                                                          </tr>';
                                                         }
                                                     }else{

                                                       }
                                                 ?>
                                                  <div>
                                      
                                       
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>