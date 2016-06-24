<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Pagina de Contacto</title> 
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

	<!--3: Localización de la asociación y Mensajes-->

		<div class="row clearfix"> 
			<div class="col-md-offset-1 col-md-5">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.0207151207273!2d-3.728350985179573!3d40.45267847936099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422834b7a8fb4d%3A0x2a3c66a12ada73f9!2sUPM%3A+Escuela+T%C3%A9cnica+Superior+de+Ingenieros+de+Telecomunicaci%C3%B3n!5e0!3m2!1ses!2ses!4v1457199495272" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			<div class="col-md-5">
				<form method="post" action="" class="form-horizontal">
				<fieldset>
				<legend>Contacto</legend>


				<div class="form-group">
				  <label class="col-md-4 control-label" for="NOM_CON">Nombre Completo</label>  
				  <div class="col-md-6">
				  <input id="NOM_CON" name="NOM_CON" placeholder="Nombre Completo" class="form-control input-md" required="" type="text">
				    
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-4 control-label" for="EMA_CON">Email de Contacto</label>  
				  <div class="col-md-6">
				  <input id="EMA_CON" name="EMA_CON" placeholder="ejemplo@servidor.com" class="form-control input-md" required="" type="email">
				  <span class="help-block">Ingrese un correo válido</span>  
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-4 control-label" for="MEN_CON">Comentario/Sugerencia</label>
				  <div class="col-md-8">                     
				    <textarea class="form-control" id="MEN_CON" name="MEN_CON" required=""></textarea>
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-4 control-label" for="singlebutton"></label>
				  <div class="col-md-4">
				    <button id="Enviar" name="Enviar" class="btn btn-primary">Enviar</button>
				  </div>
				</div>

				</fieldset>
				</form>
			</div>
		</div>
	</div>


<?php 
	
		include 'conexion_db.php';  
		if (isset($_POST['Enviar'])) {

			$nombre = $_POST["NOM_CON"];
			$email = $_POST["EMA_CON"];
			$mensaje = $_POST["MEN_CON"];
					
			#/*
			$link = "INSERT INTO `contacto` (`ID_CON`, `NOM_CON`, `EMA_CON`, `MEN_CON`) VALUES (NULL, '".$nombre."', '".$email."', '".$mensaje."');";
			mysql_query($link);
			mysql_close($db);
			#*/
			
			/*
			$link = "INSERT INTO contacto(nom_con,ema_con,men_con) VALUES ('".$nombre."', '".$email."', '".$mensaje."');";
			pg_query($link);
			#pg_close($cadenaConexion);
			*/
			
			#print '<script language="JavaScript">';
			#print 'alert("Su mensaje ha sido enviado exitosamente");';
			#print '</script>';
		}	


		?>

	<!--4: Pie de página-->
	<?php include 'pie_pagina.php'; ?>
	</div>
  </body>
</html>