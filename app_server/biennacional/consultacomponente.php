<?php 
     
    include '../../coneccion/coneccion.php';

    $codigo = $_GET['codigo']; 
    $row = pg_num_rows($sql);
    $row2 = pg_num_rows($sql1);
    
?>
    
            <br>
            <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                    <div class="title">Componente</div>
                                    </div>
                                </div>
                                
                                    
                                    <div class="panel panel-warning">

                                        <!-- Default panel contents -->
                                        <div class="panel-heading">
                                          <br>
                                        

                                        </div>
                                        
                                <div class="card-body">
                                    <?php
                                        $sql = pg_query("select * from cas where serial='$codigo';"); 
                                        $sql1 = pg_query("select * from cd where serial='$codigo';");
                                        $sql2 = pg_query("select * from cornetas where serial='$codigo';"); 
                                        $sql3 = pg_query("select * from discoduro where serial='$codigo';"); 
                                        $sql4 = pg_query("select * from fan where serial='$codigo';"); 
                                        $sql5 = pg_query("select * from fuente where serial='$codigo';"); 
                                        $sql6 = pg_query("select * from impresora where serial='$codigo';"); 
                                        $sql7 = pg_query("select * from monitor where serial='$codigo';"); 
                                        $sql8 = pg_query("select * from procesador where serial='$codigo';"); 
                                        $sql9 = pg_query("select * from ram where serial='$codigo';"); 
                                        $sql10 = pg_query("select * from raton where serial='$codigo';"); 
                                        $sql11 = pg_query("select * from red where serial='$codigo';"); 
                                        $sql12 = pg_query("select * from regulador where serial='$codigo';"); 
                                        $sql13 = pg_query("select * from router where serial='$codigo';"); 
                                        $sql14 = pg_query("select * from tarjeta where serial='$codigo';"); 
                                        $sql15 = pg_query("select * from teclado where serial='$codigo';"); 
                                        $sql16 = pg_query("select * from ups where serial='$codigo';"); 
                                        $sql17 = pg_query("select * from video where serial='$codigo' ;"); 


                                        echo '$sql';

                                    ?>
                                       
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>