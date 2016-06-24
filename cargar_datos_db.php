<!--Conexión con la bd_asociacion -->
		
		<!DOCTYPE html>
<html lang="es">

  <head>
    <title>Pagina Principal</title> 
    <?php include 'meta.php'; ?>
    <?php include 'estilos.php'; ?>
	<?php include 'links.php'; ?>
	<?php include 'scripts.php'; ?>
  </head>

  <body>
	<!--CONTENIDO PRINCIPAL-->
    <div class="container-fluid">

	<!--1:Titulo e imagen -->
	<?php include 'encabezado.php'; ?>


	<div class="row">
		<div class="col-md-offset-1 col-md-10">
		<form method="post" action="" class="form-horizontal">
		<fieldset>
		<!-- Form Name -->
		<legend>Cargar Datos</legend>

		<!-- Departamento -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="DEP_DOC">Seccionar tabla</label>
			<div class="col-md-4">
				<select id="tabla" name="tabla" class="form-control">
              		<option value="2"> Docente</option>
              		<option value="1"> Departamento</option>
              		<option value="3"> Actividades</option>
              		<option value="4"> Inscripcion</option>
              		<option value="5"> Comentarios</option>
              		<option value="6"> Contacto</option>   
				</select>
			</div>
		</div>

		<!-- Valor inicial-->
		<div class="form-group">
  		<label class="col-md-4 control-label" for="inicio">Inicio</label>  
  		<div class="col-md-4">
  			<input id="inicio" name="inicio" placeholder="" class="form-control input-md" type="text">
  		</div>
		</div>

		<!-- Valor Final-->
		<div class="form-group">
  		<label class="col-md-4 control-label" for="fin">Fin</label>  
  		<div class="col-md-4">
  			<input id="fin" name="fin" placeholder="" class="form-control input-md" type="text">
  		</div>
		</div>

		<!-- Crear valores -->
		<div class="form-group">
  		<label class="col-md-4 control-label" for="almacenar">Almacenar</label>
  		<div class="col-md-4">
    	<button id="almacenar" name="almacenar" class="btn btn-primary">Almacenar</button>
  		</div>
		</div>
	</div>
	</div>
</fieldset>
</form>



		<?php 
			
		include 'conexion_db.php'; 
		if(isset($_POST['almacenar'])){
			
			$inicio = $_POST["inicio"];
			$fin = $_POST["fin"];
			$tabla = $_POST["tabla"];
			
			if ($tabla==1) {
			echo ($tabla);
				$ID_DEP=0;
				for ($i=$inicio;$i<= $fin;$i++) { 
				$var=strval($i);
				#$ID_DEP=$i;
				$departamento = "departamento".strval($var);
				$sql = "INSERT INTO departamento (NOM_DEP,ID_DEP) VALUES ('".$departamento."','".$i."');";
				#mysql_query($sql);	
				pg_query($sql);	
				}
				echo "<h3>Datos creados en la tabla Departamento</h3><hr><br>";
			}

			if ($tabla==2) {
				echo ($tabla);
				$con=0;
				$ID_DOC=0;
				$dni = 4000;
				$telefono = 602683;

				for ($i=$inicio; $i <= $fin; $i++) { 
					$var=strval($i);
					$ID_DOC=$i;
					$nombre = "nombre".$var;
					$apellidos = "apellidos".$var;
					$dni="X498".$i;
					$telefono++;
					$direccion = "calle".$var."puerta".$var."piso".$var;
					$password = "clave%".$var;
					$email = "ejemplo".$var."@upm.es";
					$con++;
					if ($con<=10) {
					$departamento =$con;			
					}
					else {$con=1;
						$departamento =$con;	
					}	
					$sql = "INSERT INTO docente (ID_DOC,NOM_DOC, APE_DOC, DNI_DOC, ID_DEP, TEL_DOC, DIR_DOC, EMA_DOC, PAS_DOC) VALUES ('".$ID_DOC."','".$nombre."', '".$apellidos."', '".$dni."', '".$departamento."', '".$telefono."', '".$direccion."', '".$email."', '".$password."');";		
					mysql_query($sql);
					#pg_query($sql);		
				}
				echo "<h3>Datos creados en la tabla Docente</h3><hr><br>";
			}
	


			if ($tabla==3) {
				echo ($tabla);
				for ($i=$inicio; $i <= $fin; $i++) { 
					$var=strval($i);
					$ID_ACT=$i;
					$fecha = "2016-08-03 13:00:00";
					$descripcion = "Descripcion".$var.":Durante el seminario se explicara el manejo de memoria en JAVA junto con sus caracteristicas. Se cubriran los principales parametros de configuracion, y se presentaran distintos ejemplos que permitiran abordar los temas teniendo una mirada practica. Se vera tambien alternativas para mitigar y solucionar los problemas mas recurrentes.";
					$nombre="Seminario".$var."Administracion de Memoria con JAVA";
					$sql = "INSERT INTO actividades (ID_ACT,NOM_ACT, FEC_ACT, DES_ACT) VALUES ('".$ID_ACT."','".$nombre."', '".$fecha."', '".$descripcion."');";
					#mysql_query($sql);
					pg_query($sql);
					}	
					echo "<h3>Datos creados en la tabla Actividades</h3><hr><br>";			
				}
			

			if ($tabla==4) {
				$con=0;
				echo ($tabla);
				for ($i=$inicio; $i <= $fin; $i++) { 
					$var=strval($i);
					$ID_INS=$i;
					$ID_DOC=$i;
					$con++;
					if ($con<=10) {
					$ID_ACT =$con;			
					}
					else {$con=1;
						$ID_ACT =$con;	
					}	

					$sql = "INSERT INTO inscripcion (ID_INS,ID_DOC,ID_ACT) VALUES ('".$ID_INS."','".$ID_DOC."', '".$ID_ACT."');";
					#mysql_query($sql);
					pg_query($sql);
					}	
					echo "<h3>Datos creados en la tabla Inscripcion</h3><hr><br>";
			}

			if ($tabla==5) {
				$con=0;
				echo ($tabla);
				for ($i=$inicio; $i <= $fin; $i++) { 
					$var=strval($i);
					$ID_COM=$i;
					$DES_COM="Comentario".$var;
					$ID_DOC=$i;
					$ID_ACT = $i;
					$FEC_COM="2016-05-15";
					$con++;
					if ($con<=10) {
					$ID_ACT =$con;			
					}
					else {$con=1;
						$ID_ACT =$con;	
					}	

					$sql = "INSERT INTO comentario (ID_COM,DES_COM,ID_DOC,ID_ACT,FEC_COM) VALUES ('".$ID_COM."','".$DES_COM."', '".$ID_DOC."','".$ID_ACT."','".$FEC_COM."');";
					#mysql_query($sql);
					pg_query($sql);
					}	
					echo "<h3>Datos creados en la tabla Comentario</h3><hr><br>";
			}
		
			if ($tabla==6) {
				echo ($tabla);
				for ($i=$inicio; $i <= $fin; $i++) { 
					$var=strval($i);
					$ID_CON=$i;
					$nombre="Nombre completo :".$var;
					$mensaje="Mensaje comentario o sugerencia:".$var;
					$email = "ejemplo".$var."@hotmail.com";
					$sql = "INSERT INTO contacto (ID_CON,NOM_CON,EMA_CON,MEN_CON) VALUES ('".$ID_CON."','".$nombre."', '".$mensaje."','".$email."');";
					mysql_query($sql);
					#pg_query($sql);
					}	
					echo "<h3>Datos creados en la tabla Contacto</h3><hr><br>";

			}
		}
	?>


  </body>
  
</html>



