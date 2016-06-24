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

	<!--Titulo e imagen -->
	<?php include 'encabezado.php'; 
	session_start();?>

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

	<!--Pagina para registrar a un usuario en una actividad -->

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
										<li><a href="busqueda.php"><span class="glyphicon glyphicon-dashboard"></span> Actividades Inscritas</a></li>
										<li><a href="actualizar.php"><span class="glyphicon glyphicon-user"></span> Actualizar Datos</a></li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
	           	
					
					<div class="col-md-offset-1 col-md-5 content">
						<?php
						//Obtención de las variables 
						$id_act=$_SESSION['actividad_id'];
						$id_doc=$_SESSION['usuario_id'];
						

						include 'conexion_db.php'; 
						$link = mysql_query("SELECT ID_DOC, ID_ACT FROM inscripcion WHERE ID_DOC=$id_doc AND ID_ACT=$id_act");
						if($row = mysql_fetch_array($link)) {?>
							<div class="alert alert-info">¡Atento! Usted ya está registrado en esta actividad</div>
							<?php      
					    }    
					    else{	
					    	$sql = "INSERT INTO `inscripcion` (`ID_INS`, `ID_DOC`, `ID_ACT`) VALUES (NULL, '".$id_doc."', '".$id_act."')";
					        mysql_query($sql);
							mysql_close($db);?>	
							<div class="alert alert-success">¡Bien hecho! Ahora ya te encuentras registrado para asistir a esta actividad</div>
					       <?php }?>
						</div>

					</div>
				</div>
			</div>
		
<!--Pie de Página -->
	<?php include 'pie_pagina.php'; ?>
</div>
</body>
</html>


