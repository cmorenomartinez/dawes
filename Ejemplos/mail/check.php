<?php
	if(@mail("juan@2daw.com", "Una prueba definitiva","Bienvenid@ a PHP",
	"From: Administrador de mispruebas.com <admin@mispruebas.com>
	Reply-To: juan@2daw.com
	Cc: perico@2daw.com
	Bcc: andres@2daw.com
	X-Mailer:PHP/" . phpversion())){
		print "Mensajes enviados con exito";
	}else{
		print "Se ha producido un error";
	}
?>