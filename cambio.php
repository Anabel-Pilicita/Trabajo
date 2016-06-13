<!DOCTYPE html>
<html lang="es">

  <head>
    <title>Cambio de Contraseña</title> 
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

	<!--2:Menú -->
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

	<!--3: Contenido Principal-->
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
										<li><a href="cambio.php"><span class="glyphicon glyphicon-user"></span> Cambiar Contraseña</a></li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
			


				<div class="col-md-offset-1 col-md-6">
					<form class="form-horizontal">
				<fieldset>
				<!-- Contraseña-->
				<div class="form-group">
								<label class="col-md-4 control-label" for="PAS_DOC">Password</label>
								<div class="col-md-4">
									<input id="PAS_DOC" name="PAS_DOC" placeholder="Password" class="form-control input-md" required="" type="password">
								</div>
							</div>

				<!-- Boton -->
				<div class="form-group">
								<label class="col-md-4 control-label" for="Registro"> Listo?</label>
								<div class="col-md-4">
									<button id="Registro" name="Registro" class="btn btn-primary">Registrarse</button>
								</div>
							</div>

				</fieldset>
				</form>


				</div>
			</div>
		</div>
	</div>


<?php 
	
		include 'bd_mysql.php'; 
		if (isset($_POST["PAS_DOC"])) {

			$pass = $_POST["PAS_DOC"];
			$id=$_SESSION['usuario_id'];

					
			$link = "UPDATE docente SET PAS_DOC='".$pass."' where ID_DOC='".$id."'";		
			mysql_query($link);
			mysql_close($db);
			print '<script language="JavaScript">';
			print 'alert("Sus Datos han sido Actualizados Correctamente");';
			print '</script>';
		}	
		?>

	<!--4:Pie de Página -->
		<?php include 'pie_pagina.php'; ?>
	
  </body>
</html>