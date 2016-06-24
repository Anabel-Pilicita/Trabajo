<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Pagina para que el usuario inicie sesión</title> 

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

	<!--Formulario con Datos de Acceso-->
	<div class="row">
		<div class="col-md-offset-2 col-md-11">		
			<div class="col-md-4">	
			<img alt="Login" src="img/login.jpg" width="400" height="300">
			</div>

			<div class="col-md-offset-1 col-md-3">		
				<div class="wrapper">
					<form action="login2.php" method="post" name="Login_Form" class="form-signin">  
						<legend>Iniciar Sesión</legend>     
						<span class="help-block">Ingrese su DNI</span> 
						<input type="text" class="form-control" name="DNI_DOC" placeholder="Username" required="" autofocus="" />
						<p></p>
						<span class="help-block">Ingrese su contraseña</span> 
						<input type="password" class="form-control" name="PAS_DOC" placeholder="Password" required=""/>     		  
						<p></p>
						<div class="col-md-6">
				    	<button class="btn btn-lg btn-primary btn-block"  name="acceder" value="acceder" type="Submit">Acceder</button>
				  		</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
	</div>
	<?php include 'pie_pagina.php'; ?>
  </body>
</html>