<?php
	// Asociamos el fichero fisico 'feof.txt' con la
	// variable $fichero. Abrimos el fichero en modo 'r'
	$fichero = fopen('feof.txt','r');
	// Leemos en el fichero hasta que encontremos el fin del
	// fichero con la funcion feof($fichero)
	while (!feof($fichero)) {
		$cadena = fgets($fichero);
		echo $cadena;
	}
	// Cerramos el fichero
	fclose($fichero);
?>