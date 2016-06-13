<!--Conexión con la bd_asociacion -->
	<?php 


		#/*
		#Conexión con MariaDB
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
        #*/

		/*
		#Conexión con PostgreSQL
		$user = "postgres";
		$password = "root";
		$dbname = "db_datosp";
		$port = "5432";
		$host = "localhost";
		$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";
		$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
		#echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";
		*/

	?>