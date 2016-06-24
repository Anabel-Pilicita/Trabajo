<!--Cierre de sesión-->
<?php
    session_start();
    include 'conexion_db.php'; 
    if(isset($_SESSION['usuario_id'])) {
    	session_unset();
        session_destroy();
        header("Location: index.php");
        exit;
    }
    else {
    echo "Operación incorrecta.";
    }
    
?> 