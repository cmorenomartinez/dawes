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
	// Si la variable $_FILES esta definida es que el usuario
	// quiere subir un fichero. En tal caso, lo subimos.
	// Si no esta definida es que simplemente se desplaza por la 
	// estructura de ficheros
	if (isset($_FILES['archivo'])){
	// Copiamos el fichero bajado desde el fichero el directorio
	// temporal al actual
		$nombre = $_FILES['archivo']['name'];
		copy($_FILES['archivo']['tmp_name'],$directorio.'/'.$nombre);
	}
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
				$fichero = '<a href="upload2.php?directorio='.$ruta.'">'.$fichero.'</a>';
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
<FORM ENCTYPE="multipart/form-data" ACTION="upload2.php" METHOD="POST"> 
		<!-- con este input "oculto" establecemos el limite máximo
		# del tamaño del fichero a transferir. En este ejemplo 50.000 bytes //-->
		<INPUT type="hidden" name="lim_tamano" value="50000"> 
		<?php
			// Generamos mediante PHP un campo oculto en el directorio que transmita
			// en que directorio debe subir los ficheros. Si no lo hacemos, siempre
			// subirá el fichero al directorio donde esta el script.			
			echo '<INPUT type="hidden" name="directorio" value="'.$directorio.'">';
		?>
		<p>
			<b>Archivo a transferir<b><br> 
			<INPUT type="file" name="archivo"> 
			<INPUT type="submit" name="enviar" value="Subir Fichero">
		</p>
	</FORM>
</body>
</html>