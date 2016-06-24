<!DOCTYPE html>
<html lang="es">

  <head>
    <title>Actualización de Datos</title> 
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
										<li><a href="pag_usuario.php"><span class="glyphicon glyphicon-dashboard"></span> Actividades</a></li>
										<li><a href="busqueda.php"><span class="glyphicon glyphicon-dashboard"></span> Actividades Inscritas</a></li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>

				<div class="col-md-offset-1 col-md-6">
				<form class="form-horizontal" role="form" method="post" autocomplete="on" spellcheck="true">
          		<legend>Actualización de Datos</legend>
                	<fieldset><!-- form contents -->
                         <!-- Correo-->
                          <div class="form-group">
                            <label class="col-sm-4 control-label" for="textinput">Correo Electrónico</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                  <input id="EMA_DOC" name="EMA_DOC" placeholder="ejemplo@servidor.com" class="form-control input-md" required="" type="email">
                                  <span class="input-group-addon label-danger"><i class="fa fa-envelope fa-lg text-white"></i></span>
                                </div>
                            </div>
                          </div>

                          <!-- Dirección-->
                          <div class="form-group">
                            <label class="col-sm-4 control-label" for="textinput">Dirección:</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                  <input id="DIR_DOC" name="DIR_DOC" placeholder="Calle" class="form-control input-md" required="" type="text">
                                  <span class="input-group-addon label-danger"><i class="fa fa-building fa-lg text-white"></i></span>
                                </div>
                            </div>
                          </div>

                          <!-- Telefono-->
                          <div class="form-group">
                            <label class="col-sm-4 control-label" for="textinput">Teléfono:</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                  <input id="TEL_DOC" name="TEL_DOC" placeholder="" class="form-control input-md" required="" type="text">
                                  <span class="input-group-addon bg-success"><i class="fa fa-phone fa-lg text-white"></i></span>
                                </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-4 control-label" for="industry">Departamento</label>
                            <div class="col-sm-8">
                            <div class="input-group">
                                <span class="input-group-addon label-danger"><i class="fa fa-briefcase fa-lg text-white"></i></span>
                                <select id="DEP_DOC" name="DEP_DOC" class="form-control">
                                  <option value="1"> Informática</option>
                                  <option value="2">Electrónica</option>
                                  <option value="3">Telemática</option>
                                  <option value="4">Física Aplicada</option>
                                  <option value="5">Matemática Aplicada a las TIC</option>
                                  <option value="6">Ciencia y Tecnología</option>                               
                                </select>
                              </div>
                              </div>
                            </div>

                            <div class="col-md-offset-8 col-sm-10">
                            <button id="Agregar" name="Actualizar" class="btn btn-success">Actualizar</button>
			   				<a href="pag_usuario.php"<button id="cancelar" name="cancelar" class="btn btn-danger">Cancelar</button></a>
            			    </div>
                	</fieldset>
                	</form>
				</div>
			</div>
		</div>
	</div>
</div>

		<?php 
	
		include 'conexion_db.php'; 
		if (isset($_POST["EMA_DOC"])) {

			$departamento = $_POST["DEP_DOC"];
			$telefono = $_POST["TEL_DOC"];
			$direccion = $_POST["DIR_DOC"];
			$email = $_POST["EMA_DOC"];
			$id=$_SESSION['usuario_id'];
		
			$link = "UPDATE docente SET ID_DEP='".$departamento."', TEL_DOC='".$telefono."', DIR_DOC='".$direccion."', EMA_DOC='".$email."' where ID_DOC='".$id."'";		
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










