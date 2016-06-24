<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Pagina Actividades</title> 
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

	<!--3:Actividades -->
	<div class="row clearfix"> 
		<div class="col-md-offset-1 col-md-10">
			<div class="row clearfix">	
				<div class="col-md-2">
					<img alt="Logo de la Asociación" src="img/actividades.jpg" width="350" height="200">
				</div>				
					
				<div class="col-md-offset-3 col-md-6 content">
					<?php
				include 'conexion_db.php'; 
				$sql2 = mysql_query("SELECT * FROM actividades");
				#$sql2 = pg_query("SELECT * FROM actividades;");
	            				
					for ($i=1; $i <= 5; $i++) { 
						#$row = pg_fetch_array($sql2)
						$row = mysql_fetch_array($sql2)
	             ?> 
	             
					<div class="panel panel-primary">
						<div class="panel-heading">
							<?php $actividad = $row['NOM_ACT'];
							 echo ($actividad);
							 ?> 
						</div>
						<div class="panel-body">
							<?php $descripcion= $row["DES_ACT"];
							echo ($descripcion);
							 ?> 
							<p></p>
							<?php $var1= $row['ID_ACT']; ?>
							<a href="login.php"  class="btn btn-success" role="button">Inscribirse</a>			
						</div>
						</div>
					<?php
				     } ?> 
				</div>
			</div>
		</div>
	</div>
	<!--4:Pie de Página -->
	<?php include 'pie_pagina.php'; ?>
	</div>
  </body>
</html>