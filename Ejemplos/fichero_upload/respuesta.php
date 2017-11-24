<?php
	echo 'Parametro name: '.$_FILES['archivo']['name'].'<br>';
	echo 'Parametro tmp_name: '.$_FILES['archivo']['tmp_name'].'<br>';
	echo 'Parametro size: '.$_FILES['archivo']['size'].'<br>';
	echo 'Parametro size: '.$_FILES['archivo']['type'].'<br>';
	
	// En un prncipio, el fichero esta descargado en el fichero temporal
	// c:\xampp\tmp. Por ello, hay que moverlo al directorio que queramos
	// Copiamos el fichero bajado al directorio descargas
	$nombre = $_FILES['archivo']['name'];
	$directorio = getcwd();
	$ruta = $directorio.'/descargas'; 
	if (move_uploaded_file($_FILES['archivo']['tmp_name'],$ruta.'/'.$nombre))
		echo '<p>Fichero Transmitido.</p>';
	else
		echo '<p>Error de Transmision.</p>';
?>





