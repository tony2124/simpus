<?php
$nombre = $_GET['nombre'];
$email = $_GET['email'];
$empresa = $_GET['empresa'];
$comentario = $_GET['mensaje'];
if(!isset($nombre) || !isset($email) || !isset($comentario) || $nombre==null || $comentario==null) { ?>

<div style="width: 400px; margin: 0 auto" class="alert alert-danger">
	<a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
	<p> Por favor llene los campos de nombre, correo electrónico y comentario, solo así tendremos la información necesaria para responderle.</p>
</div>

<?php } else if ( filter_var( $_GET['email'], FILTER_VALIDATE_EMAIL ) ) {
	$mensaje = "La persona ".$nombre." con correo: ".$email." tiene el siguiente mensaje: \n".$comentario;
	mail("contacto@simpus.com.mx", "Mensaje de: ".$email, $mensaje)
?>
<div style="width: 400px; margin: 0 auto" class="alert alert-success">
	<a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
	<p>Se ha enviado tu mensaje a contacto@simpus.com.mx</p>
</div>
<?php }else{ ?>
<div style="width: 400px; margin: 0 auto" class="alert alert-danger">
	<a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
	<p>No se ha podido enviar el mensaje porque no hemos podido validar el correo electrónico: <?php print  $_GET['email'] ?></p>
</div>
<?php } ?>

