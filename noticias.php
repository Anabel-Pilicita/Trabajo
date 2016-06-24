<!DOCTYPE html>
<html lang="es">

  <head>
    <title>Pagina Noticias</title> 
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

	<!--3:Contenido -->
	<div class="row clearfix"> 
		<div class="col-md-offset-1 col-md-10">
			<div class="row clearfix">	
					<div class="col-md-5">
						<img alt="Logo de la Asociación" src="img/noticia.jpg" width="400" height="350">
					</div>				
					
					<div class="col-md-7">	
						<h2 class="text-center">
						<strong>Huawei gana más de 5.000 millones de euros en 2015, un 32,4% más</strong> 
						</h2>
						<h5 class="text">
						<p>&nbsp;</p>Huawei obtuvo un beneficio neto de 36.910 millones de yuanes (5.005 millones de euros) al cierre de 2015, lo que representa una mejora del 32,4% con respecto al año anterior, según ha informado la empresa este viernes.
						<p>&nbsp;</p>
						El fabricante chino logró alcanzar el año pasado una cifra de negocio de 395.009 millones de yuanes (53.571 millones de euros), un 37% por encima de los ingresos de 2014 y su mayor aumento desde 2008.
						<p>&nbsp;</p>
						Entre sus principales áreas de negocio, la división de redes para operadoras facturó 232.300 millones de yuanes (31.512 millones de euros), un 21% más que el año anterior gracias principalmente al desarrollo de redes 4G.
						<p>&nbsp;</p>
						Por su parte, el negocio para empresas de Huawei logró unos ingresos de 27.600 millones de yuanes (3.744 millones de euros), un 44% más, mientras que el negocio enfocado a los consumidores aportó 129.100 millones de yuanes (17.513 millones de euros), un 73% más que un año antes.
						<p>&nbsp;</p>
						El vicepresidente y consejero delegado rotativo de Huawei, Guo Ping, ha destacado que el crecimiento de la compañía «es resultado directo» de su enfoque estratégico y una fuerte inversión en sus negocios principales.
						<p>&nbsp;</p>
						«En los próximos tres a cinco años, nos concentraremos en mejorar la conectividad, permitiendo el desarrollo de industrias verticales y redefiniendo las capacidades de la red», ha añadido.
						<p>&nbsp;</p>
						<a href="http://www.abc.es/tecnologia/">Fuente de Referencia</a>
						</h5>
					</div>
			</div>
		</div>
	</div>

	<!--4:Pie de Página -->
		<?php include 'pie_pagina.php'; ?>
	</div>
  </body>
  
</html>