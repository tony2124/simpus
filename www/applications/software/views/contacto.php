<!--<script type="text/javascript" src="<?php echo _get("webURL")."/www/lib/scripts/js/jquery.validate.js" ?>"></script>
-->
<script>
	function contacto(){
		$.ajax({
			url: "<?php print _get('webURL').'test.php' ?>?email="+$("#email").val()+"&nombre="+$("#nombre").val()+"&empresa="+$("#empresa").val()+"&mensaje="+$("#mensaje").val(),
			beforeSend: function(){
				$("#jquery-msj").html("<div style='margin: 0 auto; width: 200px'>"+
					"<img src='<?php print _get('webURL') ?>/www/lib/images/icons/cargando.gif' />"+
					"</div>");
			},
			success: function(datos){
				$("#jquery-msj").html(datos);
			},
			statusCode: {
				404: function() {
				alert( "page not found" );
				}
			}
		});
	}
	
</script>

<!-- ESTE FORMULARIO FUNCIONA POR MEDIO DE JQUERY HACIENDO UNA CONEXIÓN AJAX AL 
	SERVIDOR WEB PARA VERIFICAR LOS DATOS Y REGRESAR UN RESULTADO -->
<div class="formulario-contacto">
	<div class="titulo-caja-texto">
		<img src="<?php echo _get("webURL")."/www/lib/images/form.jpg" ?>" />&nbsp;&nbsp;Deje su mensaje
	</div>
	<hr>
	<p class="titulo-contacto">NOMBRE:</p>
	<input class="input-contacto border-left tool" data-toggle="tooltip" data-placement="right" data-original-title="Escriba su nombre" type="text" id="nombre" minlength="2" />
	<p class="titulo-contacto">EMPRESA:</p>
	<input class="input-contacto border-left tool" data-toggle="tooltip" data-placement="right" data-original-title="Escriba el nombre de su empresa" type="text" id="empresa" />
	<p class="titulo-contacto">CORREO ELECTRÓNICO:</p>
	<input class="input-contacto border-left tool" data-toggle="tooltip" data-placement="right" data-original-title="Escriba el correo electrónico al que nos comunicaremos" id="email" />
	<p class="titulo-contacto">MENSAJE:</p>
	<textarea class="input-contacto border-left tool" data-toggle="tooltip" data-placement="right" data-original-title="Escriba un mensaje breve" style="height: 100px;" id="mensaje" ></textarea>
	<p>
		<button onclick="contacto()" style="clear: both" class="btn btn-primary">Enviar mensaje</button>
	</p>
	<hr>
</div>

<div style="width:600px">
	<div class="titulo-caja-texto">
		<img src="<?php echo _get("webURL")."/www/lib/images/contacto.jpg" ?>" />&nbsp;&nbsp;Contacto directo</div>
	<hr>
	<p style="text-align: justify">Somos una empresa especializada en el diseño, desarrollo e implementación de soluciones innovadoras y escalables que generen beneficios tangibles y alto retorno de inversión.</p>
	<ul>
		<li>Contamos con un grupo de profesionales en diversas tecnologías.</li>
    	<li>Diseñamos soluciones adaptables a la demanda de nueva infraestructura.</li>
    	<li>Contamos con una amplia experiencia en diversos sectores empresariales.</li>
    	<li>Trabajamos con soluciones tecnológicas de conectividad a la medida.</li>
    	<li>Garantizamos servicios de calidad.</li>
	</ul>
	<p>&nbsp;</p>
	<img style="float: left" src="<?php echo _get("webURL")."/www/lib/images/contacto/telefono_icon.png" ?>">
	<div style="float: left; margin-left: 15px; width:200px">
		<span class="subrayar_2">CELULAR:</span>
		<p class="subrayar_3">453 - 106 - 4590</p>
		<p class="subrayar_3">425 - 107 - 4467</p>
		<span class="subrayar_2">OFICINA:</span>
		<p class="subrayar_3">(01) 425 - 592 - 5238</p>
	</div>

	<img style="float: left; margin-left: 50px;" src="<?php echo _get("webURL")."/www/lib/images/contacto/correo-icon.png" ?>">
	<div style="float: left; margin-left: 15px; width:200px">
		<span class="subrayar_2">DUDAS Y SUGERENCIAS:</span>
		<p class="subrayar_3">contacto@simpus.com.mx</p>
	</div>
	<p style="clear: left">&nbsp;</p>
	<img style="float: left" src="<?php echo _get("webURL")."/www/lib/images/contacto/facebook_icon.png" ?>">
	<div style="float: left; margin-left: 15px; width:200px">
		<span class="subrayar_2">FACEBOOK:</span>
		<p class="subrayar_3">
			<a target="_blank" style="color: #4C0079" href="https://www.facebook.com/simpuscorp">facebook.com/simpuscorp</a>
		</p>
	</div>

	<img style="float: left; margin-left: 50px;" src="<?php echo _get("webURL")."/www/lib/images/contacto/twitter_icon.png" ?>">
	<div style="float: left; margin-left: 15px; width:200px">
		<span class="subrayar_2">TWITTER:</span>
		<p class="subrayar_3">
			<a target="_blank" style="color: #4C0079" href="https://twitter.com/simpuscorp">twitter.com/simpuscorp</a>
		</p>
	</div>
</div>

<p style="clear: both">&nbsp;</p>
<p style="margin-top: 40px">&nbsp;</p>
<div class="titulo-caja-texto">Dirección en Google Maps</div>
<hr>
<!--<iframe src="https://mapsengine.google.com/map/embed?mid=zv8J1vpga6cI.kNFAx6s6sXDA" width="640" height="480"></iframe>-->
<iframe width="700" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;ll=19.001913,-102.190082&amp;spn=0.012234,0.021136&amp;t=h&amp;z=16&amp;output=embed" style="float: left; margin-right: 10px"></iframe>
<p>&nbsp;</p>
<p class="subrayar">SIMPUS -Soluciones informáticas.</p>
<p>Calle Juan de la Barrera.</p>
<p>El Ceñidor, Municipio de múgica, Michoacán.</p>
<p>C.P 61770</p>
<br />
<small>
	<a href="https://maps.google.com/?ie=UTF8&amp;ll=19.001913,-102.190082&amp;spn=0.012234,0.021136&amp;t=h&amp;z=16&amp;source=embed" style="color:#0000FF;text-align:left;">Ver en un mapa más grande</a>
</small>

<p style="clear: both">&nbsp;</p>
<p style="margin-top: 40px">&nbsp;</p>
<!--
<div class="division-puntos">
	<span class="titulo">Conozca más de nuestros servicios</span>
</div>
<p>&nbsp;</p>

<div style="width: 980px; min-height: 400px; margin: 0 auto;">
	<div class="comercial">
		<img style="float: left" src="<?php echo _get("webURL")."/www/lib/images/comercial/appmovil.png" ?>">
		<div style="float: left; padding: 10px; width: 150px">
			<p class="titulo-comercial">¡Maneja tu organización desde la palma de tu mano!</p>
		</div>
		<div style="background: #156786; width: 100%; height: 10px; clear: both"></div>
		<p style="text-align: justify">Envía cotizaciones, reportes, e-mails y mantente siempre al pendiente de tu empresa, brindando un mejor servicio a tus clientes mediante una app móvil.</p>
	</div>
	<div class="comercial">
		<img style="float: left" src="<?php echo _get("webURL")."/www/lib/images/comercial/instalacion_software.png" ?>">
		<div style="float: left; padding: 10px; width: 150px">
			<p class="titulo-comercial">¿Necesitas software a la medida de tu empresa?</p>
		</div>
		<div style="background: #156786; width: 100%; height: 10px; clear: both"></div>
		<p style="text-align: justify">Automatiza tus procesos, mínimiza tus gastos, optimiza el tiempo y aumenta tus ganancias.  </p>
	</div>
</div>
<p style="clear:both">&nbsp;</p>-->