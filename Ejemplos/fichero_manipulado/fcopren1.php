<?php
	// Capturamos parametros
	$nombre = $_REQUEST['nombre'];
	$operacion = $_REQUEST['operacion'];
	// Realizamos la operacion correspondiente
	if ($operacion == 'copy'){
		if (copy('fichero.txt',$nombre))
			echo '<p>Operaci&oacute;n de copiado realizada con exito.</p>';
		else
			echo '<p>Fallo en la operaci&oacute;n de copia.</p>';
	}
	else {
		if (rename('fichero.txt',$nombre))
			echo '<p>Operaci&oacute;n de renombrado realizada con exito.</p>';
		else
			echo '<p>Fallo en la operaci&oacute;n de renombrado.</p>';
	}
?>