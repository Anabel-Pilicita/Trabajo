<!DOCTYPE html>
<html lang="es">
<head>
<title>Pagina Principal del Usuario</title> 

	<?php include 'meta.php'; ?>
	<?php include 'estilos.php'; ?>
	<?php include 'links.php'; ?>
	<?php include 'scripts.php'; ?>
</head>

<body>
<!--CONTENIDO PRINCIPAL-->
<div class="container-fluid">
	<?php include 'encabezado.php'; 
		session_start();
	?>

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

	<!--3:Contenido -->
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
										<li><a href="actualizar.php"><span class="glyphicon glyphicon-user"></span> Actualizar Datos</a></li>
										<li><a href="busqueda.php"><span class="glyphicon glyphicon-dashboard"></span> Actividades Inscritas</a></li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>

	           	
					
					<div class="col-md-offset-1 col-md-7 content">
						<?php
						include 'conexion_db.php'; 
						$sql2 = mysql_query("SELECT * FROM actividades");
		            	while ($row = mysql_fetch_array($sql2)) { ?> 
		             
						<div class="panel panel-primary">
							<div class="panel-heading">
								<?php $actividad = $row['NOM_ACT'];
								 echo ($actividad); ?> 
							</div>
							<div class="panel-body">
								<?php $descripcion= $row["DES_ACT"];
								echo ($descripcion);  ?>  
								<p></p>
								<?php $var1= $row['ID_ACT']; ?>
								<a href="informacion.php?var1=<?php echo $var1 ?>"  class="btn btn-info" role="button">Acceder</a>			
							</div>
							</div>
						<?php } ?> 
					</div>
				</div>
			</div>
		</div>

<?php include 'pie_pagina.php'; ?>
	</body>
</html>