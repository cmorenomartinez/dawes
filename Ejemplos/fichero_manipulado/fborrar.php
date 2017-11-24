<?php
	// Borra el fichero fichero.txt 
	// Muestra un mensaje diciendo si ha tenido exito la operacion
	if (unlink('fichero.txt')) 
		echo '<p>fichero.txt: Operaci&oacute;n realizada con exito.</p>';
	else
		echo '<p>fichero.txt: Fallo a la hora de borrar el fichero.';
	
	// Borra el fichero noexiste.txt 
	// Muestra un mensaje diciendo si ha tenido exito la operacion
	if (unlink('noexiste.txt')) 
		echo '<p>noexiste.txt: Operaci&oacute;n realizada con exito.</p>';
	else
		echo '<p>noexiste.txt: Fallo a la hora de borrar el fichero.</p>';
?>