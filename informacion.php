<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Pagina donde se Detalla las actividades y Comentarios</title> 

    <?php include 'meta.php'; ?>
    <?php include 'estilos.php'; ?>
	<?php include 'links.php'; ?>
	<?php include 'scripts.php'; ?>	
	
	<?php
	session_start();
	//Obtención de las variables 
	$id_act=($_GET['var1']);
	$id_doc=$_SESSION['usuario_id'];
	$_SESSION['actividad_id']=$id_act;
	?>	

  </head>

  <body>

	<!--CONTENIDO PRINCIPAL-->
    <div class="container-fluid">
	<!--1:Titulo e imagen -->
	<?php include 'encabezado.php'; ?>
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
							<li><a href="logout.php" target="_blank">Cerrar Sesión</a></li>
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



		<div class="col-md-10">
			<div class="col-md-12 content">
				<?php
				include 'conexion_db.php'; 
				$sql = mysql_query("SELECT NOM_ACT, DES_ACT FROM actividades WHERE ID_ACT=$id_act");
		        while ($row = mysql_fetch_array($sql)) { ?>     
					<div class="panel panel-primary">
						<div class="panel-heading">
						<?php $actividad = $row['NOM_ACT'];?> 
						 <h3><?=$actividad?> | </h3> 	 
						</div>
					
						<div class="panel-body">
						<?php $descripcion= $row["DES_ACT"];
						echo ($descripcion);}  ?>  
						<p></p>
						<a href="inscripcion.php"  class="btn btn-primary" role="button">Inscribirse</a>
						<a href="comentario.php"  class="btn btn-success" role="button">Comentar</a>							
						<p></p>

						 
						<legend><h3>Comentarios <strong>  </strong> </h3></legend>

							<div class="col-md-offset-1 col-md-9 content">
							<?php
							include 'conexion_db.php'; 
							$sql = mysql_query("SELECT DISTINCT docente.NOM_DOC, docente.APE_DOC, comentario.DES_COM, comentario.FEC_COM FROM docente, comentario WHERE comentario.ID_ACT=$id_act and docente.ID_DOC=comentario.ID_DOC");
		            			while ($row = mysql_fetch_array($sql)) { ?> 
		            			<div class="panel panel-success">
									<div class="panel-heading">
									<?php $nombre = $row['NOM_DOC'];
									 $apellido = $row['APE_DOC'];	
									 $fecha = $row['FEC_COM'];
									 echo "$nombre  " ;
									 echo "$apellido								Fecha de la publicación:";
									 echo "$fecha  " ;
									 ?> 
									</div>

									<p>
										<div class="col-sm-2">
										<div class="thumbnail">
										<img class="img-responsive user-photo" src="img/usuario.jpg">
										</div>
										</div>

										<div class="panel-body">
										<?php $comentario= $row['DES_COM'];
										echo ($comentario);?>  	 
										</div>
									</p>
								</div>
								<?php } ?>
							</div>	
						</div>
					</div> 
				</div>
			</div>

		<? echo "id";; ?>	
		<?php include 'pie_pagina.php'; ?>
	</div>
  </body>
</html>