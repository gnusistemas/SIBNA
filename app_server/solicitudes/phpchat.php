<?php  
	include '../../coneccion/coneccion.php';

    $usuario = $_SESSION['usuario'];

    $select = "SELECT id,usuario,password,rol,cedula,encargado FROM usuarios WHERE usuario= $usuario)";
    $query = pg_query($select);
    $row = pg_num_rows($query);
	 if ($row = pg_fetch_array($query)) {
        
        $_SESSION['usuario'] = $row['usuario'];
        $_SESSION['rol'] = $row['rol'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['encargado'] = $row['encargado'];
        $_SESSION['cedula'] = $row['cedula']; 
        header('Location: ../../inicio.php?page=chat');
          

    }

?>          

 