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

	<!--2:Menú -->
	<?php include 'menu.php'; ?>

	<div class="col-md-offset-1 col-md-5 content">


<?php 
	
		include 'conexion_db.php'; 
	
			$nombre = $_POST["NOM_DOC"];
			$apellidos = $_POST["APE_DOC"];
			$dni = $_POST["DNI_DOC"];
			$departamento = $_POST["DEP_DOC"];
			$telefono = $_POST["TEL_DOC"];
			$direccion = $_POST["DIR_DOC"];
			$email = $_POST["EMA_DOC"];
			$password = md5($_POST["PAS_DOC"]);
			#$password = $_POST["PAS_DOC"];
			

			
			# Código para enlazar con MARIADB
			$link = mysql_query("SELECT DNI_DOC FROM DOCENTE WHERE DNI_DOC='".$dni."'");
			$numero=mysql_num_rows($link);
			if ($numero>0) 
				
				{?>
							<div class="alert alert-info">¡Atento! Usted ya está registrado</div>
							<?php  			
					 } 

					 else{	 
			$sql = "INSERT INTO `docente` (`NOM_DOC`, `APE_DOC`, `DNI_DOC`, `ID_DEP`, `TEL_DOC`, `DIR_DOC`, `EMA_DOC`, `PAS_DOC`) VALUES ('".$nombre."', '".$apellidos."', '".$dni."', '".$departamento."', '".$telefono."', '".$direccion."', '".$email."', '".$password."');";
			mysql_query($sql);
			#mysql_close($db);
			?>
				<div class="alert alert-success">¡Bien hecho! Ahora ya te encuentras registrado para asistir a esta actividad</div>
				 <?php  }?>

				 </div>
				 <p>&nbsp;</p>
				 <p>&nbsp;</p>
				 <p>&nbsp;</p>
				 <p>&nbsp;</p>
				 <p>&nbsp;</p>
				 <p>&nbsp;</p>


			<?php include 'pie_pagina.php'; ?>
</body>
</html>