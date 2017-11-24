<?php
	// Asociamos el fichero fisico 'fgets.txt' con la
	// variable $fichero. Abrimos el fichero en modo 'r'
	$fichero = fopen('fgets1.txt','r');
	// Leemos en el fichero
	$cadena = fgets($fichero);
	// Mostramos lo que hemos leido
	echo $cadena.'<br>';
	// Volvemos a leer
	$cadena = fgets($fichero);
	// Muestro de nuevo lo leido
	echo $cadena.'<br>';
	// Cerramos la variable $fichero
	fclose($fichero);
	// Volvemos a abrir el fichero
	$fichero = fopen('fgets1.txt','r');
	// Leemos en el fichero los 10 primeros caracteres
	$cadena = fgets($fichero,10);
	// Mostramos lo que hemos leido
	echo $cadena.'<br>';
	// Leemos en el fichero otros 10 caracteres
	$cadena = fgets($fichero,10);
	// Mostramos lo que hemos leido
	echo $cadena.'<br>';
	// Leemos en el fichero otros 50 caracteres
	$cadena = fgets($fichero,50);
	// Mostramos lo que hemos leido
	echo $cadena.'<br>';
	
	
?>