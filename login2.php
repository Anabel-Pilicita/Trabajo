	<?php
	#Validación del ingreso luego de loguearse
	session_start();
	include 'conexion_db.php'; 
		if(isset($_POST['acceder'])) 
			{
			$usuario_nombre = mysql_real_escape_string($_POST['DNI_DOC']);
			$usuario_clave = mysql_real_escape_string($_POST['PAS_DOC']);
			$usuario_clavec = md5($_POST['PAS_DOC']);
			$sql="SELECT ID_DOC, NOM_DOC, DNI_DOC, PAS_DOC FROM DOCENTE WHERE DNI_DOC='".$usuario_nombre."' AND PAS_DOC='".$usuario_clavec."'";
			$resultado=mysql_query($sql);
			if($row = mysql_fetch_array($resultado)) {
	            $_SESSION['usuario_id'] = $row['ID_DOC']; 
	            $_SESSION['usuario_nombre'] = $row["NOM_DOC"]; 
	            header("Location: pag_usuario.php");
	        }

	         #Código para enlazar con Postgres
	        /*$resultado=pg_query($sql);
	        if($row = pg_fetch_array($resultado)) {
	            $_SESSION['usuario_id'] = $row['ID_DOC']; 
	            $_SESSION['usuario_nombre'] = $row["NOM_DOC"]; 
	            header("Location: pag_usuario.php");
	        }*/

	        else {header("Location: login.php");}
	    }


	   

	?> 
