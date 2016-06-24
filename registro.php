<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Registro de Inscripciones</title> 
    <?php include 'meta.php'; ?>
    <?php include 'estilos.php'; ?>
	<?php include 'links.php'; ?>
	<?php include 'scripts.php'; ?>
  </head>

  <body>
	<!--CONTENIDO PRINCIPAL-->
    <div class="container-fluid">
 	<?php include 'encabezado.php'; ?>
	<?php include 'menu.php'; ?>


	<!--Formulario de Registro-->
	<div class="row clearfix"> 
		<div class="col-md-offset-2 col-md-10">
		<div class="row clearfix">
				<div class="col-md-4">
					<a href="index.php">
					<img alt="Logo de la Empresa" src="img/requisitos.jpg" width="350" height="350">
					</a>
				</div>

				<div class="col-md-offset-1 col-md-5">
					<form action="registro2.php" method="post"  class="form-horizontal">
						<fieldset>
							<!-- Nombre del Formulario -->
							<legend>Registro de Docente</legend>

							<!-- Campo Nombre-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="NOM_DOC">Nombre</label>  
								<div class="col-md-4">
									<input id="NOM_DOC" name="NOM_DOC" placeholder="Nombre" class="form-control input-md" required="" type="text">
								</div>
							</div>

							<!-- Apellidos-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="APE_DOC">Apellidos</label>  
								<div class="col-md-6">
									<input id="APE_DOC" name="APE_DOC" placeholder="Apellidos" class="form-control input-md" required="" type="text">
								</div>
							</div>

							<!-- DNI-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="DNI_DOC">DNI</label>  
								<div class="col-md-4">
									<input id="DNI_DOC" name="DNI_DOC" placeholder="DNI" class="form-control input-md" required="" type="text">
								</div>
							</div>

							<!-- Departamento -->
							<div class="form-group">
								<label class="col-md-4 control-label" for="DEP_DOC">Departamento al que pertenence</label>
								<div class="col-md-4">
									<select id="DEP_DOC" name="DEP_DOC" class="form-control">
				                   		<option value="1"> Informática</option>
                                  		<option value="2">Electrónica</option>
                                  		<option value="3">Telemática</option>
                                  		<option value="4">Física Aplicada</option>
                                  		<option value="5">Matemática</option>
                                  		<option value="6">Ciencia y Tecnología</option>   
									</select>
								</div>
							</div>

							<!-- Telefono-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="TEL_DOC">Telefono</label>  
								<div class="col-md-4">
									<input id="TEL_DOC" name="TEL_DOC" placeholder="" class="form-control input-md" required="" type="text">
								</div>
							</div>

							<!-- Dirección-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="DIR_DOC">Dirección</label>  
								<div class="col-md-4">
									<input id="DIR_DOC" name="DIR_DOC" placeholder="Calle" class="form-control input-md" required="" type="text">

								</div>
							</div>

							<!-- Campo del Correo Electrónico-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="EMA_DOC">Email de Contacto</label>  
								<div class="col-md-6">
									<input id="EMA_DOC" name="EMA_DOC" placeholder="ejemplo@servidor.com" class="form-control input-md" required="" type="email">
									<span class="help-block">Asegurese que el correo exista</span>  
								</div>
							</div>

							<!-- Campo de Contraseña-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="PAS_DOC">Password</label>
								<div class="col-md-4">
									<input id="PAS_DOC" name="PAS_DOC" placeholder="Password" class="form-control input-md" required="" type="password">
								</div>
							</div>

							<!-- Botón para el Registro -->
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


	

	<!--Pie de Página -->
		<?php include 'pie_pagina.php'; ?>
	</div>
  </body>
</html>