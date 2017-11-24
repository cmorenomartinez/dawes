<?php
	// Asociamos el fichero fisico 'prueba.txt' con la
	// variable $fichero.
	$fichero = fopen('prueba.txt','w');
	// Escribimos en el fichero
	fwrite($fichero,'Esta es una prueba de escritura del fichero');
	// Cerramos la variable $fichero
	fclose($fichero);
	// Volvemos a abrir el fichero
	$fichero = fopen('prueba.txt','w');
	fwrite($fichero,'Escribimos otra cosa, ¿Machaca a lo que teniamos?');
	// Cerramos la variable $fichero
	fclose($fichero);
?>