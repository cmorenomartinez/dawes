<?php
	$destinatario = 'juan@2daw.com';
	$asunto =  'Mensaje de correo con HTML';
	$mensaje = '<HTML>';
	$mensaje = $mensaje . '<BODY>';
	$mensaje = $mensaje . '<FONT color="blue">Esto va en azul.</FONT>';
	$mensaje = $mensaje . '</BODY>';
	$mensaje = $mensaje . '</HTML>';
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	if(mail($destinatario, $asunto, $mensaje, $cabeceras)){
		print "Mensajes enviados con exito";
	}else{
		print "Se ha producido un error";
	}
?>