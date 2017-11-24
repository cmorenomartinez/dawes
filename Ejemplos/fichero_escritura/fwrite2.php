<?php
	// Asociamos el fichero fisico 'prueba.txt' con la
	// variable $fichero. Abrimos el fichero en modo 'a'
	$fichero = fopen('fwrite1.txt','a');
	// Escribimos en el fichero
	fwrite($fichero,"Esta es una prueba de escritura del fichero\r\n");
	// Cerramos la variable $fichero
	fclose($fichero);
	// Volvemos a abrir el fichero
	$fichero = fopen('fwrite1.txt','a');
	fwrite($fichero,'Escribimos otra cosa, ¿Machaca a lo que teniamos?'.chr(13).chr(10));
	// Cerramos la variable $fichero
	fclose($fichero);
?>