<?php
     function dameURL(){
     $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
     return $url;
     }


    

     if (dameURL()=="http://localhost:80/SIBNA/prueba.php") {
     	echo "hola bebe";
     }

?>