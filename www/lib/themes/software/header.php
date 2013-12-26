<!DOCTYPE html>
<html lang="<?php echo _get("webLang"); ?>">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $this->getTitle(); ?></title>
		<link rel="icon" type="image/png" href="<?php echo $this->themePath; ?>/css/images/logo_simpus_ico.png" />
		
		<!-- LIBREARÍAS DE CSS-->
		<link href="<?php echo _get("webURL")."/www/lib/css/bootstrap/bootstrap.css" ?>" rel="stylesheet">
		<link href="<?php echo $this->themePath; ?>/css/header_style.css" rel="stylesheet">
		<link href="<?php echo $this->themePath; ?>/css/footer_style.css" rel="stylesheet">
		<link href="<?php echo $this->themePath; ?>/css/common_style.css" rel="stylesheet">
		<link href="<?php echo $this->themePath; ?>/css/nosotros_style.css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Oswald:700,400" rel="stylesheet" type="text/css">
		<!-- ARCHIVOS JS -->
		<script type="text/javascript" src="<?php echo _get("webURL")."/www/lib/scripts/js/jquery-1.10.2.min.js" ?>"></script>
		<script src="<?php echo _get("webURL")."/www/lib/scripts/js/jquery-migrate-1.2.1.min.js" ?>"></script>
		<script type="text/javascript" src="<?php echo _get("webURL")."/www/lib/scripts/js/bootstrap.min.js" ?>"></script>
		<script type="text/javascript" src="<?php echo _get("webURL")."/www/lib/scripts/js/totop.js" ?>"></script>
		
		<!-- ATRIBUTOS -->
		<script type="text/javascript">
	  		$(document).ready(function() {
				$('.tool').tooltip();
				$('.header_logo').tooltip();
			});
		</script>
	</head>

	<body>
	<div style="z-index: 99; top: 100px; width: 100%; position: fixed;" id="jquery-msj"></div>

	<!-- TO TOP SCROLL UP -->
	<a href="#" class="scrollup">&nbsp;</a>

	<!-- ENCABEZADO -->
    <div class="header-simpus">
    	
    	<!-- ENCABEZADO FIXED :: ALL SITES HAVE THIS -->
    	<div class="menu_fixed_content">
	      
		    <!-- logo -->
		    <div class="header_logo" data-toggle="tooltip" data-placement="left" data-original-title="Simpus"></div>
		    
		    <!-- barra menu fixed -->
		    <div class="header_barra_menu_superior">
		    	<ul>
		    		<li><a id="activo_sup" href="<?php print _get('webURL') ?>">Software</a></li>
		     		<!--<li><a href="#">Dominios</a></li>-->
		      		<li><a href="<?php print _get('webURL') ?>wordpress">Blog</a></li>
		      		<li><a href="#">Noticias</a></li>
		      	</ul>
		    </div>

		    <!-- formulario buscar: it searchs depending the site where it is and making a google search -->
		 <!--   <div class="barra_buscar">
		    	<form class="form_busqueda" action="simpus/buscar" accept-charset="UTF-8" method="post" id="">
					<input id="search-q" name="busqueda" maxlength="128" size="15" title="Escribe algo de tu interés" placeholder="Búsqueda" type="text">
					<input id="search-submit" name="op" value="Buscar" type="submit">
				</form>
		    </div>
	     -->
		     <!-- inicio de sesión :: for comment in blogs and for adquiring software and services -->
		<!--    <div class="inicio_sesion dropdown">
			    <span class="candado_inicio glyphicon glyphicon-user"></span>
			    <a id="ijq" data-toggle="dropdown" href="#">
			      <span class="texto_inicio">Iniciar sesión</span>
			      <span class="flecha_inicio"></span>
			      <div id="sign-in" class="dropdown-menu" role="menu" aria-labelledby="dLabel">
				    	<li style="visibility: hidden"><a class="btn btn-success" href="">Regístrate</a></li>
				    	<form style="padding: 10px;" action="">
				    		<p><input class="texto" type="text" name="usuario" placeholder="Correo electrónico"></p>
				    		<p><input class="texto" type="password" name="cont" placeholder="Contraseña"></p>
				    		<p><input class="btn btn-primary" type="submit"  value="Iniciar sesión"><a style="float: right" href="">Registrarse</a></p>

				    	</form>
				  </div>
			    </a>
		    </div>-->
      	</div>
     	<div class="header_barra_divisor"></div>
    </div>

    <!-- MENU PRINCIPAL DE LA PESTAÑA ::SOFTWARE::-->
    <div class="menu_principal">
    	<div style="width: 1050px; height: 40px; margin: 0 auto">
    		<ul style="padding-left: 0px">
    			<!-- INDEX -->
    			<li class="mpi">
    				<div class="separador"></div>
    				<a class="mpia <?php if ($menu == 0) print "activo" ?>" href="<?php print _get('webURL').'software/inicio' ?>">Inicio</a>
    				<div class="separador"></div>
    			</li>
    			<!-- NOSOTROS -->
    			<li class="mpi">
    				<a class="mpia <?php if ($menu == 1) print "activo" ?>" href="<?php print _get('webURL').'software/nosotros' ?>">Nosotros</a>
    				<div class="separador"></div>
    			</li>

    			<!-- DESARROLLO DE SOFTWARE -->
    			<li class="dropdown mpi">
    				<a data-toggle="dropdown" class="mpia <?php if ($menu == 2) print "activo" ?>" href="#">Desarrollo de software&nbsp;&nbsp;<span class="caret"></span></a>
    				<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
				    	<li><a href="<?php print _get("webURL").'software/desarrollo/fabrica' ?>">
				    		<span class="glyphicon glyphicon-wrench"></span>&nbsp;&nbsp;&nbsp;
				    		Fábrica de software</a>
				    	</li>
				    	<li><a href="<?php print _get("webURL").'software/desarrollo/web' ?>">
				    		<span class="glyphicon glyphicon-text-width"></span>&nbsp;&nbsp;&nbsp;
				    		Desarrollo de sitios web</a>
				    	</li>
				    	<li><a href="<?php print _get("webURL").'software/desarrollo/migracion' ?>">
				    		<span class="glyphicon glyphicon-refresh"></span>&nbsp;&nbsp;&nbsp;
				    		Migración de sistemas</a>
				    	</li>
				  	</ul>
					<div class="separador"></div>
				</li>

				<!-- APLICACIONES MÓVILES -->
    			<li class="mpi">
    				<a class="mpia  <?php if ($menu == 3) print "activo" ?>" href="<?php print _get('webURL').'software/moviles' ?>">Aplicaciones móviles</a>
    				<div class="separador"></div>
    			</li>

    			<!-- ASISTENCIA TÉCNICA -->
    			<!--<li class="mpi">
    				<a class="mpia <?php if ($menu == 4) print "activo" ?>" href="<?php print _get('webURL').'software/asistencia' ?>">Asistencia técnica</a>
    				<div class="separador"></div>
    			</li>-->

    			<!-- TUTORIALES -->
    			<li class="dropdown mpi">
    				<a data-toggle="dropdown" class="mpia <?php if ($menu == 5) print "activo" ?>" href="#">Tutoriales&nbsp;&nbsp;<span class="caret"></span></a>
    				<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
    					<li class="dropdown-header">PROGRAMACIÓN</li>
				    	<li><a href=""><span class="glyphicon glyphicon-circle-arrow-right"></span>&nbsp;&nbsp;&nbsp;Java</a></li>
				    	<li><a href=""><span class="glyphicon glyphicon-circle-arrow-right"></span>&nbsp;&nbsp;&nbsp;C# .NET</a></li>
				    	<li><a href=""><span class="glyphicon glyphicon-circle-arrow-right"></span>&nbsp;&nbsp;&nbsp;Android</a></li>
				    	<li><a href=""><span class="glyphicon glyphicon-circle-arrow-right"></span>&nbsp;&nbsp;&nbsp;WEB</a></li>
				    	<li class="divider"></li>
				    	<li class="dropdown-header">OTROS</li>
				    	<li><a href=""><span class="glyphicon glyphicon-circle-arrow-right"></span>&nbsp;&nbsp;&nbsp;Liberar teléfonos</a></li>
				  	</ul>
    				<div class="separador"></div>
    			</li>

    			<!-- CONTACTO -->
    			<li class="mpi">
    				<a class="mpia <?php if ($menu == 6) print "activo" ?>" href="<?php print _get('webURL').'software/contacto' ?>">Contacto</a>
    				<div class="separador">
    			</li>
    		</ul>
    	</div>
    </div>

<!-- INICIO DEL CONTENIDO -->
	<div class="contenedor">
		<!--<div class="banner-width"></div>-->
		<div class="contenido">