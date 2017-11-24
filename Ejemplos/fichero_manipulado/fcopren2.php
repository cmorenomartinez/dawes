<?php
	// Capturamos parametros
	$origen = $_REQUEST['origen'];
	$destino = $_REQUEST['destino'];
	$operacion = $_REQUEST['operacion'];
	// Comprobamos si el fichero de origen existe
	if (!file_exists($origen))
		echo '<p>No existe el fichero '.$origen.'.</p>';
	else {
		// Realizamos la operacion correspondiente
		if ($operacion == 'copy'){
			if (copy($origen,$destino))
				echo '<p>Operaci&oacute;n de copiado realizada con exito.</p>';
			else
				echo '<p>Fallo en la operaci&oacute;n de copia.</p>';
		}
		else {
			if (rename($origen,$destino))
				echo '<p>Operaci&oacute;n de renombrado realizada con exito.</p>';
			else
				echo '<p>Fallo en la operaci&oacute;n de renombrado.</p>';
		}
	}
?>