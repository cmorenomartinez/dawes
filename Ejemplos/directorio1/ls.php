<html>
<body>
<?php
	// Recuperamos el directorio que se desea listar
	if (isset($_REQUEST['directorio']))
		$directorio = $_REQUEST['directorio'];
	else
		$directorio = '.';
	// Pasamos al directorio que queremos listar
	chdir($directorio);
	// Obtenemos la ruta absoluta de ese directorio
	$directorio = getcwd();
	// Mostramos la ruta del directorio directorio	
	echo '<p><b>Directorio: </b>'.$directorio; 
?>
<table>
	<tr><td width="5%">Tipo</td><td width="30%">Nombre</td><td width="10%">Tamaño</td></tr>
<?php
	// Obtenemos el contenido del directorio
	$contenido = scandir($directorio);
	// Obtenemos a partir de $contenido dos arrays: $listado_ficheros
	// y $listado_directorios.
	// Creamos el array listado_ficheros vacio por si en el directorio no tiene ficheros
	// no de error.
	$listado_ficheros = array();
	foreach ($contenido as $fichero) {
		// Obtenemos la ruta absoluta del fichero
		$ruta = $directorio.'/'.$fichero;
		if (is_file($ruta))
			$listado_ficheros[] = $fichero;
		else
			if ($ruta != 'C:\xampp\htdocs/..')
				$listado_directorios[] = $fichero;
	}
	// Concatenamos los dos arrays para obtener el listado en la forma 
	// deseada.
	$contenido = array_merge($listado_directorios,$listado_ficheros);
	// Listamos el contenido
	foreach ($contenido as $fichero) {
		echo '<tr>';
		// Obtenemos la ruta absoluta del fichero
		$ruta = $directorio.'/'.$fichero;
		// Comprobamos el tipo (fichero o directorio) y si es un fichero
		// calculamos su tamaño.
		if (is_file($ruta)) {
			// Obtenemos la extension del fichero mediante la funcion explode
			$array = explode('.',$fichero);
			$extension = array_pop($array);
			switch ($extension) {
					case 'html':
					case 'htm':
						$tipo = '<img src="./img/html.ico">';
						break;
					case 'php':
						$tipo = '<img src="./img/php.ico">';
						break;	
					case 'js':
						$tipo = '<img src="./img/js.ico">';
						break;
					case 'pdf':
						$tipo = '<img src="./img/pdf.ico">';
						break;
					case 'txt':
						$tipo = '<img src="./img/txt.ico">';
						break;
					default:
						$tipo = '<img src="./img/file.ico">';
			}	
			$tamanio = filesize($ruta);
		}
		else {
			$tipo = '<img src="./img/folder.ico">';
			$tamanio = '';
			if ($fichero != '.')
				$fichero = '<a href="ls.php?directorio='.$ruta.'">'.$fichero.'</a>';
		}
		// Escribimos la informacion obtenida, salvo que la entrada se directorio
		// actual ('.')
		if ($fichero != '.') {
			echo '<td>'.$tipo.'</td>';
			echo '<td>'.$fichero.'</td>'; 
			echo '<td align="right">'.$tamanio.'</td>';
			echo '</tr>';
		}
	}
?>
</table>
</body>
</html>