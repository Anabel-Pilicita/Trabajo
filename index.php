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
	<?php include 'encabezado.php'; ?>

	<!--2:Menú -->
	<?php include 'menu.php'; ?>

	<!--3: Carrusel-->
	<?php include 'galeria.php'; ?>

	<!--4:Contenido -->
	<?php include 'contenido.php'; ?>

	<!--5:Pie de Página -->
		<?php include 'pie_pagina.php'; ?>
	</div>
  </body>
  
</html>