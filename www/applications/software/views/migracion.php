<!-- ESTILOS USADOS EN PESTAÑA INICIO -->
<link href="<?php echo _get("webURL")."/www/lib/css/camera/css/camera.css" ?>" rel="stylesheet">
<link href="<?php echo $this->themePath; ?>/css/desarrollo.css" rel="stylesheet">
<!-- EFECTOS JQUERY PARA BANNER -->
<script type="text/javascript" src="<?php echo _get("webURL")."/www/lib/scripts/js/camera.js" ?>"></script>
<script type="text/javascript" src="<?php echo _get("webURL")."/www/lib/scripts/js/jquery.easing.1.3.js" ?>"></script>
<script type="text/javascript">
	$(function(){
		jQuery('.banner').camera({
			height: "300px"
		});

	});
</script>	
<div class="banner">
	<div data-link="#" data-src="<?php echo _get("webURL")."/www/lib/images/banners/banner_fabrica.jpg"  ?>"></div>
	<div data-link="#" data-src="<?php echo _get("webURL")."/www/lib/images/banners/banner_migracion.jpg"  ?>"></div>
</div>
<div class="sombra"></div>
<br>
<br>

<div class="caja-texto-completa">
	<div class="titulo-caja-texto">
		Reingeniería
	</div>
</div>
<hr class="clear">
<img src="<?php print _get("webURL") ?>www/lib/images/desarrollo/reconstruccion.png">

<div class="clear"></div>
<p>&nbsp;</p>
<div class="caja-texto-completa">
	<div class="titulo-caja-texto">
		Servicios de desarrollo de software
	</div>
</div>
<hr class="clear">
<a style="color: black" href="<?php print _get("webURL").'software/desarrollo/fabrica' ?>">
	<div class="servicios-desarrollo">
		<div class="titulo-imagen">
			<img src="<?php print _get("webURL").'www/lib/images/desarrollo/alamedida.png' ?>">
		</div>
		<div class="border-texto">
			<div>
				<h3>
					<strong>Software a la medida</strong>
				</h3>
				<p>Sistemas a medida para empresas que ven limitadas las capacidades 
					por no contar con un sistema de gestión eficiente. Nos ocupamos de 
					llevar adelante su proyecto desde el relevamiento hasta 
	               la implementación final.</p>
			</div>
		</div>
	</div>
</a>
<a style="color: black" href="<?php print _get("webURL").'software/desarrollo/web' ?>">
	<div class="servicios-desarrollo">
		<div class="titulo-imagen">
			<img src="<?php print _get("webURL").'www/lib/images/desarrollo/sitiosweb.png' ?>">
		</div>
		<div class="border-texto">
			<div>
				<h3>
					<strong>Sitios web</strong>
				</h3>
				<p>Todo el diseño y funcionalidad que su empresa neceista para tener éxito en internet.
				Creamos sitios y portales inteligentes, autoadministrables, responsivos y sumamente atractivos. </p>
			</div>
		</div>
	</div>
</a>
<a style="color: black" href="<?php print _get("webURL").'software/desarrollo/migracion' ?>">
	<div class="servicios-desarrollo">
		<div class="titulo-imagen">
			<img src="<?php print _get("webURL").'www/lib/images/desarrollo/reingenieria.png' ?>">
		</div>
		<div class="border-texto">
			<div>
				<h3>
					<strong>Reingeniería de Software</strong>
				</h3>
				<p>Por medio de una reingeniería se pueden reconstruir sistemas existentes, 
                     mejorando sus procesos y actualizando su plataforma. Migración de aplicaciones 
                     y Bases de Datos.</p>
			</div>
		</div>
	</div>
</a>
<div class="clear"></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="caja-texto-completa">
	<div class="titulo-caja-texto">
		Tecnologías
	</div>
</div>
<hr class="clear">
<p style="text-align: justify">Manejamos una gran gama de lenguajes de programación, frameworks y herramientas que nos permiten realizar aplicaciones limpias y que cumplan con su objetivo. Actualmente recomendamos el desarrollo con los siguientes lenguajes y frameworks porque permiten que sus aplicaciones estén listas a tiempo y en forma, son las más utilizadas en todo el mundo y siempre nos mantenemos actualizados con las versiones más nuevas de cada lenguaje.</p>
<div style="padding: 15px; float: left; width:300px; min-height: 300px; margin-right: 10px;">
	<h3>Lenguajes de programación</h3>
	<hr>
	<img class="img-shadow" style="float: left; margin: 0px 10px 10px 0px" src="<?php print _get("webURL").'www/lib/images/lenguajes/java.jpg'  ?>">
	<img class="img-shadow" style="float: right" src="<?php print _get("webURL").'www/lib/images/lenguajes/csharp.jpg'  ?>">
	<p class="clear"></p>
	<img class="img-shadow" style="float: left; margin: 0px 10px 10px 0px" src="<?php print _get("webURL").'www/lib/images/lenguajes/php.jpg'  ?>">
	<img class="img-shadow" style="float: right" src="<?php print _get("webURL").'www/lib/images/lenguajes/js.jpg'  ?>">
	<p class="clear"></p>
	<img class="img-shadow" style="float: left; margin: 0px 10px 10px 0px" src="<?php print _get("webURL").'www/lib/images/lenguajes/html.jpg'  ?>">
	<img class="img-shadow" style="float: right" src="<?php print _get("webURL").'www/lib/images/lenguajes/c.jpg'  ?>">
	<p class="clear"></p>
</div>
<div style="padding: 15px; float: left; width:300px; min-height: 300px; margin-right: 10px;">
	<h3>Bases de datos</h3>
	<hr>
	<img class="img-shadow" style="float: left; margin: 0px 10px 10px 0px" src="<?php print _get("webURL").'www/lib/images/lenguajes/mysql-pres.jpg'  ?>">
	<img class="img-shadow" style="float: right" src="<?php print _get("webURL").'www/lib/images/lenguajes/sqlserver-pres.jpg'  ?>">
	<p class="clear"></p>
</div>
<div style="padding: 15px; float: left; width:300px; min-height: 300px; margin-right: 10px;">
	<h3>Frameworks</h3>
	<hr>
	<img class="img-shadow" style="float: left; margin: 0px 10px 10px 0px" src="<?php print _get("webURL").'www/lib/images/lenguajes/zan.jpg'  ?>">
	<img class="img-shadow" style="float: right" src="<?php print _get("webURL").'www/lib/images/lenguajes/cake.jpg'  ?>">
	<p class="clear"></p>
	<img class="img-shadow" style="float: left; margin: 0px 10px 10px 0px" src="<?php print _get("webURL").'www/lib/images/lenguajes/jquery.jpg'  ?>">
	<img class="img-shadow" style="float: right" src="<?php print _get("webURL").'www/lib/images/lenguajes/boots.jpg'  ?>">
	<p class="clear"></p>
</div>
<div class="clear"></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="caja-texto-completa">
	<div class="titulo-caja-texto">
		Nuestros clientes 
	</div>
</div>
<hr class="clear">
<p>&nbsp;</p>
<img style="float: left; margin-right: 20px;" src="<?php print _get("webURL").'www/lib/images/desarrollo/clientes/agroinsumos-pajaro.jpg' ?>" />
<img style="float: left; margin-right: 20px;" src="<?php print _get("webURL").'www/lib/images/desarrollo/clientes/itsa.png' ?>" />
<div class="clear"></div>