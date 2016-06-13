<!--Conexión con la bd para cargar datos -->
	<?php 
		$servidor = "localhost";
		$usuario = "root";
		$contrasena = "root";

		if (!($db=mysql_connect($servidor,$usuario))){ 	
			echo "Error conectando a la base de datos.";  
			exit(); 		
		}


		if(!(mysql_select_db("db_datos",$db)))	{	
			echo "Error seleccionando la base de datos.";  
			exit();
		} 

	?>