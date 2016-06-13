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
	<?php include 'encabezado.php';
	  session_start();
	 ?>

	<!--2:Menu de usuario -->
		<div class="row">
		<div class="col-md-offset-1 col-md-10">
			<nav class="navbar navbar-default navbar-static-top">
				<div class="container-fluid">
					<div class="navbar-header">
							<h4>Hola <strong><?=$_SESSION['usuario_nombre']?></strong> | </h4>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
						<ul class="nav navbar-nav navbar-right">
							<li><a href="logout.php">Cerrar Sesión</a></li>
						</ul>
					</div>
				</div>
			</nav>  	
		</div>
	</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-1 col-md-10">
			<div class="row">
				<div class="ofscol-md-2">
				<div class="col-md-2 sidebar">
					<div class="row">
					<!-- Menu -->
						<div class="side-menu">
							<nav class="navbar navbar-default" role="navigation">
								<!-- Main Menu -->
								<div class="side-menu-container">
									<ul class="nav navbar-nav">
										<li><a href="pag_usuario.php"><span class="glyphicon glyphicon-dashboard"></span> Actividades</a></li>
										<li><a href="actualizar.php"><span class="glyphicon glyphicon-user"></span> Actualizar Datos</a></li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>

				<div class="col-md-offset-1 col-md-5">
					<?php
						include('bd_mysql.php');
						$sql2 = mysql_query("SELECT DISTINCT actividades.NOM_ACT, actividades.FEC_ACT FROM actividades, inscripcion WHERE actividades.ID_ACT=inscripcion.ID_ACT ");
		            	while ($row = mysql_fetch_array($sql2)) { ?> 
						<div class="panel panel-primary">
							<div class="panel-heading">
								Actividades Inscritas
							</div>
							<div class="panel-body">
								<?php $actividad = $row['NOM_ACT'];
								 echo ($actividad); ?>  
								<p></p>
										
							</div>
							</div>
						<?php } ?> 
				</div>
			</div>
		</div>
	</div>




	<!--5:Pie de Página -->
		<?php include 'pie_pagina.php'; ?>
	</div>
  </body>
  
</html>