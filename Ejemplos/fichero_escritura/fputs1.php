<?php
	// Asociamos el fichero fisico 'prueba.txt' con la
	// variable $fichero. Abrimos el fichero en modo 'w'
	$fichero = fopen('fputs1.txt','w');
	// Escribimos en el fichero
	fputs($fichero,"Esta es la primera cadena.");
	fputs($fichero,"Esta es la segunda cadena.");
	// Cerramos la variable $fichero
	fclose($fichero);
	// Asociamos el fichero fisico 'prueba.txt' con la
	// variable $fichero. Abrimos el fichero en modo 'r+'
	$fichero = fopen('fputs1.txt','r+');
	// Escribimos en el fichero. POdemos hacerlo porque esta
	// 'r+' (lectura y escritura
	fputs($fichero,"Esta es la tercera cadena.");
	// Cerramos la variable $fichero
	fclose($fichero);
	
	
?>