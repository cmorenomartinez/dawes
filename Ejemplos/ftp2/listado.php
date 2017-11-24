
<?php
	// Llamamos a funciones.inc.php para cargar las distintas funciones que usamos
	include('funciones.inc.php');
	// Realizamos la conexion. Obtenemos el codigo desde
	// el fichero funciones.inc.php
	// Obtenemos los valores de las variables $usuario, $password y $directorio.
	if (isset($usuario) && isset($password) && !isset($directorio))
		$directorio = '/';
	else {
		$usuario = $_REQUEST['usuario'];
		$password = $_REQUEST['password'];
		$directorio = $_REQUEST['directorio'];
	}
	// Conectamos al servidor con $usuario y $password	
	$conexion = conectar($usuario,$password);
	// Obtenemos el contenido del directorio ya ordenado por directorios y carpetas
	// Obtenemos el codigo desde el fichero funciones.inc.php
	$listado = obtener_listado($conexion,$directorio);
	// Recorremos el array listado para obtener la informacion.
	// Mostramos la cabecera de la tabla
	echo '<table><tr><td width="5%"></td><td width="20%"><b>Nombre</b></td><td width="15%"><b>Fecha &Uacute;ltima Modificaci&oacute;n</b></td><td width="5%"><b>Tama&ntilde;o</b></td></tr>';
	// Mostramos el enlace a directorio padre
	@ftp_cdup($conexion);
	$padre = ftp_pwd($conexion);
	$ruta ='<td><a href="listado.php?usuario='.$usuario.'&';
	$ruta = $ruta.'password='.$password.'&';
	$ruta = $ruta.'directorio='.$padre;
	$ruta = $ruta.'">Directorio Padre</a></td>';
	echo '<tr><td><img src="./img/return.ico"></td>'.$ruta.'<td></td><td></td>';
	ftp_chdir($conexion,$directorio);
	// Mostramos el enlace a directorio raiz
	$ruta ='<td><a href="listado.php?usuario='.$usuario.'&';
	$ruta = $ruta.'password='.$password.'&';
	$ruta = $ruta.'directorio=">Directorio Raiz</a></td>';
	echo '<tr><td><img src="./img/home.ico"></td>'.$ruta.'<td></td><td></td>';
	foreach ($listado as $fichero) {
		// Calculamos el tamaño
		$tamanio = ftp_size($conexion,$fichero);
		// Si es un directorio, le quitamos el tamaño y pintamos el icono de 'folder.ico'.
		// Si no, le ponemos el icono 'file.ico'
		if (ftp_size($conexion,$fichero)==-1) {
			$tamanio = '';
			// Componemos la celda del icono
			$icono = '<td><img src="./img/folder.ico"></td>';
			// Creamos la celda del enlace
			$ruta ='<td><a href="listado.php?usuario='.$usuario.'&';
			$ruta = $ruta.'password='.$password.'&';
			$ruta = $ruta.'directorio='.$directorio.'/'.$fichero;
			$ruta = $ruta.'">'.$fichero.'</a></td>';
		}
		else {
			// La ruta de este fichero solo seria su nombre
			$ruta = '<td>'.$fichero.'</td>';
			// Si es un fichero, debemos obtener su extension
			$partes = explode('.',$fichero);
			$extension = array_pop($partes);
			switch ($extension) {
				case 'pdf': $icono = '<td><img src="./img/pdf.ico"></td>'; break;
				case 'html': $icono = '<td><img src="./img/html.ico"></td>'; break;
				case 'js': $icono = '<td><img src="./img/js.ico"></td>'; break;
				case 'txt': $icono = '<td><img src="./img/txt.ico"></td>'; break;
				case 'php': $icono = '<td><img src="./img/php.ico"></td>'; break;
				case 'gif': case 'jpg': case 'ico': $icono = '<td><img src="./img/image.ico"></td>'; break;
				default : $icono = '<td><img src="./img/file.ico"></td>'; break;
			}
		}
		// Calculamos la fecha de ultima modificacion
		$fecha = ftp_mdtm($conexion,$fichero);
		$fecha = date('d/m/Y H:i:s',$fecha);
		echo '<tr>'.$icono.$ruta.'<td>'.$fecha.'</td><td align="right">'.$tamanio.'</td></tr>';
	}
	echo '</table>';
	// Cerramos la conexion con el servidor FTP.
	ftp_quit($conexion);
?>