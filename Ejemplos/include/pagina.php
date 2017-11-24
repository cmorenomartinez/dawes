<?php
	include('cabecera.inc.php');
	echo '<p>Texto metido con PHP desde el documento original.</p>';
	for ($i=0; $i<3; $i++)
		include('repite.inc.php');
	include('pie.inc.php');
	// Invoco al fichero de funciones.
	include('funciones.inc.php');
	// Llamo a la funcion saluda
	saluda('Carlos');
	// Calculo dos al cubo y lo muestro por pantalla
	echo '<p>Dos al Cubo vale '.potencia(2,3).'</p>';
?>