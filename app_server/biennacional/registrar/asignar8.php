                          <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Profile Card</div>
                                    </div>
                                    <div class="pull-right card-action">
                                        <div class="btn-group" role="group" aria-label="...">
                                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#modalCardProfileExample"><i class="fa fa-code"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row no-margin">
                                        <div class="col-sm-3">
                                            <div class="card profile">
                                                <div class="card-profile-img">
                                                    <img src="../../../../img/profile/picjumbo.com_HNCK4153_resize.jpg">
                                                </div>
                                                <div class="card-body">
                                                    <div class="name"></div>
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <i class="fa fa-users"></i> 10 Friends
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                        </div>
                                        <div class="col-sm-3">
                                        </div>
                                        <div class="col-sm-3">
                                        </div>
                                    </div>
                                </div>
                             </div>


<!--<?php  
	include '../../coneccion/coneccion.php';
	include '../../Errores/mostrar_errores.php';

	$id = $_GET['id'];
	
    
   
	$result = pg_query(" UPDATE solicitud set estado='rechazada' where id= '$id' ");

	         // pg_query(" UPDATE solicitud set estado='aprobado' where id= '$idsol' "); 


	if ($result) {
		header('Location: ../inicio.php?page=asignar');
	}
	
?>          -->