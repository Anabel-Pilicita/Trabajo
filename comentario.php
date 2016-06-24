<!DOCTYPE html>
<html lang="es">
<head>
<title>Pagina de Comentarios</title> 

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

	

		<div class="col-md-offset-1 col-md-6">
			<form method="post" action="" class="form-horizontal">
			<fieldset>
			<legend>Comentario</legend>
				<div class="form-group">
			  		<label class="col-md-4 control-label" for="DES_COM">Comentario</label>
			  	<div class="col-md-8">                     
			    	<textarea class="form-control" id="DES_COM" name="DES_COM" required=""></textarea>
			  	</div>
			</div>

			<div class="form-group">
			  	<label class="col-md-4 control-label" for="Agregar">Listo?</label>
			  	<div class="col-md-6">
			    <button id="Agregar" name="agregar" class="btn btn-info">Agregar</button>
			    <a href="pag_usuario.php"<button id="cancelar" name="cancelar" class="btn btn-danger">Cancelar</button></a>
			  </div>
			</div>
			</fieldset>
			</form>
			</div>
		</div>

		<?php   	
		include 'conexion_db.php';  
		if(isset($_POST['agregar'])){
				$comentario = $_POST["DES_COM"];
				$dia=date("d");
				$mes=date("m");
				$año=date("Y");
				$variable=$año.'-'.$mes.'-'.$dia; 

				$link = "INSERT INTO `comentario` (`ID_COM`, `DES_COM`, `ID_DOC`, `ID_ACT`, `FEC_COM`) VALUES (NULL, '".$comentario."', '".$_SESSION['usuario_id']."', '".$_SESSION['actividad_id']."', '".$variable."');";
				mysql_query($link);
				print '<script language="JavaScript">';
				print 'alert("Sus Comentario ha sido ingresado correctamente");';
				print '</script>';
		} ?>
</div>
<?php include 'pie_pagina.php'; ?>
</body>
</html>