<?php
	// Recogemos todos los datos del formulario.
	$nombre = $_REQUEST['nombre'];
	$apellidos = $_REQUEST['apellidos'];
	$edad = $_REQUEST['edad'];
	$sexo = $_REQUEST['sexo'];
	$destinatario = $_REQUEST['mail'];
	
	// Creamos una cadena que sera el asunto del mensaje
	$asunto = 'Suscripcion a la pagina de Carlos.';
	
	// Componemos el cuerpo del mensaje con los datos obtenidos
	if ($sexo=='Hombre')
		$saludo = '&iexcl;Bienvenido!.';
	else
		$saludo = '&iexcl;Bienvenida!.';
	
	$mensaje = 
	'<HTML>
		<HEAD>
			<STYLE>
				.rojo {color:red;}
			</STYLE>
		</HEAD>
		</BODY>
			<P class="rojo">Hola '.$nombre.':</P>
			<P>Tus datos de suscripci&oacute;n son los siguientes:</P>
			<TABLE border="1">
				<TR><TD colspan="2">Apellidos, Nombre</TD><TD colspan="2">'.$apellidos.', '.$nombre.'</TD></TR>
				<TR><TD>Sexo</TD><TD>'.$sexo.'</TD><TD>Edad</TD><TD>'.$edad.'</TD></TR>
				<TR><TD>Mail</TD><TD colspan="3">'.$destinatario.'</TD></TR>
			</TABLE>
			<P>'.$saludo.'</P>
		</BODY>
	</HTML>';
	
	// Cabeceras MIME para poder enviar correos electronicos con formato HTML
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	// Con todos los datos enviamos el mensaje
	if(mail($destinatario, $asunto, $mensaje, $cabeceras)){
		echo '<P>Suscripci&oacute;n realizada con exito. Se ha enviado un correo a '.$destinatario.'.</P>';
	}else{
		echo '<p>Se ha producido un error.</p>';
	}
?>