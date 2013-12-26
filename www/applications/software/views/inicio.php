<!-- ESTILOS USADOS EN PESTAÑA INICIO -->
<link href="<?php echo _get("webURL")."/www/lib/css/camera/css/camera.css" ?>" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Voces' rel='stylesheet' type='text/css'>
<link href="<?php echo $this->themePath; ?>/css/inicio.css" rel="stylesheet">
<link href="<?php echo $this->themePath; ?>/css/desarrollo.css" rel="stylesheet">
<!-- EFECTOS JQUERY PARA BANNER -->
<script type="text/javascript" src="<?php echo _get("webURL")."/www/lib/scripts/js/camera.js" ?>"></script>
<script type="text/javascript" src="<?php echo _get("webURL")."/www/lib/scripts/js/jquery.easing.1.3.js" ?>"></script>
<script type="text/javascript" src="<?php echo _get("webURL")."/www/lib/scripts/js/jquery.cycle.all.js" ?>"></script>

<script type="text/javascript">
	function onAfter() { 
	    $('#titulo').html(this.title); 
	};

	$(function(){
		jQuery('.banner').camera({
			height: "300px"
		});
	});

	$('#bn2').cycle({ 
    fx:      'fade',
    //easeIn:  'easeInCirc', 
    //easeOut: 'easeOutBounce',
    before: onAfter,
    //easing: 'easeInBounce',
    next: '#siguiente',
    prev: '#anterior',
    pause: 1,
    delay:   -2000 
});
</script>	
<div class="banner">
	<div data-link="#" data-src="<?php echo _get("webURL")."/www/lib/images/banners/banner_movil.jpg"  ?>"></div>
	<div data-link="#" data-src="<?php echo _get("webURL")."/www/lib/images/banners/banner_fabrica.jpg"  ?>"></div>
	<div data-link="#" data-src="<?php echo _get("webURL")."/www/lib/images/banners/banner_descarga_agenda.jpg"  ?>"></div>
	<!--<div data-link="#" data-src="<?php echo _get("webURL")."/www/lib/images/banners/banner_migracion.jpg"  ?>"></div>-->
</div>
<div class="sombra"></div>
<p style="clear: both">&nbsp;</p>
<br>
<div class="caja-texto-completa">
	<div class="titulo-caja-texto">
		<!--<img src="<?php echo _get("webURL")."/www/lib/images/comosolucionamos.png" ?>" />&nbsp;&nbsp;-->
		Aprovecha el potencial de los móviles</div>
</div>
<hr style="clear:both">
<a style="color: black" href="<?php print _get("webURL").'software/moviles' ?>">
	<div class="servicios-desarrollo">
		<div class="titulo-imagen">
			<img src="<?php print _get("webURL").'www/lib/images/desarrollo/icono-iphone.png' ?>">
		</div>
		<div class="border-texto">
			<div>
				<h3>
					<strong>Apps iOS</strong>
				</h3>
				<p>
					<ul style="text-align: left">
						<li>Brinda tus servicios a tus clientes a través del iPod, iPhone o iPad</li>
						<li>Obtén más clientes.</li>
						<li>Explota un gran mercado, potencialmente grande en compras de apps.</li>
					</ul>	
				</p>
			</div>
		</div>
	</div>
</a>
<a style="color: black" href="<?php print _get("webURL").'software/moviles' ?>">
	<div class="servicios-desarrollo">
		<div class="titulo-imagen">
			<img src="<?php print _get("webURL").'www/lib/images/desarrollo/icono-android.png' ?>">
		</div>
		<div class="border-texto">
			<div>
				<h3>
					<strong>Apps Android</strong>
				</h3>
				<p>
					<ul style="text-align: left">
						<li>La plataforma móvil más utilizada en el mundo.</li>
						<li>El mercado móvil más grande en el mundo.</li>
						<li>Aumenta tus clientes o brindales tu servicio.</li>
					</ul>
				</p>
			</div>
		</div>
	</div>
</a>
<a style="color: black" href="<?php print _get("webURL").'software/moviles' ?>">
	<div class="servicios-desarrollo">
		<div class="titulo-imagen">
			<img src="<?php print _get("webURL").'www/lib/images/desarrollo/icono-wphone.png' ?>">
		</div>
		<div class="border-texto">
			<div>
				<h3>
					<strong>Apps Windows Phone</strong>
				</h3>
				<p>
					<ul style="text-align: left">
						<li>Mercado emergente.</li>
						<li>Tercer tienda de aplicaciones móviles más grande en el mundo.</li>
						<li>La plataforma móvil creada por Microsoft.</li>
					</ul>
				</p>
			</div>
		</div>
	</div>
</a>
<div class="clear"></div>
<p>&nbsp;</p>
<P class="subrayar">¡NO TE QUEDES ATRÁS!</P>
<p>¿Quieres conocer más acerca de estás plataformas?</p>
<p>Haz clic sobre ellas para que te informes sobre sus características principales</p>
<p>&nbsp;</p>
<a href=""><img data-placement="top" data-original-title="Android" data-toggle="tooltip" class="img tool" src="<?php echo _get("webURL")."/www/lib/images/moviles/android.jpg" ?>"></a>
<a href=""><img data-placement="top" data-original-title="iOS" data-toggle="tooltip" class="img tool" src="<?php echo _get("webURL")."/www/lib/images/moviles/ios.jpg" ?>"></a>
<a href=""><img data-placement="top" data-original-title="BlackBerry" data-toggle="tooltip" class="img tool" src="<?php echo _get("webURL")."/www/lib/images/moviles/bb.jpg" ?>"></a>
<a href=""><img data-placement="top" data-original-title="Windows Phone" data-toggle="tooltip" class="img tool" src="<?php echo _get("webURL")."/www/lib/images/moviles/wp.jpg" ?>"></a>
<div class="clear"></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="caja-texto-completa">
	<div class="titulo-caja-texto">
		<!--<img src="<?php echo _get("webURL")."/www/lib/images/moviles/esfera.jpg" ?>" />-->
		Conoce nuestros servicios</div>
</div>
<hr style="clear:both">
<p>&nbsp;</p>
<!--
<div class="division-puntos">
	<span class="titulo">S E R V I C I O S</span>
</div>
<br>-->
<div class="caja-texto">
	<div id="titulo" class="tit">
	</div>
</div>
<a id="siguiente" style="float:right;  margin-left: 10px" class="btn btn-danger" href="#"> > </a>&nbsp;
<a id="anterior" style="float:right" class="btn btn-danger" href="#"> < </a>

<div id="bn2">
	<div class="up" title=":: Desarrollo de Software ::">
		<div class="anuncio">
			<div style="text-align: center">
				<div class="thumb-wrapper">
					<a href="<?php print _get("webURL").'software/desarrollo/medida' ?>" class="round-div"></a>
					<img width="270" height="250" src="<?php print _get("webURL").'www/lib/images/comercial/software.png' ?>" class="attachment-tc-thumb" alt="Snapshot_20130801_2">
				</div>
				<h2>Software a la medida</h2>
				<p>Aumenta la productividad y eficiencia de tu empresa con un software que tiene lo que tú necesitas... </p>
				<a href="" class="btn btn-primary"> Saber más...</a>
			</div>
		</div>
		<div class="separador-not"></div>
		<div class="anuncio">
			<div style="text-align: center">
				<div class="thumb-wrapper">
					<a href="<?php print _get("webURL").'software/desarrollo/medida' ?>" class="round-div"></a>
					<img width="270" height="250" src="<?php print _get("webURL").'www/lib/images/comercial/sitiosweb.jpg' ?>" class="attachment-tc-thumb" alt="Snapshot_20130801_2">
				</div>
				<h2>Sitios web</h2>
				<p>Conoce como puedes usar la Internet para obtener más clientes o mejorar tu servicio hacia ellos... </p>
				<a href="" class="btn btn-primary"> Saber más...</a>
			</div>
		</div>
		<div class="separador-not"></div>
		<div class="anuncio">
			<div style="text-align: center">
				<div class="thumb-wrapper">
					<a href="<?php print _get("webURL").'software/desarrollo/medida' ?>" class="round-div"></a>
					<img width="270" height="250" src="<?php print _get("webURL").'www/lib/images/comercial/basesdatos.jpg' ?>" class="attachment-tc-thumb" alt="Snapshot_20130801_2">
				</div>
				<h2>Reingeniería</h2>
				<p>¿Tu empresa está creciendo y necesitas ordenar la información de tu negocio? Podemos rediseñarte tu sistema agregando nuevas características... </p>
				<a href="" class="btn btn-primary"> Saber más...</a>
			</div>
		</div>
	</div>
	<div class="up" title=":: Móviles ::">
		<div class="anuncio">
			<div style="text-align: center">
				<div class="thumb-wrapper">
					<a href="<?php print _get("webURL").'software/desarrollo/medida' ?>" class="round-div"></a>
					<img width="270" height="250" src="<?php print _get("webURL").'www/lib/images/comercial/appmovil.png' ?>" class="attachment-tc-thumb" alt="Snapshot_20130801_2">
				</div>
				<h2>Apps iOS</h2>
				<p>Brinda a tus clientes servicios mediante la tecnología de Apple, poniendo a su disposición aplicaciones para iOS... </p>
				<a href="" class="btn btn-primary"> Saber más...</a>
			</div>
		</div>
		<div class="separador-not"></div>
		<div class="anuncio">
			<div style="text-align: center">
				<div class="thumb-wrapper">
					<a href="<?php print _get("webURL").'software/desarrollo/medida' ?>" class="round-div"></a>
					<img width="270" height="250" src="<?php print _get("webURL").'www/lib/images/comercial/apps-android.png' ?>" class="attachment-tc-thumb" alt="Snapshot_20130801_2">
				</div>
				<h2>Apps Android</h2>
				<p>Actualízate y no te quedes fuera del mercado de aplicaciones móviles más grande en el mundo... </p>
				<a href="" class="btn btn-primary"> Saber más...</a>
			</div>
		</div>
		<div class="separador-not"></div>
		<div class="anuncio">
			<div style="text-align: center">
				<div class="thumb-wrapper">
					<a href="<?php print _get("webURL").'software/desarrollo/medida' ?>" class="round-div"></a>
					<img width="270" height="250" src="<?php print _get("webURL").'www/lib/images/comercial/play-store.png' ?>" class="attachment-tc-thumb" alt="Snapshot_20130801_2">
				</div>
				<h2>Nuestras apps</h2>
				<p>Hecha un vistazo a nuestras aplicaciones gratuitas en Google Play... </p>
				<a href="" class="btn btn-primary"> Saber más...</a>
			</div>
		</div>
	</div>
	<div class="up" title=":: Tutoriales ::">
		<div class="anuncio">
			<div style="text-align: center">
				<div class="thumb-wrapper">
					<a href="<?php print _get("webURL").'software/desarrollo/medida' ?>" class="round-div"></a>
					<img width="270" height="250" src="<?php print _get("webURL").'www/lib/images/comercial/java-1.png' ?>" class="attachment-tc-thumb" alt="Snapshot_20130801_2">
				</div>
				<h2>Java</h2>
				<p>Tienes dudas específicas sobre tu proyecto en Java ¡Hecha un vistazo a nuestro blog! </p>
				<a href="" class="btn btn-primary"> Saber más...</a>
			</div>
		</div>
		<div class="separador-not"></div>
		<div class="anuncio">
			<div style="text-align: center">
				<div class="thumb-wrapper">
					<a href="<?php print _get("webURL").'software/desarrollo/medida' ?>" class="round-div"></a>
					<img width="270" height="250" src="<?php print _get("webURL").'www/lib/images/comercial/android-1.png' ?>" class="attachment-tc-thumb" alt="Snapshot_20130801_2">
				</div>
				<h2>Móviles</h2>
				<p>No te quedes atrás, anímate a programar tu celular o tableta con la plataforma Android...</p>
				<a href="" class="btn btn-primary"> Saber más...</a>
			</div>
		</div>
		<div class="separador-not"></div>
		<div class="anuncio">
			<div style="text-align: center">
				<div class="thumb-wrapper">
					<a href="<?php print _get("webURL").'software/desarrollo/medida' ?>" class="round-div"></a>
					<img width="270" height="250" src="<?php print _get("webURL").'www/lib/images/comercial/php-1.png' ?>" class="attachment-tc-thumb" alt="Snapshot_20130801_2">
				</div>
				<h2>PHP</h2>
				<p>Resuelve tus dudas sobre programación web, hecha un vistazo a nuestro blog, si no encuentras la respuesta ¡ESCRÍBENOS!</p>
				<a href="" class="btn btn-primary"> Saber más...</a>
			</div>
		</div>
	</div>
</div>

<p style=" clear: both">&nbsp;</p>
<!--<p style="font-style: italic;">* "Para ver las politicas de garantía de nuestros servicios consulte la siguiente <a href="">página</a>. Debe estar conciente que solo garantizamos los errores de diseño y programación que hayan sido establecidos por escrito previamente al inicio del proyecto."</p>-->
<!--<br>
<div class="caja-texto-completa">
	<div class="titulo-caja-texto">-->
		<!--<img src="<?php echo _get("webURL")."/www/lib/images/comosolucionamos.png" ?>" />&nbsp;&nbsp;-->
<!--		¿Cómo solucionamos tu problema?</div>
</div>
<hr style="clear:both">

<p>Con 6 sencillos pasos podemos crear cualquier sistema de información. Haz clic <a href="#">aquí</a> para conocer a detalle nuestra metodología.</p>
<p>Seguimos las normas internacionales de desarrollo de software, siempre nos mantenemos en contacto con nuestro cliente. En todo momento es posible que el cliente vea el avance de su proyecto. Cumplimos en tiempo y forma con los compromisos establecidos y previamente escritos.</p>
<img style="text-align: center" src="<?php print _get("webURL").'www/lib/images/comercial/metodologia.jpg' ?>">
<p>&nbsp;</p>
<div class="cortina">
	<p class="etiqueta">Obtención de la información</p>
	<span class="flecha_inicio" style="float: right; margin-top: 10px;"></span>
	<hr style="clear: both">
	<p class="texto-cortina">Recaudamos la información necesaria para proponerle soluciones, o escuchamos su idea para proponerle mejoras.</p>
</div>

<div class="cortina">
	<p class="etiqueta">Creación del sistema</p>
	<span class="flecha_inicio" style="float: right; margin-top: 10px;"></span>
	<hr style="clear: both">
	<p class="texto-cortina">Elegimos el lenguaje que pueda brindarle la mejor productividad posible, diseñamos y programamos su sistema. </p>
</div>

<div class="cortina">
	<p class="etiqueta">Validación y prueba</p>
	<span class="flecha_inicio" style="float: right; margin-top: 10px;"></span>
	<hr style="clear: both">
	<p class="texto-cortina">Realizamos pruebas y validamos todas las características que nos ha pedido. Así garantizamos la funcionalidad del sistema.</p>
</div>

<div class="cortina">
	<p class="etiqueta">Implementación</p>
	<span class="flecha_inicio" style="float: right; margin-top: 10px;"></span>
	<hr style="clear: both">
	<p class="texto-cortina">Implementamos el sistema garantizando 100% su funcionalidad, y nos mantenemos al pendiente.</p>
</div>-->
